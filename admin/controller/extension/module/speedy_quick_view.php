<?php
class ControllerExtensionModuleSpeedyQuickview extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/speedy_quick_view');

		$this->document->setTitle($this->language->get('heading_title_text'));

        $data['heading_title'] = $this->language->get('heading_title');

		$this->load->model('setting/setting');

		if( ($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() ) {
			$this->model_setting_setting->editSetting('module_speedy_quick_view', $this->request->post);

			$this->session->data['dw_success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		
		if( isset($this->session->data['dw_success']) ) {
			$data['success'] = $this->session->data['dw_success'];
			unset($this->session->data['dw_success']);
		} else {
			$data['success'] = '';
		}

		if( isset($this->error['warning']) ) {
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
			'href' => $this->url->link('extension/module/speedy_quick_view', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/speedy_quick_view', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_comparison_btn'] = $this->language->get('entry_comparison_btn');
		$data['entry_bookmarks_btn'] = $this->language->get('entry_bookmarks_btn');
		$data['entry_specifications'] = $this->language->get('entry_specifications');
		$data['entry_description'] = $this->language->get('entry_description');
		$data['entry_reviews'] = $this->language->get('entry_reviews');
		
		
		if( isset($this->request->post['module_speedy_quick_view_btnquick']) ) {
			$data['btnquick'] = $this->request->post['module_speedy_quick_view_btnquick'];
		} else {
			$data['btnquick'] = $this->config->get('module_speedy_quick_view_btnquick');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_bookmarks']) ) {
			$data['bookmarks'] = $this->request->post['module_speedy_quick_view_bookmarks'];
		} else {
			$data['bookmarks'] = $this->config->get('module_speedy_quick_view_bookmarks');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_comparison']) ) {
			$data['comparison'] = $this->request->post['module_speedy_quick_view_comparison'];
		} else {
			$data['comparison'] = $this->config->get('module_speedy_quick_view_comparison');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_specifications']) ) {
			$data['specifications'] = $this->request->post['module_squick_view_specifications'];
		} else {
			$data['specifications'] = $this->config->get('module_speedy_quick_view_specifications');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_descript']) ) {
			$data['descript'] = $this->request->post['module_speedy_quick_view_descript'];
		} else {
			$data['descript'] = $this->config->get('module_speedy_quick_view_descript');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_reviews']) ) {
			$data['reviews'] = $this->request->post['module_speedy_quick_view_reviews'];
		} else {
			$data['reviews'] = $this->config->get('module_speedy_quick_view_reviews');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_brand']) ) {
			$data['brand'] = $this->request->post['module_speedy_quick_view_brand'];
		} else {
			$data['brand'] = $this->config->get('module_speedy_quick_view_brand');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_rewards']) ) {
			$data['rewards'] = $this->request->post['module_speedy_quick_view_rewards'];
		} else {
			$data['rewards'] = $this->config->get('module_speedy_quick_view_rewards');
		}
		
		if( isset($this->request->post['module_speedy_quick_view_status']) ) {
			$data['module_speedy_quick_view_status'] = $this->request->post['module_speedy_quick_view_status'];
		} else {
			$data['module_speedy_quick_view_status'] = $this->config->get('module_speedy_quick_view_status');
		}

		$data['header']      = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer']     = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/speedy_quick_view', $data));
	}

	protected function validate() {
		if( !$this->user->hasPermission('modify', 'extension/module/speedy_quick_view') ) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}