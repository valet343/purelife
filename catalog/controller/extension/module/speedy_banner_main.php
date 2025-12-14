<?php
require_once(DIR_SYSTEM . 'library/Mobile_Detect.php');
class ControllerExtensionModuleSpeedyBannerMain extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
		$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');

		$detect = new Mobile_Detect();

		$this->load->model('extension/module/oc_watermark');
		$this->load->model('tool/image');

		$data['type']=$setting['type'];
		$type=$setting['type'];
		$data['container']=$setting['container'];
		$data['carousel_items']=$setting['carousel_items'];
		$data['autoplay']=$setting['autoplay'];
		$data['autoplay_time']=$setting['autoplay_time'];
		$data['arrows']=$setting['arrows'];
		$data['freemode']=$setting['freemode'];
		$slider_type=$setting['slider_type'];
		$data['slider_type']=$setting['slider_type'];
		$slider_type=$setting['slider_type'];
		if($detect->isMobile() && !$detect->isTablet()) {
			$class='banner_mob';
			$data['width_item']=$setting['width_slider_mob'];
		} else {
			$class='banner_pc';
			$data['width_item']=$setting['width_slider_pc'];
		}
		$width_slider_pc=$setting['width_slider_pc'];
		$height_slider_pc=$setting['height_slider_pc'];
		$width_slider_mob=$setting['width_slider_mob'];
		$height_slider_mob=$setting['height_slider_mob'];
		$width_carousel=$setting['width_carousel'];
		$height_carousel=$setting['height_carousel'];

		$data['banners_main'] = array();

		// Slider
		if ($type=='slider') {
			if ($slider_type=='image_and_text') {
				$results = $setting['banner_it_description'][$this->config->get('config_language_id')]['blocks'];
			} else {
				$results = $setting['banner_description'][$this->config->get('config_language_id')]['blocks'];
			}
		// Carousel
		} else {
			$results = $setting['banner_carousel_description'][$this->config->get('config_language_id')]['blocks'];
		}

		foreach ($results as $result) {
			// Slider
			if ($type=='slider') {
				// Mobile & Tablet
				if($detect->isMobile() && !$detect->isTablet()) {
					$image='';
					if($slider_type == 'image_and_text') {
						if (is_file(DIR_IMAGE . $result['it_image_mob'])) {
							if ($height_slider_mob==0 && $width_slider_mob==0) $image='/image/'.$result['it_image_mob']; else $image=$this->model_extension_module_oc_watermark->resize('banner', $result['it_image_mob'], $width_slider_mob, $height_slider_mob);
						}
						$link = $result['it_link'];
					} else {
						if (is_file(DIR_IMAGE . $result['image_mob'])) {
							if ($height_slider_mob==0 && $width_slider_mob==0) $image='/image/'.$result['image_mob']; else $image=$this->model_extension_module_oc_watermark->resize('banner', $result['image_mob'], $width_slider_mob, $height_slider_mob);
						}
						$link = $result['link'];
					}
				// PC
				} else {
					$image='';
					if($slider_type == 'image_and_text') {
						if (is_file(DIR_IMAGE . $result['it_image'])) {
							if ($height_slider_pc==0 && $width_slider_pc==0) $image='/image/'.$result['it_image']; else $image=$this->model_extension_module_oc_watermark->resize('banner', $result['it_image'], $width_slider_pc, $height_slider_pc);
						}
						$link = $result['it_link'];
					} else {
						if (is_file(DIR_IMAGE . $result['image'])) {
							if ($height_slider_pc==0 && $width_slider_pc==0) $image='/image/'.$result['image']; else $image=$this->model_extension_module_oc_watermark->resize('banner', $result['image'], $width_slider_pc, $height_slider_pc);
						}
						$link = $result['link'];
					}
				}
				$data['banners_main'][] = array(
					'link' => $link,
					'image' => $image,
					'title' => $result['it_title'],
					'position' => $result['it_position'],
					'description' => $result['it_description'],
					'button_text' => $result['it_button_text'],
					'background_color' => $result['it_background_color'],
					'class' => $class
				);
			// Carousel
			} else {
				$image='';
				if (is_file(DIR_IMAGE . $result['image_carousel'])) {
					if ($height_carousel==0 && $width_carousel==0) $image='/image/'.$result['image_carousel']; else $image=$this->model_extension_module_oc_watermark->resize('banner', $result['image_carousel'], $width_carousel, $height_carousel);
				}
				$data['banners_main'][] = array(
					'link' => $result['link_carousel'],
					'image' => $image
				);
			}
		}

		$data['module'] = $module++;
		
		return $this->load->view('extension/module/speedy_banner_main', $data);
		
	}
}