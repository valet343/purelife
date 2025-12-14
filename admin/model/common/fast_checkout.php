<?php
class ModelCommonFastCheckout extends Model {
	
	// public function createOrder()
	// {
			
	// 	$res0 = $this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."fast_checkout'");
	// 	if($res0->num_rows == 0){
	// 		$this->db->query("
	// 			CREATE TABLE IF NOT EXISTS `".DB_PREFIX."fast_checkout` (
	// 			    `id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
	// 			    `product_id` INT( 11 ) NOT NULL ,
	// 			    `product_name` VARCHAR( 255 ) NOT NULL ,
	// 			    `product_model` VARCHAR( 64 ) NOT NULL ,
	// 			    `product_image` VARCHAR( 255 ) NOT NULL ,
    //                 `quantity` VARCHAR( 32 ) NOT NULL ,
    //                 `telephone` VARCHAR( 32 ) NOT NULL ,
    //                 `date_added` DATETIME NOT NULL ,
	// 			  PRIMARY KEY (`id`)
	// 			) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
	// 		");
	// 	}
		
		
	// }
	
	public function getOrders() {
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."fast_checkout"); 

		return $query->rows;
	}

	public function deleteOrder($id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "fast_checkout` WHERE id = '" . (int)$id . "'");

		$this->cache->delete('fast_checkout');
	}
	
}