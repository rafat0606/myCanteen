<?php
class LoginModel extends CI_Model{
	// function verifyuser($name,$password)
	// {
	// 	//$sql = "SELECT * FROM UserRegistration WHERE username = ? AND password = ?";
	// 	$sql="SELECT * FROM UserRegistration WHERE username = ? AND password = ?";
	// 	 $res= $this->db->query($sql, array($name, $password));

	// 	// $value="SELECT * FROM UserRegistration
	// 	// 	WHERE EXISTS (SELECT *
 //  //             FROM UserRegistration
 //  //             WHERE username = $name AND password = $password)";

 //    if($res->num_rows() > 0) {
 //        return $res->result_array();
 //    }
 //    else {
 //        return false;
 //    }
		
 //     //return $res->result();
		

	// }

	public function login($username, $password) {
    $user = $this->db
        ->select("id,username, phone")
        ->where(
             [
                'username' => $username,
                'password' => $password
             ]
         )
        ->get("UserRegistration")
        ->row();

   if ($user) {
         $logindata = [
             'userid' => $user->id,
             'name'   => $user->username,
             'phone'  => $user->phone
         ];
         $this->session
              ->set_userdata($logindata);
         return true;
   }
 else {
  
}

} 

public function logout(){
  
}

	
}
?>