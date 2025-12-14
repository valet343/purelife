<?php
class ControllerExtensionModuleSpeedyBannerMain extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/speedy_banner_main');

		$this->document->setTitle($this->language->get('heading_title_text'));

		$data['heading_title'] = $this->language->get('heading_title');

		$this->document->addScript('https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.js');
        $this->document->addStyle('https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css');

		$this->load->model("localisation/language");

		$data["languages"] = $this->model_localisation_language->getLanguages();

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('speedy_banner_main', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
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
			'href' => $this->url->link('extension/module/speedy_banner_main', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/speedy_banner_main', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/speedy_banner_main', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = 1;
		}

		if (isset($this->request->post['width_slider_pc'])) {
			$data['width_slider_pc'] = $this->request->post['width_slider_pc'];
		} elseif (!empty($module_info)) {
			$data['width_slider_pc'] = $module_info['width_slider_pc'];
		} else {
			$data['width_slider_pc'] = 1470;
		}

		if (isset($this->request->post['height_slider_pc'])) {
			$data['height_slider_pc'] = $this->request->post['height_slider_pc'];
		} elseif (!empty($module_info)) {
			$data['height_slider_pc'] = $module_info['height_slider_pc'];
		} else {
			$data['height_slider_pc'] = 500;
		}

		if (isset($this->request->post['width_slider_mob'])) {
			$data['width_slider_mob'] = $this->request->post['width_slider_mob'];
		} elseif (!empty($module_info)) {
			$data['width_slider_mob'] = $module_info['width_slider_mob'];
		} else {
			$data['width_slider_mob'] = 640;
		}

		if (isset($this->request->post['height_slider_mob'])) {
			$data['height_slider_mob'] = $this->request->post['height_slider_mob'];
		} elseif (!empty($module_info)) {
			$data['height_slider_mob'] = $module_info['height_slider_mob'];
		} else {
			$data['height_slider_mob'] = 1024;
		}

		if (isset($this->request->post['width_carousel'])) {
			$data['width_carousel'] = $this->request->post['width_carousel'];
		} elseif (!empty($module_info)) {
			$data['width_carousel'] = $module_info['width_carousel'];
		} else {
			$data['width_carousel'] = 640;
		}

		if (isset($this->request->post['height_carousel'])) {
			$data['height_carousel'] = $this->request->post['height_carousel'];
		} elseif (!empty($module_info)) {
			$data['height_carousel'] = $module_info['height_carousel'];
		} else {
			$data['height_carousel'] = 1024;
		}

		// if (isset($this->request->post['after_header'])) {
		// 	$data['after_header'] = $this->request->post['after_header'];
		// } elseif (!empty($module_info)) {
		// 	$data['after_header'] = $module_info['after_header'];
		// } else {
		// 	$data['after_header'] = '';
		// }

		if (isset($this->request->post['type'])) {
			$data['type'] = $this->request->post['type'];
		} elseif (!empty($module_info)) {
			$data['type'] = $module_info['type'];
		} else {
			$data['type'] = 'slider';
		}

		if (isset($this->request->post['container'])) {
			$data['container'] = $this->request->post['container'];
		} elseif (!empty($module_info)) {
			$data['container'] = $module_info['container'];
		} else {
			$data['container'] = 'fixed';
		}

		if (isset($this->request->post['slider_type'])) {
			$data['slider_type'] = $this->request->post['slider_type'];
		} elseif (!empty($module_info)) {
			$data['slider_type'] = $module_info['slider_type'];
		} else {
			$data['slider_type'] = 'image_and_text';
		}

		if (isset($this->request->post['autoplay'])) {
			$data['autoplay'] = $this->request->post['autoplay'];
		} elseif (!empty($module_info)) {
			$data['autoplay'] = $module_info['autoplay'];
		} else {
			$data['autoplay'] = 0;
		}

		if (isset($this->request->post['freemode'])) {
			$data['freemode'] = $this->request->post['freemode'];
		} elseif (!empty($module_info)) {
			$data['freemode'] = $module_info['freemode'];
		} else {
			$data['freemode'] = 1;
		}

		if (isset($this->request->post['arrows'])) {
			$data['arrows'] = $this->request->post['arrows'];
		} elseif (!empty($module_info)) {
			$data['arrows'] = $module_info['arrows'];
		} else {
			$data['arrows'] = 0;
		}

		if (isset($this->request->post['autoplay_time'])) {
			$data['autoplay_time'] = $this->request->post['autoplay_time'];
		} elseif (!empty($module_info)) {
			$data['autoplay_time'] = $module_info['autoplay_time'];
		} else {
			$data['autoplay_time'] = 2000;
		}

		if (isset($this->request->post['carousel_items'])) {
			$data['carousel_items'] = $this->request->post['carousel_items'];
		} elseif (!empty($module_info)) {
			$data['carousel_items'] = $module_info['carousel_items'];
		} else {
			$data['carousel_items'] = 5;
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['banner_description'])) {
			$data['banner_description'] = $this->request->post['banner_description'];
		} elseif (!empty($module_info)) {
			$data['banner_description'] = $module_info['banner_description'];
		} else {
			$data['banner_description'] = array();
		}

		if (isset($this->request->post['banner_carousel_description'])) {
			$data['banner_carousel_description'] = $this->request->post['banner_carousel_description'];
		} elseif (!empty($module_info)) {
			$data['banner_carousel_description'] = $module_info['banner_carousel_description'];
		} else {
			$data['banner_carousel_description'] = array();
		}

		if (isset($this->request->post['banner_it_description'])) {
			$data['banner_it_description'] = $this->request->post['banner_it_description'];
		} elseif (!empty($module_info)) {
			$data['banner_it_description'] = $module_info['banner_it_description'];
		} else {
			$data['banner_it_description'] = array();
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/module/speedy_banner_main', $data));
		
	}

	public function install() {
            $this->load->model('extension/module/speedy_banner_main');

            $this->model_extension_module_speedy_banner_main->install();                
    }

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_banner_main')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}
}