<?php
class ItemModel extends CI_Model{
	function showItems()
	{
		$query = $this->db->get('canteenMenu');
		return $query->result();

	}

	
}
?>