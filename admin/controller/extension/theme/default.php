<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionThemeDefault extends Controller {
	private $error = array();

	public function index() {
		$this->load->model("localisation/language");

        $data["languages"] = $this->model_localisation_language->getLanguages();

        $this->load->model('tool/image');

		$this->load->language('extension/theme/default');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('theme_default', $this->request->post, $this->request->get['store_id']);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true));
		}

		$this->document->addScript('https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.js');
		$this->document->addStyle('https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['product_limit'])) {
			$data['error_product_limit'] = $this->error['product_limit'];
		} else {
			$data['error_product_limit'] = '';
		}

		if (isset($this->error['product_description_length'])) {
			$data['error_product_description_length'] = $this->error['product_description_length'];
		} else {
			$data['error_product_description_length'] = '';
		}

		if (isset($this->error['image_category'])) {
			$data['error_image_category'] = $this->error['image_category'];
		} else {
			$data['error_image_category'] = '';
		}
		
		if (isset($this->error['image_manufacturer'])) {
			$data['error_image_manufacturer'] = $this->error['image_manufacturer'];
		} else {
			$data['error_image_manufacturer'] = '';
		}

		if (isset($this->error['image_thumb'])) {
			$data['error_image_thumb'] = $this->error['image_thumb'];
		} else {
			$data['error_image_thumb'] = '';
		}

		if (isset($this->error['image_popup'])) {
			$data['error_image_popup'] = $this->error['image_popup'];
		} else {
			$data['error_image_popup'] = '';
		}

		if (isset($this->error['image_product'])) {
			$data['error_image_product'] = $this->error['image_product'];
		} else {
			$data['error_image_product'] = '';
		}

		if (isset($this->error['image_additional'])) {
			$data['error_image_additional'] = $this->error['image_additional'];
		} else {
			$data['error_image_additional'] = '';
		}

		if (isset($this->error['image_related'])) {
			$data['error_image_related'] = $this->error['image_related'];
		} else {
			$data['error_image_related'] = '';
		}

		if (isset($this->error['image_compare'])) {
			$data['error_image_compare'] = $this->error['image_compare'];
		} else {
			$data['error_image_compare'] = '';
		}

		if (isset($this->error['image_wishlist'])) {
			$data['error_image_wishlist'] = $this->error['image_wishlist'];
		} else {
			$data['error_image_wishlist'] = '';
		}

		if (isset($this->error['image_cart'])) {
			$data['error_image_cart'] = $this->error['image_cart'];
		} else {
			$data['error_image_cart'] = '';
		}

		if (isset($this->error['image_location'])) {
			$data['error_image_location'] = $this->error['image_location'];
		} else {
			$data['error_image_location'] = '';
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/theme/default', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true)
		);

		$data['action'] = $this->url->link('extension/theme/default', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true);

		if (isset($this->request->get['store_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$setting_info = $this->model_setting_setting->getSetting('theme_default', $this->request->get['store_id']);
		}
		
		if (isset($this->request->post['theme_default_directory'])) {
			$data['theme_default_directory'] = $this->request->post['theme_default_directory'];
		} elseif (isset($setting_info['theme_default_directory'])) {
			$data['theme_default_directory'] = $setting_info['theme_default_directory'];
		} else {
			$data['theme_default_directory'] = 'default';
		}		

		$data['directories'] = array();

		$directories = glob(DIR_CATALOG . 'view/theme/*', GLOB_ONLYDIR);

		foreach ($directories as $directory) {
			$data['directories'][] = basename($directory);
		}

		if (isset($this->request->post['theme_default_product_limit'])) {
			$data['theme_default_product_limit'] = $this->request->post['theme_default_product_limit'];
		} elseif (isset($setting_info['theme_default_product_limit'])) {
			$data['theme_default_product_limit'] = $setting_info['theme_default_product_limit'];
		} else {
			$data['theme_default_product_limit'] = 15;
		}		
		
		if (isset($this->request->post['theme_default_status'])) {
			$data['theme_default_status'] = $this->request->post['theme_default_status'];
		} elseif (isset($setting_info['theme_default_status'])) {
			$data['theme_default_status'] = $setting_info['theme_default_status'];
		} else {
			$data['theme_default_status'] = '';
		}
		
		if (isset($this->request->post['theme_default_product_description_length'])) {
			$data['theme_default_product_description_length'] = $this->request->post['theme_default_product_description_length'];
		} elseif (isset($setting_info['theme_default_product_description_length'])) {
			$data['theme_default_product_description_length'] = $setting_info['theme_default_product_description_length'];
		} else {
			$data['theme_default_product_description_length'] = 100;
		}
		
		if (isset($this->request->post['theme_default_image_category_width'])) {
			$data['theme_default_image_category_width'] = $this->request->post['theme_default_image_category_width'];
		} elseif (isset($setting_info['theme_default_image_category_width'])) {
			$data['theme_default_image_category_width'] = $setting_info['theme_default_image_category_width'];
		} else {
			$data['theme_default_image_category_width'] = 80;		
		}
		
		if (isset($this->request->post['theme_default_image_category_height'])) {
			$data['theme_default_image_category_height'] = $this->request->post['theme_default_image_category_height'];
		} elseif (isset($setting_info['theme_default_image_category_height'])) {
			$data['theme_default_image_category_height'] = $setting_info['theme_default_image_category_height'];
		} else {
			$data['theme_default_image_category_height'] = 80;
		}
		
		if (isset($this->request->post['theme_default_image_manufacturer_width'])) {
			$data['theme_default_image_manufacturer_width'] = $this->request->post['theme_default_image_manufacturer_width'];
		} elseif (isset($setting_info['theme_default_image_manufacturer_width'])) {
			$data['theme_default_image_manufacturer_width'] = $setting_info['theme_default_image_manufacturer_width'];
		} else {
			$data['theme_default_image_manufacturer_width'] = 80;		
		}
		
		if (isset($this->request->post['theme_default_image_manufacturer_height'])) {
			$data['theme_default_image_manufacturer_height'] = $this->request->post['theme_default_image_manufacturer_height'];
		} elseif (isset($setting_info['theme_default_image_manufacturer_height'])) {
			$data['theme_default_image_manufacturer_height'] = $setting_info['theme_default_image_manufacturer_height'];
		} else {
			$data['theme_default_image_manufacturer_height'] = 80;
		}
		
		if (isset($this->request->post['theme_default_image_thumb_width'])) {
			$data['theme_default_image_thumb_width'] = $this->request->post['theme_default_image_thumb_width'];
		} elseif (isset($setting_info['theme_default_image_thumb_width'])) {
			$data['theme_default_image_thumb_width'] = $setting_info['theme_default_image_thumb_width'];
		} else {
			$data['theme_default_image_thumb_width'] = 228;
		}
		
		if (isset($this->request->post['theme_default_image_thumb_height'])) {
			$data['theme_default_image_thumb_height'] = $this->request->post['theme_default_image_thumb_height'];
		} elseif (isset($setting_info['theme_default_image_thumb_height'])) {
			$data['theme_default_image_thumb_height'] = $setting_info['theme_default_image_thumb_height'];
		} else {
			$data['theme_default_image_thumb_height'] = 228;		
		}
		
		if (isset($this->request->post['theme_default_image_popup_width'])) {
			$data['theme_default_image_popup_width'] = $this->request->post['theme_default_image_popup_width'];
		} elseif (isset($setting_info['theme_default_image_popup_width'])) {
			$data['theme_default_image_popup_width'] = $setting_info['theme_default_image_popup_width'];
		} else {
			$data['theme_default_image_popup_width'] = 500;
		}
		
		if (isset($this->request->post['theme_default_image_popup_height'])) {
			$data['theme_default_image_popup_height'] = $this->request->post['theme_default_image_popup_height'];
		} elseif (isset($setting_info['theme_default_image_popup_height'])) {
			$data['theme_default_image_popup_height'] = $setting_info['theme_default_image_popup_height'];
		} else {
			$data['theme_default_image_popup_height'] = 500;
		}
		
		if (isset($this->request->post['theme_default_image_product_width'])) {
			$data['theme_default_image_product_width'] = $this->request->post['theme_default_image_product_width'];
		} elseif (isset($setting_info['theme_default_image_product_width'])) {
			$data['theme_default_image_product_width'] = $setting_info['theme_default_image_product_width'];
		} else {
			$data['theme_default_image_product_width'] = 228;
		}
		
		if (isset($this->request->post['theme_default_image_product_height'])) {
			$data['theme_default_image_product_height'] = $this->request->post['theme_default_image_product_height'];
		} elseif (isset($setting_info['theme_default_image_product_height'])) {
			$data['theme_default_image_product_height'] = $setting_info['theme_default_image_product_height'];
		} else {
			$data['theme_default_image_product_height'] = 228;
		}
		
		if (isset($this->request->post['theme_default_image_additional_width'])) {
			$data['theme_default_image_additional_width'] = $this->request->post['theme_default_image_additional_width'];
		} elseif (isset($setting_info['theme_default_image_additional_width'])) {
			$data['theme_default_image_additional_width'] = $setting_info['theme_default_image_additional_width'];
		} else {
			$data['theme_default_image_additional_width'] = 74;
		}
		
		if (isset($this->request->post['theme_default_image_additional_height'])) {
			$data['theme_default_image_additional_height'] = $this->request->post['theme_default_image_additional_height'];
		} elseif (isset($setting_info['theme_default_image_additional_height'])) {
			$data['theme_default_image_additional_height'] = $setting_info['theme_default_image_additional_height'];
		} else {
			$data['theme_default_image_additional_height'] = 74;
		}
		
		if (isset($this->request->post['theme_default_image_related_width'])) {
			$data['theme_default_image_related_width'] = $this->request->post['theme_default_image_related_width'];
		} elseif (isset($setting_info['theme_default_image_related_width'])) {
			$data['theme_default_image_related_width'] = $setting_info['theme_default_image_related_width'];
		} else {
			$data['theme_default_image_related_width'] = 80;
		}
		
		if (isset($this->request->post['theme_default_image_related_height'])) {
			$data['theme_default_image_related_height'] = $this->request->post['theme_default_image_related_height'];
		} elseif (isset($setting_info['theme_default_image_related_height'])) {
			$data['theme_default_image_related_height'] = $setting_info['theme_default_image_related_height'];
		} else {
			$data['theme_default_image_related_height'] = 80;
		}
		
		if (isset($this->request->post['theme_default_image_compare_width'])) {
			$data['theme_default_image_compare_width'] = $this->request->post['theme_default_image_compare_width'];
		} elseif (isset($setting_info['theme_default_image_compare_width'])) {
			$data['theme_default_image_compare_width'] = $setting_info['theme_default_image_compare_width'];
		} else {
			$data['theme_default_image_compare_width'] = 90;
		}
		
		if (isset($this->request->post['theme_default_image_compare_height'])) {
			$data['theme_default_image_compare_height'] = $this->request->post['theme_default_image_compare_height'];
		} elseif (isset($setting_info['theme_default_image_compare_height'])) {
			$data['theme_default_image_compare_height'] = $setting_info['theme_default_image_compare_height'];
		} else {
			$data['theme_default_image_compare_height'] = 90;
		}
		
		if (isset($this->request->post['theme_default_image_wishlist_width'])) {
			$data['theme_default_image_wishlist_width'] = $this->request->post['theme_default_image_wishlist_width'];
		} elseif (isset($setting_info['theme_default_image_wishlist_width'])) {
			$data['theme_default_image_wishlist_width'] = $setting_info['theme_default_image_wishlist_width'];
		} else {
			$data['theme_default_image_wishlist_width'] = 47;
		}
		
		if (isset($this->request->post['theme_default_image_wishlist_height'])) {
			$data['theme_default_image_wishlist_height'] = $this->request->post['theme_default_image_wishlist_height'];
		} elseif (isset($setting_info['theme_default_image_wishlist_height'])) {
			$data['theme_default_image_wishlist_height'] = $setting_info['theme_default_image_wishlist_height'];
		} else {
			$data['theme_default_image_wishlist_height'] = 47;
		}
		
		if (isset($this->request->post['theme_default_image_cart_width'])) {
			$data['theme_default_image_cart_width'] = $this->request->post['theme_default_image_cart_width'];
		} elseif (isset($setting_info['theme_default_image_cart_width'])) {
			$data['theme_default_image_cart_width'] = $setting_info['theme_default_image_cart_width'];
		} else {
			$data['theme_default_image_cart_width'] = 47;
		}
		
		if (isset($this->request->post['theme_default_image_cart_height'])) {
			$data['theme_default_image_cart_height'] = $this->request->post['theme_default_image_cart_height'];
		} elseif (isset($setting_info['theme_default_image_cart_height'])) {
			$data['theme_default_image_cart_height'] = $setting_info['theme_default_image_cart_height'];
		} else {
			$data['theme_default_image_cart_height'] = 47;
		}
		
		if (isset($this->request->post['theme_default_image_location_width'])) {
			$data['theme_default_image_location_width'] = $this->request->post['theme_default_image_location_width'];
		} elseif (isset($setting_info['theme_default_image_location_width'])) {
			$data['theme_default_image_location_width'] = $setting_info['theme_default_image_location_width'];
		} else {
			$data['theme_default_image_location_width'] = 268;
		}
		
		if (isset($this->request->post['theme_default_image_location_height'])) {
			$data['theme_default_image_location_height'] = $this->request->post['theme_default_image_location_height'];
		} elseif (isset($setting_info['theme_default_image_location_height'])) {
			$data['theme_default_image_location_height'] = $setting_info['theme_default_image_location_height'];
		} else {
			$data['theme_default_image_location_height'] = 50;
		}

		// dc_pro_theme_default

			// tab-header

			if (isset($this->request->post['theme_default_header_currency'])) {
				$data['theme_default_header_currency'] = $this->request->post['theme_default_header_currency'];
			} elseif (isset($setting_info['theme_default_header_currency'])) {
				$data['theme_default_header_currency'] = $setting_info['theme_default_header_currency'];
			} else {
				$data['theme_default_header_currency'] = 1;
			}

			if (isset($this->request->post['theme_default_header_language'])) {
				$data['theme_default_header_language'] = $this->request->post['theme_default_header_language'];
			} elseif (isset($setting_info['theme_default_header_language'])) {
				$data['theme_default_header_language'] = $setting_info['theme_default_header_language'];
			} else {
				$data['theme_default_header_language'] = 1;
			}

			if (isset($this->request->post['theme_default_header_compare'])) {
				$data['theme_default_header_compare'] = $this->request->post['theme_default_header_compare'];
			} elseif (isset($setting_info['theme_default_header_compare'])) {
				$data['theme_default_header_compare'] = $setting_info['theme_default_header_compare'];
			} else {
				$data['theme_default_header_compare'] = 1;
			}

			if (isset($this->request->post['theme_default_header_wishlist'])) {
				$data['theme_default_header_wishlist'] = $this->request->post['theme_default_header_wishlist'];
			} elseif (isset($setting_info['theme_default_header_wishlist'])) {
				$data['theme_default_header_wishlist'] = $setting_info['theme_default_header_wishlist'];
			} else {
				$data['theme_default_header_wishlist'] = 1;
			}

			if (isset($this->request->post['theme_default_header_account'])) {
				$data['theme_default_header_account'] = $this->request->post['theme_default_header_account'];
			} elseif (isset($setting_info['theme_default_header_account'])) {
				$data['theme_default_header_account'] = $setting_info['theme_default_header_account'];
			} else {
				$data['theme_default_header_account'] = 1;
			}

			if (isset($this->request->post['theme_default_header_phones'])) {
				$data['theme_default_header_phones'] = $this->request->post['theme_default_header_phones'];
			} elseif (isset($setting_info['theme_default_header_phones'])) {
				$data['theme_default_header_phones'] = $setting_info['theme_default_header_phones'];
			} else {
				$data['theme_default_header_phones'] = 1;
			}

			if (isset($this->request->post['theme_default_header_messengers'])) {
				$data['theme_default_header_messengers'] = $this->request->post['theme_default_header_messengers'];
			} elseif (isset($setting_info['theme_default_header_messengers'])) {
				$data['theme_default_header_messengers'] = $setting_info['theme_default_header_messengers'];
			} else {
				$data['theme_default_header_messengers'] = 1;
			}

			if (isset($this->request->post['theme_default_header_email'])) {
				$data['theme_default_header_email'] = $this->request->post['theme_default_header_email'];
			} elseif (isset($setting_info['theme_default_header_email'])) {
				$data['theme_default_header_email'] = $setting_info['theme_default_header_email'];
			} else {
				$data['theme_default_header_email'] = 1;
			}


			// tab-footer

			if (isset($this->request->post['theme_default_footer_payments_status'])) {
				$data['theme_default_footer_payments_status'] = $this->request->post['theme_default_footer_payments_status'];
			} elseif (isset($setting_info['theme_default_footer_payments_status'])) {
				$data['theme_default_footer_payments_status'] = $setting_info['theme_default_footer_payments_status'];
			} else {
				$data['theme_default_footer_payments_status'] = 1;
			}

			if (isset($this->request->post['theme_default_footer_payments'])) {
				$data['theme_default_footer_payments'] = $this->request->post['theme_default_footer_payments'];
			} elseif (!empty($setting_info)) {
				$theme_default_footer_payments = $setting_info['theme_default_footer_payment'];
			} else {
				$data['theme_default_footer_payments'] = array();
			}

			$data['theme_default_footer_payments'] = array();

			foreach ($theme_default_footer_payments as $theme_default_footer_payment) {

					$data['theme_default_footer_payments'][] = array(
						'image'      => $theme_default_footer_payment['image'],
						'thumb'      => $this->model_tool_image->resize($theme_default_footer_payment['image'], 100, 100),
						'sort_order' => $theme_default_footer_payment['sort_order']
					);
				
			}

			if (isset($this->request->post['theme_default_footer_phones'])) {
				$data['theme_default_footer_phones'] = $this->request->post['theme_default_footer_phones'];
			} elseif (isset($setting_info['theme_default_footer_phones'])) {
				$data['theme_default_footer_phones'] = $setting_info['theme_default_footer_phones'];
			} else {
				$data['theme_default_footer_phones'] = 1;
			}

			if (isset($this->request->post['theme_default_footer_messengers'])) {
				$data['theme_default_footer_messengers'] = $this->request->post['theme_default_footer_messengers'];
			} elseif (isset($setting_info['theme_default_footer_messengers'])) {
				$data['theme_default_footer_messengers'] = $setting_info['theme_default_footer_messengers'];
			} else {
				$data['theme_default_footer_messengers'] = 1;
			}

			if (isset($this->request->post['theme_default_footer_email'])) {
				$data['theme_default_footer_email'] = $this->request->post['theme_default_footer_email'];
			} elseif (isset($setting_info['theme_default_footer_email'])) {
				$data['theme_default_footer_email'] = $setting_info['theme_default_footer_email'];
			} else {
				$data['theme_default_footer_email'] = 1;
			}

			if (isset($this->request->post['theme_default_footer_socials'])) {
				$data['theme_default_footer_socials'] = $this->request->post['theme_default_footer_socials'];
			} elseif (isset($setting_info['theme_default_footer_socials'])) {
				$data['theme_default_footer_socials'] = $setting_info['theme_default_footer_socials'];
			} else {
				$data['theme_default_footer_socials'] = 1;
			}

			// tab-widgets

			if (isset($this->request->post['theme_default_widgets_modal_cookie_status'])) {
				$data['theme_default_widgets_modal_cookie_status'] = $this->request->post['theme_default_widgets_modal_cookie_status'];
			} elseif (isset($setting_info['theme_default_widgets_modal_cookie_status'])) {
				$data['theme_default_widgets_modal_cookie_status'] = $setting_info['theme_default_widgets_modal_cookie_status'];
			} else {
				$data['theme_default_widgets_modal_cookie_status'] = 1;
			}

			if (isset($this->request->post['theme_default_widgets_modal_cookie_description'])) {
				$data['theme_default_widgets_modal_cookie_description'] = $this->request->post['theme_default_widgets_modal_cookie_description'];
			} elseif (isset($setting_info['theme_default_widgets_modal_cookie_description'])) {
				$data['theme_default_widgets_modal_cookie_description'] = $setting_info['theme_default_widgets_modal_cookie_description'];
			} else {
				$data['theme_default_widgets_modal_cookie_description'] = '';
			}

			if (isset($this->request->post['theme_default_widgets_messenger_status'])) {
				$data['theme_default_widgets_messenger_status'] = $this->request->post['theme_default_widgets_messenger_status'];
			} elseif (isset($setting_info['theme_default_widgets_messenger_status'])) {
				$data['theme_default_widgets_messenger_status'] = $setting_info['theme_default_widgets_messenger_status'];
			} else {
				$data['theme_default_widgets_messenger_status'] = 1;
			}

			// tab-adaptive

			// tab-code

			if (isset($this->request->post['theme_default_code_header_css'])) {
				$data['theme_default_code_header_css'] = $this->request->post['theme_default_code_header_css'];
			} elseif (isset($setting_info['theme_default_code_header_css'])) {
				$data['theme_default_code_header_css'] = $setting_info['theme_default_code_header_css'];
			} else {
				$data['theme_default_code_header_css'] = '';
			}

			if (isset($this->request->post['theme_default_code_header_js'])) {
				$data['theme_default_code_header_js'] = $this->request->post['theme_default_code_header_js'];
			} elseif (isset($setting_info['theme_default_code_header_js'])) {
				$data['theme_default_code_header_js'] = $setting_info['theme_default_code_header_js'];
			} else {
				$data['theme_default_code_header_js'] = '';
			}

			if (isset($this->request->post['theme_default_code_footer_js'])) {
				$data['theme_default_code_footer_js'] = $this->request->post['theme_default_code_footer_js'];
			} elseif (isset($setting_info['theme_default_code_footer_js'])) {
				$data['theme_default_code_footer_js'] = $setting_info['theme_default_code_footer_js'];
			} else {
				$data['theme_default_code_footer_js'] = '';
			}

			if (isset($this->request->post['theme_default_code_header_css_link'])) {
				$data['theme_default_code_header_css_link'] = $this->request->post['theme_default_code_header_css_link'];
			} elseif (isset($setting_info['theme_default_code_header_css_link'])) {
				$data['theme_default_code_header_css_link'] = $setting_info['theme_default_code_header_css_link'];
			} else {
				$data['theme_default_code_header_css_link'] = '';
			}

			if (isset($this->request->post['theme_default_code_footer_js_link'])) {
				$data['theme_default_code_footer_js_link'] = $this->request->post['theme_default_code_footer_js_link'];
			} elseif (isset($setting_info['theme_default_code_footer_js_link'])) {
				$data['theme_default_code_footer_js_link'] = $setting_info['theme_default_code_footer_js_link'];
			} else {
				$data['theme_default_code_footer_js_link'] = '';
			}

			// tab-cart

			if (isset($this->request->post['theme_default_widgets_cart_modal_status'])) {
				$data['theme_default_widgets_cart_modal_status'] = $this->request->post['theme_default_widgets_cart_modal_status'];
			} elseif (isset($setting_info['theme_default_widgets_cart_modal_status'])) {
				$data['theme_default_widgets_cart_modal_status'] = $setting_info['theme_default_widgets_cart_modal_status'];
			} else {
				$data['theme_default_widgets_cart_modal_status'] = '';
			}

			if (isset($this->request->post['theme_default_widgets_cart_modal_redirect'])) {
				$data['theme_default_widgets_cart_modal_redirect'] = $this->request->post['theme_default_widgets_cart_modal_redirect'];
			} elseif (isset($setting_info['theme_default_widgets_cart_modal_redirect'])) {
				$data['theme_default_widgets_cart_modal_redirect'] = $setting_info['theme_default_widgets_cart_modal_redirect'];
			} else {
				$data['theme_default_widgets_cart_modal_redirect'] = '';
			}

			if (isset($this->request->post['theme_default_widgets_cart_sidebar_status'])) {
				$data['theme_default_widgets_cart_sidebar_status'] = $this->request->post['theme_default_widgets_cart_sidebar_status'];
			} elseif (isset($setting_info['theme_default_widgets_cart_sidebar_status'])) {
				$data['theme_default_widgets_cart_sidebar_status'] = $setting_info['theme_default_widgets_cart_sidebar_status'];
			} else {
				$data['theme_default_widgets_cart_sidebar_status'] = 1;
			}

			if (isset($this->request->post['theme_default_widgets_cart_sidebar_redirect'])) {
				$data['theme_default_widgets_cart_sidebar_redirect'] = $this->request->post['theme_default_widgets_cart_sidebar_redirect'];
			} elseif (isset($setting_info['theme_default_widgets_cart_sidebar_redirect'])) {
				$data['theme_default_widgets_cart_sidebar_redirect'] = $setting_info['theme_default_widgets_cart_sidebar_redirect'];
			} else {
				$data['theme_default_widgets_cart_sidebar_redirect'] = '';
			}

			if (isset($this->request->post['theme_default_widgets_cart_sidebar_position'])) {
				$data['theme_default_widgets_cart_sidebar_position'] = $this->request->post['theme_default_widgets_cart_sidebar_position'];
			} elseif (isset($setting_info['theme_default_widgets_cart_sidebar_position'])) {
				$data['theme_default_widgets_cart_sidebar_position'] = $setting_info['theme_default_widgets_cart_sidebar_position'];
			} else {
				$data['theme_default_widgets_cart_sidebar_position'] = 'right';
			}

			// tab-catalog

			if (isset($this->request->post['theme_default_catalog_stickers_text'])) {
				$data['theme_default_catalog_stickers_text'] = $this->request->post['theme_default_catalog_stickers_text'];
			} elseif (isset($setting_info['theme_default_catalog_stickers_text'])) {
				$data['theme_default_catalog_stickers_text'] = $setting_info['theme_default_catalog_stickers_text'];
			} else {
				$data['theme_default_catalog_stickers_text'] = 1;
			}

			if (isset($this->request->post['theme_default_catalog_stickers_image'])) {
				$data['theme_default_catalog_stickers_image'] = $this->request->post['theme_default_catalog_stickers_image'];
			} elseif (isset($setting_info['theme_default_catalog_stickers_image'])) {
				$data['theme_default_catalog_stickers_image'] = $setting_info['theme_default_catalog_stickers_image'];
			} else {
				$data['theme_default_catalog_stickers_image'] = 0;
			}

			if (isset($this->request->post['theme_default_catalog_stock'])) {
				$data['theme_default_catalog_stock'] = $this->request->post['theme_default_catalog_stock'];
			} elseif (isset($setting_info['theme_default_catalog_stock'])) {
				$data['theme_default_catalog_stock'] = $setting_info['theme_default_catalog_stock'];
			} else {
				$data['theme_default_catalog_stock'] = 1;
			}

			if (isset($this->request->post['theme_default_catalog_button_cart'])) {
				$data['theme_default_catalog_button_cart'] = $this->request->post['theme_default_catalog_button_cart'];
			} elseif (isset($setting_info['theme_default_catalog_button_cart'])) {
				$data['theme_default_catalog_button_cart'] = $setting_info['theme_default_catalog_button_cart'];
			} else {
				$data['theme_default_catalog_button_cart'] = 1;
			}

			// tab-product

			if (isset($this->request->post['theme_default_product_fixed_scroll_thumbs'])) {
				$data['theme_default_product_fixed_scroll_thumbs'] = $this->request->post['theme_default_product_fixed_scroll_thumbs'];
			} elseif (isset($setting_info['theme_default_product_fixed_scroll_thumbs'])) {
				$data['theme_default_product_fixed_scroll_thumbs'] = $setting_info['theme_default_product_fixed_scroll_thumbs'];
			} else {
				$data['theme_default_product_fixed_scroll_thumbs'] = 1;
			}

			if (isset($this->request->post['theme_default_product_manufacturer'])) {
				$data['theme_default_product_manufacturer'] = $this->request->post['theme_default_product_manufacturer'];
			} elseif (isset($setting_info['theme_default_product_manufacturer'])) {
				$data['theme_default_product_manufacturer'] = $setting_info['theme_default_product_manufacturer'];
			} else {
				$data['theme_default_product_manufacturer'] = 1;
			}

			if (isset($this->request->post['theme_default_product_model'])) {
				$data['theme_default_product_model'] = $this->request->post['theme_default_product_model'];
			} elseif (isset($setting_info['theme_default_product_model'])) {
				$data['theme_default_product_model'] = $setting_info['theme_default_product_model'];
			} else {
				$data['theme_default_product_model'] = 1;
			}

			if (isset($this->request->post['theme_default_product_sku'])) {
				$data['theme_default_product_sku'] = $this->request->post['theme_default_product_sku'];
			} elseif (isset($setting_info['theme_default_product_sku'])) {
				$data['theme_default_product_sku'] = $setting_info['theme_default_product_sku'];
			} else {
				$data['theme_default_product_sku'] = 1;
			}

			if (isset($this->request->post['theme_default_product_stock'])) {
				$data['theme_default_product_stock'] = $this->request->post['theme_default_product_stock'];
			} elseif (isset($setting_info['theme_default_product_stock'])) {
				$data['theme_default_product_stock'] = $setting_info['theme_default_product_stock'];
			} else {
				$data['theme_default_product_stock'] = 1;
			}

			if (isset($this->request->post['theme_default_product_purchased_product'])) {
				$data['theme_default_product_purchased_product'] = $this->request->post['theme_default_product_purchased_product'];
			} elseif (isset($setting_info['theme_default_product_purchased_product'])) {
				$data['theme_default_product_purchased_product'] = $setting_info['theme_default_product_purchased_product'];
			} else {
				$data['theme_default_product_purchased_product'] = 1;
			}

			if (isset($this->request->post['theme_default_product_fixed_nav_tabs'])) {
				$data['theme_default_product_fixed_nav_tabs'] = $this->request->post['theme_default_product_fixed_nav_tabs'];
			} elseif (isset($setting_info['theme_default_product_fixed_nav_tabs'])) {
				$data['theme_default_product_fixed_nav_tabs'] = $setting_info['theme_default_product_fixed_nav_tabs'];
			} else {
				$data['theme_default_product_fixed_nav_tabs'] = 1;
			}

			if (isset($this->request->post['theme_default_product_button_cart'])) {
				$data['theme_default_product_button_cart'] = $this->request->post['theme_default_product_button_cart'];
			} elseif (isset($setting_info['theme_default_product_button_cart'])) {
				$data['theme_default_product_button_cart'] = $setting_info['theme_default_product_button_cart'];
			} else {
				$data['theme_default_product_button_cart'] = 1;
			}

			if (isset($this->request->post['theme_default_product_fast_checkout_status'])) {
				$data['theme_default_product_fast_checkout_status'] = $this->request->post['theme_default_product_fast_checkout_status'];
			} elseif (isset($setting_info['theme_default_product_fast_checkout_status'])) {
				$data['theme_default_product_fast_checkout_status'] = $setting_info['theme_default_product_fast_checkout_status'];
			} else {
				$data['theme_default_product_fast_checkout_status'] = 1;
			}

			if (isset($this->request->post['theme_default_product_fast_checkout_mask'])) {
				$data['theme_default_product_fast_checkout_mask'] = $this->request->post['theme_default_product_fast_checkout_mask'];
			} elseif (isset($setting_info['theme_default_product_fast_checkout_mask'])) {
				$data['theme_default_product_fast_checkout_mask'] = $setting_info['theme_default_product_fast_checkout_mask'];
			} else {
				$data['theme_default_product_fast_checkout_mask'] = '+38 (099) 999-99-99';
			}

			if (isset($this->request->post['theme_default_fast_buy_background'])) {
				$data['theme_default_fast_buy_background'] = $this->request->post['theme_default_fast_buy_background'];
			} elseif (isset($setting_info['theme_default_fast_buy_background'])) {
				$data['theme_default_fast_buy_background'] = $setting_info['theme_default_fast_buy_background'];
			} else {
				$data['theme_default_fast_buy_background'] = 'rgba(41, 134, 204, 0.109)';
			}

				// tab-product-shipping

				if (isset($this->request->post['theme_default_product_shipping_status'])) {
					$data['theme_default_product_shipping_status'] = $this->request->post['theme_default_product_shipping_status'];
				} elseif (isset($setting_info['theme_default_product_shipping_status'])) {
					$data['theme_default_product_shipping_status'] = $setting_info['theme_default_product_shipping_status'];
				} else {
					$data['theme_default_product_shipping_status'] = 1;
				}

				if (isset($this->request->post['theme_default_product_shipping_description'])) {
					$data['theme_default_product_shipping_description'] = $this->request->post['theme_default_product_shipping_description'];
				} elseif (isset($setting_info['theme_default_product_shipping_description'])) {
					$data['theme_default_product_shipping_description'] = $setting_info['theme_default_product_shipping_description'];
				} else {
					$data['theme_default_product_shipping_description'] = '';
				}

				if (isset($this->request->post['theme_default_product_shipping_items'])) {
					$data['theme_default_product_shipping_items'] = $this->request->post['theme_default_product_shipping_items'];
				} elseif (!empty($setting_info)) {
					$theme_default_product_shipping_items = $setting_info['theme_default_product_shipping_item'];
				} else {
					$data['theme_default_product_shipping_items'] = array();
				}

				$data['theme_default_product_shipping_items'] = array();

				foreach ($theme_default_product_shipping_items as $key => $value) {
					foreach ($value as $theme_default_product_shipping_item) {
						if (is_file(DIR_IMAGE . $theme_default_product_shipping_item['image'])) {
							$shipping_image = $theme_default_product_shipping_item['image'];
							$shipping_thumb = $theme_default_product_shipping_item['image'];
						} else {
							$shipping_image = '';
							$shipping_thumb = 'no_image.png';
						}

						$data['theme_default_product_shipping_items'][$key][] = array(
							'title'      => $theme_default_product_shipping_item['title'],
							'image'      => $shipping_image,
							'thumb'      => $this->model_tool_image->resize($shipping_thumb, 100, 100),
							'sort_order' => $theme_default_product_shipping_item['sort_order']
						);
					}
				}

				//

				// tab-product-payment

				if (isset($this->request->post['theme_default_product_payment_status'])) {
					$data['theme_default_product_payment_status'] = $this->request->post['theme_default_product_payment_status'];
				} elseif (isset($setting_info['theme_default_product_payment_status'])) {
					$data['theme_default_product_payment_status'] = $setting_info['theme_default_product_payment_status'];
				} else {
					$data['theme_default_product_payment_status'] = 1;
				}

				if (isset($this->request->post['theme_default_product_payment_description'])) {
					$data['theme_default_product_payment_description'] = $this->request->post['theme_default_product_payment_description'];
				} elseif (isset($setting_info['theme_default_product_payment_description'])) {
					$data['theme_default_product_payment_description'] = $setting_info['theme_default_product_payment_description'];
				} else {
					$data['theme_default_product_payment_description'] = '';
				}

				if (isset($this->request->post['theme_default_product_payment_items'])) {
					$data['theme_default_product_payment_items'] = $this->request->post['theme_default_product_payment_items'];
				} elseif (!empty($setting_info)) {
					$theme_default_product_payment_items = $setting_info['theme_default_product_payment_item'];
				} else {
					$data['theme_default_product_payment_items'] = array();
				}

				$data['theme_default_product_payment_items'] = array();

				foreach ($theme_default_product_payment_items as $key => $value) {
					foreach ($value as $theme_default_product_payment_item) {
						if (is_file(DIR_IMAGE . $theme_default_product_payment_item['image'])) {
							$payment_image = $theme_default_product_payment_item['image'];
							$payment_thumb = $theme_default_product_payment_item['image'];
						} else {
							$payment_image = '';
							$payment_thumb = 'no_image.png';
						}

						$data['theme_default_product_payment_items'][$key][] = array(
							'title'      => $theme_default_product_payment_item['title'],
							'image'      => $payment_image,
							'thumb'      => $this->model_tool_image->resize($payment_thumb, 100, 100),
							'sort_order' => $theme_default_product_payment_item['sort_order']
						);
					}
				}

				// tab-product-guarantee

				if (isset($this->request->post['theme_default_product_guarantee_status'])) {
					$data['theme_default_product_guarantee_status'] = $this->request->post['theme_default_product_guarantee_status'];
				} elseif (isset($setting_info['theme_default_product_guarantee_status'])) {
					$data['theme_default_product_guarantee_status'] = $setting_info['theme_default_product_guarantee_status'];
				} else {
					$data['theme_default_product_guarantee_status'] = 1;
				}

				if (isset($this->request->post['theme_default_product_guarantee_description'])) {
					$data['theme_default_product_guarantee_description'] = $this->request->post['theme_default_product_guarantee_description'];
				} elseif (isset($setting_info['theme_default_product_guarantee_description'])) {
					$data['theme_default_product_guarantee_description'] = $setting_info['theme_default_product_guarantee_description'];
				} else {
					$data['theme_default_product_guarantee_description'] = '';
				}

				// tab-product-edges

				if (isset($this->request->post['theme_default_product_edges_status'])) {
					$data['theme_default_product_edges_status'] = $this->request->post['theme_default_product_edges_status'];
				} elseif (isset($setting_info['theme_default_product_edges_status'])) {
					$data['theme_default_product_edges_status'] = $setting_info['theme_default_product_edges_status'];
				} else {
					$data['theme_default_product_edges_status'] = 1;
				}

				if (isset($this->request->post['theme_default_product_edges_items'])) {
					$data['theme_default_product_edges_items'] = $this->request->post['theme_default_product_edges_items'];
				} elseif (!empty($setting_info)) {
					$theme_default_product_edges_items = $setting_info['theme_default_product_edges_item'];
				} else {
					$data['theme_default_product_edges_items'] = array();
				}

				$data['theme_default_product_edges_items'] = array();

				foreach ($theme_default_product_edges_items as $key => $value) {
					foreach ($value as $theme_default_product_edges_item) {
						if (is_file(DIR_IMAGE . $theme_default_product_edges_item['image'])) {
							$edges_image = $theme_default_product_edges_item['image'];
							$edges_thumb = $theme_default_product_edges_item['image'];
						} else {
							$edges_image = '';
							$edges_thumb = 'no_image.png';
						}

						$data['theme_default_product_edges_items'][$key][] = array(
							'title'      => $theme_default_product_edges_item['title'],
							'image'      => $edges_image,
							'thumb'      => $this->model_tool_image->resize($edges_thumb, 100, 100)
						);
					}
				}

				// tab-product-questions

				if (isset($this->request->post['theme_default_product_questions_status'])) {
					$data['theme_default_product_questions_status'] = $this->request->post['theme_default_product_questions_status'];
				} elseif (isset($setting_info['theme_default_product_questions_status'])) {
					$data['theme_default_product_questions_status'] = $setting_info['theme_default_product_questions_status'];
				} else {
					$data['theme_default_product_questions_status'] = 1;
				}

				// tab-product-sticker-text

				if (isset($this->request->post['theme_default_product_sticker_text_status'])) {
					$data['theme_default_product_sticker_text_status'] = $this->request->post['theme_default_product_sticker_text_status'];
				} elseif (isset($setting_info['theme_default_product_sticker_text_status'])) {
					$data['theme_default_product_sticker_text_status'] = $setting_info['theme_default_product_sticker_text_status'];
				} else {
					$data['theme_default_product_sticker_text_status'] = 1;
				}

					// tab-product-sticker-text-new

					if (isset($this->request->post['theme_default_product_sticker_new_status'])) {
						$data['theme_default_product_sticker_new_status'] = $this->request->post['theme_default_product_sticker_new_status'];
					} elseif (isset($setting_info['theme_default_product_sticker_new_status'])) {
						$data['theme_default_product_sticker_new_status'] = $setting_info['theme_default_product_sticker_new_status'];
					} else {
						$data['theme_default_product_sticker_new_status'] = 1;
					}

					if (isset($this->request->post['theme_default_product_sticker_new_background'])) {
						$data['theme_default_product_sticker_new_background'] = $this->request->post['theme_default_product_sticker_new_background'];
					} elseif (isset($setting_info['theme_default_product_sticker_new_background'])) {
						$data['theme_default_product_sticker_new_background'] = $setting_info['theme_default_product_sticker_new_background'];
					} else {
						$data['theme_default_product_sticker_new_background'] = '#000000';
					}

					if (isset($this->request->post['theme_default_product_sticker_new_name'])) {
						$data['theme_default_product_sticker_new_name'] = $this->request->post['theme_default_product_sticker_new_name'];
					} elseif (isset($setting_info['theme_default_product_sticker_new_name'])) {
						$data['theme_default_product_sticker_new_name'] = $setting_info['theme_default_product_sticker_new_name'];
					} else {
						$data['theme_default_product_sticker_new_name'] = '';
					}

					if (isset($this->request->post['theme_default_product_sticker_new_days'])) {
						$data['theme_default_product_sticker_new_days'] = $this->request->post['theme_default_product_sticker_new_days'];
					} elseif (isset($setting_info['theme_default_product_sticker_new_days'])) {
						$data['theme_default_product_sticker_new_days'] = $setting_info['theme_default_product_sticker_new_days'];
					} else {
						$data['theme_default_product_sticker_new_days'] = 15;
					}

					// tab-product-sticker-text-special

					if (isset($this->request->post['theme_default_product_sticker_special_status'])) {
						$data['theme_default_product_sticker_special_status'] = $this->request->post['theme_default_product_sticker_special_status'];
					} elseif (isset($setting_info['theme_default_product_sticker_special_status'])) {
						$data['theme_default_product_sticker_special_status'] = $setting_info['theme_default_product_sticker_special_status'];
					} else {
						$data['theme_default_product_sticker_special_status'] = 1;
					}

					if (isset($this->request->post['theme_default_product_sticker_special_background'])) {
						$data['theme_default_product_sticker_special_background'] = $this->request->post['theme_default_product_sticker_special_background'];
					} elseif (isset($setting_info['theme_default_product_sticker_special_background'])) {
						$data['theme_default_product_sticker_special_background'] = $setting_info['theme_default_product_sticker_special_background'];
					} else {
						$data['theme_default_product_sticker_special_background'] = '#000000';
					}

					if (isset($this->request->post['theme_default_product_sticker_special_name'])) {
						$data['theme_default_product_sticker_special_name'] = $this->request->post['theme_default_product_sticker_special_name'];
					} elseif (isset($setting_info['theme_default_product_sticker_special_name'])) {
						$data['theme_default_product_sticker_special_name'] = $setting_info['theme_default_product_sticker_special_name'];
					} else {
						$data['theme_default_product_sticker_special_name'] = '';
					}

					// tab-product-sticker-text-sale

					if (isset($this->request->post['theme_default_product_sticker_sale_status'])) {
						$data['theme_default_product_sticker_sale_status'] = $this->request->post['theme_default_product_sticker_sale_status'];
					} elseif (isset($setting_info['theme_default_product_sticker_sale_status'])) {
						$data['theme_default_product_sticker_sale_status'] = $setting_info['theme_default_product_sticker_sale_status'];
					} else {
						$data['theme_default_product_sticker_sale_status'] = 1;
					}

					if (isset($this->request->post['theme_default_product_sticker_sale_background'])) {
						$data['theme_default_product_sticker_sale_background'] = $this->request->post['theme_default_product_sticker_sale_background'];
					} elseif (isset($setting_info['theme_default_product_sticker_sale_background'])) {
						$data['theme_default_product_sticker_sale_background'] = $setting_info['theme_default_product_sticker_sale_background'];
					} else {
						$data['theme_default_product_sticker_sale_background'] = '#000000';
					}

					if (isset($this->request->post['theme_default_product_sticker_sale_name'])) {
						$data['theme_default_product_sticker_sale_name'] = $this->request->post['theme_default_product_sticker_sale_name'];
					} elseif (isset($setting_info['theme_default_product_sticker_sale_name'])) {
						$data['theme_default_product_sticker_sale_name'] = $setting_info['theme_default_product_sticker_sale_name'];
					} else {
						$data['theme_default_product_sticker_sale_name'] = '';
					}

					if (isset($this->request->post['theme_default_product_sticker_sale_count'])) {
						$data['theme_default_product_sticker_sale_count'] = $this->request->post['theme_default_product_sticker_sale_count'];
					} elseif (isset($setting_info['theme_default_product_sticker_sale_count'])) {
						$data['theme_default_product_sticker_sale_count'] = $setting_info['theme_default_product_sticker_sale_count'];
					} else {
						$data['theme_default_product_sticker_sale_count'] = 100;
					}

					// tab-product-sticker-text-hot

					if (isset($this->request->post['theme_default_product_sticker_hot_status'])) {
						$data['theme_default_product_sticker_hot_status'] = $this->request->post['theme_default_product_sticker_hot_status'];
					} elseif (isset($setting_info['theme_default_product_sticker_hot_status'])) {
						$data['theme_default_product_sticker_hot_status'] = $setting_info['theme_default_product_sticker_hot_status'];
					} else {
						$data['theme_default_product_sticker_hot_status'] = 1;
					}

					if (isset($this->request->post['theme_default_product_sticker_hot_background'])) {
						$data['theme_default_product_sticker_hot_background'] = $this->request->post['theme_default_product_sticker_hot_background'];
					} elseif (isset($setting_info['theme_default_product_sticker_hot_background'])) {
						$data['theme_default_product_sticker_hot_background'] = $setting_info['theme_default_product_sticker_hot_background'];
					} else {
						$data['theme_default_product_sticker_hot_background'] = 1;
					}

					if (isset($this->request->post['theme_default_product_sticker_hot_name'])) {
						$data['theme_default_product_sticker_hot_name'] = $this->request->post['theme_default_product_sticker_hot_name'];
					} elseif (isset($setting_info['theme_default_product_sticker_hot_name'])) {
						$data['theme_default_product_sticker_hot_name'] = $setting_info['theme_default_product_sticker_hot_name'];
					} else {
						$data['theme_default_product_sticker_hot_name'] = '';
					}

					if (isset($this->request->post['theme_default_product_sticker_hot_count'])) {
						$data['theme_default_product_sticker_hot_count'] = $this->request->post['theme_default_product_sticker_hot_count'];
					} elseif (isset($setting_info['theme_default_product_sticker_hot_count'])) {
						$data['theme_default_product_sticker_hot_count'] = $setting_info['theme_default_product_sticker_hot_count'];
					} else {
						$data['theme_default_product_sticker_hot_count'] = 1000;
					}

			// tab-information
			// tab-contacts

				if (isset($this->request->post['theme_default_contacts_contact_status'])) {
					$data['theme_default_contacts_contact_status'] = $this->request->post['theme_default_contacts_contact_status'];
				} elseif (isset($setting_info['theme_default_contacts_contact_status'])) {
					$data['theme_default_contacts_contact_status'] = $setting_info['theme_default_contacts_contact_status'];
				} else {
					$data['theme_default_contacts_contact_status'] = 1;
				}

				if (isset($this->request->post['theme_default_contacts_shops_status'])) {
					$data['theme_default_contacts_shops_status'] = $this->request->post['theme_default_contacts_shops_status'];
				} elseif (isset($setting_info['theme_default_contacts_shops_status'])) {
					$data['theme_default_contacts_shops_status'] = $setting_info['theme_default_contacts_shops_status'];
				} else {
					$data['theme_default_contacts_shops_status'] = 1;
				}

				$data['shops_link'] = $this->url->link('localisation/location', 'user_token=' . $this->session->data['user_token'], true);

			// tab-checkout

				$data['simple_link'] = $this->url->link('extension/module/simple', 'user_token=' . $this->session->data['user_token'], true);

			// dc_other

				$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		//
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/theme/default', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/theme/default')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['theme_default_product_limit']) {
			$this->error['product_limit'] = $this->language->get('error_limit');
		}

		if (!$this->request->post['theme_default_product_description_length']) {
			$this->error['product_description_length'] = $this->language->get('error_limit');
		}

		if (!$this->request->post['theme_default_image_category_width'] || !$this->request->post['theme_default_image_category_height']) {
			$this->error['image_category'] = $this->language->get('error_image_category');
		}
		
		if (!$this->request->post['theme_default_image_manufacturer_width'] || !$this->request->post['theme_default_image_manufacturer_height']) {
			$this->error['image_manufacturer'] = $this->language->get('error_image_manufacturer');
		}

		if (!$this->request->post['theme_default_image_thumb_width'] || !$this->request->post['theme_default_image_thumb_height']) {
			$this->error['image_thumb'] = $this->language->get('error_image_thumb');
		}

		if (!$this->request->post['theme_default_image_popup_width'] || !$this->request->post['theme_default_image_popup_height']) {
			$this->error['image_popup'] = $this->language->get('error_image_popup');
		}

		if (!$this->request->post['theme_default_image_product_width'] || !$this->request->post['theme_default_image_product_height']) {
			$this->error['image_product'] = $this->language->get('error_image_product');
		}

		if (!$this->request->post['theme_default_image_additional_width'] || !$this->request->post['theme_default_image_additional_height']) {
			$this->error['image_additional'] = $this->language->get('error_image_additional');
		}

		if (!$this->request->post['theme_default_image_related_width'] || !$this->request->post['theme_default_image_related_height']) {
			$this->error['image_related'] = $this->language->get('error_image_related');
		}

		if (!$this->request->post['theme_default_image_compare_width'] || !$this->request->post['theme_default_image_compare_height']) {
			$this->error['image_compare'] = $this->language->get('error_image_compare');
		}

		if (!$this->request->post['theme_default_image_wishlist_width'] || !$this->request->post['theme_default_image_wishlist_height']) {
			$this->error['image_wishlist'] = $this->language->get('error_image_wishlist');
		}

		if (!$this->request->post['theme_default_image_cart_width'] || !$this->request->post['theme_default_image_cart_height']) {
			$this->error['image_cart'] = $this->language->get('error_image_cart');
		}

		if (!$this->request->post['theme_default_image_location_width'] || !$this->request->post['theme_default_image_location_height']) {
			$this->error['image_location'] = $this->language->get('error_image_location');
		}

		return !$this->error;
	}
}
