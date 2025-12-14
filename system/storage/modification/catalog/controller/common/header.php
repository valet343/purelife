<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['robots'] = $this->document->getRobots();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');
		
		$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
		if ($this->request->server['REQUEST_URI'] == '/') {
			$data['og_url'] = $this->url->link('common/home');
		} else {
			$data['og_url'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));
		}
		
		$data['og_image'] = $this->document->getOgImage();
		
		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');
			
			//ds_admin_wishlist_without_login
			if ($this->customer->isLogged()) {
	        $data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
	        } else {
	        $data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), isset($this->session->data['wishlist'] ) ? count($this->session->data['wishlist']) : 0);
	        }
	        //

		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));

		$data['compare'] = $this->url->link('product/compare');

		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

          $buyoneclick = $this->config->get('buyoneclick');
          $data['buyoneclick_status_product'] = $buyoneclick["status_product"];
          $data['buyoneclick_status_category'] = $buyoneclick["status_category"];
          $data['buyoneclick_status_module'] = $buyoneclick["status_module"];

          $data['buyoneclick_style_status'] = $buyoneclick["style_status"];
          $data['buyoneclick_validation_type'] = $buyoneclick["validation_type"];

          $data['buyoneclick_exan_status'] = $buyoneclick["exan_status"];

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
        
		$data['telephone_2'] = $this->config->get('config_telephone_2');
		$data['telephone_3'] = $this->config->get('config_telephone_3');
		$data['telephone_4'] = $this->config->get('config_telephone_4');
		$data['telegram'] = $this->config->get('config_telegram');
		$data['viber'] = $this->config->get('config_viber');
		$data['whatsapp'] = $this->config->get('config_whatsapp');
		$data['email'] = $this->config->get('config_email');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		
			$data['blog'] = $this->url->link('blog/latest', '', true);
			


					//microdatapro 8.1 start - 2 - extra
					if(!isset($microdatapro_main_flag)){
						$data['tc_og'] = $this->document->getTc_og();
						$data['tc_og_prefix'] = $this->document->getTc_og_prefix();
					}
					//microdatapro 8.1 end - 2 - extra
					

			$data['informations'] = array();
			foreach ($this->model_catalog_information->getInformations() as $result) {
				if ($result['top']) {
					$data['informations'][] = array(
						'title' => $result['title'],
						'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
					);
				}
			}
			$data['informations'] = array_slice($data['informations'], 0, 5);
			
		$data['cart'] = $this->load->controller('common/cart');

					//microdatapro 8.1 start - 1 - main
					$data['tc_og'] = $this->document->getTc_og();
					$data['tc_og_prefix'] = $this->document->getTc_og_prefix();
					$microdatapro_main_flag = 1;
					//microdatapro 8.1 end - 1 - main
					
		$data['search'] = $this->load->controller('common/search');
		$data['menu'] = $this->load->controller('common/menu');


			if($this->config->get('config_theme') == 'speedy') {

				$data['banner_top_status'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_status');
				$data['banner_top_type'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_type');
				if($data['banner_top_type'] == 'banner') {
					$data['banner_top_background'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_background');
					$data['banner_top_text'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_text')[$this->config->get('config_language_id')];
					$data['banner_top_image'] = $this->model_tool_image->resize($this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_image'), $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_width'), $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_height'));
					$data['banner_top_height'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_height');
					$data['banner_top_link'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_link')[$this->config->get('config_language_id')];
				} else {
					$data['banner_top_info_background'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_info_background');
					$data['banner_top_info_id'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_info_id');
					$data['banner_top_info_text'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_info_text')[$this->config->get('config_language_id')];
					$data['banner_top_info_height'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_info_height');
					$data['banner_top_info_link'] = $this->config->get('module_' . $this->config->get('config_theme') . '_banner_top_info_link')[$this->config->get('config_language_id')];
				}
				
				$data['bottombar'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_widgets_bottombar_status');
				$data['text_cart_count'] = sprintf($this->cart->countProducts());
				$data['font_family'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_font_family');
				$data['font_size'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_font_size');
				$data['main_color_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_main_color_type');
				$data['main_color'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_main_color');
				$data['main_color_2'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_main_color_2');
				$data['main_color_3'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_main_color_3');
				$data['header_color'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_color');
				$data['special_color'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_special_color');
				$data['background_color'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_background_color');
				$data['background_top_color'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_background_top_color');
				$data['background_footer_color'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_background_footer_color');
				$data['background_payments_color'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_background_payments_color');
				$data['container_width_type'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_type');
				$data['container_width_type_lg'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_type_lg');
				$data['container_width_type_md'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_type_md');
				$data['container_width_type_sm'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_type_sm');
				$data['container_width_type_xs'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_type_xs');
				$data['container_width'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width');
				$data['container_width_lg'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_lg');
				$data['container_width_md'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_md');
				$data['container_width_sm'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_sm');
				$data['container_width_xs'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_adaptive_container_width_xs');
				$data['code_header_css_link'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_code_header_css_link');
				$data['code_footer_js_link'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_code_footer_js_link');
				$data['header_open'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_open');
				$data['open'] = nl2br($this->config->get('config_open'));

				$data['speedy_menu_status'] = $this->config->get('module_' . $this->config->get('config_theme') . '_menu_status');
				
				if($data['speedy_menu_status'] == '1'){
					$data['speedy_menu'] = $this->load->controller('common/speedy_menu');
				}

				$data['m_menu_custom_links'] = array();

				$m_menu_custom_links = $this->config->get('theme_' . $this->config->get('config_theme') . '_m_menu_additional_link')[$this->config->get('config_language_id')];

				if($m_menu_custom_links) {
					foreach ($m_menu_custom_links as $m_menu_custom_link) {

						$image = $this->model_tool_image->resize($m_menu_custom_link['image'], 24, 24);

						$data['m_menu_custom_links'][] = array(
							'title'  => $m_menu_custom_link['title'],
							'link'  => $m_menu_custom_link['link'],
							'image'  => $image,
						);
					}
				}

				$data['header_menu_links'] = array();

				$header_menu_links = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_menu_link')[$this->config->get('config_language_id')];

				if($header_menu_links) {
					foreach ($header_menu_links as $header_menu_link) {
						$data['header_menu_links'][] = array(
							'title'  => $header_menu_link['title'],
							'link'  => $header_menu_link['link'],
						);
					}
				}

			}
			

			$data['header_currency'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_currency');
			$data['header_language'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_language');
			$data['header_compare'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_compare');
			$data['header_wishlist'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_wishlist');
			$data['header_account'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_account');
			$data['header_phones'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_phones');
			$data['header_messengers'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_messengers');
			$data['header_email'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_header_email');

			// dc_custom_code_default
			$data['code_header_css'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_code_header_css');
			$data['code_header_js'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_code_header_js');

			$data['developer_theme'] = $this->config->get('developer_theme');
			$data['developer_mode'] = $this->config->get('config_developer');
			if($data['developer_mode'] == 1) {
				$data['developer_mode'] = time();
			} elseif ($data['developer_mode'] == 0 && $data['developer_theme'] == 0) {
				$data['developer_mode'] = rand(1, 25);
			}
			
		return $this->load->view('common/header', $data);
	}
}
