<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerSettingSetting extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('setting/setting');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('config', $this->request->post);

			if ($this->config->get('config_currency_auto')) {
				$this->load->model('localisation/currency');
                $this->load->controller('extension/currency/' . $this->config->get('config_currency_engine')."/currency" , $this->config->get('config_currency'));
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('setting/store', 'user_token=' . $this->session->data['user_token'], true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['owner'])) {
			$data['error_owner'] = $this->error['owner'];
		} else {
			$data['error_owner'] = '';
		}

		if (isset($this->error['address'])) {
			$data['error_address'] = $this->error['address'];
		} else {
			$data['error_address'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = '';
		}

		if (isset($this->error['meta_title'])) {
			$data['error_meta_title'] = $this->error['meta_title'];
		} else {
			$data['error_meta_title'] = '';
		}

		if (isset($this->error['country'])) {
			$data['error_country'] = $this->error['country'];
		} else {
			$data['error_country'] = '';
		}

		if (isset($this->error['zone'])) {
			$data['error_zone'] = $this->error['zone'];
		} else {
			$data['error_zone'] = '';
		}

		if (isset($this->error['customer_group_display'])) {
			$data['error_customer_group_display'] = $this->error['customer_group_display'];
		} else {
			$data['error_customer_group_display'] = '';
		}

		if (isset($this->error['login_attempts'])) {
			$data['error_login_attempts'] = $this->error['login_attempts'];
		} else {
			$data['error_login_attempts'] = '';
		}

		if (isset($this->error['voucher_min'])) {
			$data['error_voucher_min'] = $this->error['voucher_min'];
		} else {
			$data['error_voucher_min'] = '';
		}

		if (isset($this->error['voucher_max'])) {
			$data['error_voucher_max'] = $this->error['voucher_max'];
		} else {
			$data['error_voucher_max'] = '';
		}

		if (isset($this->error['processing_status'])) {
			$data['error_processing_status'] = $this->error['processing_status'];
		} else {
			$data['error_processing_status'] = '';
		}

		if (isset($this->error['complete_status'])) {
			$data['error_complete_status'] = $this->error['complete_status'];
		} else {
			$data['error_complete_status'] = '';
		}

		if (isset($this->error['log'])) {
			$data['error_log'] = $this->error['log'];
		} else {
			$data['error_log'] = '';
		}

		if (isset($this->error['limit_admin'])) {
			$data['error_limit_admin'] = $this->error['limit_admin'];
		} else {
			$data['error_limit_admin'] = '';
		}

        if (isset($this->error['limit_autocomplete'])) {
            $data['error_limit_autocomplete'] = $this->error['limit_autocomplete'];
        } else {
            $data['error_limit_autocomplete'] = '';
        }

		if (isset($this->error['encryption'])) {
			$data['error_encryption'] = $this->error['encryption'];
		} else {
			$data['error_encryption'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_stores'),
			'href' => $this->url->link('setting/store', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('setting/setting', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['action'] = $this->url->link('setting/setting', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('setting/store', 'user_token=' . $this->session->data['user_token'], true);

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['config_meta_title'])) {
			$data['config_meta_title'] = $this->request->post['config_meta_title'];
		} else {
			$data['config_meta_title'] = $this->config->get('config_meta_title');
		}

		if (isset($this->request->post['config_meta_description'])) {
			$data['config_meta_description'] = $this->request->post['config_meta_description'];
		} else {
			$data['config_meta_description'] = $this->config->get('config_meta_description');
		}

		if (isset($this->request->post['config_meta_keyword'])) {
			$data['config_meta_keyword'] = $this->request->post['config_meta_keyword'];
		} else {
			$data['config_meta_keyword'] = $this->config->get('config_meta_keyword');
		}

		if (isset($this->request->post['config_theme'])) {
			$data['config_theme'] = $this->request->post['config_theme'];
		} else {
			$data['config_theme'] = $this->config->get('config_theme');
		}

		if (isset($this->request->post['config_theme_color'])) {
			$data['config_theme_color'] = $this->request->post['config_theme_color'];
		} else {
			$data['config_theme_color'] = $this->config->get('config_theme_color');
		}

		if ($this->request->server['HTTPS']) {
			$data['store_url'] = HTTPS_CATALOG;
		} else {
			$data['store_url'] = HTTP_CATALOG;
		}

		$data['themes'] = array();

		$this->load->model('setting/extension');

		$extensions = $this->model_setting_extension->getInstalled('theme');

		foreach ($extensions as $code) {
			$this->load->language('extension/theme/' . $code, 'extension');

			$data['themes'][] = array(
				'text'  => $this->language->get('extension')->get('heading_title'),
				'value' => $code
			);
		}

		if (isset($this->request->post['config_layout_id'])) {
			$data['config_layout_id'] = $this->request->post['config_layout_id'];
		} else {
			$data['config_layout_id'] = $this->config->get('config_layout_id');
		}

		if (isset($this->request->post['config_login_page_bg'])) {
			$data['config_login_page_bg'] = $this->request->post['config_login_page_bg'];
		} else {
			$data['config_login_page_bg'] = $this->config->get('config_login_page_bg');
		}

		if (isset($this->request->post['config_login_after_auth'])) {
			$data['config_login_after_auth'] = $this->request->post['config_login_after_auth'];
		} else {
			$data['config_login_after_auth'] = $this->config->get('config_login_after_auth');
		}

		if (isset($this->request->post['config_cms_update'])) {
			$data['config_cms_update'] = $this->request->post['config_cms_update'];
		} else {
			$data['config_cms_update'] = $this->config->get('config_cms_update');
		}

		$this->load->model('design/layout');

		$data['layouts'] = $this->model_design_layout->getLayouts();

		if (isset($this->request->post['config_widget_fast_use'])) {
			$data['config_widget_fast_use'] = $this->request->post['config_widget_fast_use'];
		} else {
			$data['config_widget_fast_use'] = $this->config->get('config_widget_fast_use');
		}

		if (isset($this->request->post['config_name'])) {
			$data['config_name'] = $this->request->post['config_name'];
		} else {
			$data['config_name'] = $this->config->get('config_name');
		}

		if (isset($this->request->post['config_owner'])) {
			$data['config_owner'] = $this->request->post['config_owner'];
		} else {
			$data['config_owner'] = $this->config->get('config_owner');
		}

		if (isset($this->request->post['config_address'])) {
			$data['config_address'] = $this->request->post['config_address'];
		} else {
			$data['config_address'] = $this->config->get('config_address');
		}

		if (isset($this->request->post['config_geocode'])) {
			$data['config_geocode'] = $this->request->post['config_geocode'];
		} else {
			$data['config_geocode'] = $this->config->get('config_geocode');
		}

		if (isset($this->request->post['config_email'])) {
			$data['config_email'] = $this->request->post['config_email'];
		} else {
			$data['config_email'] = $this->config->get('config_email');
		}

		if (isset($this->request->post['config_telephone'])) {
			$data['config_telephone'] = $this->request->post['config_telephone'];
		} else {
			$data['config_telephone'] = $this->config->get('config_telephone');
		}

		if (isset($this->request->post['config_telephone_2'])) {
			$data['config_telephone_2'] = $this->request->post['config_telephone_2'];
		} else {
			$data['config_telephone_2'] = $this->config->get('config_telephone_2');
		}

		if (isset($this->request->post['config_telephone_3'])) {
			$data['config_telephone_3'] = $this->request->post['config_telephone_3'];
		} else {
			$data['config_telephone_3'] = $this->config->get('config_telephone_3');
		}

		if (isset($this->request->post['config_telephone_4'])) {
			$data['config_telephone_4'] = $this->request->post['config_telephone_4'];
		} else {
			$data['config_telephone_4'] = $this->config->get('config_telephone_4');
		}

		if (isset($this->request->post['config_telegram'])) {
			$data['config_telegram'] = $this->request->post['config_telegram'];
		} else {
			$data['config_telegram'] = $this->config->get('config_telegram');
		}

		if (isset($this->request->post['config_viber'])) {
			$data['config_viber'] = $this->request->post['config_viber'];
		} else {
			$data['config_viber'] = $this->config->get('config_viber');
		}

		if (isset($this->request->post['config_whatsapp'])) {
			$data['config_whatsapp'] = $this->request->post['config_whatsapp'];
		} else {
			$data['config_whatsapp'] = $this->config->get('config_whatsapp');
		}

		if (isset($this->request->post['config_instagram'])) {
			$data['config_instagram'] = $this->request->post['config_instagram'];
		} else {
			$data['config_instagram'] = $this->config->get('config_instagram');
		}

		if (isset($this->request->post['config_facebook'])) {
			$data['config_facebook'] = $this->request->post['config_facebook'];
		} else {
			$data['config_facebook'] = $this->config->get('config_facebook');
		}

		if (isset($this->request->post['config_twitter'])) {
			$data['config_twitter'] = $this->request->post['config_twitter'];
		} else {
			$data['config_twitter'] = $this->config->get('config_twitter');
		}

		if (isset($this->request->post['config_youtube'])) {
			$data['config_youtube'] = $this->request->post['config_youtube'];
		} else {
			$data['config_youtube'] = $this->config->get('config_youtube');
		}

		if (isset($this->request->post['config_linkedin'])) {
			$data['config_linkedin'] = $this->request->post['config_linkedin'];
		} else {
			$data['config_linkedin'] = $this->config->get('config_linkedin');
		}

		if (isset($this->request->post['config_pinterest'])) {
			$data['config_pinterest'] = $this->request->post['config_pinterest'];
		} else {
			$data['config_pinterest'] = $this->config->get('config_pinterest');
		}

		if (isset($this->request->post['config_fax'])) {
			$data['config_fax'] = $this->request->post['config_fax'];
		} else {
			$data['config_fax'] = $this->config->get('config_fax');
		}

		if (isset($this->request->post['config_image'])) {
			$data['config_image'] = $this->request->post['config_image'];
		} else {
			$data['config_image'] = $this->config->get('config_image');
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['config_image']) && is_file(DIR_IMAGE . $this->request->post['config_image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['config_image'], 100, 100);
		} elseif ($this->config->get('config_image') && is_file(DIR_IMAGE . $this->config->get('config_image'))) {
			$data['thumb'] = $this->model_tool_image->resize($this->config->get('config_image'), 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['config_open'])) {
			$data['config_open'] = $this->request->post['config_open'];
		} else {
			$data['config_open'] = $this->config->get('config_open');
		}

		if (isset($this->request->post['config_comment'])) {
			$data['config_comment'] = $this->request->post['config_comment'];
		} else {
			$data['config_comment'] = $this->config->get('config_comment');
		}

		$this->load->model('localisation/location');

		$data['locations'] = $this->model_localisation_location->getLocations();

		if (isset($this->request->post['config_location'])) {
			$data['config_location'] = $this->request->post['config_location'];
		} elseif ($this->config->get('config_location')) {
			$data['config_location'] = $this->config->get('config_location');
		} else {
			$data['config_location'] = array();
		}

		if (isset($this->request->post['config_country_id'])) {
			$data['config_country_id'] = $this->request->post['config_country_id'];
		} else {
			$data['config_country_id'] = $this->config->get('config_country_id');
		}

		$this->load->model('localisation/country');

		$data['countries'] = $this->model_localisation_country->getCountries();

		if (isset($this->request->post['config_zone_id'])) {
			$data['config_zone_id'] = $this->request->post['config_zone_id'];
		} else {
			$data['config_zone_id'] = $this->config->get('config_zone_id');
		}

		if (isset($this->request->post['config_timezone'])) {
			$data['config_timezone'] = $this->request->post['config_timezone'];
		} elseif ($this->config->has('config_timezone')) {
			$data['config_timezone'] = $this->config->get('config_timezone');
		} else {
			$data['config_timezone'] = 'UTC';
		}
		// Set Time Zone
		$data['timezones'] = array();

		$timestamp = time();

		$timezones = timezone_identifiers_list();

		foreach($timezones as $timezone) {
			date_default_timezone_set($timezone);
			$hour = ' (' . date('P', $timestamp) . ')';
			$data['timezones'][] = array(
				'text'  => $timezone . $hour,
				'value' => $timezone
			);
		}

		date_default_timezone_set($this->config->get('config_timezone'));

		if (isset($this->request->post['config_language'])) {
			$data['config_language'] = $this->request->post['config_language'];
		} else {
			$data['config_language'] = $this->config->get('config_language');
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['config_admin_language'])) {
			$data['config_admin_language'] = $this->request->post['config_admin_language'];
		} else {
			$data['config_admin_language'] = $this->config->get('config_admin_language');
		}

		// dc
		if (isset($this->request->post['config_currency2'])) {
            $data['config_currency2'] = $this->request->post['config_currency2'];
        } else {
            $data['config_currency2'] = $this->config->get('config_currency2');
        }
        if (isset($this->request->post['config_autocalc_option_special'])) {
            $data['config_autocalc_option_special'] = $this->request->post['config_autocalc_option_special'];
        } else {
            $data['config_autocalc_option_special'] = $this->config->get('config_autocalc_option_special');
        }        
        if (isset($this->request->post['config_autocalc_option_discount'])) {
            $data['config_autocalc_option_discount'] = $this->request->post['config_autocalc_option_discount'];
        } else {
            $data['config_autocalc_option_discount'] = $this->config->get('config_autocalc_option_discount');
        }
        if (isset($this->request->post['config_autocalc_not_mul_qty'])) {
            $data['config_autocalc_not_mul_qty'] = $this->request->post['config_autocalc_not_mul_qty'];
        } else {
            $data['config_autocalc_not_mul_qty'] = $this->config->get('config_autocalc_not_mul_qty');
        }
        if (isset($this->request->post['config_autocalc_select_first'])) {
            $data['config_autocalc_select_first'] = $this->request->post['config_autocalc_select_first'];
        } else {
            $data['config_autocalc_select_first'] = $this->config->get('config_autocalc_select_first');
        }        
        if (isset($this->request->post['config_autocalc_hide_option_price'])) {
            $data['config_autocalc_hide_option_price'] = $this->request->post['config_autocalc_hide_option_price'];
        } else {
            $data['config_autocalc_hide_option_price'] = $this->config->get('config_autocalc_hide_option_price');
        }

		if (isset($this->request->post['config_optimize_html_compression'])) {
			$data['config_optimize_html_compression'] = $this->request->post['config_optimize_html_compression'];
		} else {
			$data['config_optimize_html_compression'] = $this->config->get('config_optimize_html_compression');
		}

		if (isset($this->request->post['config_watermark_status'])) {
			$data['config_watermark_status'] = $this->request->post['config_watermark_status'];
		} else {
			$data['config_watermark_status'] = $this->config->get('config_watermark_status');
		}
		
		if (isset($this->request->post['config_watermark_image'])) {
			$data['config_watermark_image'] = $this->request->post['config_watermark_image'];
		} elseif ($this->config->get('config_watermark_image')) {
			$data['config_watermark_image'] = $this->config->get('config_watermark_image');
		} else {
			$data['config_watermark_image'] = '';
		}

		if (isset($this->request->post['config_watermark_image']) && is_file(DIR_IMAGE . $this->request->post['config_watermark_image']) && !isset($this->error['image'])) {
			$data['watermark_image'] = $this->model_tool_image->resize($this->request->post['config_watermark_image'], 100, 100);
		} elseif ($this->config->get('config_watermark_image') && is_file(DIR_IMAGE . $this->config->get('config_watermark_image')) && !isset($this->error['image'])) {
			$data['watermark_image'] = $this->model_tool_image->resize($this->config->get('config_watermark_image'), 100, 100);
		} else {
			$data['watermark_image'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		
		$data['opacity_list'] = array('0.1', '0.2', '0.3', '0.4', '0.5', '0.6', '0.7', '0.8', '0.9', '1.0');
		
		if (isset($this->request->post['config_watermark_opacity'])) {
			$data['config_watermark_opacity'] = $this->request->post['config_watermark_opacity'];
		} elseif ($this->config->get('config_watermark_opacity')) {
			$data['config_watermark_opacity'] = $this->config->get('config_watermark_opacity');
		} else {
			$data['config_watermark_opacity'] = 0.5;
		}
		
		if (isset($this->request->post['config_watermark_position'])) {
			$data['config_watermark_position'] = $this->request->post['config_watermark_position'];
		} else {
			$data['config_watermark_position'] = $this->config->get('config_watermark_position');
		}
		
		$data['zoom_list'] = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
		
		if (isset($this->request->post['config_watermark_zoom'])) {
			$data['config_watermark_zoom'] = $this->request->post['config_watermark_zoom'];
		} elseif ($this->config->get('config_watermark_zoom')) {
			$data['config_watermark_zoom'] = $this->config->get('config_watermark_zoom');
		} else {
			$data['config_watermark_zoom'] = 1;
		}
		
		if (isset($this->request->post['config_watermark_watermark_thumb'])) {
			$data['config_watermark_watermark_thumb'] = $this->request->post['config_watermark_watermark_thumb'];
		} else {
			$data['config_watermark_watermark_thumb'] = $this->config->get('config_watermark_watermark_thumb');
		}
		
		if (isset($this->request->post['config_watermark_watermark_popup'])) {
			$data['config_watermark_watermark_popup'] = $this->request->post['config_watermark_watermark_popup'];
		} else {
			$data['config_watermark_watermark_popup'] = $this->config->get('config_watermark_watermark_popup');
		}
		
		if (isset($this->request->post['config_watermark_watermark_product'])) {
			$data['config_watermark_watermark_product'] = $this->request->post['config_watermark_watermark_product'];
		} else {
			$data['config_watermark_watermark_product'] = $this->config->get('config_watermark_watermark_product');
		}
		
		if (isset($this->request->post['config_watermark_watermark_additional'])) {
			$data['config_watermark_watermark_additional'] = $this->request->post['config_watermark_watermark_additional'];
		} else {
			$data['config_watermark_watermark_additional'] = $this->config->get('config_watermark_watermark_additional');
		}
		
		if (isset($this->request->post['config_watermark_watermark_cart'])) {
			$data['config_watermark_watermark_cart'] = $this->request->post['config_watermark_watermark_cart'];
		} else {
			$data['config_watermark_watermark_cart'] = $this->config->get('config_watermark_watermark_cart');
		}
		
		if (isset($this->request->post['config_watermark_watermark_option'])) {
			$data['config_watermark_watermark_option'] = $this->request->post['config_watermark_watermark_option'];
		} else {
			$data['config_watermark_watermark_option'] = $this->config->get('config_watermark_watermark_option');
		}
		
		if (isset($this->request->post['config_watermark_watermark_carousel'])) {
			$data['config_watermark_watermark_carousel'] = $this->request->post['config_watermark_watermark_carousel'];
		} else {
			$data['config_watermark_watermark_carousel'] = $this->config->get('config_watermark_watermark_carousel');
		}
		
		if (isset($this->request->post['config_watermark_watermark_banner'])) {
			$data['config_watermark_watermark_banner'] = $this->request->post['config_watermark_watermark_banner'];
		} else {
			$data['config_watermark_watermark_banner'] = $this->config->get('config_watermark_watermark_banner');
		}
		
		if (isset($this->request->post['config_watermark_watermark_slideshow'])) {
			$data['config_watermark_watermark_slideshow'] = $this->request->post['config_watermark_watermark_slideshow'];
		} else {
			$data['config_watermark_watermark_slideshow'] = $this->config->get('config_watermark_watermark_slideshow');
		}
		
		// Preorder
		if ($this->config->get('config_preorder_status') !== null && (int)$this->config->get('config_preorder_status')) {
			$data['preorder_status'] = true;
		} else {
			$data['preorder_status'] = false;
		}
		
		if ($data['preorder_status']) {
			if (isset($this->request->post['config_watermark_watermark_preorder'])) {
				$data['config_watermark_watermark_preorder'] = $this->request->post['config_watermark_watermark_preorder'];
			} else {
				$data['config_watermark_watermark_preorder'] = $this->config->get('config_watermark_watermark_preorder');
			}
		}
		
		// Reviews
		if ($this->config->get('config_p_review_status') !== null && (int)$this->config->get('config_p_review_status')) {
			$data['p_review_status'] = true;
		} else {
			$data['p_review_status'] = false;
		}
		
		if ($data['p_review_status']) {
			if (isset($this->request->post['config_watermark_watermark_p_review'])) {
				$data['config_watermark_watermark_p_review'] = $this->request->post['config_watermark_watermark_p_review'];
			} else {
				$data['config_watermark_watermark_p_review'] = $this->config->get('config_watermark_watermark_p_review');
			}
		}
		
		if (isset($this->request->post['config_watermark_webp_thumb'])) {
			$data['config_watermark_webp_thumb'] = $this->request->post['config_watermark_webp_thumb'];
		} else {
			$data['config_watermark_webp_thumb'] = $this->config->get('config_watermark_webp_thumb');
		}
		
		if (isset($this->request->post['config_watermark_webp_popup'])) {
			$data['config_watermark_webp_popup'] = $this->request->post['config_watermark_webp_popup'];
		} else {
			$data['config_watermark_webp_popup'] = $this->config->get('config_watermark_webp_popup');
		}
		
		if (isset($this->request->post['config_watermark_webp_product'])) {
			$data['config_watermark_webp_product'] = $this->request->post['config_watermark_webp_product'];
		} else {
			$data['config_watermark_webp_product'] = $this->config->get('config_watermark_webp_product');
		}
		
		if (isset($this->request->post['config_watermark_webp_additional'])) {
			$data['config_watermark_webp_additional'] = $this->request->post['config_watermark_webp_additional'];
		} else {
			$data['config_watermark_webp_additional'] = $this->config->get('config_watermark_webp_additional');
		}
		
		if (isset($this->request->post['config_watermark_webp_cart'])) {
			$data['config_watermark_webp_cart'] = $this->request->post['config_watermark_webp_cart'];
		} else {
			$data['config_watermark_webp_cart'] = $this->config->get('config_watermark_webp_cart');
		}
		
		if (isset($this->request->post['config_watermark_webp_option'])) {
			$data['config_watermark_webp_option'] = $this->request->post['config_watermark_webp_option'];
		} else {
			$data['config_watermark_webp_option'] = $this->config->get('config_watermark_webp_option');
		}
		
		if (isset($this->request->post['config_watermark_webp_carousel'])) {
			$data['config_watermark_webp_carousel'] = $this->request->post['config_watermark_webp_carousel'];
		} else {
			$data['config_watermark_webp_carousel'] = $this->config->get('config_watermark_webp_carousel');
		}
		
		if (isset($this->request->post['config_watermark_webp_banner'])) {
			$data['config_watermark_webp_banner'] = $this->request->post['config_watermark_webp_banner'];
		} else {
			$data['config_watermark_webp_banner'] = $this->config->get('config_watermark_webp_banner');
		}
		
		if (isset($this->request->post['config_watermark_webp_slideshow'])) {
			$data['config_watermark_webp_slideshow'] = $this->request->post['config_watermark_webp_slideshow'];
		} else {
			$data['config_watermark_webp_slideshow'] = $this->config->get('config_watermark_webp_slideshow');
		}
		
		// Preorder
		if ($this->config->get('config_preorder_status') !== null && (int)$this->config->get('config_preorder_status')) {
			$data['preorder_status'] = true;
		} else {
			$data['preorder_status'] = false;
		}
		
		if ($data['preorder_status']) {
			if (isset($this->request->post['config_watermark_webp_preorder'])) {
				$data['config_watermark_webp_preorder'] = $this->request->post['config_watermark_webp_preorder'];
			} else {
				$data['config_watermark_webp_preorder'] = $this->config->get('config_watermark_webp_preorder');
			}
		}
		
		// Reviews
		if ($this->config->get('config_p_review_status') !== null && (int)$this->config->get('config_p_review_status')) {
			$data['p_review_status'] = true;
		} else {
			$data['p_review_status'] = false;
		}
		
		if ($data['p_review_status']) {
			if (isset($this->request->post['config_watermark_webp_p_review'])) {
				$data['config_watermark_webp_p_review'] = $this->request->post['config_watermark_webp_p_review'];
			} else {
				$data['config_watermark_webp_p_review'] = $this->config->get('config_watermark_webp_p_review');
			}
		}

		if (isset($this->request->post['config_optimize_lazyload_status'])) {
			$data['config_optimize_lazyload_status'] = $this->request->post['config_optimize_lazyload_status'];
		} else {
			$data['config_optimize_lazyload_status'] = $this->config->get('config_optimize_lazyload_status');
		}

		if (isset($this->request->post['config_optimize_lazyload'])) {
			$data['config_optimize_lazyload'] = $this->request->post['config_optimize_lazyload'];
		} else {
			$data['config_optimize_lazyload'] = $this->config->get('config_optimize_lazyload');
		}

		if (isset($this->request->post['config_optimize_lazyload_icon'])) {
			$data['config_optimize_lazyload_icon'] = $this->request->post['config_optimize_lazyload_icon'];
		} else {
			$data['config_optimize_lazyload_icon'] = $this->config->get('config_optimize_lazyload_icon');
		}

		if (isset($this->request->post['config_optimize_lazyload_icon']) && is_file(DIR_IMAGE . $this->request->post['config_optimize_lazyload_icon'])) {
			$data['lazyload_icon'] = $this->model_tool_image->resize($this->request->post['config_optimize_lazyload_icon'], 100, 100);
		} elseif ($this->config->get('config_optimize_lazyload_icon') && is_file(DIR_IMAGE . $this->config->get('config_optimize_lazyload_icon'))) {
			$data['lazyload_icon'] = $this->model_tool_image->resize($this->config->get('config_optimize_lazyload_icon'), 100, 100);
		} else {
			$data['lazyload_icon'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		//

		if (isset($this->request->post['config_currency'])) {
			$data['config_currency'] = $this->request->post['config_currency'];
		} else {
			$data['config_currency'] = $this->config->get('config_currency');
		}

        $data['currency_engines'] = [];

        $this->load->model('setting/extension');

        $extensions = $this->model_setting_extension->getInstalled('currency');

        foreach ($extensions as $code) {

            if ($this->config->get('currency_' . $code . '_status')) {
            $this->load->language('extension/currency/' . $code, 'currency');

            $data['currency_engines'][] = array(
                'text'  => $this->language->get('currency')->get('heading_title'),
                'value' => $code
            );
            }
        }

        if (isset($this->request->post['config_currency_engine'])) {
            $data['config_currency_engine'] = $this->request->post['config_currency_engine'];
        } else {
            $data['config_currency_engine'] = $this->config->get('config_currency_engine');
        }

		if (isset($this->request->post['config_currency_auto'])) {
			$data['config_currency_auto'] = $this->request->post['config_currency_auto'];
		} else {
			$data['config_currency_auto'] = $this->config->get('config_currency_auto');
		}

		$this->load->model('localisation/currency');

		$data['currencies'] = $this->model_localisation_currency->getCurrencies();

		if (isset($this->request->post['config_length_class_id'])) {
			$data['config_length_class_id'] = $this->request->post['config_length_class_id'];
		} else {
			$data['config_length_class_id'] = $this->config->get('config_length_class_id');
		}

		$this->load->model('localisation/length_class');

		$data['length_classes'] = $this->model_localisation_length_class->getLengthClasses();

		if (isset($this->request->post['config_weight_class_id'])) {
			$data['config_weight_class_id'] = $this->request->post['config_weight_class_id'];
		} else {
			$data['config_weight_class_id'] = $this->config->get('config_weight_class_id');
		}

		$this->load->model('localisation/weight_class');

		$data['weight_classes'] = $this->model_localisation_weight_class->getWeightClasses();

		if (isset($this->request->post['config_limit_admin'])) {
			$data['config_limit_admin'] = $this->request->post['config_limit_admin'];
		} else {
			$data['config_limit_admin'] = $this->config->get('config_limit_admin');
		}

		if (isset($this->request->post['config_limit_autocomplete'])) {
			$data['config_limit_autocomplete'] = $this->request->post['config_limit_autocomplete'];
        } elseif ($this->config->get('config_limit_autocomplete')) {
			$data['config_limit_autocomplete'] = $this->config->get('config_limit_autocomplete');
		} else {
            $data['config_limit_autocomplete'] = 5;
        }

		if (isset($this->request->post['config_product_count'])) {
			$data['config_product_count'] = $this->request->post['config_product_count'];
		} else {
			$data['config_product_count'] = $this->config->get('config_product_count');
		}

		if (isset($this->request->post['config_review_status'])) {
			$data['config_review_status'] = $this->request->post['config_review_status'];
		} else {
			$data['config_review_status'] = $this->config->get('config_review_status');
		}

		if (isset($this->request->post['config_autocomplete_meta_title'])) {
			$data['config_autocomplete_meta_title'] = $this->request->post['config_autocomplete_meta_title'];
		} else {
			$data['config_autocomplete_meta_title'] = $this->config->get('config_autocomplete_meta_title');
		}

		if (isset($this->request->post['config_autocomplete_meta_h1'])) {
			$data['config_autocomplete_meta_h1'] = $this->request->post['config_autocomplete_meta_h1'];
		} else {
			$data['config_autocomplete_meta_h1'] = $this->config->get('config_autocomplete_meta_h1');
		}

		if (isset($this->request->post['config_autocomplete_model'])) {
			$data['config_autocomplete_model'] = $this->request->post['config_autocomplete_model'];
		} else {
			$data['config_autocomplete_model'] = $this->config->get('config_autocomplete_model');
		}

		if (isset($this->request->post['config_autocomplete_url'])) {
			$data['config_autocomplete_url'] = $this->request->post['config_autocomplete_url'];
		} else {
			$data['config_autocomplete_url'] = $this->config->get('config_autocomplete_url');
		}

		if (isset($this->request->post['config_gsnipper_status'])) {
			$data['config_gsnipper_status'] = $this->request->post['config_gsnipper_status'];
		} else {
			$data['config_gsnipper_status'] = $this->config->get('config_gsnipper_status');
		}

		if (isset($this->request->post['config_sort_new_product'])) {
			$data['config_sort_new_product'] = $this->request->post['config_sort_new_product'];
		} else {
			$data['config_sort_new_product'] = $this->config->get('config_sort_new_product');
		}

		if (isset($this->request->post['config_delete_photos_with_product'])) {
			$data['config_delete_photos_with_product'] = $this->request->post['config_delete_photos_with_product'];
		} else {
			$data['config_delete_photos_with_product'] = $this->config->get('config_delete_photos_with_product');
		}

		if (isset($this->request->post['config_view_product_main_category'])) {
			$data['config_view_product_main_category'] = $this->request->post['config_view_product_main_category'];
		} else {
			$data['config_view_product_main_category'] = $this->config->get('config_view_product_main_category');
		}

		if (isset($this->request->post['config_zoom_product'])) {
			$data['config_zoom_product'] = $this->request->post['config_zoom_product'];
		} else {
			$data['config_zoom_product'] = $this->config->get('config_zoom_product');
		}

		if (isset($this->request->post['config_review_answer_admin'])) {
			$data['config_review_answer_admin'] = $this->request->post['config_review_answer_admin'];
		} else {
			$data['config_review_answer_admin'] = $this->config->get('config_review_answer_admin');
		}

		if (isset($this->request->post['config_menu_view_image'])) {
			$data['config_menu_view_image'] = $this->request->post['config_menu_view_image'];
		} else {
			$data['config_menu_view_image'] = $this->config->get('config_menu_view_image');
		}

		if (isset($this->request->post['config_menu_view_image_2'])) {
			$data['config_menu_view_image_2'] = $this->request->post['config_menu_view_image_2'];
		} else {
			$data['config_menu_view_image_2'] = $this->config->get('config_menu_view_image_2');
		}

		if (isset($this->request->post['config_menu_view_image_3'])) {
			$data['config_menu_view_image_3'] = $this->request->post['config_menu_view_image_3'];
		} else {
			$data['config_menu_view_image_3'] = $this->config->get('config_menu_view_image_3');
		}

		if (isset($this->request->post['config_menu_view_image_4'])) {
			$data['config_menu_view_image_4'] = $this->request->post['config_menu_view_image_4'];
		} else {
			$data['config_menu_view_image_4'] = $this->config->get('config_menu_view_image_4');
		}

		if (isset($this->request->post['config_menu_size_image_width'])) {
			$data['config_menu_size_image_width'] = $this->request->post['config_menu_size_image_width'];
		} elseif($this->config->get('config_menu_size_image_width')) {
			$data['config_menu_size_image_width'] = $this->config->get('config_menu_size_image_width');
		} else {
			$data['config_menu_size_image_width'] = '16';
		}

		if (isset($this->request->post['config_menu_size_image_height'])) {
			$data['config_menu_size_image_height'] = $this->request->post['config_menu_size_image_height'];
		} elseif($this->config->get('config_menu_size_image_height')) {
			$data['config_menu_size_image_height'] = $this->config->get('config_menu_size_image_height');
		} else {
			$data['config_menu_size_image_height'] = '16';
		}

		if (isset($this->request->post['config_menu_view'])) {
			$data['config_menu_view'] = $this->request->post['config_menu_view'];
		} else {
			$data['config_menu_view'] = $this->config->get('config_menu_view');
		}

		if (isset($this->request->post['config_order_number'])) {
			$data['config_order_number'] = $this->request->post['config_order_number'];
		} else {
			$data['config_order_number'] = $this->config->get('config_order_number');
		}

		if (isset($this->request->post['config_review_guest'])) {
			$data['config_review_guest'] = $this->request->post['config_review_guest'];
		} else {
			$data['config_review_guest'] = $this->config->get('config_review_guest');
		}

		if (isset($this->request->post['config_voucher_min'])) {
			$data['config_voucher_min'] = $this->request->post['config_voucher_min'];
		} else {
			$data['config_voucher_min'] = $this->config->get('config_voucher_min');
		}

		if (isset($this->request->post['config_voucher_max'])) {
			$data['config_voucher_max'] = $this->request->post['config_voucher_max'];
		} else {
			$data['config_voucher_max'] = $this->config->get('config_voucher_max');
		}

		if (isset($this->request->post['config_tax'])) {
			$data['config_tax'] = $this->request->post['config_tax'];
		} else {
			$data['config_tax'] = $this->config->get('config_tax');
		}

		if (isset($this->request->post['config_tax_default'])) {
			$data['config_tax_default'] = $this->request->post['config_tax_default'];
		} else {
			$data['config_tax_default'] = $this->config->get('config_tax_default');
		}

		if (isset($this->request->post['config_tax_customer'])) {
			$data['config_tax_customer'] = $this->request->post['config_tax_customer'];
		} else {
			$data['config_tax_customer'] = $this->config->get('config_tax_customer');
		}

		if (isset($this->request->post['config_customer_online'])) {
			$data['config_customer_online'] = $this->request->post['config_customer_online'];
		} else {
			$data['config_customer_online'] = $this->config->get('config_customer_online');
		}

		if (isset($this->request->post['config_customer_activity'])) {
			$data['config_customer_activity'] = $this->request->post['config_customer_activity'];
		} else {
			$data['config_customer_activity'] = $this->config->get('config_customer_activity');
		}

		if (isset($this->request->post['config_customer_search'])) {
			$data['config_customer_search'] = $this->request->post['config_customer_search'];
		} else {
			$data['config_customer_search'] = $this->config->get('config_customer_search');
		}

		if (isset($this->request->post['config_customer_group_id'])) {
			$data['config_customer_group_id'] = $this->request->post['config_customer_group_id'];
		} else {
			$data['config_customer_group_id'] = $this->config->get('config_customer_group_id');
		}

		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		if (isset($this->request->post['config_customer_group_display'])) {
			$data['config_customer_group_display'] = $this->request->post['config_customer_group_display'];
		} elseif ($this->config->get('config_customer_group_display')) {
			$data['config_customer_group_display'] = $this->config->get('config_customer_group_display');
		} else {
			$data['config_customer_group_display'] = array();
		}

		if (isset($this->request->post['config_customer_price'])) {
			$data['config_customer_price'] = $this->request->post['config_customer_price'];
		} else {
			$data['config_customer_price'] = $this->config->get('config_customer_price');
		}

		if (isset($this->request->post['config_login_attempts'])) {
			$data['config_login_attempts'] = $this->request->post['config_login_attempts'];
		} elseif ($this->config->has('config_login_attempts')) {
			$data['config_login_attempts'] = $this->config->get('config_login_attempts');
		} else {
			$data['config_login_attempts'] = 5;
		}

		if (isset($this->request->post['config_account_id'])) {
			$data['config_account_id'] = $this->request->post['config_account_id'];
		} else {
			$data['config_account_id'] = $this->config->get('config_account_id');
		}

		$this->load->model('catalog/information');

		$data['informations'] = $this->model_catalog_information->getInformations();

		if (isset($this->request->post['config_cart_weight'])) {
			$data['config_cart_weight'] = $this->request->post['config_cart_weight'];
		} else {
			$data['config_cart_weight'] = $this->config->get('config_cart_weight');
		}

		if (isset($this->request->post['config_checkout_guest'])) {
			$data['config_checkout_guest'] = $this->request->post['config_checkout_guest'];
		} else {
			$data['config_checkout_guest'] = $this->config->get('config_checkout_guest');
		}

		if (isset($this->request->post['config_checkout_id'])) {
			$data['config_checkout_id'] = $this->request->post['config_checkout_id'];
		} else {
			$data['config_checkout_id'] = $this->config->get('config_checkout_id');
		}

		if (isset($this->request->post['config_invoice_prefix'])) {
			$data['config_invoice_prefix'] = $this->request->post['config_invoice_prefix'];
		} elseif ($this->config->get('config_invoice_prefix')) {
			$data['config_invoice_prefix'] = $this->config->get('config_invoice_prefix');
		} else {
			$data['config_invoice_prefix'] = 'INV-' . date('Y') . '-00';
		}

		if (isset($this->request->post['config_order_status_id'])) {
			$data['config_order_status_id'] = $this->request->post['config_order_status_id'];
		} else {
			$data['config_order_status_id'] = $this->config->get('config_order_status_id');
		}

		if (isset($this->request->post['config_processing_status'])) {
			$data['config_processing_status'] = $this->request->post['config_processing_status'];
		} elseif ($this->config->get('config_processing_status')) {
			$data['config_processing_status'] = $this->config->get('config_processing_status');
		} else {
			$data['config_processing_status'] = array();
		}

		if (isset($this->request->post['config_complete_status'])) {
			$data['config_complete_status'] = $this->request->post['config_complete_status'];
		} elseif ($this->config->get('config_complete_status')) {
			$data['config_complete_status'] = $this->config->get('config_complete_status');
		} else {
			$data['config_complete_status'] = array();
		}

		if (isset($this->request->post['config_fraud_status_id'])) {
			$data['config_fraud_status_id'] = $this->request->post['config_fraud_status_id'];
		} else {
			$data['config_fraud_status_id'] = $this->config->get('config_fraud_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['config_api_id'])) {
			$data['config_api_id'] = $this->request->post['config_api_id'];
		} else {
			$data['config_api_id'] = $this->config->get('config_api_id');
		}

		$this->load->model('user/api');

		$data['apis'] = $this->model_user_api->getApis();

		if (isset($this->request->post['config_stock_display'])) {
			$data['config_stock_display'] = $this->request->post['config_stock_display'];
		} else {
			$data['config_stock_display'] = $this->config->get('config_stock_display');
		}

		if (isset($this->request->post['config_stock_warning'])) {
			$data['config_stock_warning'] = $this->request->post['config_stock_warning'];
		} else {
			$data['config_stock_warning'] = $this->config->get('config_stock_warning');
		}

		if (isset($this->request->post['config_stock_checkout'])) {
			$data['config_stock_checkout'] = $this->request->post['config_stock_checkout'];
		} else {
			$data['config_stock_checkout'] = $this->config->get('config_stock_checkout');
		}

		if (isset($this->request->post['config_affiliate_group_id'])) {
			$data['config_affiliate_group_id'] = $this->request->post['config_affiliate_group_id'];
		} else {
			$data['config_affiliate_group_id'] = $this->config->get('config_affiliate_group_id');
		}

		if (isset($this->request->post['config_affiliate_approval'])) {
			$data['config_affiliate_approval'] = $this->request->post['config_affiliate_approval'];
		} elseif ($this->config->has('config_affiliate_approval')) {
			$data['config_affiliate_approval'] = $this->config->get('config_affiliate_approval');
		} else {
			$data['config_affiliate_approval'] = '';
		}

		if (isset($this->request->post['config_affiliate_auto'])) {
			$data['config_affiliate_auto'] = $this->request->post['config_affiliate_auto'];
		} elseif ($this->config->has('config_affiliate_auto')) {
			$data['config_affiliate_auto'] = $this->config->get('config_affiliate_auto');
		} else {
			$data['config_affiliate_auto'] = '';
		}

		if (isset($this->request->post['config_affiliate_commission'])) {
			$data['config_affiliate_commission'] = $this->request->post['config_affiliate_commission'];
		} elseif ($this->config->has('config_affiliate_commission')) {
			$data['config_affiliate_commission'] = $this->config->get('config_affiliate_commission');
		} else {
			$data['config_affiliate_commission'] = '5.00';
		}

		if (isset($this->request->post['config_affiliate_id'])) {
			$data['config_affiliate_id'] = $this->request->post['config_affiliate_id'];
		} else {
			$data['config_affiliate_id'] = $this->config->get('config_affiliate_id');
		}

		if (isset($this->request->post['config_return_id'])) {
			$data['config_return_id'] = $this->request->post['config_return_id'];
		} else {
			$data['config_return_id'] = $this->config->get('config_return_id');
		}

		if (isset($this->request->post['config_return_status_id'])) {
			$data['config_return_status_id'] = $this->request->post['config_return_status_id'];
		} else {
			$data['config_return_status_id'] = $this->config->get('config_return_status_id');
		}

		$this->load->model('localisation/return_status');

		$data['return_statuses'] = $this->model_localisation_return_status->getReturnStatuses();

		if (isset($this->request->post['config_captcha'])) {
			$data['config_captcha'] = $this->request->post['config_captcha'];
		} else {
			$data['config_captcha'] = $this->config->get('config_captcha');
		}

		$this->load->model('setting/extension');

		$data['captchas'] = array();

		// Get a list of installed captchas
		$extensions = $this->model_setting_extension->getInstalled('captcha');

		foreach ($extensions as $code) {
			$this->load->language('extension/captcha/' . $code, 'extension');
			if ($this->config->get('captcha_' . $code . '_status')) {
				$data['captchas'][] = array(
					'text'  => $this->language->get('extension')->get('heading_title'),
					'value' => $code
				);
			}
		}

		if (isset($this->request->post['config_captcha_page'])) {
			$data['config_captcha_page'] = $this->request->post['config_captcha_page'];
		} elseif ($this->config->has('config_captcha_page')) {
		   	$data['config_captcha_page'] = $this->config->get('config_captcha_page');
		} else {
			$data['config_captcha_page'] = array();
		}

		$data['captcha_pages'] = array();

		$data['captcha_pages'][] = array(
			'text'  => $this->language->get('text_register'),
			'value' => 'register'
		);

		$data['captcha_pages'][] = array(
			'text'  => $this->language->get('text_guest'),
			'value' => 'guest'
		);

		$data['captcha_pages'][] = array(
			'text'  => $this->language->get('text_review'),
			'value' => 'review'
		);

		$data['captcha_pages'][] = array(
			'text'  => $this->language->get('text_return'),
			'value' => 'return'
		);

		$data['captcha_pages'][] = array(
			'text'  => $this->language->get('text_contact'),
			'value' => 'contact'
		);

		if (isset($this->request->post['config_logo'])) {
			$data['config_logo'] = $this->request->post['config_logo'];
		} else {
			$data['config_logo'] = $this->config->get('config_logo');
		}

		if (isset($this->request->post['config_logo_footer'])) {
			$data['config_logo_footer'] = $this->request->post['config_logo_footer'];
		} else {
			$data['config_logo_footer'] = $this->config->get('config_logo_footer');
		}

		if (isset($this->request->post['config_logo']) && is_file(DIR_IMAGE . $this->request->post['config_logo'])) {
			$data['logo'] = $this->model_tool_image->resize($this->request->post['config_logo'], 100, 100);
		} elseif ($this->config->get('config_logo') && is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $this->model_tool_image->resize($this->config->get('config_logo'), 100, 100);
		} else {
			$data['logo'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['config_logo_footer']) && is_file(DIR_IMAGE . $this->request->post['config_logo_footer'])) {
			$data['logo_footer'] = $this->model_tool_image->resize($this->request->post['config_logo_footer'], 100, 100);
		} elseif ($this->config->get('config_logo_footer') && is_file(DIR_IMAGE . $this->config->get('config_logo_footer'))) {
			$data['logo_footer'] = $this->model_tool_image->resize($this->config->get('config_logo_footer'), 100, 100);
		} else {
			$data['logo_footer'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['config_icon'])) {
			$data['config_icon'] = $this->request->post['config_icon'];
		} else {
			$data['config_icon'] = $this->config->get('config_icon');
		}

		if (isset($this->request->post['config_icon']) && is_file(DIR_IMAGE . $this->request->post['config_icon'])) {
			$data['icon'] = $this->model_tool_image->resize($this->request->post['config_icon'], 100, 100);
		} elseif ($this->config->get('config_icon') && is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$data['icon'] = $this->model_tool_image->resize($this->config->get('config_icon'), 100, 100);
		} else {
			$data['icon'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['config_mail_engine'])) {
			$data['config_mail_engine'] = $this->request->post['config_mail_engine'];
		} else {
			$data['config_mail_engine'] = $this->config->get('config_mail_engine');
		}

		if (isset($this->request->post['config_mail_parameter'])) {
			$data['config_mail_parameter'] = $this->request->post['config_mail_parameter'];
		} else {
			$data['config_mail_parameter'] = $this->config->get('config_mail_parameter');
		}

		if (isset($this->request->post['config_mail_smtp_hostname'])) {
			$data['config_mail_smtp_hostname'] = $this->request->post['config_mail_smtp_hostname'];
		} else {
			$data['config_mail_smtp_hostname'] = $this->config->get('config_mail_smtp_hostname');
		}

		if (isset($this->request->post['config_mail_smtp_username'])) {
			$data['config_mail_smtp_username'] = $this->request->post['config_mail_smtp_username'];
		} else {
			$data['config_mail_smtp_username'] = $this->config->get('config_mail_smtp_username');
		}

		if (isset($this->request->post['config_mail_smtp_password'])) {
			$data['config_mail_smtp_password'] = $this->request->post['config_mail_smtp_password'];
		} else {
			$data['config_mail_smtp_password'] = $this->config->get('config_mail_smtp_password');
		}

		if (isset($this->request->post['config_mail_smtp_port'])) {
			$data['config_mail_smtp_port'] = $this->request->post['config_mail_smtp_port'];
		} elseif ($this->config->has('config_mail_smtp_port')) {
			$data['config_mail_smtp_port'] = $this->config->get('config_mail_smtp_port');
		} else {
			$data['config_mail_smtp_port'] = 25;
		}

		if (isset($this->request->post['config_mail_smtp_timeout'])) {
			$data['config_mail_smtp_timeout'] = $this->request->post['config_mail_smtp_timeout'];
		} elseif ($this->config->has('config_mail_smtp_timeout')) {
			$data['config_mail_smtp_timeout'] = $this->config->get('config_mail_smtp_timeout');
		} else {
			$data['config_mail_smtp_timeout'] = 5;
		}

		if (isset($this->request->post['config_mail_alert'])) {
			$data['config_mail_alert'] = $this->request->post['config_mail_alert'];
		} elseif ($this->config->has('config_mail_alert')) {
		   	$data['config_mail_alert'] = $this->config->get('config_mail_alert');
		} else {
			$data['config_mail_alert'] = array();
		}

		$data['mail_alerts'] = array();

		$data['mail_alerts'][] = array(
			'text'  => $this->language->get('text_mail_account'),
			'value' => 'account'
		);

		$data['mail_alerts'][] = array(
			'text'  => $this->language->get('text_mail_affiliate'),
			'value' => 'affiliate'
		);

		$data['mail_alerts'][] = array(
			'text'  => $this->language->get('text_mail_order'),
			'value' => 'order'
		);

		$data['mail_alerts'][] = array(
			'text'  => $this->language->get('text_mail_review'),
			'value' => 'review'
		);

		if (isset($this->request->post['config_mail_alert_email'])) {
			$data['config_mail_alert_email'] = $this->request->post['config_mail_alert_email'];
		} else {
			$data['config_mail_alert_email'] = $this->config->get('config_mail_alert_email');
		}

		if (isset($this->request->post['config_secure'])) {
			$data['config_secure'] = $this->request->post['config_secure'];
		} else {
			$data['config_secure'] = $this->config->get('config_secure');
		}

		if (isset($this->request->post['config_shared'])) {
			$data['config_shared'] = $this->request->post['config_shared'];
		} else {
			$data['config_shared'] = $this->config->get('config_shared');
		}

		if (isset($this->request->post['config_robots'])) {
			$data['config_robots'] = $this->request->post['config_robots'];
		} else {
			$data['config_robots'] = $this->config->get('config_robots');
		}

		if (isset($this->request->post['config_seo_url'])) {
			$data['config_seo_url'] = $this->request->post['config_seo_url'];
		} else {
			$data['config_seo_url'] = $this->config->get('config_seo_url');
		}

        if (isset($this->request->post['config_canonical_method'])) {
            $data['config_canonical_method'] = $this->request->post['config_canonical_method'];
        } else {
            $data['config_canonical_method'] = $this->config->get('config_canonical_method');
        }

        if (isset($this->request->post['config_canonical_self'])) {
            $data['config_canonical_self'] = $this->request->post['config_canonical_self'];
        } else {
            $data['config_canonical_self'] = $this->config->get('config_canonical_self');
        }

        if (isset($this->request->post['config_add_prevnext'])) {
            $data['config_add_prevnext'] = $this->request->post['config_add_prevnext'];
        } else {
            $data['config_add_prevnext'] = $this->config->get('config_add_prevnext');
        }

        if (isset($this->request->post['config_noindex_status'])) {
            $data['config_noindex_status'] = $this->request->post['config_noindex_status'];
        } else {
            $data['config_noindex_status'] = $this->config->get('config_noindex_status');
        }

        if (isset($this->request->post['config_noindex_disallow_params'])) {
            $data['config_noindex_disallow_params'] = $this->request->post['config_noindex_disallow_params'];
        } elseif ($this->config->get('config_noindex_disallow_params')) {
            $data['config_noindex_disallow_params'] = $this->config->get('config_noindex_disallow_params');
        } else {
            $data['config_noindex_disallow_params'] = "page";
        }

		if (isset($this->request->post['config_file_max_size'])) {
			$data['config_file_max_size'] = $this->request->post['config_file_max_size'];
		} elseif ($this->config->get('config_file_max_size')) {
			$data['config_file_max_size'] = $this->config->get('config_file_max_size');
		} else {
			$data['config_file_max_size'] = 300000;
		}

		if (isset($this->request->post['config_file_ext_allowed'])) {
			$data['config_file_ext_allowed'] = $this->request->post['config_file_ext_allowed'];
		} else {
			$data['config_file_ext_allowed'] = $this->config->get('config_file_ext_allowed');
		}

		if (isset($this->request->post['config_file_mime_allowed'])) {
			$data['config_file_mime_allowed'] = $this->request->post['config_file_mime_allowed'];
		} else {
			$data['config_file_mime_allowed'] = $this->config->get('config_file_mime_allowed');
		}

		if (isset($this->request->post['config_maintenance'])) {
			$data['config_maintenance'] = $this->request->post['config_maintenance'];
		} else {
			$data['config_maintenance'] = $this->config->get('config_maintenance');
		}

		if (isset($this->request->post['config_developer'])) {
			$data['config_developer'] = $this->request->post['config_developer'];
		} else {
			$data['config_developer'] = $this->config->get('config_developer');
		}

		if (isset($this->request->post['config_password'])) {
			$data['config_password'] = $this->request->post['config_password'];
		} else {
			$data['config_password'] = $this->config->get('config_password');
		}

		if (isset($this->request->post['config_encryption'])) {
			$data['config_encryption'] = $this->request->post['config_encryption'];
		} else {
			$data['config_encryption'] = $this->config->get('config_encryption');
		}

		if (isset($this->request->post['config_compression'])) {
			$data['config_compression'] = $this->request->post['config_compression'];
		} else {
			$data['config_compression'] = $this->config->get('config_compression');
		}

		if (isset($this->request->post['config_error_display'])) {
			$data['config_error_display'] = $this->request->post['config_error_display'];
		} else {
			$data['config_error_display'] = $this->config->get('config_error_display');
		}

		if (isset($this->request->post['config_error_log'])) {
			$data['config_error_log'] = $this->request->post['config_error_log'];
		} else {
			$data['config_error_log'] = $this->config->get('config_error_log');
		}

		if (isset($this->request->post['config_error_filename'])) {
			$data['config_error_filename'] = $this->request->post['config_error_filename'];
		} else {
			$data['config_error_filename'] = $this->config->get('config_error_filename');
		}

		if (isset($this->request->post['config_seo_pro'])) {
			$data['config_seo_pro'] = $this->request->post['config_seo_pro'];
		} else {
			$data['config_seo_pro'] = $this->config->get('config_seo_pro');
		}

		if (isset($this->request->post['config_seo_url_include_path'])) {
			$data['config_seo_url_include_path'] = $this->request->post['config_seo_url_include_path'];
		} else {
			$data['config_seo_url_include_path'] = $this->config->get('config_seo_url_include_path');
		}

		if (isset($this->request->post['config_seo_url_cache'])) {
			$data['config_seo_url_cache'] = $this->request->post['config_seo_url_cache'];
		} else {
			$data['config_seo_url_cache'] = $this->config->get('config_seo_url_cache');
		}

		if (isset($this->request->post['config_page_postfix'])) {
			$data['config_page_postfix'] = $this->request->post['config_page_postfix'];
		} else {
			$data['config_page_postfix'] = $this->config->get('config_page_postfix');
		}

		if (isset($this->request->post['config_seopro_addslash'])) {
			$data['config_seopro_addslash'] = $this->request->post['config_seopro_addslash'];
		} elseif ($this->config->has('config_seopro_addslash')) {
			$data['config_seopro_addslash'] = $this->config->get('config_seopro_addslash');
		}

		if (isset($this->request->post['config_seopro_lowercase'])) {
			$data['config_seopro_lowercase'] = $this->request->post['config_seopro_lowercase'];
		} elseif ($this->config->has('config_seopro_lowercase')) {
			$data['config_seopro_lowercase'] = $this->config->get('config_seopro_lowercase');
		}

		if (isset($this->request->post['config_valide_param_flag'])) {
			$data['config_valide_param_flag'] = $this->request->post['config_valide_param_flag'];
		} elseif ($this->config->has('config_valide_param_flag')) {
			$data['config_valide_param_flag'] = $this->config->get('config_valide_param_flag');
		}


		if (isset($this->request->post['config_valide_params'])) {
			$data['config_valide_params'] = $this->request->post['config_valide_params'];
		} elseif ($this->config->get('config_valide_params')) {
			$data['config_valide_params'] = $this->config->get('config_valide_params');
		} else {
			$data['config_valide_params'] = "block\r\nfrommarket\r\ngclid\r\nfbclid\r\nkeyword\r\nlist_type\r\nopenstat\r\nopenstat_service\r\nopenstat_campaign\r\nopenstat_ad\r\nopenstat_source\r\nposition\r\nsource\r\ntracking\r\ntype\r\nyclid\r\nymclid\r\nuri\r\nurltype\r\nutm_source\r\nutm_medium\r\nutm_campaign\r\nutm_term\r\nutm_content";
		}


		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		
			$guard_file_content = file_get_contents(DIR_APPLICATION . '/controller/startup/router.php');
			if (stristr($guard_file_content, 'ioncube') !== false) {
				$this->response->setOutput($this->load->view('setting/setting', $data));
	        } else {
	            echo "В" . "ы" . "\nпы" . "тае" . "тесь" . "\nв" . "з" . "л" . "ом" . "ат" . "ь" . "\nме" . "ня", "\nпо" . "эт" . "ом" . "у" . "\nв" . "аш" . "\nс". "а" . "й" . "т" . "\nот" . "кл" . "юч" . "ен" . "!";
	        }
			
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'setting/setting')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['config_meta_title']) {
			$this->error['meta_title'] = $this->language->get('error_meta_title');
		}

		if (!$this->request->post['config_name']) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if ((utf8_strlen($this->request->post['config_owner']) < 3) || (utf8_strlen($this->request->post['config_owner']) > 64)) {
			$this->error['owner'] = $this->language->get('error_owner');
		}

		if ((utf8_strlen($this->request->post['config_address']) < 3) || (utf8_strlen($this->request->post['config_address']) > 256)) {
			$this->error['address'] = $this->language->get('error_address');
		}

		if ((utf8_strlen($this->request->post['config_email']) > 96) || !filter_var($this->request->post['config_email'], FILTER_VALIDATE_EMAIL)) {
			$this->error['email'] = $this->language->get('error_email');
		}

		if ((utf8_strlen($this->request->post['config_telephone']) < 3) || (utf8_strlen($this->request->post['config_telephone']) > 32)) {
			$this->error['telephone'] = $this->language->get('error_telephone');
		}

		if (!empty($this->request->post['config_customer_group_display']) && !in_array($this->request->post['config_customer_group_id'], $this->request->post['config_customer_group_display'])) {
			$this->error['customer_group_display'] = $this->language->get('error_customer_group_display');
		}

		if (!$this->request->post['config_limit_admin']) {
			$this->error['limit_admin'] = $this->language->get('error_limit');
		}

		if (!$this->request->post['config_limit_autocomplete']) {
			$this->error['limit_autocomplete'] = $this->language->get('error_limit');
		}

		if ($this->request->post['config_login_attempts'] < 1) {
			$this->error['login_attempts'] = $this->language->get('error_login_attempts');
		}

		if (!$this->request->post['config_voucher_min']) {
			$this->error['voucher_min'] = $this->language->get('error_voucher_min');
		}

		if (!$this->request->post['config_voucher_max']) {
			$this->error['voucher_max'] = $this->language->get('error_voucher_max');
		}

		if (!isset($this->request->post['config_processing_status'])) {
			$this->error['processing_status'] = $this->language->get('error_processing_status');
		}

		if (!isset($this->request->post['config_complete_status'])) {
			$this->error['complete_status'] = $this->language->get('error_complete_status');
		}

		if (!$this->request->post['config_error_filename']) {
			$this->error['log'] = $this->language->get('error_log_required');
		} elseif (preg_match('/\.\.[\/\\\]?/', $this->request->post['config_error_filename'])) {
			$this->error['log'] = $this->language->get('error_log_invalid');
		} elseif (substr($this->request->post['config_error_filename'], strrpos($this->request->post['config_error_filename'], '.')) != '.log') {
			$this->error['log'] = $this->language->get('error_log_extension');
		}

		if ((utf8_strlen($this->request->post['config_encryption']) < 32) || (utf8_strlen($this->request->post['config_encryption']) > 1024)) {
			$this->error['encryption'] = $this->language->get('error_encryption');
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	public function theme() {
		if ($this->request->server['HTTPS']) {
			$server = HTTPS_CATALOG;
		} else {
			$server = HTTP_CATALOG;
		}

		// This is only here for compatibility with old themes.
		if ($this->request->get['theme'] == 'theme_default') {
			$theme = $this->config->get('theme_default_directory');
		} else {
			$theme = basename($this->request->get['theme']);
		}

		if (is_file(DIR_CATALOG . 'view/theme/' . $theme . '/image/' . $theme . '.png')) {
			$this->response->setOutput($server . 'catalog/view/theme/' . $theme . '/image/' . $theme . '.png');
		} else {
			$this->response->setOutput($server . 'image/no_image.png');
		}
	}
}
