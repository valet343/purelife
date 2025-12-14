<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$canonical = $this->url->link('common/home');
			if ($this->config->get('config_seo_pro') && !$this->config->get('config_seopro_addslash')) {
				$canonical = rtrim($canonical, '/');
			}
			$this->document->addLink($canonical, 'canonical');
		}


					//microdatapro 8.1 start
						if(isset($data)){
							$data_mdp = $data;
						}
						$mdp_path = 'module/microdatapro';
						if(substr(VERSION, 0, 3) >= 2.3){
							$mdp_path = 'extension/module/microdatapro';
						}
						$data_mdp['microdatapro_data']['meta_description'] = $this->config->get('config_meta_description');
						$data_mdp['description'] = $this->config->get('config_meta_description');
						$data_mdp['heading_title'] = $this->config->get('config_meta_title');
						$data_mdp['breadcrumbs'] = array(array("href" => $this->url->link('common/home')));
						$data_mdp['microdatapro_data']['image'] = is_file(DIR_IMAGE . $this->config->get('config_logo'))?$this->config->get('config_logo'):'';
						$this->document->setTc_og($this->load->controller($mdp_path . '/tc_og', $data_mdp));
						$this->document->setTc_og_prefix($this->load->controller($mdp_path . '/tc_og_prefix'));
					//microdatapro 8.1 end
				
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');


			if($this->config->get('config_theme') == 'speedy') {
				$data['catalog_link'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_home_catalog_status');
			}
			
		$this->response->setOutput($this->load->view('common/home', $data));
	}
}