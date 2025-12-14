<?php
class ModelExtensionModuleFoundCheaper extends Model {
	
	public function getTotalFoundCheaper() {
      	$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "found_cheaper");
		
		return $query->row['total'];
	}	

	public function createDatabaseTable() {
		$sql  = "CREATE TABLE IF NOT EXISTS `".DB_PREFIX."found_cheaper` ( ";
		$sql .= "`id` int(11) NOT NULL AUTO_INCREMENT, ";
		$sql .= "`product_id` int(11) NOT NULL, ";
		$sql .= "`product_name` varchar(255) NOT NULL, ";
		$sql .= "`product_model` varchar(64) NOT NULL, ";
		$sql .= "`product_image` varchar(255) NOT NULL, ";
		$sql .= "`cheaper_link` varchar(255) NOT NULL, ";
		$sql .= "`telephone` varchar(32) COLLATE utf8_general_ci DEFAULT NULL, ";
		$sql .= "`date_added` datetime NOT NULL, ";
		$sql .= "PRIMARY KEY (`id`) ";
		$sql .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;";
		$this->db->query($sql);
	}	
	
	public function dropDatabaseTable() {
		$sql = "DROP TABLE IF EXISTS `".DB_PREFIX."found_cheaper`;";
		$this->db->query($sql);
	}

}