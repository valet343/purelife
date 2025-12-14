<?php
class ModelExtensionModuleFastCheckout extends Model {
	
	public function getTotalFastCheckout() {
      	$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "fast_checkout");
		
		return $query->row['total'];
	}	

	public function createDatabaseTable() {
		$sql  = "CREATE TABLE IF NOT EXISTS `".DB_PREFIX."fast_checkout` ( ";
		$sql .= "`id` int(11) NOT NULL AUTO_INCREMENT, ";
		$sql .= "`product_id` int(11) NOT NULL, ";
		$sql .= "`product_name` varchar(255) NOT NULL, ";
		$sql .= "`product_model` varchar(64) NOT NULL, ";
		$sql .= "`product_image` varchar(255) NOT NULL, ";
		$sql .= "`quantity` varchar(32) NOT NULL, ";
		$sql .= "`telephone` varchar(32) COLLATE utf8_general_ci DEFAULT NULL, ";
		$sql .= "`date_added` datetime NOT NULL, ";
		$sql .= "PRIMARY KEY (`id`) ";
		$sql .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;";
		$this->db->query($sql);
	}
	
	
	public function dropDatabaseTable() {
		$sql = "DROP TABLE IF EXISTS `".DB_PREFIX."fast_checkout`;";
		$this->db->query($sql);
	}

}