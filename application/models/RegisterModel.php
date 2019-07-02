<?php
class RegisterModel extends CI_Model{
	function saveuser($name,$phone,$password)
	{
		$query = "insert into UserRegistration values('','$name','$phone','$password')";
		$this->db->query($query);

	}

	public function checkUser($name,$phone)
	{
		// $query = "SELECT * FROM `UserRegistration` WHERE `username`=$name and `phone`=$phone";
		// $res= $this->db->query($query);

		$where="username=$name AND phone=$phone";

		$res = $this->db->where($where);

		if($res)
			return true;
		else
			return false;
	
}
	
}
?>