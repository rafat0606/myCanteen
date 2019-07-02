<?php
class FinalBillModel extends CI_Model{
public function getAllOrders($id){
		$sql = "SELECT * FROM `UserCart` WHERE `userId` = $id";
		$res=$this->db->query($sql);
		foreach ($res->result_array() as $key) {
			$itemid= $key['itemId'];
			$name= $key['itemName'];
			$quantity=$key['quantity1'];
			$total=$key['total'];
			$query = "insert into newOrders values('',$id,$itemid,'$name',$quantity,$total)";
			$this->db->query($query);
			
		}
$this->db->where('userId', $id);
		$this->db->delete('UserCart');

		return $res->result();
	}

	
}


	?>