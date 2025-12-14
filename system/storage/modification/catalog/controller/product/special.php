<?php
class ControllerProductSpecial extends Controller {
	public function index() {
$this->load->model('extension/module/oc_watermark');
		$this->load->language('product/special');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

        if ($this->config->get('config_noindex_disallow_params')) {
            $params = explode ("\r\n", $this->config->get('config_noindex_disallow_params'));
            if(!empty($params)) {
                $disallow_params = $params;
            }
        }

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
            if (!in_array('sort', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
            if (!in_array('order', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
            if (!in_array('page', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
            if (!in_array('limit', $disallow_params, true) && $this->config->get('config_noindex_status')) {
                $this->document->setRobots('noindex,follow');
            }
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/special', $url)
		);

		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

		$data['compare'] = $this->url->link('product/compare');

		$data['products'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $limit,
			'limit' => $limit
		);

		$product_total = $this->model_catalog_product->getTotalProductSpecials();

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_extension_module_oc_watermark->resize('product', $result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_extension_module_oc_watermark->resize('product', 'placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if (!is_null($result['special']) && (float)$result['special'] >= 0) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$special_percent = round(100-($result['special']/($result['price']/100)));
				$tax_price = (float)$result['special'];
			} else {
				$special = false;
				$special_percent = false;
				$tax_price = (float)$result['price'];
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			if ($result['quantity'] <= 0 or $result['stock_status_id'] != 7) {
				$stock = $result['stock_status'];
				$out_of_stock = true;
			} elseif ($this->config->get('config_stock_display')) {
				$stock = $result['quantity'];
				$out_of_stock = true;
			} else {
				$stock = $result['stock_status'];
				$out_of_stock = false;
				}

			// dc_template_pro

			// dc_pro_default
			$data['catalog_stickers_text'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_stickers_text');
			//$data['catalog_stickers_image'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_stickers_image');
			$data['catalog_button_cart'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_button_cart');

			$data['sticker_new_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_new_background');
			$data['sticker_new_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_new_name')[$this->config->get('config_language_id')];
			$data['sticker_new_days'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_new_days');
			$date_available = $result['date_available'];
		    $sticker_new_status = (int)date('d.m.Y') - (int)date('d.m.Y', strtotime($date_available));
		    if($sticker_new_status <= $data['sticker_new_days']) {
		    	$sticker_new_status = true;
		    } else {
		    	$sticker_new_status = false;
		    }


		    $data['sticker_special_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_special_background');
			$data['sticker_special_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_special_name')[$this->config->get('config_language_id')];
		    if($result['special']) {
				$sticker_special_status = true;
			} else {
				$sticker_special_status = false;
			}

			$data['sticker_sale_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_sale_background');
			$data['sticker_sale_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_sale_name')[$this->config->get('config_language_id')];
			$data['sticker_sale_count'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_sale_count');
			$data['purchased_count'] = $this->model_catalog_product->getProductPurchased($result['product_id']);
			if($data['sticker_sale_count'] <= $data['purchased_count']) {
				$sticker_sale_status = true;
			} else {
				$sticker_sale_status = false;
			}

			$data['sticker_hot_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_hot_background');
			$data['sticker_hot_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_hot_name')[$this->config->get('config_language_id')];
			$data['sticker_hot_count'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_hot_count');
			if($data['sticker_hot_count'] <= $result['viewed']) {
				$sticker_hot_status = true;
			} else {
				$sticker_hot_status = false;
			}
			


        // BuyOneClick
          $this->load->model('setting/setting');
          $current_language_id = $this->config->get('config_language_id');

          $buyoneclick = $this->config->get('buyoneclick');
          $data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
          $data['buyoneclick_status_category'] = $buyoneclick["status_category"];

          $data['buyoneclick_status_module'] = $buyoneclick["status_module"];

          $data['buyoneclick_google_status']        = $buyoneclick['google_status'];
          $data['buyoneclick_google_category_btn']    = $buyoneclick['google_category_btn'];
          $data['buyoneclick_google_action_btn']      = $buyoneclick['google_action_btn'];
          $data['buyoneclick_google_category_send']     = $buyoneclick['google_category_send'];
          $data['buyoneclick_google_action_send']     = $buyoneclick['google_action_send'];
          $data['buyoneclick_google_category_success']  = $buyoneclick['google_category_success'];
          $data['buyoneclick_google_action_success']    = $buyoneclick['google_action_success'];

          $this->load->language('extension/module/buyoneclick');
          if (!isset($data['buyoneclick_name']) or $data['buyoneclick_name'] == '') {
            $data['buyoneclick_name'] = $this->language->get('buyoneclick_button');
          }
          $data['buyoneclick_text_loading'] = $this->language->get('buyoneclick_text_loading');
        // BuyOneClickEnd
        

                // plus minus start
                
                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price_no_format = $result['price'];
                } else {
                    $price_no_format = '';
                }
                if ((float) $result['special']) {
                    $special_no_format = $result['special'];
                } else {
                    $special_no_format = '';
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    // plus minus  добавлено  * $result['minimum']
                    $price = $this->currency->format($this->tax->calculate($result['price'] * $result['minimum'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                if ((float) $result['special']) {
                    // plus minus  добавлено  * $result['minimum']
                    $special = $this->currency->format($this->tax->calculate($result['special'] * $result['minimum'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $special = false;
                }

                // plus minus end 
        

				if($this->config->get('config_theme') == 'speedy') {
					$attribute_groups = $this->model_catalog_product->getProductAttributes($result['product_id']);

					$image_results = $this->model_catalog_product->getProductImages($result['product_id']);

					if ($image_results) {
						$image2 = $this->model_extension_module_oc_watermark->resize('product', $image_results[0]['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
					} else {
						$image2 = false;
					}
					
					$data['catalog_description'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_description');
					$data['catalog_model'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_model');
					$data['catalog_stock'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_stock');
					$data['catalog_attribute_groups'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_attribute_groups');
				}
				

				if($this->config->get('config_theme') == 'speedy') {
					$data['catalog_quantity'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_quantity');
				}
				
			$data['products'][] = array(

			'sticker_new_status'  => $sticker_new_status,
			'sticker_special_status'  => $sticker_special_status,
			'sticker_sale_status'  => $sticker_sale_status,
			'sticker_hot_status'  => $sticker_hot_status,
			

				'id' 	  => $result['product_id'],
				'reviews' 	  => $result['reviews'],
				'thumb2'       => $image2,
				'attribute_groups' 	  => $attribute_groups,
				

                    // plus minus start
                    'maximum' => $result['quantity'],
                    'price_no_format' => $price_no_format,
                    'special_no_format' => $special_no_format,
                    // plus minus end
        
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'special_percent'     => $special_percent,
				'tax'         => $tax,
				'stock_status_id' 	  => $result['stock_status_id'],
				'stock' 	  => $stock,
				'out_of_stock' 	  => $out_of_stock,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] . $url)
			);
		}

		$url = '';

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}


      // OCFilter start
      if (isset($url) && $this->registry->get('ocfilter') && $this->ocfilter->startup() && $this->ocfilter->api->isSelected()) {
        $url .= '&' . $this->ocfilter->api->getParamsIndex() . '=' . $this->ocfilter->api->getParamsString();
        
        if (isset($this->request->get['ocfilter_placement'])) {
          $url .= '&ocfilter_placement=' . $this->request->get['ocfilter_placement'];
        }
      }
      // OCFilter end
      
		$data['sorts'] = array();

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_default'),
			'value' => 'p.sort_order-ASC',
			'href'  => $this->url->link('product/special', 'sort=p.sort_order&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_asc'),
			'value' => 'pd.name-ASC',
			'href'  => $this->url->link('product/special', 'sort=pd.name&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_desc'),
			'value' => 'pd.name-DESC',
			'href'  => $this->url->link('product/special', 'sort=pd.name&order=DESC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_asc'),
			'value' => 'ps.price-ASC',
			'href'  => $this->url->link('product/special', 'sort=ps.price&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_desc'),
			'value' => 'ps.price-DESC',
			'href'  => $this->url->link('product/special', 'sort=ps.price&order=DESC' . $url)
		);

		if ($this->config->get('config_review_status')) {
			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_desc'),
				'value' => 'rating-DESC',
				'href'  => $this->url->link('product/special', 'sort=rating&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_asc'),
				'value' => 'rating-ASC',
				'href'  => $this->url->link('product/special', 'sort=rating&order=ASC' . $url)
			);
		}

		$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/special', 'sort=p.model&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_model_desc'),
			'value' => 'p.model-DESC',
			'href'  => $this->url->link('product/special', 'sort=p.model&order=DESC' . $url)
		);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}


      // OCFilter start
      if (isset($url) && $this->registry->get('ocfilter') && $this->ocfilter->startup() && $this->ocfilter->api->isSelected()) {
        $url .= '&' . $this->ocfilter->api->getParamsIndex() . '=' . $this->ocfilter->api->getParamsString();
        
        if (isset($this->request->get['ocfilter_placement'])) {
          $url .= '&ocfilter_placement=' . $this->request->get['ocfilter_placement'];
        }        
      }
      // OCFilter end
      
		$data['limits'] = array();

		$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

		sort($limits);

		foreach($limits as $value) {
			$data['limits'][] = array(
				'text'  => $value,
				'value' => $value,
				'href'  => $this->url->link('product/special', $url . '&limit=' . $value)
			);
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}


      // OCFilter start
      if (isset($url) && $this->registry->get('ocfilter') && $this->ocfilter->startup() && $this->ocfilter->api->isSelected()) {
        $url .= '&' . $this->ocfilter->api->getParamsIndex() . '=' . $this->ocfilter->api->getParamsString();
        
        if (isset($this->request->get['ocfilter_placement'])) {
          $url .= '&ocfilter_placement=' . $this->request->get['ocfilter_placement'];
        }        
      }
      // OCFilter end
      
		$pagination = new Pagination();
		$pagination->total = $product_total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('product/special', $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

        if (!$this->config->get('config_canonical_method')) {
            // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
            if ($page == 1) {
                $this->document->addLink($this->url->link('product/special', ''), 'canonical');
            } elseif ($page == 2) {
                $this->document->addLink($this->url->link('product/special', ''), 'prev');
            } else {
                $this->document->addLink($this->url->link('product/special', 'page=' . ($page - 1)), 'prev');
            }

            if ($limit && ceil($product_total / $limit) > $page) {
                $this->document->addLink($this->url->link('product/special', 'page=' . ($page + 1)), 'next');
            }
        } else {
            if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
                $server = $this->config->get('config_ssl');
            } else {
                $server = $this->config->get('config_url');
            };

            $request_url = rtrim($server, '/') . $this->request->server['REQUEST_URI'];
            $canonical_url = $this->url->link('product/special', '');


            if (($request_url != $canonical_url) || $this->config->get('config_canonical_self')) {
                $this->document->addLink($canonical_url, 'canonical');
            }

            if ($this->config->get('config_add_prevnext')) {

                if ($page == 2) {
                    $this->document->addLink($this->url->link('product/special', ''), 'prev');
                } elseif ($page > 2)  {
                    $this->document->addLink($this->url->link('product/special', 'page=' . ($page - 1)), 'prev');
                }

                if ($limit && ceil($product_total / $limit) > $page) {
                    $this->document->addLink($this->url->link('product/special', 'page=' . ($page + 1)), 'next');
                }
            }
        }

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

      // OCFilter Start
      if ($this->registry->get('ocfilter') && $this->ocfilter->startup()) {
        $this->ocfilter->api->setProductListControllerData($data, (isset($product_total) ? $product_total : null));
      }
      // OCFilter End
      

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/special', $data));
	}
}
