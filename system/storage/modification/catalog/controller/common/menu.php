<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		//dc_admin_catalog_menu
		$data['menu_view'] = $this->config->get('config_menu_view');
		$data['menu_view_image'] = $this->config->get('config_menu_view_image');
		$data['menu_view_image_2'] = $this->config->get('config_menu_view_image_2');
		$data['menu_view_image_3'] = $this->config->get('config_menu_view_image_3');
		$data['menu_view_image_4'] = $this->config->get('config_menu_view_image_4');
		$data['menu_size_image_width'] = $this->config->get('config_menu_size_image_width');
		$data['menu_size_image_height'] = $this->config->get('config_menu_size_image_height');
		//

		$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				if($data['menu_view'] == 2 or $data['menu_view'] == 3 or $data['menu_view'] == 4) {
					$children_data = array();

					$children = $this->model_catalog_category->getCategories($category['category_id']);

					foreach ($children as $child) {
	                    // Level 3 
	                    if($data['menu_view'] == 3 or $data['menu_view'] == 4) {
		                    $children_data_3 = array();

		                    $children_3 = $this->model_catalog_category->getCategories($child['category_id']);

		                    foreach ($children_3 as $child_3) {
		                
		                            $filter_data_3 = array(
		                                    'filter_category_id'  => $child_3['category_id'],
		                                    'filter_sub_category' => true
		                            );

		                            if ($child_3['image']) {
										$data['thumb'] = $this->model_tool_image->resize($child_3['image'], $data['menu_size_image_width'], $data['menu_size_image_height']);
									} else {
										$data['thumb'] = $this->model_tool_image->resize('placeholder.png', $data['menu_size_image_width'], $data['menu_size_image_height']);
									}

		                            $children_data_3[] = array(
		                                    'name'  => $child_3['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data_3) . ')' : ''),
		                                    'id'     => $child_3['category_id'],
		                                    'href'  => $this->url->link('product/category', 'path=' . $child['category_id'] . '_' . $child_3['category_id']),
		                                    'thumb'    => $data['thumb'],
		                                    'grand_childs_2' => $children_data_4 //for level 4                                  
		                            );                      
		                    }
	                	}
	                    //end of level 3                                          
	                               
	                    $filter_data = array(
	                        'filter_category_id'  => $child['category_id'],
	                        'filter_sub_category' => true
	                    );

	                    if ($child['image']) {
							$data['thumb'] = $this->model_tool_image->resize($child['image'], $data['menu_size_image_width'], $data['menu_size_image_height']);
						} else {
							$data['thumb'] = $this->model_tool_image->resize('placeholder.png', $data['menu_size_image_width'], $data['menu_size_image_height']);
						}

	                    $children_data[] = array(
	                        'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
	                        'id'     => $child['category_id'],
	                        'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
	                        'thumb'    => $data['thumb'],
	                        'grand_childs' => $children_data_3 //for level 3
	                    );  
	                }
            	}

				// Level 1

				if ($category['image']) {
					$data['thumb'] = $this->model_tool_image->resize($category['image'], $data['menu_size_image_width'], $data['menu_size_image_height']);
				} else {
					$data['thumb'] = $this->model_tool_image->resize('placeholder.png', $data['menu_size_image_width'], $data['menu_size_image_height']);
				}
						
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id']),
					'thumb'    => $data['thumb']
				);
			}
		}


			if($this->config->get('config_theme') == 'speedy') {
				$data['menu_additional_links'] = array();

				$menu_additional_links = $this->config->get('theme_' . $this->config->get('config_theme') . '_menu_additional_link')[$this->config->get('config_language_id')];

				if($menu_additional_links) {
					foreach ($menu_additional_links as $menu_additional_link) {
						if ($menu_additional_link['image']) {
							$image = $this->model_tool_image->resize($menu_additional_link['image'], $data['menu_size_image_width'], $data['menu_size_image_height']);
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', $data['menu_size_image_width'], $data['menu_size_image_height']);
						}
						$data['menu_additional_links'][] = array(
							'title'  => $menu_additional_link['title'],
							'link'  => $menu_additional_link['link'],
							'image'  => $image
						);
					}
				}

				//$data['menu_height'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_menu_height');
			}
			
		return $this->load->view('common/menu', $data);
	}
}
