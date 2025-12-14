<?php
class ControllerExtensionModuleSpeedyQuickview extends Controller {
	public function index() {
	}
	
	public function show() {
		$this->load->language('extension/module/speedy_quick_view');
		$this->load->model('extension/module/oc_watermark');

		$json = array();
		
		if( isset($this->request->post['pr_id']) && !empty($this->request->post['pr_id']) ) {
			$product_id = (int)$this->request->post['pr_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if( $product_info ) {
			$url = '';
			$data['heading_title'] = $product_info['name'];

			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

			$this->load->model('catalog/review');

			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['entry_qty'] = $this->language->get('entry_qty');
			
			$data['product_id'] = $product_id;
			$data['href'] = $this->url->link('product/product', 'product_id=' . $product_info['product_id']);
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
			$data['model'] = $product_info['model'];
			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');

			$data['bookmarks']      = $this->config->get('module_speedy_quick_view_bookmarks');
			$data['comparison']     = $this->config->get('module_speedy_quick_view_comparison');
			$data['specifications'] = $this->config->get('module_speedy_quick_view_specifications');
			$data['descript']       = $this->config->get('module_speedy_quick_view_descript');
			$data['review_m']       = $this->config->get('module_speedy_quick_view_reviews');
			
			$data['brand_to']       = $this->config->get('module_speedy_quick_view_brand');
			$data['reward_to']      = $this->config->get('module_speedy_quick_view_rewards');
			
			$data['stock_status_id'] = $product_info['stock_status_id'];

			if ($product_info['quantity'] <= 0 or $product_info['stock_status_id'] != 7) {
				$data['stock'] = $product_info['stock_status'];
				$data['out_of_stock'] = true;
			} elseif ($this->config->get('config_stock_display')) {
				$data['stock'] = $product_info['quantity'];
			} else {
				$data['stock'] = $product_info['stock_status'];
			}
			
			$this->load->model('tool/image');

			if( $product_info['image'] ) {
				$data['thumb'] = $this->model_extension_module_oc_watermark->resize('product', $product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
			} else {
				$data['thumb'] = '';
			}

			$data['images'] = array();

			$results = $this->model_catalog_product->getProductImages($product_id);

            if( !empty($results) ) {
			    
				$data['images'][] = array(
				    	'thumb' => $data['thumb'],
				);
					
				foreach( $results as $result ) {
				    $data['images'][] = array(
				    	'thumb' => $this->model_extension_module_oc_watermark->resize('product', $result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'))
				    );
			    }
			} 

			if( $this->customer->isLogged() || !$this->config->get('config_customer_price') ) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['price'] = false;
			}

			// if( (float)$product_info['special'] ) {
			// 	$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			// } else {
			// 	$data['special'] = false;
			// }

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$data['special_percent'] = round(100-($product_info['special']/($product_info['price']/100)));
				$tax_price = (float)$product_info['special'];
			} else {
				$data['special'] = false;
				$data['special_percent'] = false;
				$tax_price = (float)$product_info['price'];
			}

			if( $this->config->get('config_tax') ) {
				$data['tax'] = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getProductDiscounts($product_id);

			$data['discounts'] = array();

			foreach( $discounts as $discount ) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);
			}

			$data['options'] = array();

			foreach( $this->model_catalog_product->getProductOptions($product_id) as $option ) {
				$product_option_value_data = array();

				foreach( $option['product_option_value'] as $option_value ) {
					if( !$option_value['subtract'] || ($option_value['quantity'] > 0) ) {
						if( (($this->config->get('config_customer_price') && $this->customer->isLogged() ) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$data['options'][] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}
			
			if( !empty($data['options']) ) {
				if( count($data['options']) > 2 ) {
				    $data['count_opt'] = true;
				}
			}
			
			
			if( $product_info['minimum'] ) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['review_status'] = $this->config->get('config_review_status');

			if( $this->config->get('config_review_guest') || $this->customer->isLogged() ) {
				$data['review_guest'] = true;
			} else {
				$data['review_guest'] = false;
			}

			if( $this->customer->isLogged() ) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			$data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
			$data['rating'] = (int)$product_info['rating'];

			// Captcha
			if( $this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page')) ) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['share'] = $this->url->link('product/product', 'product_id=' . $product_id);

			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($product_id);

			
			$data['recurrings'] = $this->model_catalog_product->getProfiles($product_id);

			$this->model_catalog_product->updateViewed($product_id);
			
			$json['success'] = true;
			$json['heading'] = $product_info['name'];
		    $json['response'] = $this->load->view('extension/module/speedy_quick_view', $data);

			
			$this->response->addHeader('Content-Type: application/json');
		    $this->response->setOutput(json_encode($json));
		
		} else {
			$json['success'] = false;
			$json['heading'] = $this->language->get('heading_error');
			$json['response'] = $this->language->get('text_error_id');
			
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function live() {
		$json = array();
		$options_makeup = 0;

		if( isset($this->request->post['product_id']) ) {
			$product_id = (int)$this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if(isset($this->request->post['quantity'])) {
			$quantity = (int)$this->request->post['quantity'];
		} else {
			$quantity = 1;
		}
					
		$this->language->load('product/product');
		$this->load->model('catalog/product');
								
		$product_info = $this->model_catalog_product->getProduct($product_id);
				
		// Prepare database
		if( $product_info ) {
			if(($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
					$data['price'] = $product_info['price'];
				} else {
				$data['price'] = false;
			}
								
			if( (float)$product_info['special'] ) {
					$data['special'] = $product_info['special'];
				} else {
				$data['special'] = false;
			}

			if( isset($this->request->post['option']) && $this->request->post['option'] ) {
				
					foreach( $this->model_catalog_product->getProductOptions($product_id) as $option ) {
						foreach( $option['product_option_value'] as $option_value ) {
							
							//If options are checkbox
							if( isset($this->request->post['option'][$option['product_option_id']]) && is_array($this->request->post['option'][$option['product_option_id']]) ) {
								
								array_filter($this->request->post['option'][$option['product_option_id']]);
								
								foreach( $this->request->post['option'][$option['product_option_id']] as $checked_option ) {
									
									if( $checked_option == $option_value['product_option_value_id'] ) {
										if( !$option_value['subtract'] || ($option_value['quantity'] > 0) ) {
											if( (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price'] ) {
												$option_price = $option_value['price'];
											} else {
												$option_price = false;
											}
											if( $option_price ) {
												if( $option_value['price_prefix'] === '+' ) {
													$options_makeup = $options_makeup + (float)$option_price;
												} else {
													$options_makeup = $options_makeup - (float)$option_price;
												}
											}
										}
									}
								}
							}

							//If options are not checkbox
							if( isset($this->request->post['option'][$option['product_option_id']]) && $this->request->post['option'][$option['product_option_id']] == $option_value['product_option_value_id'] ) {
								if ( !$option_value['subtract'] || ($option_value['quantity'] > 0)) {
									if( (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price'] ) {
										$option_price = $option_value['price'];
									} else {
										$option_price = false;
									}
									if( $option_price ) {
										if( $option_value['price_prefix'] === '+' ) {
											$options_makeup = $options_makeup + (float)$option_price;
										} else {
											$options_makeup = $options_makeup - (float)$option_price;
										}
									}
							}
								}
						}
						unset($price);
					}
		    }
		
		    //regular price
		    if( $data['price'] ) {
		    	$json['new_price']['price'] = $this->currency->format($this->tax->calculate((($data['price'] + $options_makeup) * $quantity), $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
		    } else {
		    	$json['new_price']['price'] = false;
		    }
			
		    //special price
		    if( $data['special'] ) {
		    	$json['new_price']['special'] = $this->currency->format($this->tax->calculate((($data['special'] + $options_makeup) * $quantity), $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
		    } else {
		    	$json['new_price']['special'] = false;
		    }
			
		    // taxes
		    if( $this->config->get('config_tax') ) {
		    	$json['new_price']['tax'] = $this->currency->format(((float)$product_info['special'] ? (($product_info['special'] + $options_makeup) *  $quantity) : (($product_info['price'] + $options_makeup))  * $quantity), $this->session->data['currency']);
		    } else {
		    	$json['new_price']['tax'] = false;
		    }
				
		    $json['success'] = true;
		} else {
			$json['success'] = false;
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
  	}
	
}