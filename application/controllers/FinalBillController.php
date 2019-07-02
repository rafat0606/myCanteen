<?php
class FinalBillController extends CI_Controller{
	public function index(){
		$this->load->model('FinalBillModel');
		//$this->FinalBillModel->addToCanteen($this->session->userid);
		$allOdrder['all']=$this->FinalBillModel->getAllOrders($this->session->userid);
		$this->load->view('FinalBillView',$allOdrder);
	}
}


?>