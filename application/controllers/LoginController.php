<?php 


class LoginController extends CI_Controller{
	public function index(){
	$this->load->view('LoginView');
	$this->load->helper('url');
	
	}

	public function verifyUser(){
		$this->load->model('LoginModel');
		$name=$this-> input->post('username');
 		$password=$this-> input->post('password');

 		
 		if($this->LoginModel->login($name,$password))
 		{
 			echo "Login Successful";
 			 //$this->session->userid; //use this anywhr
      if($this->session->userid == 1)
        redirect(base_url('index.php/OrdersController/'));
      else
 			redirect(base_url('index.php/UserMenuController/'));
 			}

      else
      {
 $message = "Username and/or Password incorrect.\\nTry again.";
 echo "<script type='text/javascript'>alert('$message');";
 echo "</script>";
 $this->load->view('LoginView');
      }
    }
public function logout(){
     $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('LoginController');
}
  }


  ?>