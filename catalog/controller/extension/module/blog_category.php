<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionModuleBlogCategory extends Controller {
	public function index() {
		$this->load->language('extension/module/blog_category');

		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->request->get['blog_category_id'])) {
			$parts = explode('_', (string)$this->request->get['blog_category_id']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['blog_category_id'] = $parts[0];
		} else {
			$data['blog_category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('blog/category');

		$this->load->model('blog/article');

		$data['categories'] = array();

		$categories = $this->model_blog_category->getCategories(0);

		$this->load->model('tool/image');
		
		// Get module settings
		$font_family = $this->config->get('module_blog_category_font_family');
		$font_size = $this->config->get('module_blog_category_font_size');
		$font_weight = $this->config->get('module_blog_category_font_weight');
		$font_color = $this->config->get('module_blog_category_font_color');
		$show_icons = $this->config->get('module_blog_category_show_icons');
		$icon_size = $this->config->get('module_blog_category_icon_size');
		
		// Set default values
		if (empty($font_family)) $font_family = 'Arial, sans-serif';
		if (empty($font_size)) $font_size = '16px';
		if (empty($font_weight)) $font_weight = 'normal';
		if (empty($font_color)) $font_color = '#000000';
		if (empty($icon_size)) $icon_size = '24px';
		
		$data['font_family'] = $font_family;
		$data['font_size'] = $font_size;
		$data['font_weight'] = $font_weight;
		$data['font_color'] = $font_color;
		$data['show_icons'] = $show_icons;
		$data['icon_size'] = $icon_size;

		foreach ($categories as $category) {
			$children_data = array();

			if ($category['blog_category_id'] == $data['blog_category_id']) {
				$children = $this->model_blog_category->getCategories($category['blog_category_id']);

				foreach($children as $child) {
					$filter_data = array('filter_blog_category_id' => $child['blog_category_id'], 'filter_sub_category' => true);
					
					// Get icon for child category
					$child_icon = '';
					if ($show_icons) {
						$child_icon_path = $this->config->get('module_blog_category_icon_' . $child['blog_category_id']);
						if ($child_icon_path) {
							$child_icon = $this->model_tool_image->resize($child_icon_path, 100, 100);
						} elseif (isset($child['image']) && $child['image']) {
							$child_icon = $this->model_tool_image->resize($child['image'], 100, 100);
						}
					}

					$children_data[] = array(
						'blog_category_id' => $child['blog_category_id'],
						'name' => $child['name'] . ($this->config->get('configblog_article_count') ? ' (' . $this->model_blog_article->getTotalArticles($filter_data) . ')' : ''),
						'href' => $this->url->link('blog/category', 'blog_category_id=' . $category['blog_category_id'] . '_' . $child['blog_category_id']),
						'icon' => $child_icon
					);
				}
			}

			$filter_data = array(
				'filter_blog_category_id'  => $category['blog_category_id'],
			);
			
			// Get icon for category
			$category_icon = '';
			if ($show_icons) {
				$icon_path = $this->config->get('module_blog_category_icon_' . $category['blog_category_id']);
				if ($icon_path) {
					$category_icon = $this->model_tool_image->resize($icon_path, 100, 100);
				} elseif (isset($category['image']) && $category['image']) {
					$category_icon = $this->model_tool_image->resize($category['image'], 100, 100);
				}
			}

			$data['categories'][] = array(
				'blog_category_id' => $category['blog_category_id'],
				'name'        => $category['name'] . ($this->config->get('configblog_article_count') ? ' (' . $this->model_blog_article->getTotalArticles($filter_data) . ')' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('blog/category', 'blog_category_id=' . $category['blog_category_id']),
				'icon'        => $category_icon
			);
		}

		return $this->load->view('extension/module/blog_category', $data);
	}
}