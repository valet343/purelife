<?php
class ModelExtensionModuleFoundCheaper extends Model {
	
	public function addOrder($data) {
		   $this->db->query("INSERT INTO " . DB_PREFIX . "found_cheaper SET id = '" . (int)$data['id'] . "', product_id = '" . (int)$data['product_id'] . "', product_name='" . $this->db->escape($data['product_name']) . "', product_model='" . $this->db->escape($data['product_model']) . "', product_image='" . $this->db->escape($data['product_image']) . "', link='" . $this->db->escape($data['link']) . "', telephone='" . $this->db->escape($data['telephone']) . "', date_added = NOW()");
	}

}