<?php
class ModelDesignSticker extends Model {
	public function getSticker($sticker_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sticker b LEFT JOIN " . DB_PREFIX . "sticker_image bi ON (b.sticker_id = bi.sticker_id) WHERE b.sticker_id = '" . (int)$sticker_id . "' AND b.status = '1' AND bi.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY bi.sort_order ASC");
		return $query->rows;
	}
}
