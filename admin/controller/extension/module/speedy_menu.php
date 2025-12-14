<?php

class ControllerExtensionModuleSpeedyMenu extends Controller {
	private $error = array();

	public function index()
	{
		$this->load->language('extension/module/speedy_menu');
		$this->document->addStyle('view/stylesheet/dc_megamenu.css');
		
		$this->document->setTitle($this->language->get('heading_title_text'));

		$data['heading_title'] = $this->language->get('heading_title');

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_speedy_menu', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$this->getList();
	}

	public function getList()
	{
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		}
		else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		}
		else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array) $this->request->post['selected'];
		}
		else {
			$data['selected'] = array();
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		}
		else {
			$sort = 'sort_menu';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		}
		else {
			$order = 'ASC';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], 'SSL'));
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_module'), 'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], 'SSL'));
		$data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'], 'SSL'));
		$data['lang_id'] = $this->config->get('config_language_id');
		$data['add'] = $this->url->link('extension/module/speedy_menu/addItem', 'user_token=' . $this->session->data['user_token'], 'SSL');
		$data['action'] = $this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'], 'SSL');
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['delete'] = $this->url->link('extension/module/speedy_menu/deleteItem', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['user_token'] = $this->session->data['user_token'];
		$data['heading_title'] = $this->language->get('heading_title');
		$data['entry_menu_mask'] = $this->language->get('entry_menu_mask');
		$data['text_btn_apply'] = $this->language->get('text_btn_apply');
		$data['text_edit_setting'] = $this->language->get('text_edit_setting');
		$data['text_edit_list_Item'] = $this->language->get('text_edit_list_Item');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_main_vertical_menu'] = $this->language->get('text_main_vertical_menu');
		$data['text_main_horizontal_menu'] = $this->language->get('text_main_horizontal_menu');
		$data['text_full_screen_menu'] = $this->language->get('text_full_screen_menu');
		$data['text_full_screen_layout'] = $this->language->get('text_full_screen_layout');
		$data['text_home_page'] = $this->language->get('text_home_page');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['entry_megamenu_status'] = $this->language->get('entry_megamenu_status');
		$data['entry_menu_selection'] = $this->language->get('entry_menu_selection');
		$data['entry_fixed_panel_top'] = $this->language->get('entry_fixed_panel_top');
		$data['entry_type_mobile_menu'] = $this->language->get('entry_type_mobile_menu');
		$data['text_category_add_auto_description'] = $this->language->get('text_category_add_auto_description');
		$data['text_category_add_auto'] = $this->language->get('text_category_add_auto');
		$data['text_creating_categories'] = $this->language->get('text_creating_categories');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['column_title'] = $this->language->get('column_title');
		$data['column_link'] = $this->language->get('column_link');
		$data['column_type'] = $this->language->get('column_type');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_sort_order'] = $this->language->get('column_sort_order');
		$data['column_action'] = $this->language->get('column_action');
		$data['column_sticker'] = $this->language->get('column_sticker');

		if (isset($this->request->post['module_speedy_menu_status'])) {
			$data['module_speedy_menu_status'] = $this->request->post['module_speedy_menu_status'];
		}
		else {
			$data['module_speedy_menu_status'] = $this->config->get('module_speedy_menu_status');
		}

		$this->load->model('extension/module/speedy_menu');
		$data['list_menu_results'] = array();
		$filter_data = array('sort' => $sort, 'order' => $order);
		$results = $this->model_extension_module_speedy_menu->getListMenu($filter_data);

		foreach ($results as $result) {
			$data['list_menu_results'][] = array('megamenu_id' => $result['megamenu_id'], 'namemenu' => json_decode($result['namemenu'], true), 'sticker_parent' => json_decode($result['sticker_parent'], true), 'spbg' => $result['sticker_parent_bg'], 'spctext' => $result['spctext'], 'link' => json_decode($result['link'], true), 'menu_type' => $this->language->get('ns_text_type_' . $result['menu_type']), 'status' => $result['status'] ? $this->language->get('text_enabled_icon') : $this->language->get('text_disabled_icon'), 'sort_menu' => $result['sort_menu'], 'edit' => $this->url->link('extension/module/speedy_menu/editItem', 'user_token=' . $this->session->data['user_token'] . '&megamenu_id=' . $result['megamenu_id'] . $url, true));
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		}
		else {
			$url .= '&order=ASC';
		}

		$data['sort_menu_type'] = $this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'] . '&sort=menu_type' . $url, true);
		$data['sort_status'] = $this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
		$data['sort_menu'] = $this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_menu' . $url, true);
		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$file = DIR_SYSTEM . "library/db/db.lic";
		if(@fopen($file, "r")) {
			$this->response->setOutput($this->load->view('extension/module/speedy_menu_list', $data));
		} else {
			$l1 = 'ER';
			$l2 = 'RO';
			$l3 = 'R 9';
			$l4 = '87';
			echo $l1;
			echo $l2;
			echo $l3;
			echo $l4;
		}
	}

	public function getForm()
	{
		$this->document->addStyle('view/stylesheet/dc_megamenu.css');
		$this->document->addScript('view/javascript/jscolor/jscolor.js');
		$data['summernote'] = $this->language->get('summernote');
		$this->load->language('extension/module/speedy_menu');
		$data['heading_title'] = $this->language->get('heading_title');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['text_edit_form'] = $this->language->get('text_edit_form');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_select'] = $this->language->get('text_select');
		$data['text_add'] = $this->language->get('text_add');
		$data['text_delete'] = $this->language->get('text_delete');
		$data['ns_text_add_html'] = $this->language->get('ns_text_add_html');
		$data['ns_text_menu_name'] = $this->language->get('ns_text_menu_name');
		$data['ns_text_additional_menu'] = $this->language->get('ns_text_additional_menu');
		$data['ns_text_menu_link'] = $this->language->get('ns_text_menu_link');
		$data['ns_text_status'] = $this->language->get('ns_text_status');
		$data['ns_text_sticker_parent'] = $this->language->get('ns_text_sticker_parent');
		$data['ns_text_sticker_parent_bg'] = $this->language->get('ns_text_sticker_parent_bg');
		$data['ns_text_sticker_parent_color'] = $this->language->get('ns_text_sticker_parent_color');
		$data['ns_text_sort_menu'] = $this->language->get('ns_text_sort_menu');
		$data['ns_text_thumb'] = $this->language->get('ns_text_thumb');
		$data['ns_text_thumb_hover'] = $this->language->get('ns_text_thumb_hover');
		$data['ns_text_type'] = $this->language->get('ns_text_type');
		$data['ns_text_type_category'] = $this->language->get('ns_text_type_category');
		$data['ns_text_type_html'] = $this->language->get('ns_text_type_html');
		$data['ns_text_type_manufacturer'] = $this->language->get('ns_text_type_manufacturer');
		$data['ns_text_type_information'] = $this->language->get('ns_text_type_information');
		$data['ns_text_type_product'] = $this->language->get('ns_text_type_product');
		$data['ns_text_type_freelink'] = $this->language->get('ns_text_type_freelink');
		$data['ns_text_type_link'] = $this->language->get('ns_text_type_link');
		$data['ns_text_manufacturer'] = $this->language->get('ns_text_manufacturer');
		$data['ns_type_dropdown_list'] = $this->language->get('ns_type_dropdown_list');
		$data['ns_type_manuf_image'] = $this->language->get('ns_type_manuf_image');
		$data['ns_type_manuf_alphabet_image'] = $this->language->get('ns_type_manuf_alphabet_image');
		$data['ns_text_information'] = $this->language->get('ns_text_information');
		$data['ns_text_product_width'] = $this->language->get('ns_text_product_width');
		$data['ns_text_product_height'] = $this->language->get('ns_text_product_height');
		$data['ns_text_product'] = $this->language->get('ns_text_product');
		$data['ns_text_html_description'] = $this->language->get('ns_text_html_description');
		$data['ns_type_dropdown_simple'] = $this->language->get('ns_type_dropdown_simple');
		$data['ns_type_dropdown_full'] = $this->language->get('ns_type_dropdown_full');
		$data['ns_type_dropdown_full_image'] = $this->language->get('ns_type_dropdown_full_image');
		$data['ns_show_sub_categories'] = $this->language->get('ns_show_sub_categories');
		$data['ns_text_category'] = $this->language->get('ns_text_category');
		$data['ns_text_link_options'] = $this->language->get('ns_text_link_options');
		$data['column_3level'] = $this->language->get('column_3level');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		}
		else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['namemenu'])) {
			$data['error_namemenu'] = $this->error['namemenu'];
		}
		else {
			$data['error_namemenu'] = array();
		}

		if (isset($this->error['link'])) {
			$data['error_link'] = $this->error['link'];
		}
		else {
			$data['error_link'] = array();
		}

		if (isset($this->error['menu_type'])) {
			$data['error_menu_type'] = $this->error['menu_type'];
		}
		else {
			$data['error_menu_type'] = '';
		}

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], 'SSL'), 'separator' => false);
		$url = '';

		if (!isset($this->request->get['megamenu_id'])) {
			$data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/speedy_menu/addItem', 'user_token=' . $this->session->data['user_token'] . $url, 'SSL'), 'separator' => ' :: ');
		}
		else {
			$data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/speedy_menu/editItem', 'user_token=' . $this->session->data['user_token'] . '&megamenu_id=' . $this->request->get['megamenu_id'] . $url, 'SSL'), 'separator' => ' :: ');
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (!isset($this->request->get['megamenu_id'])) {
			$data['action'] = $this->url->link('extension/module/speedy_menu/addItem', 'user_token=' . $this->session->data['user_token'] . $url, true);
		}
		else {
			$data['action'] = $this->url->link('extension/module/speedy_menu/editItem', 'user_token=' . $this->session->data['user_token'] . '&megamenu_id=' . $this->request->get['megamenu_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		$this->load->model('tool/image');
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		$menuvh_info = array();

		if (isset($this->request->get['megamenu_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$menuvh_info = $this->model_extension_module_speedy_menu->getItem($this->request->get['megamenu_id']);
		}

		if (!empty($menuvh_info['freelinks_setting'])) {
			$data['sfl'] = json_decode($menuvh_info['freelinks_setting'], true);
		}
		else {
			$data['sfl'] = '';
		}

		if (isset($data['sfl']['freelink_item'])) {
			$freelink_items = $data['sfl']['freelink_item'];
		}
		else {
			$freelink_items = array();
		}

		$data['freelink_items'] = array();

		foreach ($freelink_items as $key => $res_freelink) {
			foreach ($res_freelink as $banner_item) {
				if (is_file(DIR_IMAGE . $banner_item['image'])) {
					$image = $banner_item['image'];
					$thumb = $banner_item['image'];
				}
				else {
					$image = '';
					$thumb = 'no_image.png';
				}

				if (!empty($banner_item['subcat'])) {
					$subcat = $banner_item['subcat'];
				}
				else {
					$subcat = array();
				}

				$data['freelink_items'][$key][] = array('image' => $image, 'thumb' => $this->model_tool_image->resize($thumb, 100, 100), 'title' => $banner_item['title'], 'link' => $banner_item['link'], 'sort' => $banner_item['sort'], 'subcat' => $subcat);
			}
		}

		if (!empty($menuvh_info['use_add_html'])) {
			$data['use_add_html'] = json_decode($menuvh_info['use_add_html'], true);
		}
		else {
			$data['use_add_html'] = '0';
		}

		if (!empty($menuvh_info['add_html'])) {
			$data['add_html'] = json_decode($menuvh_info['add_html'], true);
		}
		else {
			$data['add_html'] = '';
		}

		if (isset($this->request->post['menuvh']['namemenu'])) {
			$data['menuvh']['namemenu'] = $this->request->post['menuvh']['namemenu'];
		}
		else if (!empty($menuvh_info['namemenu'])) {
			$data['menuvh']['namemenu'] = json_decode($menuvh_info['namemenu'], true);
		}
		else {
			$data['menuvh']['namemenu'] = '';
		}

		if (isset($this->request->post['menuvh']['additional_menu'])) {
			$data['menuvh']['additional_menu'] = $this->request->post['menuvh']['additional_menu'];
		}
		else if (!empty($menuvh_info['additional_menu'])) {
			$data['menuvh']['additional_menu'] = $menuvh_info['additional_menu'];
		}
		else {
			$data['menuvh']['additional_menu'] = '';
		}

		if (isset($this->request->post['menuvh']['link'])) {
			$data['menuvh']['link'] = $this->request->post['menuvh']['link'];
		}
		else if (!empty($menuvh_info['link'])) {
			$data['menuvh']['link'] = json_decode($menuvh_info['link'], true);
		}
		else {
			$data['menuvh']['link'] = '';
		}

		if (isset($this->request->post['menuvh']['menu_type'])) {
			$data['menuvh']['menu_type'] = $this->request->post['menuvh']['menu_type'];
		}
		else if (!empty($menuvh_info['menu_type'])) {
			$data['menuvh']['menu_type'] = $menuvh_info['menu_type'];
		}
		else {
			$data['menuvh']['menu_type'] = '';
		}

		if (isset($this->request->post['menuvh']['status'])) {
			$data['menuvh']['status'] = $this->request->post['menuvh']['status'];
		}
		else if (!empty($menuvh_info['status'])) {
			$data['menuvh']['status'] = $menuvh_info['status'];
		}
		else {
			$data['menuvh']['status'] = '0';
		}

		if (isset($this->request->post['menuvh']['sticker_parent'])) {
			$data['menuvh']['sticker_parent'] = $this->request->post['menuvh']['sticker_parent'];
		}
		else if (!empty($menuvh_info['sticker_parent'])) {
			$data['menuvh']['sticker_parent'] = json_decode($menuvh_info['sticker_parent'], true);
		}
		else {
			$data['menuvh']['sticker_parent'] = '';
		}

		if (!empty($menuvh_info['sticker_parent_bg'])) {
			$data['menuvh']['sticker_parent_bg'] = $menuvh_info['sticker_parent_bg'];
		}
		else {
			$data['menuvh']['sticker_parent_bg'] = '';
		}

		if (!empty($menuvh_info['spctext'])) {
			$data['menuvh']['spctext'] = $menuvh_info['spctext'];
		}
		else {
			$data['menuvh']['spctext'] = '';
		}

		if (isset($this->request->post['menuvh']['sort_menu'])) {
			$data['menuvh']['sort_menu'] = $this->request->post['menuvh']['sort_menu'];
		}
		else if (!empty($menuvh_info['sort_menu'])) {
			$data['menuvh']['sort_menu'] = $menuvh_info['sort_menu'];
		}
		else {
			$data['menuvh']['sort_menu'] = '';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['menuvh']['image'])) {
			$data['menuvh']['image'] = $this->request->post['menuvh']['image'];
		}
		else if (!empty($menuvh_info['image'])) {
			$data['menuvh']['image'] = $menuvh_info['image'];
		}
		else {
			$data['menuvh']['image'] = '';
		}

		if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
			$data['menuvh']['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
		}
		else if (!empty($menuvh_info) && is_file(DIR_IMAGE . $menuvh_info['image'])) {
			$data['menuvh']['thumb'] = $this->model_tool_image->resize($menuvh_info['image'], 100, 100);
		}
		else {
			$data['menuvh']['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['menuvh']['image_hover'])) {
			$data['menuvh']['image_hover'] = $this->request->post['menuvh']['image_hover'];
		}
		else if (!empty($menuvh_info['image_hover'])) {
			$data['menuvh']['image_hover'] = $menuvh_info['image_hover'];
		}
		else {
			$data['menuvh']['image_hover'] = '';
		}

		if (isset($this->request->post['image_hover']) && is_file(DIR_IMAGE . $this->request->post['image_hover'])) {
			$data['menuvh']['thumb_hover'] = $this->model_tool_image->resize($this->request->post['image_hover'], 100, 100);
		}
		else if (!empty($menuvh_info) && is_file(DIR_IMAGE . $menuvh_info['image_hover'])) {
			$data['menuvh']['thumb_hover'] = $this->model_tool_image->resize($menuvh_info['image_hover'], 100, 100);
		}
		else {
			$data['menuvh']['thumb_hover'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (!empty($menuvh_info['informations_list'])) {
			$data['menuvh']['informations_sel_id'] = json_decode($menuvh_info['informations_list'], true);
		}
		else {
			$data['menuvh']['informations_sel_id'] = array();
		}

		if (!empty($menuvh_info['html_setting'])) {
			$data['html_block'] = json_decode($menuvh_info['html_setting'], true);
		}
		else {
			$data['html_block'] = '';
		}

		if (!empty($menuvh_info['manufacturers_setting'])) {
			$manufacturers_setting = json_decode($menuvh_info['manufacturers_setting'], true);
		}
		else {
			$manufacturers_setting = array();
		}

		if (!empty($manufacturers_setting['manufacturers_list'])) {
			$data['manufacturers_sel_id'] = $manufacturers_setting['manufacturers_list'];
		}
		else {
			$data['manufacturers_sel_id'] = array();
		}

		if (!empty($manufacturers_setting['type_manuf'])) {
			$data['type_manuf'] = $manufacturers_setting['type_manuf'];
		}
		else {
			$data['type_manuf'] = 'type_image';
		}

		if (!empty($menuvh_info['link_setting'])) {
			$data['use_target_blank'] = $menuvh_info['link_setting'];
		}
		else {
			$data['use_target_blank'] = '0';
		}

		$this->load->model('catalog/category');

		if (!empty($menuvh_info['category_setting'])) {
			$category_setting = json_decode($menuvh_info['category_setting'], true);
		}
		else {
			$category_setting = array();
		}

		if (!empty($category_setting['variant_category'])) {
			$data['variant_category'] = $category_setting['variant_category'];
		}
		else {
			$data['variant_category'] = 'simple';
		}

		if (!empty($category_setting['show_sub_category'])) {
			$data['show_sub_category'] = $category_setting['show_sub_category'];
		}
		else {
			$data['show_sub_category'] = '0';
		}

		if (!empty($category_setting['category_img_width'])) {
			$data['category_img_width'] = $category_setting['category_img_width'];
		}
		else {
			$data['category_img_width'] = '50';
		}

		if (!empty($category_setting['category_img_height'])) {
			$data['category_img_height'] = $category_setting['category_img_height'];
		}
		else {
			$data['category_img_height'] = '50';
		}

		$data['category_list_sel'] = array();

		if (!empty($category_setting['category_list'])) {
			foreach ($category_setting['category_list'] as $category_id) {
				$category = $this->model_catalog_category->getCategory((int) $category_id);

				if (isset($category['category_id'])) {
					$data['category_list_sel'][] = array('category_id' => $category['category_id'], 'name' => $category['path'] . ' > ' . $category['name']);
				}
			}
		}

		$this->load->model('catalog/product');

		if (!empty($menuvh_info['products_setting'])) {
			$products_setting = json_decode($menuvh_info['products_setting'], true);
		}
		else {
			$products_setting = array();
		}

		if (!empty($products_setting['product_width'])) {
			$data['product_width'] = $products_setting['product_width'];
		}
		else {
			$data['product_width'] = '50';
		}

		if (!empty($products_setting['product_height'])) {
			$data['product_height'] = $products_setting['product_height'];
		}
		else {
			$data['product_height'] = '50';
		}

		$data['products_list_sel'] = array();

		if (!empty($products_setting['products_list'])) {
			foreach ($products_setting['products_list'] as $product_id) {
				$product = $this->model_catalog_product->getProduct((int) $product_id);

				if (isset($product['product_id'])) {
					$data['products_list_sel'][] = array('product_id' => $product['product_id'], 'name' => $product['name']);
				}
			}
		}

		$this->load->model('catalog/manufacturer');
		$this->load->model('catalog/information');
		$data['manufacturers_list'] = array();
		$results_m = $this->model_catalog_manufacturer->getManufacturers(array('start' => 0, 'limit' => 999999, 'sort' => 'name'));

		foreach ($results_m as $result) {
			$data['manufacturers_list'][] = array('manufacturer_id' => $result['manufacturer_id'], 'name' => $result['name']);
		}

		$data['informations_list'] = array();
		$results_i = $this->model_catalog_information->getInformations(array('start' => 0, 'limit' => 999999, 'sort' => 'title'));

		foreach ($results_i as $result) {
			$data['informations_list'][] = array('information_id' => $result['information_id'], 'title' => $result['title']);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/module/speedy_menu_form', $data));
	}

	public function popupTypeMenu()
	{
		$this->load->language('extension/module/speedy_menu');
		$data['lang_id'] = $this->config->get('config_language_id');
		$data['user_token'] = $this->session->data['user_token'];
		$data['text_delete'] = $this->language->get('text_delete');
		$data['button_save'] = $this->language->get('button_save');
		$data['text_select'] = $this->language->get('text_select');
		$data['text_edit_setting'] = $this->language->get('text_edit_setting');
		$data['ns_text_add_html'] = $this->language->get('ns_text_add_html');
		$data['ns_text_type'] = $this->language->get('ns_text_type');
		$data['ns_text_type_category'] = $this->language->get('ns_text_type_category');
		$data['ns_text_type_html'] = $this->language->get('ns_text_type_html');
		$data['ns_text_type_manufacturer'] = $this->language->get('ns_text_type_manufacturer');
		$data['ns_text_type_information'] = $this->language->get('ns_text_type_information');
		$data['ns_text_type_product'] = $this->language->get('ns_text_type_product');
		$data['ns_text_type_freelink'] = $this->language->get('ns_text_type_freelink');
		$data['ns_text_type_link'] = $this->language->get('ns_text_type_link');
		$data['ns_text_manufacturer'] = $this->language->get('ns_text_manufacturer');
		$data['ns_type_dropdown_list'] = $this->language->get('ns_type_dropdown_list');
		$data['ns_type_manuf_image'] = $this->language->get('ns_type_manuf_image');
		$data['ns_type_manuf_alphabet_image'] = $this->language->get('ns_type_manuf_alphabet_image');
		$data['ns_text_information'] = $this->language->get('ns_text_information');
		$data['ns_text_product_width'] = $this->language->get('ns_text_product_width');
		$data['ns_text_product_height'] = $this->language->get('ns_text_product_height');
		$data['ns_text_product'] = $this->language->get('ns_text_product');
		$data['ns_text_html_description'] = $this->language->get('ns_text_html_description');
		$data['ns_type_dropdown_simple'] = $this->language->get('ns_type_dropdown_simple');
		$data['ns_type_dropdown_full'] = $this->language->get('ns_type_dropdown_full');
		$data['ns_type_dropdown_full_image'] = $this->language->get('ns_type_dropdown_full_image');
		$data['ns_show_sub_categories'] = $this->language->get('ns_show_sub_categories');
		$data['ns_text_category'] = $this->language->get('ns_text_category');
		$data['ns_text_link_options'] = $this->language->get('ns_text_link_options');
		$data['column_3level'] = $this->language->get('column_3level');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['ns_text_thumb'] = $this->language->get('ns_text_thumb');
		$data['ns_text_menu_name'] = $this->language->get('ns_text_menu_name');
		$data['text_add'] = $this->language->get('text_add');
		$data['ns_text_sort_menu'] = $this->language->get('ns_text_sort_menu');
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		$this->load->model('tool/image');
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->get['megamenu_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$this->load->model('extension/module/speedy_menu');
			$menuvh_info = array();
			$menuvh_info = $this->model_extension_module_speedy_menu->getItem($this->request->get['megamenu_id']);

			if (!empty($menuvh_info['freelinks_setting'])) {
				$data['sfl'] = json_decode($menuvh_info['freelinks_setting'], true);
			}
			else {
				$data['sfl'] = '';
			}

			if (isset($data['sfl']['freelink_item'])) {
				$freelink_items = $data['sfl']['freelink_item'];
			}
			else {
				$freelink_items = array();
			}

			$data['freelink_items'] = array();

			foreach ($freelink_items as $key => $res_freelink) {
				foreach ($res_freelink as $banner_item) {
					if (is_file(DIR_IMAGE . $banner_item['image'])) {
						$image = $banner_item['image'];
						$thumb = $banner_item['image'];
					}
					else {
						$image = '';
						$thumb = 'no_image.png';
					}

					if (!empty($banner_item['subcat'])) {
						$subcat = $banner_item['subcat'];
					}
					else {
						$subcat = array();
					}

					$data['freelink_items'][$key][] = array('image' => $image, 'thumb' => $this->model_tool_image->resize($thumb, 100, 100), 'title' => $banner_item['title'], 'link' => $banner_item['link'], 'sort' => $banner_item['sort'], 'subcat' => $subcat);
				}
			}

			if (!empty($menuvh_info['namemenu'])) {
				$data['namemenu'] = json_decode($menuvh_info['namemenu'], true);
			}
			else {
				$data['namemenu'] = '0';
			}

			if (!empty($menuvh_info['use_add_html'])) {
				$data['use_add_html'] = json_decode($menuvh_info['use_add_html'], true);
			}
			else {
				$data['use_add_html'] = '0';
			}

			if (!empty($menuvh_info['add_html'])) {
				$data['add_html'] = json_decode($menuvh_info['add_html'], true);
			}
			else {
				$data['add_html'] = '';
			}

			if (!empty($menuvh_info['link'])) {
				$data['menuvh']['link'] = json_decode($menuvh_info['link'], true);
			}
			else {
				$data['menuvh']['link'] = '';
			}

			if (!empty($menuvh_info['menu_type'])) {
				$data['menuvh']['menu_type'] = $menuvh_info['menu_type'];
			}
			else {
				$data['menuvh']['menu_type'] = '';
			}

			if (!empty($menuvh_info['status'])) {
				$data['menuvh']['status'] = $menuvh_info['status'];
			}
			else {
				$data['menuvh']['status'] = '0';
			}

			if (!empty($menuvh_info['sticker_parent'])) {
				$data['menuvh']['sticker_parent'] = json_decode($menuvh_info['sticker_parent'], true);
			}
			else {
				$data['menuvh']['sticker_parent'] = '';
			}

			if (!empty($menuvh_info['sticker_parent_bg'])) {
				$data['menuvh']['sticker_parent_bg'] = $menuvh_info['sticker_parent_bg'];
			}
			else {
				$data['menuvh']['sticker_parent_bg'] = '';
			}

			if (!empty($menuvh_info['spctext'])) {
				$data['menuvh']['spctext'] = $menuvh_info['spctext'];
			}
			else {
				$data['menuvh']['spctext'] = '';
			}

			if (!empty($menuvh_info['informations_list'])) {
				$data['menuvh']['informations_sel_id'] = json_decode($menuvh_info['informations_list'], true);
			}
			else {
				$data['menuvh']['informations_sel_id'] = array();
			}

			if (!empty($menuvh_info['html_setting'])) {
				$data['html_block'] = json_decode($menuvh_info['html_setting'], true);
			}
			else {
				$data['html_block'] = '';
			}

			if (!empty($menuvh_info['manufacturers_setting'])) {
				$manufacturers_setting = json_decode($menuvh_info['manufacturers_setting'], true);
			}
			else {
				$manufacturers_setting = array();
			}

			if (!empty($manufacturers_setting['manufacturers_list'])) {
				$data['manufacturers_sel_id'] = $manufacturers_setting['manufacturers_list'];
			}
			else {
				$data['manufacturers_sel_id'] = array();
			}

			if (!empty($manufacturers_setting['type_manuf'])) {
				$data['type_manuf'] = $manufacturers_setting['type_manuf'];
			}
			else {
				$data['type_manuf'] = 'type_image';
			}

			if (!empty($menuvh_info['link_setting'])) {
				$data['use_target_blank'] = $menuvh_info['link_setting'];
			}
			else {
				$data['use_target_blank'] = '0';
			}

			$this->load->model('catalog/category');

			if (!empty($menuvh_info['category_setting'])) {
				$category_setting = json_decode($menuvh_info['category_setting'], true);
			}
			else {
				$category_setting = array();
			}

			if (!empty($category_setting['variant_category'])) {
				$data['variant_category'] = $category_setting['variant_category'];
			}
			else {
				$data['variant_category'] = 'simple';
			}

			if (!empty($category_setting['show_sub_category'])) {
				$data['show_sub_category'] = $category_setting['show_sub_category'];
			}
			else {
				$data['show_sub_category'] = '0';
			}

			if (!empty($category_setting['category_img_width'])) {
				$data['category_img_width'] = $category_setting['category_img_width'];
			}
			else {
				$data['category_img_width'] = '50';
			}

			if (!empty($category_setting['category_img_height'])) {
				$data['category_img_height'] = $category_setting['category_img_height'];
			}
			else {
				$data['category_img_height'] = '50';
			}

			$data['category_list_sel'] = array();

			if (!empty($category_setting['category_list'])) {
				foreach ($category_setting['category_list'] as $category_id) {
					$category = $this->model_catalog_category->getCategory((int) $category_id);

					if (isset($category['category_id'])) {
						$data['category_list_sel'][] = array('category_id' => $category['category_id'], 'name' => $category['path'] . ' > ' . $category['name']);
					}
				}
			}

			$this->load->model('catalog/product');

			if (!empty($menuvh_info['products_setting'])) {
				$products_setting = json_decode($menuvh_info['products_setting'], true);
			}
			else {
				$products_setting = array();
			}

			if (!empty($products_setting['product_width'])) {
				$data['product_width'] = $products_setting['product_width'];
			}
			else {
				$data['product_width'] = '50';
			}

			if (!empty($products_setting['product_height'])) {
				$data['product_height'] = $products_setting['product_height'];
			}
			else {
				$data['product_height'] = '50';
			}

			$data['products_list_sel'] = array();

			if (!empty($products_setting['products_list'])) {
				foreach ($products_setting['products_list'] as $product_id) {
					$product = $this->model_catalog_product->getProduct((int) $product_id);

					if (isset($product['product_id'])) {
						$data['products_list_sel'][] = array('product_id' => $product['product_id'], 'name' => $product['name']);
					}
				}
			}

			$this->load->model('catalog/manufacturer');
			$this->load->model('catalog/information');
			$data['manufacturers_list'] = array();
			$results_m = $this->model_catalog_manufacturer->getManufacturers(array('start' => 0, 'limit' => 999999, 'sort' => 'name'));

			foreach ($results_m as $result) {
				$data['manufacturers_list'][] = array('manufacturer_id' => $result['manufacturer_id'], 'name' => $result['name']);
			}

			$data['informations_list'] = array();
			$results_i = $this->model_catalog_information->getInformations(array('start' => 0, 'limit' => 999999, 'sort' => 'title'));

			foreach ($results_i as $result) {
				$data['informations_list'][] = array('information_id' => $result['information_id'], 'title' => $result['title']);
			}

			$data['megamenu_id'] = $this->request->get['megamenu_id'];
		}

		$this->response->setOutput($this->load->view('extension/module/speedy_menu/mm_popup_type_menu', $data));
	}

	public function saveTypeMenu()
	{
		$this->load->language('extension/module/speedy_menu');
		$this->load->model('extension/module/speedy_menu');
		$json = array();

		if (isset($this->request->get['megamenu_id'])) {
			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateFormTypeMenu()) {
				$this->model_extension_module_speedy_menu->saveTypeMenu($this->request->get['megamenu_id'], $this->request->post['menuvh']);
				$json['success'] = $this->language->get('text_success');
				return $this->response->setOutput(json_encode($json));
			}

			$json['warning'] = $this->error;
			return $this->response->setOutput(json_encode($json));
		}

		$json['warning'] = $this->language->get('error_warning');
		return $this->response->setOutput(json_encode($json));
	}

	public function popupLink()
	{
		$this->load->language('extension/module/speedy_menu');
		$data['user_token'] = $this->session->data['user_token'];
		$data['ns_text_menu_link'] = $this->language->get('ns_text_menu_link');
		$data['button_save'] = $this->language->get('button_save');
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->get['megamenu_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$this->load->model('extension/module/speedy_menu');
			$menuvh_info = array();
			$menuvh_info = $this->model_extension_module_speedy_menu->getItem($this->request->get['megamenu_id']);

			if (!empty($menuvh_info['link'])) {
				$data['menuvh']['link'] = json_decode($menuvh_info['link'], true);
			}
			else {
				$data['menuvh']['link'] = '';
			}

			$data['megamenu_id'] = $this->request->get['megamenu_id'];
		}

		$this->response->setOutput($this->load->view('extension/module/speedy_menu/mm_popup_link', $data));
	}

	public function saveLinkMenu()
	{
		$this->load->language('extension/module/speedy_menu');
		$this->load->model('extension/module/speedy_menu');
		$json = array();

		if (isset($this->request->get['megamenu_id'])) {
			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validatePopup()) {
				$this->model_extension_module_speedy_menu->saveLinkMenu($this->request->get['megamenu_id'], $this->request->post['menuvh']);
				$json['success'] = $this->language->get('text_success');
				return $this->response->setOutput(json_encode($json));
			}

			$json['warning'] = $this->error;
			return $this->response->setOutput(json_encode($json));
		}

		$json['warning'] = $this->language->get('error_warning');
		return $this->response->setOutput(json_encode($json));
	}

	public function popupSticker()
	{
		$this->load->language('extension/module/speedy_menu');
		$data['user_token'] = $this->session->data['user_token'];
		$data['ns_setting_sticker'] = $this->language->get('ns_setting_sticker');
		$data['ns_text_sticker_parent'] = $this->language->get('ns_text_sticker_parent');
		$data['ns_text_sticker_parent_bg'] = $this->language->get('ns_text_sticker_parent_bg');
		$data['ns_text_sticker_parent_color'] = $this->language->get('ns_text_sticker_parent_color');
		$data['button_save'] = $this->language->get('button_save');
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->get['megamenu_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$this->load->model('extension/module/speedy_menu');
			$menuvh_info = array();
			$menuvh_info = $this->model_extension_module_speedy_menu->getItem($this->request->get['megamenu_id']);

			if (!empty($menuvh_info['sticker_parent'])) {
				$data['menuvh']['sticker_parent'] = json_decode($menuvh_info['sticker_parent'], true);
			}
			else {
				$data['menuvh']['sticker_parent'] = '';
			}

			if (!empty($menuvh_info['sticker_parent_bg'])) {
				$data['menuvh']['sticker_parent_bg'] = $menuvh_info['sticker_parent_bg'];
			}
			else {
				$data['menuvh']['sticker_parent_bg'] = '';
			}

			if (!empty($menuvh_info['spctext'])) {
				$data['menuvh']['spctext'] = $menuvh_info['spctext'];
			}
			else {
				$data['menuvh']['spctext'] = '';
			}

			$data['megamenu_id'] = $this->request->get['megamenu_id'];
		}

		$this->response->setOutput($this->load->view('extension/module/speedy_menu/mm_popup_sticker', $data));
	}

	public function saveStickerMenu()
	{
		$this->load->language('extension/module/speedy_menu');
		$this->load->model('extension/module/speedy_menu');
		$json = array();

		if (isset($this->request->get['megamenu_id'])) {
			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validatePopup()) {
				$this->model_extension_module_speedy_menu->saveStickerMenu($this->request->get['megamenu_id'], $this->request->post['menuvh']);
				$json['success'] = $this->language->get('text_success');
				return $this->response->setOutput(json_encode($json));
			}

			$json['warning'] = $this->error;
			return $this->response->setOutput(json_encode($json));
		}

		$json['warning'] = $this->language->get('error_warning');
		return $this->response->setOutput(json_encode($json));
	}

	public function popupNameItem()
	{
		$this->load->language('extension/module/speedy_menu');
		$data['user_token'] = $this->session->data['user_token'];
		$data['ns_text_menu_name'] = $this->language->get('ns_text_menu_name');
		$data['button_save'] = $this->language->get('button_save');
		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->get['megamenu_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$this->load->model('extension/module/speedy_menu');
			$menuvh_info = array();
			$menuvh_info = $this->model_extension_module_speedy_menu->getItem($this->request->get['megamenu_id']);

			if (!empty($menuvh_info['namemenu'])) {
				$data['menuvh']['namemenu'] = json_decode($menuvh_info['namemenu'], true);
			}
			else {
				$data['menuvh']['namemenu'] = '';
			}

			$data['megamenu_id'] = $this->request->get['megamenu_id'];
		}

		$this->response->setOutput($this->load->view('extension/module/speedy_menu/mm_popup_name_item', $data));
	}

	public function saveNameItem()
	{
		$this->load->language('extension/module/speedy_menu');
		$this->load->model('extension/module/speedy_menu');
		$json = array();

		if (isset($this->request->get['megamenu_id'])) {
			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validatePopupNameItem()) {
				$this->model_extension_module_speedy_menu->saveNameItem($this->request->get['megamenu_id'], $this->request->post['menuvh']);
				$json['success'] = $this->language->get('text_success');
				return $this->response->setOutput(json_encode($json));
			}

			$json['warning'] = $this->error;
			return $this->response->setOutput(json_encode($json));
		}

		$json['warning'] = $this->language->get('error_warning');
		return $this->response->setOutput(json_encode($json));
	}

	public function addItem()
	{
		$this->load->language('extension/module/speedy_menu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/module/speedy_menu');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_module_speedy_menu->addItem($this->request->post['menuvh']);
			$this->session->data['success'] = $this->language->get('text_success');
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function editItem()
	{
		$this->load->language('extension/module/speedy_menu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/module/speedy_menu');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_module_speedy_menu->editItem($this->request->get['megamenu_id'], $this->request->post['menuvh']);
			$this->session->data['success'] = $this->language->get('text_success');
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function deleteItem()
	{
		$this->document->addStyle('view/stylesheet/dc_megamenu.css');
		$this->document->addScript('view/javascript/jscolor/jscolor.js');
		$this->load->language('extension/module/speedy_menu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/module/speedy_menu');

		if (isset($this->request->post['selected']) && $this->validateDeleteItem()) {
			foreach ($this->request->post['selected'] as $megamenu_id) {
				$this->model_extension_module_speedy_menu->deleteItem($megamenu_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/module/speedy_menu', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	public function changeStatus()
	{
		$data['user_token'] = $this->session->data['user_token'];
		$this->load->model('extension/module/speedy_menu');
		$this->load->language('extension/module/speedy_menu');
		$output = '';

		if (isset($this->request->get['object_id']) && $this->validatePopup()) {
			$get_request = explode('-', $this->request->get['object_id']);

			if (count($get_request) == 2) {
				$column_name = $get_request[0];
				$tabs_ns_id = $get_request[1];
				$result = $this->model_extension_module_speedy_menu->getItem($tabs_ns_id);

				if ($result[$column_name]) {
					$this->model_extension_module_speedy_menu->changeStatus($tabs_ns_id, 0);
				}
				else {
					$this->model_extension_module_speedy_menu->changeStatus($tabs_ns_id, 1);
				}

				$result = $this->model_extension_module_speedy_menu->getItem($tabs_ns_id);
				$output['success'] = $result[$column_name] ? $this->language->get('text_enabled_icon') : $this->language->get('text_disabled_icon');
			}
		}
		else {
			$output['error'] = $this->error;
		}

		return $this->response->setOutput(json_encode($output));
	}

	protected function validatePopup()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_menu')) {
			$this->error = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	protected function validatePopupNameItem()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_menu')) {
			$this->error = $this->language->get('error_permission');
		}

		foreach ($this->request->post['menuvh']['namemenu'] as $language_id => $value) {
			if ((utf8_strlen($value) < 3) || (64 < utf8_strlen($value))) {
				$this->error = $this->language->get('error_namemenu');
			}
		}

		return !$this->error;
	}

	protected function validateFormTypeMenu()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_menu')) {
			$this->error = $this->language->get('error_permission');
		}

		if (isset($this->request->post['menuvh']['menu_type']) && ($this->request->post['menuvh']['menu_type'] == '0')) {
			$this->error = $this->language->get('error_menu_type');
		}

		return !$this->error;
	}

	protected function validateDeleteItem()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_menu')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	protected function validateForm()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_menu')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['menuvh']['namemenu'] as $language_id => $value) {
			if ((utf8_strlen($value) < 3) || (64 < utf8_strlen($value))) {
				$this->error['namemenu'][$language_id] = $this->language->get('error_namemenu');
			}
		}

		if (isset($this->request->post['menuvh']['menu_type']) && ($this->request->post['menuvh']['menu_type'] == 'link')) {
			foreach ($this->request->post['menuvh']['link'] as $language_id => $value) {
				if (empty($value)) {
					$this->error['link'][$language_id] = $this->language->get('error_link');
				}
			}
		}

		if (isset($this->request->post['menuvh']['menu_type']) && ($this->request->post['menuvh']['menu_type'] == '0')) {
			$this->error['menu_type'] = $this->language->get('error_menu_type');
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validate()
	{
		if (!$this->user->hasPermission('modify', 'extension/module/speedy_menu')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function getCategoryDescriptions($category_id)
	{
		$category_description_data = array();
		$query = $this->db->query('SELECT * FROM ' . DB_PREFIX . 'category_description WHERE category_id = \'' . (int) $category_id . '\'');

		foreach ($query->rows as $result) {
			$category_description_data[$result['language_id']] = $result['name'];
		}

		return $category_description_data;
	}
	public function getCategoryImages($category_id)
	{
		$category_image_data = array();
		$query = $this->db->query('SELECT * FROM ' . DB_PREFIX . 'category WHERE category_id = \'' . (int) $category_id . '\'');

		foreach ($query->rows as $result) {
			$category_image_data = $result['image'];
		}

		return $category_image_data;
	}

	public function getCategories($parent_id = 0)
	{
		$query = $this->db->query('SELECT * FROM ' . DB_PREFIX . 'category c ' . "\n\t\t" . 'LEFT JOIN ' . DB_PREFIX . 'category_description cd ON (c.category_id = cd.category_id) ' . "\n\t\t" . 'LEFT JOIN ' . DB_PREFIX . 'category_to_store c2s ON (c.category_id = c2s.category_id) ' . "\n\t\t" . 'WHERE c.parent_id = \'' . (int) $parent_id . '\' ' . "\n\t\t" . 'AND cd.language_id = \'' . (int) $this->config->get('config_language_id') . '\' ' . "\n\t\t" . 'AND c2s.store_id = \'' . (int) $this->config->get('config_store_id') . '\'  ' . "\n\t\t" . 'AND c.status = \'1\' ORDER BY c.sort_order');
		return $query->rows;
	}

	public function getCategoriesUrlAlias($category_id)
	{
		$category_seo_url_data = array();
		$query = $this->db->query('SELECT * FROM ' . DB_PREFIX . 'seo_url WHERE query = \'category_id=' . (int) $category_id . '\'');

		foreach ($query->rows as $result) {
			$category_seo_url_data[$result['language_id']] = $result['keyword'];
		}

		return $category_seo_url_data;
	}

	public function autocategoryadd()
	{
		$json = array();

		$this->load->language('extension/module/speedy_menu');

		$this->load->model('localisation/language');

		$languages = $this->model_localisation_language->getLanguages();

		if (isset($this->request->get['autocategoryadd']) && ($this->request->get['autocategoryadd'] != '')) {
			$category_auto = $this->getCategories(0);

			foreach ($category_auto as $category) {
				$children_data = array();
				$category_parent_name_data = array();

				if ($category['category_id']) {
					$category_parent_name = $this->getCategoryDescriptions($category['category_id']);
					$category_parent_thumb = $this->getCategoryImages($category['category_id']);
					$category_url_alias = $this->getCategoriesUrlAlias($category['category_id']);

					foreach ($languages as $language) {
						if (isset($category_url_alias[$language['language_id']])) {
							$category_url_alias_keyword[$language['language_id']] = $category_url_alias[$language['language_id']];
						}
						else {
							$category_url_alias_keyword[$language['language_id']] = '';
						}
					}

					$children = $this->getCategories($category['category_id']);

					foreach ($children as $key => $child) {
						$children_data[$key] = $child['category_id'];
					}
				}

				$category_setting = array('variant_category' => 'simple', 'show_sub_category' => '1', 'category_img_width' => '50', 'category_img_height' => '50', 'category_list' => $children_data);
				$categories_data_all[] = array('category_id' => $category['category_id'], 'keyword' => $category_url_alias_keyword, 'name' => $category_parent_name, 'thumb' => $category_parent_thumb, 'category_setting' => $category_setting);
			}

			$data['config_menu_items_new'] = array();

			foreach ($categories_data_all as $key => $category) {
				$data['config_menu_items_new'][] = array('namemenu' => $category['name'], 'additional_menu' => 'left', 'link' => $category['keyword'], 'menu_type' => 'category', 'status' => '1', 'sticker_parent' => '', 'sticker_parent_bg' => '', 'spctext' => '', 'sort_menu' => $key, 'image' => $category['thumb'], 'image_hover' => '', 'informations_list' => '', 'manufacturers_setting' => '', 'products_setting' => '', 'link_setting' => '', 'category_setting' => $category['category_setting'], 'html_setting' => '', 'freelinks_setting' => '', 'use_add_html' => '0', 'add_html' => '');
			}

			$this->load->model('extension/module/speedy_menu');
			$this->model_extension_module_speedy_menu->createsItem($data['config_menu_items_new']);
			$json['success'] = $this->language->get('text_success');
			$this->session->data['success'] = $this->language->get('text_success');
		}
		else {
			$json['warning'] = $this->error;
		}

		return $this->response->setOutput(json_encode($json));
	}

	public function install()
	{
		$this->load->model('extension/module/speedy_menu');
		$this->model_extension_module_speedy_menu->install();
	}

}