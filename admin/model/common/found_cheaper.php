<?php
class ModelCommonFoundCheaper extends Model {
	
	public function getOrders() {
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."found_cheaper"); 

		return $query->rows;
	}

	public function deleteOrder($id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "found_cheaper` WHERE id = '" . (int)$id . "'");

		$this->cache->delete('found_cheaper');
	}
	
}