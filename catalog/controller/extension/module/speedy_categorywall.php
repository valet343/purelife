<?php
class ControllerExtensionModuleSpeedyCategorywall extends Controller {
	public function index() {
		$this->document->addStyle('catalog/view/javascript/swiper/swiper-bundle.min.css');
		$this->document->addScript('catalog/view/javascript/swiper/swiper-bundle.min.js');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		if($this->config->get('config_theme') == 'speedy') {
			$limit = $this->config->get('module_' . $this->config->get('config_theme') . '_categorywall_limit');
		}

		$categories = array_slice($categories, 0, $limit);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1

				if ($category['image']) {
					$image = $this->model_tool_image->resize($category['image'], 150, 150);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', 150, 150);
				}

				$data['categories'][] = array(
					'name'     => $category['name'],
					'image' => $image,
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		return $this->load->view('extension/module/speedy_categorywall', $data);
	}
}