<?php

class ControllerExtensionModuleSpeedyBannerTop extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('extension/module/speedy_banner_top');

		$this->document->setTitle($this->language->get('heading_title_text'));

		$data['heading_title'] = $this->language->get('heading_title');

		$this->load->model("localisation/language");

		$data["languages"] = $this->model_localisation_language->getLanguages();

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_speedy_banner_top', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$this->document->addScript('https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.js');
        $this->document->addStyle('https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css');

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
			'text' => $this->language->get('heading_title_text'),
			'href' => $this->url->link('extension/module/speedy_banner_top', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/speedy_banner_top', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_speedy_banner_top_status'])) {
			$data['module_speedy_banner_top_status'] = $this->request->post['module_speedy_banner_top_status'];
		} else {
			$data['module_speedy_banner_top_status'] = $this->config->get('module_speedy_banner_top_status');
		}

		if (isset($this->request->post['module_speedy_banner_top_background'])) {
        	$data['module_speedy_banner_top_background'] = $this->request->post['module_speedy_banner_top_background'];
		} elseif ($this->config->has('module_speedy_banner_top_background')) {
		        $data['module_speedy_banner_top_background'] = $this->config->get('module_speedy_banner_top_background');
		} else {
		        $data['module_speedy_banner_top_background'] = '#2a3b4c';
		}

		if (isset($this->request->post['module_speedy_banner_top_width'])) {
        	$data['module_speedy_banner_top_width'] = $this->request->post['module_speedy_banner_top_width'];
		} elseif ($this->config->has('module_speedy_banner_top_width')) {
		        $data['module_speedy_banner_top_width'] = $this->config->get('module_speedy_banner_top_width');
		} else {
		        $data['module_speedy_banner_top_width'] = '1000';
		}

		if (isset($this->request->post['module_speedy_banner_top_height'])) {
        	$data['module_speedy_banner_top_height'] = $this->request->post['module_speedy_banner_top_height'];
		} elseif ($this->config->has('module_speedy_banner_top_height')) {
		        $data['module_speedy_banner_top_height'] = $this->config->get('module_speedy_banner_top_height');
		} else {
		        $data['module_speedy_banner_top_height'] = '60';
		}

		if (isset($this->request->post['module_speedy_banner_top_text'])) {
        	$data['module_speedy_banner_top_text'] = $this->request->post['module_speedy_banner_top_text'];
		} elseif ($this->config->has('module_speedy_banner_top_text')) {
		        $data['module_speedy_banner_top_text'] = $this->config->get('module_speedy_banner_top_text');
		} else {
		        $data['module_speedy_banner_top_text'] = '';
		}

		if (isset($this->request->post['module_speedy_banner_top_link'])) {
        	$data['module_speedy_banner_top_link'] = $this->request->post['module_speedy_banner_top_link'];
		} elseif ($this->config->has('module_speedy_banner_top_link')) {
		        $data['module_speedy_banner_top_link'] = $this->config->get('module_speedy_banner_top_link');
		} else {
		        $data['module_speedy_banner_top_link'] = '';
		}

		if (isset($this->request->post['module_speedy_banner_top_type'])) {
        	$data['module_speedy_banner_top_type'] = $this->request->post['module_speedy_banner_top_type'];
		} elseif ($this->config->has('module_speedy_banner_top_type')) {
		        $data['module_speedy_banner_top_type'] = $this->config->get('module_speedy_banner_top_type');
		} else {
		        $data['module_speedy_banner_top_type'] = 'banner';
		}

		if (isset($this->request->post['module_speedy_banner_top_image'])) {
			$data['module_speedy_banner_top_image'] = $this->request->post['module_speedy_banner_top_image'];
		} else {
			$data['module_speedy_banner_top_image'] = $this->config->get('module_speedy_banner_top_image');
		}

		if (isset($this->request->post['module_speedy_banner_top_info_height'])) {
        	$data['module_speedy_banner_top_info_height'] = $this->request->post['module_speedy_banner_top_info_height'];
		} elseif ($this->config->has('module_speedy_banner_top_info_height')) {
		        $data['module_speedy_banner_top_info_height'] = $this->config->get('module_speedy_banner_top_info_height');
		} else {
		        $data['module_speedy_banner_top_info_height'] = '40';
		}

		if (isset($this->request->post['module_speedy_banner_top_info_text'])) {
        	$data['module_speedy_banner_top_info_text'] = $this->request->post['module_speedy_banner_top_info_text'];
		} elseif ($this->config->has('module_speedy_banner_top_info_text')) {
		        $data['module_speedy_banner_top_info_text'] = $this->config->get('module_speedy_banner_top_info_text');
		} else {
		        $data['module_speedy_banner_top_info_text'] = '';
		}

		if (isset($this->request->post['module_speedy_banner_top_info_link'])) {
        	$data['module_speedy_banner_top_info_link'] = $this->request->post['module_speedy_banner_top_info_link'];
		} elseif ($this->config->has('module_speedy_banner_top_info_link')) {
		        $data['module_speedy_banner_top_info_link'] = $this->config->get('module_speedy_banner_top_info_link');
		} else {
		        $data['module_speedy_banner_top_info_link'] = '';
		}

		if (isset($this->request->post['module_speedy_banner_top_info_background'])) {
        	$data['module_speedy_banner_top_info_background'] = $this->request->post['module_speedy_banner_top_info_background'];
		} elseif ($this->config->has('module_speedy_banner_top_info_background')) {
		        $data['module_speedy_banner_top_info_background'] = $this->config->get('module_speedy_banner_top_info_background');
		} else {
		        $data['module_speedy_banner_top_info_background'] = '#2a3b4c';
		}

		if (isset($this->request->post['module_speedy_banner_top_info_id'])) {
        	$data['module_speedy_banner_top_info_id'] = $this->request->post['module_speedy_banner_top_info_id'];
		} elseif ($this->config->has('module_speedy_banner_top_info_id')) {
		        $data['module_speedy_banner_top_info_id'] = $this->config->get('module_speedy_banner_top_info_id');
		} else {
		        $data['module_speedy_banner_top_info_id'] = 'D71g85y154';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['module_speedy_banner_top_image']) && is_file(DIR_IMAGE . $this->request->post['module_speedy_banner_top_image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->config->get('module_speedy_banner_top_image'), $this->config->get('module_speedy_banner_top_width'), $this->config->get('module_speedy_banner_top_height'));
		} elseif ($this->config->get('module_speedy_banner_top_image') && is_file(DIR_IMAGE . $this->config->get('module_speedy_banner_top_image'))) {
			$data['thumb'] = $this->model_tool_image->resize($this->config->get('module_speedy_banner_top_image'), 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/speedy_banner_top', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_banner_top')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}