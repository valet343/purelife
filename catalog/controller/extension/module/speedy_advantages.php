<?php
class ControllerExtensionModuleSpeedyAdvantages extends Controller {
	public function index($setting) {
		$this->load->model('tool/image');
		if (isset($setting['module_description'][$this->config->get('config_language_id')]['blocks'])) {

			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$width=$setting['width'];
			$height=$setting['height'];
			$data['image_width']=$setting['width'];
			$data['column']=$setting['column'];
			$data['align']=$setting['align'];

			$data['blocks'] = array();
				$results = $setting['module_description'][$this->config->get('config_language_id')]['blocks'];
				foreach ($results as $result) {
					$image='';
					if (is_file(DIR_IMAGE . $result['image'])) {
					if ($height==0 && $width==0) $image='/image/'.$result['image']; else $image=$this->model_tool_image->resize($result['image'], $width, $height);
					}
					$data['blocks'][] = array(
						'title' => $result['title'],
						'description'  => $result['description'],
						'image' => $image
					);
			}
			
			return $this->load->view('extension/module/speedy_advantages', $data);
		}
	}
}