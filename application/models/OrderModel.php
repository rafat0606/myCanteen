<?php

class OrderModel extends CI_Model{
	public function getData(){
		// $query = $this->db->get('newOrders');
		// return $query->result();
		$sql = "SELECT DISTINCT(userId) FROM `newOrders`";
		$res = $this->db->query($sql);
		return $res->result_array();
	}

	public function getOrders($id){

		//$i=0;
		// $sql = "SELECT DISTINCT(userId) FROM `newOrders`";


		// $res = $this->db->query($sql);
		// //print_r( $res);
		// foreach ($res->result_array() as $row)
		// {
			$sql2 ="SELECT * FROM `newOrders` WHERE userId = $id[userId]";
			$res2 = $this->db->query($sql2);
			return $res2->result();
		// 	 foreach ($res2->result_array() as $hmm) {
		// 	// 	# code...
			 	
		// 	 	$final[]['orderId'] = $hmm['orderId'];
		// 	$final[]['userId'] = $hmm['userId'];
		//  	$final[]['itemId'] = $hmm['itemId'];
		//  	$final[]['itemName'] = $hmm['itemName'];
		//  	$final[]['quantity'] = $hmm['quantity'];
		//  	$final[]['totalBill'] = $hmm['totalBill'];
		// //$i=$i+1;
		//  }
			

		//}
	print_r($final);
		return $final;
	}

public function add($id){
	$query= "select * from newOrders where orderId=?";
	//$query="Select * from newOrders where orderId=?";
	$res = $this->db->query($query,$id);

	foreach ($res->result() as $key) {
		$this->db->insert('acceptedOrders',$key);
	}

	$this->delete($id);

	//$this->db->insert('acceptedOrders',$res);


	// //$query="INSERT INTO acceptedOrders (acceptedOrders.orderId,acceptedOrders.userId,acceptedOrders.itemId,acceptedOrders.name,acceptedOrders.quantity,acceptedOrders.totalBill) SELECT * FROM newOrders WHERE orderId=$id";
	// $this->db->query($query);

}

	public function delete($id){
		$this->db->where('orderId', $id);
		$this->db->delete('newOrders');
	}
}


?>