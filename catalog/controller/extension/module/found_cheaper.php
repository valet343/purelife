<?php
class ControllerExtensionModuleFoundCheaper extends Controller {
	public function index() {
		$this->load->language('extension/module/found_cheaper');
	}
	public function add() {
		$this->load->language('extension/module/found_cheaper');
		
		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 25)) {
				$json['error'] = $this->language->get('error_telephone');
			}

			if ((utf8_strlen($this->request->post['link']) < 3) || (utf8_strlen($this->request->post['link']) > 25)) {
				$json['error'] = $this->language->get('error_link');
			}

			if (!isset($json['error'])) {
				$this->load->model('extension/module/found_cheaper');

				$this->model_extension_module_found_cheaper->addOrder($this->request->post);

				$json['success'] = $this->language->get('text_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}