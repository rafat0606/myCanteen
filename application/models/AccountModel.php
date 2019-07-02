<?php
 class AccountModel extends CI_Model{

 	public function getAmount(){
 		$query = "SELECT * FROM record ";
 		$res = $this->db->query($query);

 		return $res->result();


 	}
 }

?>