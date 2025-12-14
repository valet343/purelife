<?php
class ControllerExtensionModuleSpeedyBannerProduct extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
		$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');

		$this->load->model('extension/module/oc_watermark');
		$this->load->model('tool/image');

		$data['type']=$setting['type'];
		$data['column']=$setting['column'];

		$data['banners_product'] = array();

		$results = $setting['banner_description'][$this->config->get('config_language_id')]['blocks'];

		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_extension_module_oc_watermark->resize('product', $result['image'], $setting['width'], $setting['height']);
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
			}
			$data['banners_product'][] = array(
				'image' => $image,
				'background_color' => $result['background_color'],
				'title' => $result['title'],
				'link' => $result['link'],
				'button_type' => $result['button_type'],
				'button_text' => $result['button_text'],
				'sticker' => $result['sticker'],
				'price' => $result['price']
			);

		}
		
		if($data['type'] != 'carousel') {
			$data['banners_product'] = array_slice($data['banners_product'], 0, $setting['column']);
		}

		$data['module'] = $module++;
		
		return $this->load->view('extension/module/speedy_banner_product', $data);
		
	}
}