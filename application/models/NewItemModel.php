<?php
class NewItemModel extends CI_Model{
	function saverecords($name,$price,$description)
	{
		$query = "insert into canteenMenu values('','$name','$price','','$description')";
		$this->db->query($query);

	}

	
}
?>