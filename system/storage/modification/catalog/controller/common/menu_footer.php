<?php
class ControllerCommonMenuFooter extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

			$footer_menu_lenght = $this->config->get('theme_' . $this->config->get('config_theme') . '_footer_menu_lenght');
    		$categories = array_slice($categories, 0, $footer_menu_lenght);
			

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		return $this->load->view('common/menu_footer', $data);
	}
}
