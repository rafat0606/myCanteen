<?php
 class AllOrderModel extends CI_Model{

 // 	public function getAll($id){
	// 	$query = $this->db->get('newOrders');
	// 	return $query->result();
	// }

 	public function getAll($id){
 		$query = "SELECT * FROM newOrders where userid=?";
 		$res = $this->db->query($query,$id);

 		return $res->result();


 	}

 	
 			public function deletethis($id){

 				$sql= "delete from newOrders where itemId = $id";
 				$this->db->query($sql);
		// $this->db->where('itemId', $id);
		// $this->db->delete('newOrders');
	}
 	
 }

?>