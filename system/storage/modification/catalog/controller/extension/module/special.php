<?php
class ControllerExtensionModuleSpecial extends Controller {
	public function index($setting) {
$this->load->model('extension/module/oc_watermark');
		$this->load->language('extension/module/special');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

			$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
			$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');
			

		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		if ($results) {
			foreach ($results as $result) {				
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
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
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
			


        // BuyOneClick
          $this->load->model('setting/setting');
          $current_language_id = $this->config->get('config_language_id');

          $buyoneclick = $this->config->get('buyoneclick');
          $data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
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

			return $this->load->view('extension/module/special', $data);
		}
	}
}