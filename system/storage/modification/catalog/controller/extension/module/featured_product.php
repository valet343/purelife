<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionModuleFeaturedProduct extends Controller {
	public function index($setting) {
$this->load->model('extension/module/oc_watermark');
		
		
		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}
		
		$results = array();
		
		$this->load->model('catalog/cms');
		
			if (isset($this->request->get['manufacturer_id'])) {
					
					$filter_data = array(
						'manufacturer_id'  => $this->request->get['manufacturer_id'],
						'limit' => $setting['limit']
					);
					
					$results = $this->model_catalog_cms->getProductRelatedByManufacturer($filter_data);
				
			} else {
				
					$parts = explode('_', (string)$this->request->get['path']);
					
					if(!empty($parts) && is_array($parts)) {
					
						$filter_data = array(
							'category_id'  => array_pop($parts),
							'limit' => $setting['limit']
						);
						
					$results = $this->model_catalog_cms->getProductRelatedByCategory($filter_data);
								
					}
			}
		
		$this->load->language('extension/module/featured_product');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

			$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
			$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');
			

		$data['products'] = array();
		
		if (!empty($results)) {
			
			foreach ($results as $result) {

				if ($result) {
					if ($result['image']) {
						$image = $this->model_extension_module_oc_watermark->resize('product', $result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_extension_module_oc_watermark->resize('product', 'placeholder.png', $setting['width'], $setting['height']);
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
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
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
			


				if($this->config->get('config_theme') == 'speedy') {

				$data['products_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_type');
				if($this->config->get('theme_' . $this->config->get('config_theme') . '_products_type') == 'slider') {
					$data['products_slider_limit'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_slider_limit');
					$data['products_slider_limit_xl'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_slider_limit_xl');
					$data['products_slider_limit_lg'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_slider_limit_lg');
					$data['products_slider_limit_md'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_slider_limit_md');
					$data['products_slider_limit_sm'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_slider_limit_sm');
					$data['products_slider_limit_xs'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_slider_limit_xs');
					$data['products_slider_arrows'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_products_slider_arrows');
				}
				
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

			'sticker_new_status'  => $sticker_new_status,
			'sticker_special_status'  => $sticker_special_status,
			'sticker_sale_status'  => $sticker_sale_status,
			'sticker_hot_status'  => $sticker_hot_status,
			

				'id' 	  => $result['product_id'],
				'reviews' 	  => $result['reviews'],
				'thumb2'       => $image2,
				'attribute_groups' 	  => $attribute_groups,
				
						'product_id'  => $result['product_id'],
						'thumb'       => $image,
						'name'        => $result['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'special_percent'     => $special_percent,
						'tax'         => $tax,
						'stock_status_id' 	  => $result['stock_status_id'],
						'stock' 	  => $stock,
						'out_of_stock' 	  => $out_of_stock,
						'rating'      => $rating,
						'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
					);
				}
			}
		}
		
		return $this->load->view('extension/module/featured_product', $data);

	}
	
}