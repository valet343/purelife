<?php
class ControllerCommonSpeedyMenu extends Controller {
	public function index() {
		$megamenu_setting = $this->config->get('module_' . $this->config->get('config_theme') . '_menu_status');
		
		if($megamenu_setting == '1'){
			
			$this->load->language('common/header');
			// $data['text_category'] = $this->language->get('text_category');	
			$this->load->model('extension/module/speedy_menu');
			$data['hmenu_type'] = 1;
			$data['type_mobile_menu'] = 1;
			$data['main_menu_mask'] = 1;
			$data['config_main_menu_selection'] = 1;
			$data['config_fixed_panel_top'] = 1;
			$data['lang_id'] = $this->config->get('config_language_id');
			$data['items']=array();
			$data['additional']=array();

			// $menu_items_cache = $this->cache->get('mmheader.' . (int)$this->config->get('config_language_id').'.'. (int)$this->config->get('config_store_id'));
					
				if (!empty($menu_items_cache)) {
					$data['items'] = $menu_items_cache;
					$config_menu_item = $this->model_extension_module_speedy_menu->getItemsMenu();
					if(!empty($config_menu_item)) {
						$menu_items = $config_menu_item;
					} else {
						$menu_items = array();
					}		
					
					foreach($menu_items as $datamenu){
						if($datamenu['additional_menu']=='additional' && $datamenu['status'] !='0')	{
							$data['additional'][] = 'additional';
						}			
					}
					
					$data['megamenu_status']=true;		
				} else {
					$config_menu_item = $this->model_extension_module_speedy_menu->getItemsMenu();
					
					if(!empty($config_menu_item)) {
						$menu_items = $config_menu_item;
					} else {
						$menu_items = array();
					}
					
					foreach($menu_items as $datamenu){
						if($datamenu['additional_menu']=="additional" && $datamenu['status'] !='0')	{
							$data['additional'][] = 'additional';
						}
						if($datamenu['menu_type']=="link" && $datamenu['status'] !='0')	{
							$data['items'][]=$this->model_extension_module_speedy_menu->MegaMenuTypeLink($datamenu);
						}
						if($datamenu['menu_type']=="information" && $datamenu['status'] !='0')	{
							$data['items'][]=$this->model_extension_module_speedy_menu->MegaMenuTypeInformation($datamenu);
						}
						if($datamenu['menu_type']=="manufacturer" && $datamenu['status'] !='0')	{
							$data['items'][]=$this->model_extension_module_speedy_menu->MegaMenuTypeManufacturer($datamenu);
						}
						if($datamenu['menu_type']=="product" && $datamenu['status'] !='0'){
							$data['items'][]=$this->model_extension_module_speedy_menu->MegaMenuTypeProduct($datamenu);
						}
						if($datamenu['menu_type']=="category" && $datamenu['status'] !='0')	{
							$data['items'][] = $this->model_extension_module_speedy_menu->MegaMenuTypeCategory($datamenu);
						}
						if($datamenu['menu_type']=="html" && $datamenu['status'] !='0')	{
							$data['items'][]=$this->model_extension_module_speedy_menu->MegaMenuTypeHtml($datamenu);
						}
						if($datamenu['menu_type']=="freelink" && $datamenu['status'] !='0')	{
							$data['items'][]=$this->model_extension_module_speedy_menu->MegaMenuTypeFreeLink($datamenu);
						}
					}
					
					$menu_items_cache = $data['items'];	
					// $this->cache->set('mmheader.' . (int)$this->config->get('config_language_id') . '.'. (int)$this->config->get('config_store_id'), $menu_items_cache);		
					$data['megamenu_status']=true;
				
				}		
			} else { 
				$data['megamenu_status']=false;
			}

		return $this->load->view('common/speedy_menu', $data);
	}
}
