<?php
	class UserMenuController extends CI_Controller{

		public function index(){

		$this->load->model('UserMenuModel');
		$menu['item'] = $this->UserMenuModel->getData();
		$menu['cart']=0;
		
		$this->load->view('UserMenuView',$menu);
			}

		 public function calculate()
 	{
 		

 	$this-> load->model('UserMenuModel');
 	// $total=0;

 //Check submit button 
 		if($this-> input->post('calculate'))
	 {
	 	$id=$this->input->post('id');
	 	$itemName = $this->UserMenuModel->getName($id);
		$quantity=$this-> input->post('quantity');
		 $price=$this-> input->post('price');
		 $userid = $this->session->userid;

		$this-> UserMenuModel->addToCart($itemName,$quantity,$price,$userid,$id);

		$menu['item']=$this->UserMenuModel->getData();
		$menu['cart']=$this->UserMenuModel->calculate($userid);

 			$this->load->view('UserMenuView',$menu);
 		
 		}

	}
}

	?>

