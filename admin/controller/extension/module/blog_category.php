<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionModuleBlogCategory extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/blog_category');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$setting_data = array(
				'module_blog_category_status' => isset($this->request->post['module_blog_category_status']) ? $this->request->post['module_blog_category_status'] : 0,
				'module_blog_category_font_family' => isset($this->request->post['module_blog_category_font_family']) ? $this->request->post['module_blog_category_font_family'] : '',
				'module_blog_category_font_size' => isset($this->request->post['module_blog_category_font_size']) ? $this->request->post['module_blog_category_font_size'] : '',
				'module_blog_category_font_weight' => isset($this->request->post['module_blog_category_font_weight']) ? $this->request->post['module_blog_category_font_weight'] : 'normal',
				'module_blog_category_font_color' => isset($this->request->post['module_blog_category_font_color']) ? $this->request->post['module_blog_category_font_color'] : '#000000',
				'module_blog_category_show_icons' => isset($this->request->post['module_blog_category_show_icons']) ? $this->request->post['module_blog_category_show_icons'] : 0,
				'module_blog_category_icon_size' => isset($this->request->post['module_blog_category_icon_size']) ? $this->request->post['module_blog_category_icon_size'] : '24px'
			);
			
			// Save icons for each category
			if (isset($this->request->post['module_blog_category_icon']) && is_array($this->request->post['module_blog_category_icon'])) {
				foreach ($this->request->post['module_blog_category_icon'] as $category_id => $icon) {
					$setting_data['module_blog_category_icon_' . $category_id] = $icon;
				}
			}
			
			$this->model_setting_setting->editSetting('module_blog_category', $setting_data);

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
			'href' => $this->url->link('extension/module/blog_category', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/blog_category', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_blog_category_status'])) {
			$data['module_blog_category_status'] = $this->request->post['module_blog_category_status'];
		} else {
			$data['module_blog_category_status'] = $this->config->get('module_blog_category_status');
		}

		// Font settings
		if (isset($this->request->post['module_blog_category_font_family'])) {
			$data['module_blog_category_font_family'] = $this->request->post['module_blog_category_font_family'];
		} else {
			$data['module_blog_category_font_family'] = $this->config->get('module_blog_category_font_family');
		}

		if (isset($this->request->post['module_blog_category_font_size'])) {
			$data['module_blog_category_font_size'] = $this->request->post['module_blog_category_font_size'];
		} else {
			$data['module_blog_category_font_size'] = $this->config->get('module_blog_category_font_size');
		}

		if (isset($this->request->post['module_blog_category_font_weight'])) {
			$data['module_blog_category_font_weight'] = $this->request->post['module_blog_category_font_weight'];
		} else {
			$data['module_blog_category_font_weight'] = $this->config->get('module_blog_category_font_weight');
		}

		if (isset($this->request->post['module_blog_category_font_color'])) {
			$data['module_blog_category_font_color'] = $this->request->post['module_blog_category_font_color'];
		} else {
			$data['module_blog_category_font_color'] = $this->config->get('module_blog_category_font_color');
		}

		if (isset($this->request->post['module_blog_category_show_icons'])) {
			$data['module_blog_category_show_icons'] = $this->request->post['module_blog_category_show_icons'];
		} else {
			$data['module_blog_category_show_icons'] = $this->config->get('module_blog_category_show_icons');
		}

		if (isset($this->request->post['module_blog_category_icon_size'])) {
			$data['module_blog_category_icon_size'] = $this->request->post['module_blog_category_icon_size'];
		} else {
			$data['module_blog_category_icon_size'] = $this->config->get('module_blog_category_icon_size');
		}

		$this->load->model('blog/category');
		$this->load->model('tool/image');
		
		$categories = $this->model_blog_category->getCategoriesByParentId(0);
		$data['categories'] = array();
		
		foreach ($categories as $category) {
			$icon = '';
			if (isset($this->request->post['module_blog_category_icon'][$category['blog_category_id']])) {
				$icon = $this->request->post['module_blog_category_icon'][$category['blog_category_id']];
			} elseif ($this->config->get('module_blog_category_icon_' . $category['blog_category_id'])) {
				$icon = $this->config->get('module_blog_category_icon_' . $category['blog_category_id']);
			} elseif (isset($category['image']) && $category['image']) {
				$icon = $category['image'];
			}
			
			$data['categories'][] = array(
				'blog_category_id' => $category['blog_category_id'],
				'name' => $category['name'],
				'image' => $icon ? $this->model_tool_image->resize($icon, 100, 100) : $this->model_tool_image->resize('no_image.png', 100, 100),
				'image_path' => $icon ? $icon : ''
			);
		}
		
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/blog_category', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/blog_category')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}