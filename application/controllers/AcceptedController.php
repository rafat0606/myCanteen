<?php
class AcceptedController extends CI_Controller{
	public function index(){
		$this->load->model('AcceptedModel');
		$orders['ords'] = $this->AcceptedModel->getData();
		$this->load->view('AcceptedView',$orders);
	}




	public function done(){
		$this->load->model('AcceptedModel');
		//$this-> AcceptedModel-> AddToRecord($this->session->userId);
		$this-> AcceptedModel-> AddToRecord($this->input->post('id'));
		$this-> AcceptedModel-> delete($this->input->post('id'));
		$orders['ords'] = $this->AcceptedModel->getData();
		$this->load->view('AcceptedView',$orders);

		// if($this->input->post('accept'))
		// {
		// 	$res=$this->input->post('id');
		// 	$this->load->model('AcceptedModel');

		// 	$this->OrderModel->add($res);
		// }
		// else if($this->input->post('reject')){
		// 	$res=$this->input->post('id');
		// 	$this->load->model('AcceptedModel');
		// 	$this->OrderModel->delete($res);
		// }
		// //$this->OrderModel->delete($res);
		// $orders['ords'] = $this->AcceptedModel->getOrders();
		// $this->load->view('AcceptedView',$orders);

	}

	function accept($id){
		
	}
}

?>