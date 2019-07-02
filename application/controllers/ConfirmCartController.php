<?php
 
 class ConfirmCartController  extends CI_Controller{

 	public function index(){
 		$this-> load-> model('ConfirmCartModel');
 		
         $CartList['Cart']= $this->ConfirmCartModel->getData( $this->session->userid);

 	     $this-> load-> view('ConfirmCartView',$CartList);
 	}


 	public function deleteItem()
 	{
 	$this->load->model('ConfirmCartModel');
   if($this-> input->post('delete')){
    $todelete =$this-> input->post('cartid');
    $this->ConfirmCartModel->delete($todelete);
    $CartList['Cart']= $this->ConfirmCartModel->getData( $this->session->userid);

 	     $this-> load-> view('ConfirmCartView',$CartList);
 	}

 }
}

?>