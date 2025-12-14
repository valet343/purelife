<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$data['smartsearch'] = false;
        $data['smartsearch_field'] = '';
        if ($this->config->get('module_smartsearch_status')) {                
            $data['smartsearch'] = true;  

            if ($this->config->get('module_smartsearch_field')) {
                $data['smartsearch_field'] = $this->config->get('module_smartsearch_field');
            } else {
                $data['smartsearch_field'] = 'input[name="search"]';
            }                     

        }
	            
		$this->document->addScript('catalog/view/javascript/jquery.mask.min.js');
		// dc_admin_autocalc_price_option
		$currency_code = $this->session->data['currency'];
        $data['autocalc_currency'] = array(
            'value'           => (float)$this->currency->getValue($currency_code),
            'symbol_left'     => str_replace("'", "\'", $this->currency->getSymbolLeft($currency_code)),
            'symbol_right'    => str_replace("'", "\'", $this->currency->getSymbolRight($currency_code)),
            'decimals'        => (int)$this->currency->getDecimalPlace($currency_code),
            'decimal_point'   => $this->language->get('decimal_point'),
            'thousand_point'  => $this->language->get('thousand_point'),
        );
        
        $data['autocalc_option_special'] = $this->config->get('config_autocalc_option_special');
        $data['autocalc_option_discount'] = $this->config->get('config_autocalc_option_discount');
        $data['autocalc_not_mul_qty'] = $this->config->get('config_autocalc_not_mul_qty');
        $data['autocalc_select_first'] = $this->config->get('config_autocalc_select_first');
        //

        // BuyOneClick
          $buyoneclick = $this->config->get('buyoneclick');
          $data['buyoneclick_status_product'] = $buyoneclick["status_product"];
          $data['buyoneclick_status_category'] = $buyoneclick["status_category"];
          $data['buyoneclick_status_module'] = $buyoneclick["status_module"];

          $data['buyoneclick_exan_status'] = $buyoneclick["exan_status"];

          $current_language_id = $this->config->get('config_language_id');
          $data['buyoneclick_success_field'] = isset($buyoneclick["success_field"][$current_language_id]) ? htmlspecialchars_decode($buyoneclick["success_field"][$current_language_id]) : '';

          $this->load->language('extension/module/buyoneclick');
          if ($data['buyoneclick_success_field'] == '') {
            $data['buyoneclick_success_field'] = $this->language->get('buyoneclick_success');
          }
        // BuyOneClickEnd
      
		$this->load->language('common/footer');

	    $data['dw_quick_modal'] = '';
		
		if( $this->config->get('module_speedy_quick_view_status') && $this->config->get('module_speedy_quick_view_status') > 0 ) {
			$route = isset($this->request->get['route']) && $this->request->get['route'] ? $this->request->get['route']  : "";
				
			$data['btnquick'] = $this->config->get('module_speedy_quick_view_btnquick');
			 
		    if( $this->request->server['HTTPS'] ) {
		        $servers = $this->config->get('config_ssl');
		    } else {
		        $servers = $this->config->get('config_url');
		    }
			
			switch( $route ){
				case "":
			    case "common/home": 
			    case "product/category":
			    case "product/search":
			    case "product/manufacturer":
				case "product/manufacturer/info":
					$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
					$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');
				    $this->document->addScript('catalog/view/javascript/speedy_quick_view.js', 'footer');
					
					$data['loading_gif'] = $servers . 'catalog/view/theme/speedy/image/icon_devcart_pro.svg';
			        $data['dw_quick_modal'] = $this->load->view('extension/module/speedy_dw_modal', $data);
				break;
			}
		}
	    

        // plus minus start
                
        $this->document->addScript('catalog/view/javascript/f_plus_minus.js', 'footer');

        $data_currency = array();
        $data_currency['value'] = $this->currency->getValue($this->session->data['currency']);
        $data_currency['symbol_left'] = $this->currency->getSymbolLeft($this->session->data['currency']);
        $data_currency['symbol_right'] = $this->currency->getSymbolRight($this->session->data['currency']);
        $data_currency['decimals'] = $this->currency->getDecimalPlace($this->session->data['currency']);
        $data_currency['decimal_point'] = $this->language->get('decimal_point');
        $data_currency['thousand_point'] = $this->language->get('thousand_point');
        $data['data_currency'] = $data_currency;
        
        $this->load->language('product/category');
        
        $data['text_minimum'] = $this->language->get('text_minimum');
        $data['text_maximum'] = $this->language->get('text_maximum');
        $data['text_add_multiple'] = $this->language->get('text_add_multiple');
                
        // plus minus end
        

		$this->load->model('catalog/information');

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_logo_footer'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo_footer');
		} else {
			$data['logo'] = '';
		}

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		//dc_Contacts
		$data['telephone'] = $this->config->get('config_telephone');
		$data['telephone_2'] = $this->config->get('config_telephone_2');
		$data['telephone_3'] = $this->config->get('config_telephone_3');
		$data['telephone_4'] = $this->config->get('config_telephone_4');
		$data['email'] = $this->config->get('config_email');
		$data['telegram'] = $this->config->get('config_telegram');
		$data['viber'] = $this->config->get('config_viber');
		$data['whatsapp'] = $this->config->get('config_whatsapp');
		$data['instagram'] = $this->config->get('config_instagram');
		$data['facebook'] = $this->config->get('config_facebook');
		$data['twitter'] = $this->config->get('config_twitter');
		$data['youtube'] = $this->config->get('config_youtube');
		$data['linkedin'] = $this->config->get('config_linkedin');
		$data['pinterest'] = $this->config->get('config_pinterest');


					//microdatapro 8.1 start - 1 - main
						$mdp_path = 'module/microdatapro';
						if(substr(VERSION, 0, 3) >= 2.3){
							$mdp_path = 'extension/module/microdatapro';
						}
						$data['microdatapro'] = $this->load->controller($mdp_path . '/company');
						$microdatapro_main_flag = 1;
					//microdatapro 8.1 end - 1 - main
					
		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['compare'] = $this->url->link('product/compare', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);


					//microdatapro 8.1 start - 2 - extra
						if(!isset($microdatapro_main_flag)){
							$mdp_path = 'module/microdatapro';
							if(substr(VERSION, 0, 3) >= 2.3){
								$mdp_path = 'extension/module/microdatapro';
							}
							$data['microdatapro'] = $this->load->controller($mdp_path . '/company');
						}
					//microdatapro 8.1 end - 2 - extra
					
		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');

			$data['developer_theme'] = $this->config->get('developer_theme');
			$data['developer_mode'] = $this->config->get('config_developer');
			if($data['developer_mode'] == 1) {
				$data['developer_mode'] = time();
			} elseif ($data['developer_mode'] == 0 && $data['developer_theme'] == 0) {
				$data['developer_mode'] = rand(1, 25);
			}
			
		
		$data['menu'] = $this->load->controller('common/menu_footer');
		

			if($this->config->get('config_theme') == 'speedy') {
				$data['catalog_quantity'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_catalog_quantity');
				$data['footer_address'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_address');
				$data['footer_map'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_map');
				$data['footer_map_code'] = html_entity_decode($this->config->get('theme_' . $this->config->get('config_theme') . '_footer_map_code'), ENT_QUOTES, 'UTF-8');
				$data['address'] = $this->config->get('config_address');
			}
			

				$data['footer_payments_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_payments_status');
				$data['footer_phones'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_phones');
				$data['footer_messengers'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_messengers');
				$data['footer_email'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_email');
				$data['footer_socials'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_socials');

				$data['footer_payments'] = array();

				$footer_payments = $this->config->get('theme_speedy_footer_payment');

				$this->load->model('tool/image');

				if($footer_payments) {
					foreach ($footer_payments as $footer_payment) {
						if ($footer_payment['image']) {
							$image = $this->model_tool_image->resize($footer_payment['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
						}
						$data['footer_payments'][] = array(
							'image'  => $image
						);
					}
				}

				$data['code_footer_js'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_code_footer_js');
				$data['widgets_messenger_status'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_widgets_messenger_status');
				$data['widgets_modal_cookie_description'] = html_entity_decode($this->config->get('theme_' . $this->config->get('config_theme') . '_widgets_modal_cookie_description')[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
			
		return $this->load->view('common/footer', $data);
	}
}
