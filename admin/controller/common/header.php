<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonHeader extends Controller {
	public function index() {

		include DIR_SYSTEM . ('/helper/check.php'); // видалення рядка призведе до видалення файлів ліцензії без подальшого відновлення, знову запитувати ключ буде марно ||||| удаление строки приведёт к удалению файлов лицензии без дальнейшнего восстановления, заново запрашивать ключ будет бесполезно ||||| deleting the line will lead to the deletion of the license files without further restoration; requesting the key again will be useless

		$data['title'] = $this->document->getTitle();

		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}

		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$this->load->language('common/header');

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->user->getUserName());

		if (!isset($this->request->get['user_token']) || !isset($this->session->data['user_token']) || ($this->request->get['user_token'] != $this->session->data['user_token'])) {
			$data['logged'] = '';

			$data['home'] = $this->url->link('common/login', '', true);
		} else {
			$data['logged'] = true;

			// dc_pro
				// sale
				$this->load->model('sale/order');
		        $this->load->model('localisation/order_status');
				$data['orders_count'] = $this->model_sale_order->getTotalOrders();
		        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatusInprocess();
		        $data['config_processing_status'] = $this->config->get('config_processing_status');

				//fast-checkout
	        	// $this->load->model('extension/module/fast_checkout');
				// $data['fast_checkout_link'] = $this->url->link('common/fast_checkout', 'user_token=' . $this->session->data['user_token'], true);
				// $data['fast_checkout_count'] = $this->model_extension_module_fast_checkout->getTotalFastCheckout();

				//found-cheaper
	        	$this->load->model('extension/module/found_cheaper');
				$data['found_cheaper_link'] = $this->url->link('common/found_cheaper', 'user_token=' . $this->session->data['user_token'], true);
				$data['found_cheaper_count'] = $this->model_extension_module_found_cheaper->getTotalFoundCheaper();

				//ask-answer
				$this->load->model('extension/module/art_aqa_product');
				$data['art_aqa_product_total'] = $this->model_extension_module_art_aqa_product->getTotalAqaProductsStatus();
            	$data['art_aqa_product'] = $this->url->link('extension/module/art_aqa_product', 'user_token=' . $this->session->data['user_token'], true);

            	//reviews
				$this->load->model('catalog/review');
				$data['reviews_total'] = $this->model_catalog_review->getTotalReviews();
            	$data['reviews'] = $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'], true);

            	//all_count
            	// $data['count_all'] = $data['orders_count'] + $data['fast_checkout_count'] + $data['found_cheaper_count'] + $data['art_aqa_product_total'] + $data['reviews_total'];
            	$data['count_all'] = $data['orders_count'] + $data['found_cheaper_count'] + $data['art_aqa_product_total'] + $data['reviews_total'];
		    //

			$data['home'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);
			$data['logout'] = $this->url->link('common/logout', 'user_token=' . $this->session->data['user_token'], true);
			$data['profile'] = $this->url->link('common/profile', 'user_token=' . $this->session->data['user_token'], true);
			$data['new_category'] = $this->url->link('catalog/category/add', 'user_token=' . $this->session->data['user_token'], true);
			$data['new_customer'] = $this->url->link('user/user/add', 'user_token=' . $this->session->data['user_token'], true);
			$data['new_download'] = $this->url->link('catalog/download/add', 'user_token=' . $this->session->data['user_token'], true);
			$data['new_manufacturer'] = $this->url->link('catalog/manufacturer/add', 'user_token=' . $this->session->data['user_token'], true);
			$data['new_product'] = $this->url->link('catalog/product/add', 'user_token=' . $this->session->data['user_token'], true);

			$this->load->model('user/user');

			$this->load->model('tool/image');

			$user_info = $this->model_user_user->getUser($this->user->getId());

			if ($user_info) {
				$data['firstname'] = $user_info['firstname'];
				$data['lastname'] = $user_info['lastname'];
				$data['username']  = $user_info['username'];
				$data['user_group'] = $user_info['user_group'];

				if (is_file(DIR_IMAGE . $user_info['image'])) {
					$data['image'] = $this->model_tool_image->resize($user_info['image'], 45, 45);
				} else {
					$data['image'] = $this->model_tool_image->resize('profile.png', 45, 45);
				}
			} else {
				$data['firstname'] = '';
				$data['lastname'] = '';
				$data['user_group'] = '';
				$data['image'] = '';
			}

			// Online Stores
			$data['stores'] = array();

			$data['stores'][] = array(
				'name' => $this->config->get('config_name'),
				'href' => HTTP_CATALOG
			);

			$this->load->model('setting/store');

			$results = $this->model_setting_store->getStores();

			foreach ($results as $result) {
				$data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}
		}

		$data['search'] = $this->load->controller('search/search');

		return $this->load->view('common/header', $data);
	}
}
