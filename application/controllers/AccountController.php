
<?php
class AccountController extends CI_Controller{
	public function index(){
		$this->load->model('AccountModel');
		//$this->FinalBillModel->addToCanteen($this->session->userid);
		$Amount['amount']=$this->AccountModel->getAmount();
		$this->load->view('AccountView',$Amount);
		//echo $Amount;
        
	}
}


?>