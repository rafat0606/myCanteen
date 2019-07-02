<?php

class UserMenuModel extends CI_Model{
	public function getData(){
		$query = $this->db->get('canteenMenu');
		return $query->result();
	}



	public function calculate($userid){
		$query = "select userId,sum(total) as TOTAL from UserCart where userId = $userid group by userId";
		$bill = $this->db->query($query);
		foreach($bill->result_array() AS $row) {
    $total= $row['TOTAL'];
}

		return $total;

	}

	public function getName($id){
		$sql="SELECT `itemName` FROM `canteenMenu` WHERE `menuId`= ?";
		$res= $this->db->query($sql,$id);
		foreach($res->result_array() AS $row) {
    		$name= $row['itemName'];
		}
return $name;
	}


	public function addToCart($itemName,$q,$p,$u,$id){

       $total = (int)$q * (int)$p;

       $query = "insert into UserCart values('$u','$id','$itemName','$q','$total','','NOW()')";
      $this->db->query($query);


	}
}


?>