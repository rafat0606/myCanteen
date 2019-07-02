<?php
class AllOrderController extends CI_Controller{
	public function index(){
		$this->load->model('AllOrderModel');
		//$this->FinalBillModel->addToCanteen($this->session->userid);
		$saare['order']=$this->AllOrderModel->getAll($this->session->userid);
		$this->load->view('AllOrderView',$saare);
		//echo $Amount;
        
	}

	public function deleteorder(){
		// $this->load->view('AllOrderView');
		$this->load->model('AllOrderModel');
		// $saare['order']=$this->AllOrderModel->getAll($this->session->userid);
		// $this->load->view('AllOrderView',$saare);
		
		$itid=$this->input->post('if');
	
		$this->AllOrderModel->deletethis(31);
		
			echo "Your Order has been deleted.<br>10% of the bill amount has been added to your further bill payments as cancellation fine.<br>Thankyou";
		
	}
}


?>