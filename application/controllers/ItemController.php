<?php 


class ItemController extends CI_Controller{
	public function index(){
   $this->load->model('ItemModel');
     $items['item'] = $this->ItemModel->showItems();
	$this->load->view('ItemView',$items);
	$this->load->helper('url');
  
	
	}

  public function delete(){
   $this->load->model('Delete');
   if($this-> input->post('delete')){
    $todelete =$this-> input->post('itemid');
    $this->Delete->deleteItem($todelete);
     $this->load->model('ItemModel');
     $items['item'] = $this->ItemModel->showItems();
  $this->load->view('ItemView',$items);

  }
     // $this->load->model('ItemModel');
  //   $items['item'] = $this->ItemModel->showItems();
  // $this->load->view('ItemView',$items);

  }

	
}
?>