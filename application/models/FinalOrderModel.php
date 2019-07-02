<?php

class FinalOrderModel extends CI_Model{

	public function insert($id){
	$sql = "SELECT `itemName`,`itemid`,`total`,COUNT(*) as count FROM UserCart GROUP BY `itemName` ORDER BY count DESC";
		$bill=$this->db->query($sql);
// 		foreach($bill->result_array() AS $row) {
//     $total= $row['TOTAL'];
// }
		$sql="DELETE FROM `UserCart` WHERE `userId`=$id";
		$this->db->query($sql);

foreach($bill->result_array() as $value)
{
	$itemid = $value['itemid'];
	$itemName = $value['itemName'];
	$count = $value['count'];
	$total = $value['total'] * $count;
	$now=date('Y-m-d H:i:s');
    $query = "INSERT INTO newOrders  VALUES (' ',$id,$itemid,'$itemName',$count, $total)";
    $this->db->query($query);
 }

		//return $res->result_array();


		// $items = $this->db->select('userId, COUNT(itemid1) AS count', false)
  //                 ->from('UserCart')
  //                 ->group_by('member.id')
  //                 ->get()->result();
	}

	public function get($id){
		$sql = "SELECT * FROM `UserCart` WHERE `userId` = $id";
		$res=$this->db->query($sql);
		return $res->result();
	}
}

?>