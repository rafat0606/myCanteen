<?php

class ConfirmCartModel extends CI_Model{

	public function getData($id){
		$query = "SELECT * FROM `UserCart` WHERE `userId`=$id";
		$res = $this->db->query($query);
		return $res->result();
	}

	public function delete($id){
		$this->db->where('cartId', $id);
		$this->db->delete('UserCart');
	}
}

?>