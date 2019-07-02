<?php
class ordersController extends CI_Controller{

	var $users;
	public function index(){
		$this->load->model('OrderModel');
		$users[]=$this->OrderModel->getData();
		//print_r($users[0][0]);
		$orders['ords'] = $this->OrderModel->getOrders($users[0][0]);
		//$this->load->view('OrderView',$orders);
		$orders['ords'] = $this->OrderModel->getOrders($users[0][1]);
		$this->load->view('OrderView',$orders);
	}




	public function delete(){
		if($this->input->post('accept'))
		{
			$res=$this->input->post('id');
			$this->load->model('OrderModel');

			$this->OrderModel->add($res);
		}
		else if($this->input->post('reject')){
			$res=$this->input->post('id');
			$this->load->model('OrderModel');
			$this->OrderModel->delete($res);
		}
		//$this->OrderModel->delete($res);
		$orders['ords'] = $this->OrderModel->getOrders();
		$this->load->view('OrderView',$orders);

	}

	function accept($id){
		
	}
}

?>