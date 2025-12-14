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
		$this->load->language('common/footer');

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
		
		$data['menu'] = $this->load->controller('common/menu_footer');
		
		return $this->load->view('common/footer', $data);
	}
}
