<?php 


class RegisterController extends CI_Controller{
	public function index(){
	$this->load->view('RegisterView');
	
	
	}


	public function saveUser(){
	$this->load->model('RegisterModel');

	//if($this->input->post('reg_user')){
		$name=$this-> input->post('username');
 		$phone=$this-> input->post('phone');
 		$password=$this-> input->post('password_1');

 		// if($this->RegisterModel->checkUser($name,$phone)){

 		$this-> RegisterModel-> saveuser($name,$phone,$password);
 		//echo "Registration Successful";
 	redirect(base_url('index.php/LoginController/'));
 // }

 // else {
 // 	echo "user exists";
 // }

	
}
}

?>