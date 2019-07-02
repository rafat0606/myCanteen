<?php
 
 class FinalOrderController  extends CI_Controller{

 	public function index(){
 		$this-> load-> model('FinalOrderModel');
 		
 		//$this->FinalOrderModel->insert($this->session->userid);
 		$order['order'] = $this->FinalOrderModel->get($this->session->userid);
   //       $Order['Cart']= $this->ConfirmCartModel->insert();

 	 //     $this-> load-> view('FinalOrderView',$Order);

 		$this->load->view('FinalOrderView',$order);
 	}


 	public function deleteItem()
 	{
 	$this->load->model('ConfirmCartModel');
   if($this-> input->post('delete')){
    $todelete =$this-> input->post('cartid');
    // echo $todelete;
    $this->ConfirmCartModel->delete($todelete);
 	}

 }
}

?>