<?php
class ControllerExtensionModuleSpeedyCarousel extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['arrows']=$setting['arrows'];
		$data['autoplay']=$setting['autoplay'];
		$data['autoplay_time']=$setting['autoplay_time'];
		
		$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
		$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');

		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner($setting['banner_id']);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_extension_module_oc_watermark->resize('carousel', $result['image'], $setting['width'], $setting['height']),
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/speedy_carousel', $data);
	}
}