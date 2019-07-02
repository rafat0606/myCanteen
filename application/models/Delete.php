<?php
class Delete extends CI_Model{
	function deleteItem($id)
	{
	
$this->db->where('menuId', $id);
$this->db->delete('canteenMenu');

//query ="delete from canteenMenu where menuId = ?";
//		 $this->db->query($query,$id);

//		 $query = "DELETE FROM canteenMenu WHERE menuId= ?";
//		 $this-> db-> query($query, $id);

		//  $this -> db -> where('menuId', $id);
  // $row=$this -> db -> delete('canteenMenu');
  // if($row){
  // 	return "hey";
  // }

	}

	
}
?>