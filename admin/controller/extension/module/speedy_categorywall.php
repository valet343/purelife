<?php
class ControllerExtensionModuleSpeedyCategorywall extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/speedy_categorywall');

		$this->document->setTitle($this->language->get('heading_title_text'));

		$data['heading_title'] = $this->language->get('heading_title');

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_speedy_categorywall', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/speedy_categorywall', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/speedy_categorywall', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_speedy_categorywall_limit'])) {
        	$data['module_speedy_categorywall_limit'] = $this->request->post['module_speedy_categorywall_limit'];
		} elseif ($this->config->has('module_speedy_categorywall_limit')) {
		        $data['module_speedy_categorywall_limit'] = $this->config->get('module_speedy_categorywall_limit');
		} else {
		        $data['module_speedy_categorywall_limit'] = 10;
		}

		if (isset($this->request->post['module_speedy_categorywall_status'])) {
			$data['module_speedy_categorywall_status'] = $this->request->post['module_speedy_categorywall_status'];
		} else {
			$data['module_speedy_categorywall_status'] = $this->config->get('module_speedy_categorywall_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/speedy_categorywall', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_categorywall')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}