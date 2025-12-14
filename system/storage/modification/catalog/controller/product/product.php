<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerProductProduct extends Controller {
	private $error = array();


            protected function getPath($parent_id, $current_path = '') {
                $category_info = $this->model_catalog_category->getCategory($parent_id);          
                if ($category_info) {
                    if (!$current_path) {
                        $new_path = $category_info['category_id'];
                    } else {
                        $new_path = $category_info['category_id'] . '_' . $current_path;
                    }             
                    $path = $this->getPath($category_info['parent_id'], $new_path);           
                    if ($path) {
                        return $path;
                    } else {
                        return $new_path;
                    }
                }
            }
            
	public function index() {
$this->load->model('extension/module/oc_watermark');
		$this->load->model('extension/module/oc_watermark');
		$this->load->language('product/product');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$this->load->model('catalog/category');

		if (isset($this->request->get['path'])) {
			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = $path_id;
				} else {
					$path .= '_' . $path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path)
					);
				}
			}

			// Set the last category breadcrumb
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
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
					'text' => $category_info['name'],
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url)
				);
			}
		}

		$this->load->model('catalog/manufacturer');

		if (isset($this->request->get['manufacturer_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_brand'),
				'href' => $this->url->link('product/manufacturer')
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

			$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

			if ($manufacturer_info) {
				$data['breadcrumbs'][] = array(
					'text' => $manufacturer_info['name'],
					'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
				);
			}
		}

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

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
				'text' => $this->language->get('text_search'),
				'href' => $this->url->link('product/search', $url)
			);
		}

		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {

						//microdatapro 8.1 start
							$data['microdatapro_data'] = $product_info;
						//microdatapro 8.1 end
					

            if(!isset($category_info)) {
                $categories = $this->model_catalog_product->getCategories($this->request->get['product_id']);
                if($categories) {               
                    foreach($categories as $category){            
                        $path = $this->getPath($category['category_id']);
                        $category_info = $this->model_catalog_category->getCategory($category['category_id']);
                        if($path){
                            $cat_path = $path;
                        }else{
                            $cat_path = $category_info['category_id'];
                        }                 
                        if($category_info) {
                            $path = '';
                            $cat_path = explode('_', $cat_path);
                            foreach ( $cat_path as $path_id) {
                              if (!$path) {
                                $path = $path_id;
                              } else {
                                $path .= '_' . $path_id;
                              }
                                  
                              $category_info = $this->model_catalog_category->getCategory($path_id);
                              
                              if ($category_info) {
                                  $data['breadcrumbs'][] = array(
                                  'text'      => $category_info['name'],
                                  'href'      => $this->url->link('product/category', '&path=' . $path),
                                  'separator' => $this->language->get('text_separator')
                                  );
                                }
                            }
                        break;
                        }             
                    }
                }
            }
            

			$this->load->model('extension/module/recently_viewed');
			if($this->model_extension_module_recently_viewed->isEnabled()){
				if ($this->customer->isLogged()) {
					$this->model_extension_module_recently_viewed->setRecentlyViewedProducts($this->customer->getId(), $product_info['product_id']);
				} else {
				
					if(isset($this->request->cookie['recently_viewed']) && !empty($this->request->cookie['recently_viewed'])) {
						$recently_viewed = json_decode(base64_decode($this->request->cookie['recently_viewed']), true);
						$recently_viewed[$product_info['product_id']] = date("Y-m-d H:i:s");
						// sort by in recent viewed order
						uasort($recently_viewed, function($a, $b){ return strtotime($a) > strtotime($b); });
						array_unique($recently_viewed); // remove duplicates
					} else {
						$recently_viewed[$product_info['product_id']] = date("Y-m-d H:i:s");
					}
					
					$recently_viewed = base64_encode(json_encode($recently_viewed));
					setcookie('recently_viewed', $recently_viewed, 0, '/', $this->request->server['HTTP_HOST']);
				}
			}
			
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

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
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id'])
			);

			// Seo Tags Generator.Begin
			$stg_data = array(
				'attribute_groups' => isset($data['attribute_groups']) ? $data['attribute_groups'] : array(),
				'product_info' => $product_info
			);

			$product_info = $this->load->controller('extension/module/seo_tags_generator/getProductTags', $stg_data);
			// Seo Tags Generator.End
			
			if ($product_info['meta_title']) {
				$this->document->setTitle($product_info['meta_title']);
			} else {
				$this->document->setTitle($product_info['name']);
			}
			
			if ($product_info['noindex'] <= 0 && $this->config->get('config_noindex_status')) {
				$this->document->setRobots('noindex,follow');
			}
			
			if ($product_info['meta_h1']) {
				$data['heading_title'] = $product_info['meta_h1'];
			} else {
				$data['heading_title'] = $product_info['name'];
			}
			
			$this->document->setDescription($product_info['meta_description']);
			$this->document->setKeywords($product_info['meta_keyword']);
			$this->document->addLink($this->url->link('product/product', 'product_id=' . $this->request->get['product_id']), 'canonical');


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
				
				$data['product_bottom_bar'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_bottom_bar');
				$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
				$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');
				$this->document->addScript('catalog/view/javascript/jquery.zoom.min.js');
			}
			
			$data['zoom_product'] = $this->config->get('config_zoom_product');
			if($data['zoom_product'] == 1) {
				$this->document->addScript('catalog/view/javascript/jquery/fancybox/fancybox.umd.js');
				$this->document->addStyle('catalog/view/javascript/jquery/fancybox/fancybox.css');
			} else {
				$this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
				$this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');
			}
			
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
			$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
			$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

			$this->load->model('catalog/review');

			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['product_id'] = (int)$this->request->get['product_id'];
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
			$data['model'] = $product_info['model'];
			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');

			$data['purchased_count'] = $this->model_catalog_product->getProductPurchased($product_id);

			// in => 7, out => 5, wait => 6, pre => 8
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

			$manufacturer_image = $this->model_catalog_manufacturer->getManufacturer($product_info['manufacturer_id']);

            if($manufacturer_image){
            $data['manufacturers_img'] = $this->model_tool_image->resize($manufacturer_image['image'], 20, 20);
            } else {
            $data['manufacturers_img'] = false;
            }

            //


			if ($product_info['image']) {
				$data['dc_pro_modules_thumb'] = $this->model_tool_image->resize($product_info['image'], 74, 74);
			} else {
				$data['dc_pro_modules_thumb'] = '';
			}
			
			if ($product_info['image']) {
				$data['popup'] = $this->model_extension_module_oc_watermark->resize('popup', $product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				$data['popup'] = '';
			}


			if ($product_info['image']) {
				$data['dc_pro_modules_thumb'] = $this->model_tool_image->resize($product_info['image'], 74, 74);
			} else {
				$data['dc_pro_modules_thumb'] = '';
			}
			
			if ($product_info['image']) {
				$data['thumb'] = $this->model_extension_module_oc_watermark->resize('thumb', $product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
$data['thumb_small'] = $this->model_extension_module_oc_watermark->resize('thumb', $product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'));
			} else {
				$data['thumb'] = '';
$data['thumb_small'] = '';
			}

			$data['images'] = array();

			$data['view'] = $product_info['viewed'];

			$results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);

			foreach ($results as $result) {
				$data['images'][] = array(
					'popup' => $this->model_extension_module_oc_watermark->resize('popup', $result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
					'thumb' => $this->model_extension_module_oc_watermark->resize('additional', $result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'))
				);
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['price'] = false;
			}

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				
				$data['special_price_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_special_price_type');
				if($data['special_price_type'] == 'percent') {
					$data['special_percent'] = round(100-($product_info['special']/($product_info['price']/100)));
				} else {
					$data['special_percent'] = $this->currency->getSymbolLeft($this->session->data['currency']) . ($product_info['price'] - $product_info['special']) . $this->currency->getSymbolRight($this->session->data['currency']);
				}
			
				$tax_price = (float)$product_info['special'];
			} else {
				$data['special'] = false;
				$data['special_percent'] = false;
				$tax_price = (float)$product_info['price'];
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getProductDiscounts($this->request->get['product_id']);

			$data['discounts'] = array();

			foreach ($discounts as $discount) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);
			}

			// dc_admin_autocalc_price_option
			if ($data['price']) {
	            $data['price'] = '<span data-value=\'' . $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')) . '\' class=\'autocalc-product-price\'>' . $data['price'] . '</span>';
	        }
	        if ($data['special']) {
	            $data['special'] = '<span data-value=\'' . $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')) . '\' class=\'autocalc-product-special\'>' . $data['special'] . '</span>';
	        }
	        if ($data['points']) {
	            $data['points'] = '<span data-value=\'' . $product_info['points'] . '\' class=\'autocalc-product-points\'>' . $data['points'] . '</span>';
	        }
	        if ($data['tax']) {
	            $data['tax'] = '<span data-value=\'' . (float)($product_info['special'] ? $product_info['special'] : $product_info['price']) . '\' class=\'autocalc-product-tax\'>' . $data['tax'] . '</span>';
	        }
	        
	        $data['apo_price_value'] = $product_info['price'];
	        $data['apo_special_value'] = $product_info['special'];
	        $data['apo_tax_value'] = (float)$product_info['special'] ? $product_info['special'] : $product_info['price'];
	        $data['apo_points_value'] = $product_info['points'];
	        
	        $currency_code = $this->session->data['currency'];
	        $data['autocalc_currency'] = array(
	            'value'           => (float)$this->currency->getValue($currency_code),
	            'symbol_left'     => str_replace("'", "\'", $this->currency->getSymbolLeft($currency_code)),
	            'symbol_right'    => str_replace("'", "\'", $this->currency->getSymbolRight($currency_code)),
	            'decimals'        => (int)$this->currency->getDecimalPlace($currency_code),
	            'decimal_point'   => $this->language->get('decimal_point'),
	            'thousand_point'  => $this->language->get('thousand_point'),
	        );
	        

	        $currency2_code = $this->config->get('config_currency2');
	        if ($this->currency->has($currency2_code) && $currency2_code != $currency_code) {
	            $currency_code = $currency2_code;
	            $data['autocalc_currency2'] = array(
	                'value'           => (float)$this->currency->getValue($currency_code),
	                'symbol_left'     => str_replace("'", "\'", $this->currency->getSymbolLeft($currency_code)),
	                'symbol_right'    => str_replace("'", "\'", $this->currency->getSymbolRight($currency_code)),
	                'decimals'        => (int)$this->currency->getDecimalPlace($currency_code),
	                'decimal_point'   => $this->language->get('decimal_point'),
	                'thousand_point'  => $this->language->get('thousand_point'),
	            );
	        }
	        
	        $data['discounts_raw'] = $discounts;

	        $data['tax_class_id'] = $product_info['tax_class_id'];
	        $data['tax_rates'] = $this->tax->getRates(0, $product_info['tax_class_id']);
	      
	        $data['autocalc_option_special'] = $this->config->get('config_autocalc_option_special');
	        $data['autocalc_option_discount'] = $this->config->get('config_autocalc_option_discount');
	        $data['autocalc_not_mul_qty'] = $this->config->get('config_autocalc_not_mul_qty');
	        $data['autocalc_select_first'] = $this->config->get('config_autocalc_select_first');
	        //

			$data['options'] = array();

			foreach ($this->model_catalog_product->getProductOptions($this->request->get['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						// dc_admin_autocalc_price_option
						if ($price) {
				            switch ($option_value['price_prefix']) {
				                case '%':
				                    $price = ($option_value['price'] > 0 ? '+' : '') . (float)$option_value['price'] . '%';
				                    break;
				                case '*':
				                    $price = '*' . (float)$option_value['price'];
				                    break;
				                case '/':
				                    $price = '/' . (float)$option_value['price'];
				                    break;
				            }
				        }
				        if ($this->config->get('config_autocalc_hide_option_price')) $price = false;
				        //

						$product_option_value_data[] = array(
							// dc_admin_autocalc_price_option
							'apo_price_value'               => $option_value['price'],
					        'apo_points_value'              => isset($option_value['points_prefix']) && $option_value['points'] ? intval($option_value['points_prefix'].$option_value['points']) : 0,
					        //
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_extension_module_oc_watermark->resize('option', $option_value['image'], 50, 50),
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

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['review_status'] = $this->config->get('config_review_status');

			if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
				$data['review_guest'] = true;
			} else {
				$data['review_guest'] = false;
			}

			if ($this->customer->isLogged()) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			$data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
			$data['rating'] = (int)$product_info['rating'];

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['share'] = $this->url->link('product/product', 'product_id=' . (int)$this->request->get['product_id']);

			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($this->request->get['product_id']);

			// dc_template_pro

      $this->load->language('extension/module/found_cheaper');
      $data['found_cheaper_status'] = $this->config->get('module_found_cheaper_status');
      $data['found_cheaper_mask'] = $this->config->get('module_found_cheaper_mask');
      

			$this->load->model('localisation/language');

			$data['languages'] = $this->model_localisation_language->getLanguages();

			$data['shipping_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_shipping_status');
			$data['payment_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_payment_status');
			$data['guarantee_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_guarantee_status');
			$data['edges_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_edges_status');
			$data['shipping_description'] = html_entity_decode($this->config->get('theme_' . $this->config->get('config_theme') . '_product_shipping_description')[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
			$data['payment_description'] = html_entity_decode($this->config->get('theme_' . $this->config->get('config_theme') . '_product_payment_description')[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
			$data['guarantee_description'] = html_entity_decode($this->config->get('theme_' . $this->config->get('config_theme') . '_product_guarantee_description')[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');

			$data['shipping_items'] = array();

			$shipping_items = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_shipping_item')[$this->config->get('config_language_id')];

			if($shipping_items) {
				foreach ($shipping_items as $shipping_item) {
					if ($shipping_item['image']) {
						$image = $this->model_extension_module_oc_watermark->resize('product', $shipping_item['image'], 50, 50);
					} else {
						$image = $this->model_extension_module_oc_watermark->resize('product', 'placeholder.png', 50, 50);
					}
					$data['shipping_items'][] = array(
						'title'  => $shipping_item['title'],
						'image'  => $image
					);
				}
			}

			$data['payment_items'] = array();

			$payment_items = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_payment_item')[$this->config->get('config_language_id')];

			if($payment_items) {
				foreach ($payment_items as $payment_item) {
					if ($payment_item['image']) {
						$image = $this->model_extension_module_oc_watermark->resize('product', $payment_item['image'], 50, 50);
					} else {
						$image = $this->model_extension_module_oc_watermark->resize('product', 'placeholder.png', 50, 50);
					}
					$data['payment_items'][] = array(
						'title'  => $payment_item['title'],
						'image'  => $image
					);
				}
			}

			$data['edges_items'] = array();

			$edges_items = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_edges_item')[$this->config->get('config_language_id')];

			if($edges_items) {
				foreach ($edges_items as $edges_item) {
					if ($edges_item['image']) {
						$image = $this->model_extension_module_oc_watermark->resize('product', $edges_item['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
					} else {
						$image = $this->model_extension_module_oc_watermark->resize('product', 'placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
					}
					$data['edges_items'][] = array(
						'title'  => $edges_item['title'],
						'image'  => $image
					);
				}
			}

			$data['fixed_thumbnails'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_fixed_scroll_thumbs');
			$data['manufacturer_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_manufacturer');
			$data['model_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_model');
			$data['purchased_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_purchased_product');
			$data['sku'] = $product_info['sku'];
			$data['view_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_viewed');
			$data['sku_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sku');
			$data['stock_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_stock');
			$data['button_cart_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_button_cart');
			$data['fixed_nav_tabs'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_fixed_nav_tabs');
			$data['sticker_text_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_text_status');

				$data['sticker_new_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_new_background');
				$data['sticker_new_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_new_name')[$this->config->get('config_language_id')];
				$data['sticker_new_days'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_new_days');
				$data['date_available'] = $product_info['date_available'];
			    $stickerNewStatus = (int)date('d.m.Y') - (int)date('d.m.Y', strtotime($data['date_available']));
			    if($stickerNewStatus <= $data['sticker_new_days']) {
			    	$data['sticker_new_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_new_status');
			    }

				
				$data['sticker_special_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_special_background');
				$data['sticker_special_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_special_name')[$this->config->get('config_language_id')];
				if($product_info['special']) {
					$data['sticker_special_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_special_status');
				}

				$data['sticker_sale_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_sale_background');
				$data['sticker_sale_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_sale_name')[$this->config->get('config_language_id')];
				$data['sticker_sale_count'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_sale_count');
				if($data['sticker_sale_count'] <= $data['purchased_count']) {
					$data['sticker_sale_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_sale_status');
				}

				$data['sticker_hot_background'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_hot_background');
				$data['sticker_hot_name'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_hot_name')[$this->config->get('config_language_id')];
				$data['sticker_hot_count'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_hot_count');
				if($data['sticker_hot_count'] <= $data['view']) {
					$data['sticker_hot_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_sticker_hot_status');
				}
			
			

			//

			$data['products'] = array();

			$results = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_extension_module_oc_watermark->resize('product', $result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_extension_module_oc_watermark->resize('product', 'placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
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
				
				$json['cart_alert_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_push_cart_alert_type');
				$json['alert_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_push_alert_type');
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

				'id' 	  => $result['product_id'],
				'reviews' 	  => $result['reviews'],
				'thumb2'       => $image2,
				'attribute_groups' 	  => $attribute_groups,
				
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
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			$data['tags'] = array();

			if ($product_info['tag']) {
				$tags = explode(',', $product_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = array(
						'tag'  => trim($tag),
						'href' => $this->url->link('product/search', 'tag=' . trim($tag))
					);
				}
			}

			$data['recurrings'] = $this->model_catalog_product->getProfiles($this->request->get['product_id']);


						//microdatapro 8.1 start - 1 - main
							if(!isset($data['microdatapro_data'])){
								$data['microdatapro_data'] = $product_info;
							}
							$mdp_path = 'module/microdatapro';
							if(substr(VERSION, 0, 3) >= 2.3){
								$mdp_path = 'extension/module/microdatapro';
							}
							$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
							$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
							$data['microdatapro'] = $this->load->controller($mdp_path . '/product', $data);
							$microdatapro_main_flag = 1;
						//microdatapro 8.1 end - 1 - main
					
			$this->model_catalog_product->updateViewed($this->request->get['product_id']);
			

						//microdatapro 8.1 start - 2 - extra
							if(!isset($microdatapro_main_flag) or isset($this->request->get['filter_ocfilter'])){
								if(isset($product_info) && $product_info){
									if(!isset($data['microdatapro_data'])){
										$data['microdatapro_data'] = $product_info;
									}
									$mdp_path = 'module/microdatapro';
									if(substr(VERSION, 0, 3) >= 2.3){
										$mdp_path = 'extension/module/microdatapro';
									}
									$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
									$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
									$data['microdatapro'] = $this->load->controller($mdp_path . '/product', $data);
									$microdatapro_main_flag = 1;
								}
							}
						//microdatapro 8.1 end - 2 - extra
					

                $data['video_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_video_status');
                $data['video_tab'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_video_tab');
                $data['video_additional'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_video_additional');
                $data['poster_size_w'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width');
                $data['poster_size_h'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height');
                $data['poster_additional_size_w'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width');
                $data['poster_additional_size_h'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height');
                if($data['video_tab'] == 1 && $data['video_additional']) {
                    $this->document->addScript('catalog/view/javascript/jquery.embedVideo.min.js');
                }

                $data['video_total'] = $this->model_catalog_product->getTotalVideos($product_info['product_id']);

                $data['videos'] = array();

                $results = $this->model_catalog_product->getProductVideos($this->request->get['product_id']);

                foreach ($results as $result) {
                    $data['videos'][] = array(
                        'video' => $result['video'],
                    );
                }
                

      // OCFilter Start
      if ($this->registry->get('ocfilter') && $this->ocfilter->startup()) {
        $this->ocfilter->api->setProductItemControllerData($data);
      }
      // OCFilter End
      
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');

			$this->load->model('extension/module/art_aqa_product');
			$data['art_aqa_product_send'] = $this->config->get('module_art_aqa_product_status');
			$data['art_aqa_product_form'] = $this->load->controller('extension/module/art_aqa_product/getForm', array('product_name' => $product_info['name']));
			$art_aqa_product_title_tab = $this->config->get('module_art_aqa_product_title_tab');

			if (!empty($art_aqa_product_title_tab)) {
				$data['art_aqa_product_tab'] = $art_aqa_product_title_tab;
			} else {
				$data['art_aqa_product_tab'] = $this->language->get('text_art_aqa_product_tab');
			}

	   	$data['art_aqa_product_title'] = $this->language->get('art_aqa_product_title ');
		   	
	   	$data['art_aqa_product_total'] = $this->model_extension_module_art_aqa_product->getTotalQuestion($product_info['product_id']);
			
			$data['header'] = $this->load->controller('common/header');

        // BuyOneClick
          $this->load->model('setting/setting');
          $current_language_id = $this->config->get('config_language_id');

          $buyoneclick = $this->config->get('buyoneclick');
          $data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
          $data['buyoneclick_status_product'] = $buyoneclick["status_product"];
          $data['buyoneclick_status_module'] = $buyoneclick["status_module"];

          $data['buyoneclick_ya_status']          = $buyoneclick['ya_status'];
          $data['buyoneclick_ya_counter']         = $buyoneclick['ya_counter'];
          $data['buyoneclick_ya_identificator']       = $buyoneclick['ya_identificator'];
          $data['buyoneclick_ya_identificator_send']    = $buyoneclick['ya_identificator_send'];
          $data['buyoneclick_ya_identificator_success']   = $buyoneclick['ya_identificator_success'];

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
        

			$this->response->setOutput($this->load->view('product/product', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

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
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');


						//microdatapro 8.1 start - 2 - extra
							if(!isset($microdatapro_main_flag) or isset($this->request->get['filter_ocfilter'])){
								if(isset($product_info) && $product_info){
									if(!isset($data['microdatapro_data'])){
										$data['microdatapro_data'] = $product_info;
									}
									$mdp_path = 'module/microdatapro';
									if(substr(VERSION, 0, 3) >= 2.3){
										$mdp_path = 'extension/module/microdatapro';
									}
									$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data));
									$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
									$data['microdatapro'] = $this->load->controller($mdp_path . '/product', $data);
									$microdatapro_main_flag = 1;
								}
							}
						//microdatapro 8.1 end - 2 - extra
					

                $data['video_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_video_status');
                $data['video_tab'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_video_tab');
                $data['video_additional'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_video_additional');
                $data['poster_size_w'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width');
                $data['poster_size_h'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height');
                $data['poster_additional_size_w'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width');
                $data['poster_additional_size_h'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height');
                if($data['video_tab'] == 1 && $data['video_additional']) {
                    $this->document->addScript('catalog/view/javascript/jquery.embedVideo.min.js');
                }

                $data['video_total'] = $this->model_catalog_product->getTotalVideos($product_info['product_id']);

                $data['videos'] = array();

                $results = $this->model_catalog_product->getProductVideos($this->request->get['product_id']);

                foreach ($results as $result) {
                    $data['videos'][] = array(
                        'video' => $result['video'],
                    );
                }
                

      // OCFilter Start
      if ($this->registry->get('ocfilter') && $this->ocfilter->startup()) {
        $this->ocfilter->api->setProductItemControllerData($data);
      }
      // OCFilter End
      
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');

			$this->load->model('extension/module/art_aqa_product');
			$data['art_aqa_product_send'] = $this->config->get('module_art_aqa_product_status');
			$data['art_aqa_product_form'] = $this->load->controller('extension/module/art_aqa_product/getForm', array('product_name' => $product_info['name']));
			$art_aqa_product_title_tab = $this->config->get('module_art_aqa_product_title_tab');

			if (!empty($art_aqa_product_title_tab)) {
				$data['art_aqa_product_tab'] = $art_aqa_product_title_tab;
			} else {
				$data['art_aqa_product_tab'] = $this->language->get('text_art_aqa_product_tab');
			}

	   	$data['art_aqa_product_title'] = $this->language->get('art_aqa_product_title ');
		   	
	   	$data['art_aqa_product_total'] = $this->model_extension_module_art_aqa_product->getTotalQuestion($product_info['product_id']);
			
			$data['header'] = $this->load->controller('common/header');

        // BuyOneClick
          $this->load->model('setting/setting');
          $current_language_id = $this->config->get('config_language_id');

          $buyoneclick = $this->config->get('buyoneclick');
          $data['buyoneclick_name'] = isset($buyoneclick["name"][$current_language_id]) ? $buyoneclick["name"][$current_language_id] : '';
          $data['buyoneclick_status_product'] = $buyoneclick["status_product"];
          $data['buyoneclick_status_module'] = $buyoneclick["status_module"];

          $data['buyoneclick_ya_status']          = $buyoneclick['ya_status'];
          $data['buyoneclick_ya_counter']         = $buyoneclick['ya_counter'];
          $data['buyoneclick_ya_identificator']       = $buyoneclick['ya_identificator'];
          $data['buyoneclick_ya_identificator_send']    = $buyoneclick['ya_identificator_send'];
          $data['buyoneclick_ya_identificator_success']   = $buyoneclick['ya_identificator_success'];

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
        

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function review() {

		// dc
		$data['entry_admin_author'] = $this->config->get('config_name');
		$data['config_review_answer_admin'] = $this->config->get('config_review_answer_admin');	
		//
		$this->load->language('product/product');

		$this->load->model('catalog/review');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['reviews'] = array();

		$review_total = $this->model_catalog_review->getTotalReviewsByProductId($this->request->get['product_id']);

		$results = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], ($page - 1) * 5, 5);

		foreach ($results as $result) {
			$data['reviews'][] = array(
				'admin_author'       => $result['admin_author'],
				'answer'       => $result['answer'],	
				'author'     => $result['author'],
				'text'       => nl2br($result['text']),
				'plus'       => nl2br($result['plus']),
				'minus'       => nl2br($result['minus']),
				'rating'     => (int)$result['rating'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 5;
		$pagination->url = $this->url->link('product/product/review', 'product_id=' . $this->request->get['product_id'] . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

		$this->response->setOutput($this->load->view('product/review', $data));
	}

	public function write() {
		$this->load->language('product/product');

		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
				$json['error'] = $this->language->get('error_name');
			}

			if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
				$json['error'] = $this->language->get('error_text');
			}

			if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
				$json['error'] = $this->language->get('error_rating');
			}

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$json['error'] = $captcha;
				}
			}

			if (!isset($json['error'])) {
				$this->load->model('catalog/review');

				$this->model_catalog_review->addReview($this->request->get['product_id'], $this->request->post);

				$json['success'] = $this->language->get('text_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getRecurringDescription() {
		$this->load->language('product/product');
		$this->load->model('catalog/product');

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['recurring_id'])) {
			$recurring_id = $this->request->post['recurring_id'];
		} else {
			$recurring_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = $this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		$product_info = $this->model_catalog_product->getProduct($product_id);
		
		$recurring_info = $this->model_catalog_product->getProfile($product_id, $recurring_id);

		$json = array();

		if ($product_info && $recurring_info) {
			if (!$json) {
				$frequencies = array(
					'day'        => $this->language->get('text_day'),
					'week'       => $this->language->get('text_week'),
					'semi_month' => $this->language->get('text_semi_month'),
					'month'      => $this->language->get('text_month'),
					'year'       => $this->language->get('text_year'),
				);

				if ($recurring_info['trial_status'] == 1) {
					$price = $this->currency->format($this->tax->calculate($recurring_info['trial_price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$trial_text = sprintf($this->language->get('text_trial_description'), $price, $recurring_info['trial_cycle'], $frequencies[$recurring_info['trial_frequency']], $recurring_info['trial_duration']) . ' ';
				} else {
					$trial_text = '';
				}

				$price = $this->currency->format($this->tax->calculate($recurring_info['price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

				if ($recurring_info['duration']) {
					$text = $trial_text . sprintf($this->language->get('text_payment_description'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				} else {
					$text = $trial_text . sprintf($this->language->get('text_payment_cancel'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				}

				$json['success'] = $text;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}
