<?php
 
 class PaymentController  extends CI_Controller{

 	public function index(){
 	

 		$this->load->view('PaymentView');
 			$this-> load-> model('PaymentModel');
 		//$this-> PaymentModel-> getTotal();


 	}
public function verifyCard(){
	// $cardNo = $this->input->post('cardNumber');
	// $cvv = $this->input->post('cvv');
	// $expire = $this->input->post('date');

	// $this-> load-> model('PaymentModel');
 // 		if($this-> PaymentModel-> verify($cardNo,$cvv,$expire)){
 	$this->load->view('PaymentView');
 			echo "Payment successful";
 		// 



}
}

?>