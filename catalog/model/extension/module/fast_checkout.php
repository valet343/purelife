<?php
class ModelExtensionModuleFastCheckout extends Model {
	
	public function addOrder($data) {
		   $this->db->query("INSERT INTO " . DB_PREFIX . "fast_checkout SET id = '" . (int)$data['id'] . "', product_id = '" . (int)$data['product_id'] . "', product_name='" . $this->db->escape($data['product_name']) . "', product_model='" . $this->db->escape($data['product_model']) . "', product_image='" . $this->db->escape($data['product_image']) . "', quantity='" . $this->db->escape($data['quantity']) . "', telephone='" . $this->db->escape($data['telephone']) . "', date_added = NOW()");
	}

}