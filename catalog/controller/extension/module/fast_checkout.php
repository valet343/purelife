<?php
class ControllerExtensionModuleFastCheckout extends Controller {
	public function index() {
		$this->load->language('extension/module/fast_checkout');
	}
	public function add() {
		$this->load->language('extension/module/fast_checkout');
		
		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 25)) {
				$json['error'] = $this->language->get('error_telephone');
			}

			if (!isset($json['error'])) {
				$this->load->model('extension/module/fast_checkout');

				$this->model_extension_module_fast_checkout->addOrder($this->request->post);

				$json['success'] = $this->language->get('text_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}