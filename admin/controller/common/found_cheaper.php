<?php
class ControllerCommonFoundCheaper extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/found_cheaper');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('common/found_cheaper');

		// $this->model_common_found_cheaper->createOrder();

		$this->getList();
	}

	protected function getList() {
		$this->load->language('extension/module/found_cheaper');

		$data['text_list'] = $this->language->get('heading_title');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['column_name'] = $this->language->get('column_name');

		$this->load->model('common/found_cheaper');

		$results = $this->model_common_found_cheaper->getOrders();

		$data['fcheaper'] = array();

		foreach($results as $result) {

			$data['fcheaper'][] = array(
				'id' => $result['id'],
				'product_name' => $result['product_name'],
				'product_model' => $result['product_model'],
				'product_image' => $result['product_image'],
				'product_link' => HTTP_CATALOG .'index.php?route=product/product&product_id=' . (int)$result['product_id'],
				'cheaper_link' => $result['cheaper_link'],
				'telephone' => $result['telephone'],
				'date_added' => $result['date_added']
			);

		}

		$this->load->model('tool/image');

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		$pagination = new Pagination();
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('common/found_cheaper', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['delete'] = $this->url->link('common/found_cheaper/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/found_cheaper', $data));
	}

	public function delete() {
		$this->load->language('extension/module/found_cheaper');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('common/found_cheaper');

		if (isset($this->request->post['selected'])) {
			foreach ($this->request->post['selected'] as $id) {
				$this->model_common_found_cheaper->deleteOrder($id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

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

			$this->response->redirect($this->url->link('common/found_cheaper', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	// protected function validateDelete() {
	// 	if (!$this->user->hasPermission('modify', 'common/found_cheaper')) {
	// 		$this->error['warning'] = $this->language->get('error_permission');
	// 	}

	// 	return !$this->error;
	// }

}	