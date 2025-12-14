<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerAccountWishList extends Controller {
	public function index() {
$this->load->model('extension/module/oc_watermark');
		//ds_admin_wishlist_without_login
		// if (!$this->customer->isLogged()) {
		// 	$this->session->data['redirect'] = $this->url->link('account/wishlist', '', true);

		// 	$this->response->redirect($this->url->link('account/login', '', true));
		// }
		//

		$this->load->language('account/wishlist');

		$this->load->model('account/wishlist');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

			$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
			$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');
			

		if (isset($this->request->get['remove'])) {
			// Remove Wishlist
			$this->model_account_wishlist->deleteWishlist($this->request->get['remove']);

			$this->session->data['success'] = $this->language->get('text_remove');

			$this->response->redirect($this->url->link('account/wishlist'));
		}

		//ds_admin_wishlist_without_login
		if (isset($this->request->get['remove_session'])) {
            unset($this->session->data['wishlist'][array_search($this->request->get['remove_session'],$this->session->data['wishlist'])]);
           if (empty($this->session->data['wishlist'])) {
               $this->response->redirect($this->url->link('common/home'));
           }
        }
		//

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->setRobots('noindex,follow');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/wishlist')
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['products'] = array();
		//ds_admin_wishlist_without_login
		if ($this->customer->isLogged()) {
		//

		$results = $this->model_account_wishlist->getWishlist();

		foreach ($results as $result) {
			$product_info = $this->model_catalog_product->getProduct($result['product_id']);

			if ($product_info) {
				if ($product_info['image']) {
					$image = $this->model_extension_module_oc_watermark->resize('product', $product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_height'));
				} else {
					$image = false;
				}

				if ($product_info['quantity'] <= 0 or $product_info['stock_status_id'] != 7) {
					$stock = $product_info['stock_status'];
					$out_of_stock = true;
				} elseif ($this->config->get('config_stock_display')) {
					$stock = $product_info['quantity'];
					$out_of_stock = true;
				} else {
					$stock = $product_info['stock_status'];
					$out_of_stock = false;
				}

				// dc_template_pro
		
					// tab-catalog
					$data['catalog_stickers_text'] = $this->config->get('theme_default_catalog_stickers_text');
					// $data['catalog_stickers_image'] = $this->config->get('theme_default_catalog_stickers_image');
					$data['catalog_stock'] = $this->config->get('theme_default_catalog_stock');
					$data['catalog_button_cart'] = $this->config->get('theme_default_catalog_button_cart');

					//

				//

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$special_percent = round(100-($product_info['special']/($product_info['price']/100)));
					$tax_price = (float)$product_info['special'];
				} else {
					$special = false;
					$special_percent = false;
					$tax_price = (float)$product_info['price'];
				}


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
				
				$data['products'][] = array(

				'id' 	  => $result['product_id'],
				'reviews' 	  => $result['reviews'],
				'thumb2'       => $image2,
				'attribute_groups' 	  => $attribute_groups,
				
					'product_id' => $product_info['product_id'],
					'thumb'      => $image,
					'name'       => $product_info['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'      => $price,
					'special'     => $special,
					'special_percent'     => $special_percent,
					'stock_status_id' 	  => $product_info['stock_status_id'],
					'stock'      => $stock,
					'out_of_stock' 	  => $out_of_stock,
					'rating'      => $product_info['rating'],
					'href'       => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
					'remove'     => $this->url->link('account/wishlist', 'remove=' . $product_info['product_id'])
				);
			} else {
				$this->model_account_wishlist->deleteWishlist($result['product_id']);
			}
		}
		//ds_admin_wishlist_without_login
		} else {
                $results =  isset($this->session->data['wishlist']) ? $this->session->data['wishlist'] : [];
            foreach ($results as $key => $result) {
                $product_info = $this->model_catalog_product->getProduct($result);

                if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_extension_module_oc_watermark->resize('product', $product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_wishlist_height'));
					} else {
						$image = false;
					}

					if ($product_info['quantity'] <= 0 or $product_info['stock_status_id'] != 7) {
						$stock = $product_info['stock_status'];
						$out_of_stock = true;
					} elseif ($this->config->get('config_stock_display')) {
						$stock = $product_info['quantity'];
						$out_of_stock = true;
					} else {
						$stock = $product_info['stock_status'];
						$out_of_stock = false;
					}

					// dc_template_pro
			
						// tab-catalog
						$data['catalog_stickers_text'] = $this->config->get('theme_default_catalog_stickers_text');
						$data['catalog_stickers_image'] = $this->config->get('theme_default_catalog_stickers_image');
						$data['catalog_stock'] = $this->config->get('theme_default_catalog_stock');
						$data['catalog_button_cart'] = $this->config->get('theme_default_catalog_button_cart');

						//

					//

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						$special_percent = round(100-($product_info['special']/($product_info['price']/100)));
						$tax_price = (float)$product_info['special'];
					} else {
						$special = false;
						$special_percent = false;
						$tax_price = (float)$product_info['price'];
					}


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
				
                    $data['products'][] = array(

				'id' 	  => $result['product_id'],
				'reviews' 	  => $result['reviews'],
				'thumb2'       => $image2,
				'attribute_groups' 	  => $attribute_groups,
				
                        'product_id' => $product_info['product_id'],
						'thumb'      => $image,
						'stickers'    => $stickers,
						'name'       => $product_info['name'],
						'description' => utf8_substr(trim(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'      => $price,
						'special'     => $special,
						'special_percent'     => $special_percent,
						'stock_status_id' 	  => $product_info['stock_status_id'],
						'stock'      => $stock,
						'out_of_stock' 	  => $out_of_stock,
						'rating'      => $product_info['rating'],
						'href'       => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
						'remove'     => $this->url->link('account/wishlist', 'remove=' . $product_info['product_id'])
                    );
                } else {
                   unset($this->session->data['wishlist'][$key]);
                }
            }
        }
        //

		$data['continue'] = $this->url->link('account/account', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/wishlist', $data));
	}

	public function add() {
		$this->load->language('account/wishlist');

		$json = array();

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {
			if ($this->customer->isLogged()) {
				// Edit customers cart
				$this->load->model('account/wishlist');

				$this->model_account_wishlist->addWishlist($this->request->post['product_id']);

				$json['link_checkout'] = $this->url->link('account/wishlist', '', true);
				$json['text_checkout'] = sprintf($this->language->get('button_checkout'));
				$json['text_continue'] = sprintf($this->language->get('button_shopping'));
				$json['title'] = sprintf($this->language->get('heading_title'));
				$json['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'product_id=' . (int)$this->request->post['product_id']), $product_info['name'], $this->url->link('account/wishlist'));

				$json['total'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());

				$json['alert_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_push_alert_type');
			
				$json['total_pro'] = sprintf($this->language->get('text_wishlist_pro'), $this->model_account_wishlist->getTotalWishlist());
			} else {
				if (!isset($this->session->data['wishlist'])) {
					$this->session->data['wishlist'] = array();
				}

				$this->session->data['wishlist'][] = $this->request->post['product_id'];

				$this->session->data['wishlist'] = array_unique($this->session->data['wishlist']);

				//ds_admin_wishlist_without_login
				$json['link_checkout'] = $this->url->link('account/wishlist', '', true);
				$json['text_checkout'] = sprintf($this->language->get('button_wishlist'));
				$json['text_continue'] = sprintf($this->language->get('button_shopping'));
				$json['title'] = sprintf($this->language->get('heading_title'));
				$json['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'product_id=' . (int)$this->request->post['product_id']), $product_info['name'], $this->url->link('account/wishlist'));
				//

				$json['total'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));

				$json['alert_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_push_alert_type');
			
				$json['total_pro'] = sprintf($this->language->get('text_wishlist_pro'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
