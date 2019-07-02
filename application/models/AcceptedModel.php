<?php

class AcceptedModel extends CI_Model{
	public function getData(){
		$query = $this->db->get('acceptedOrders');
		return $query->result();
	}

	public function getOrders(){
	
		$sql = "SELECT DISTINCT(userId) FROM `acceptedOrders`";
		$res = $this->db->query($sql);
		foreach ($res->result_array() as $row)
		{
			$sql2 ="SELECT * FROM `acceptedOrders` WHERE userId = '".$row['userId']."'";
			$res2 = $this->db->query($sql2);
			return $res2->result();
			// foreach ($allorders as $hmm) {
			// 	# code...
			// 	$final[]['orderId'] = $hmm['orderId'];
			// 	$final[]['userId'] = $hmm['userId'];
			// 	$final[]['itemId'] = $hmm['itemId'];
			// 	$final[]['itemName'] = $hmm['itemName'];
			// 	$final[]['quantity'] = $hmm['quantity'];
			// 	$final[]['totalBill'] = $hmm['totalBill'];
			// }
			

		}

		return $final;
	}


	public function delete($id){
		$this->db->where('orderId', $id);
		$this->db->delete('acceptedOrders');
	}

	public function AddToRecord($id)
	{
	   //$query1="select userId from acceptedOrders where orderId=?";
       $query= "select * from acceptedOrders where orderId=?";
	   //$query="Select * from newOrders where orderId=?";
	   $res = $this->db->query($query,$id);
	  // $query= "select * from acceptedOrders where userId=?";
	   //$res2 = $this->db->query($query,$res->result());

	  foreach ($res->result() as $key) {
	  	$query = "insert into record values('$id','$key->totalBill')";
		$this->db->query($query);
	   }
	}


// 	public getUserId($id){
// 		$sql=" select userId from acceptedOrders where orderId =?";
// 		$res = $this->db->query($query,$id);

// 		return $res->result();
// 	}
 }


?>