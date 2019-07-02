<?php
class NewItemController extends CI_Controller 
{
 public function index()
 {
 //call CodeIgniter's default Constructor
 //parent::__construct();
 
 //load database libray manually
  //$this-> load->database();
 
 //load Model
 	$this->load->helper('path');

  $this-> load->view('NewItemView', array('error' => ' ' ));
   

 }

  // public function do_upload()
  //       {
  //               $config['upload_path']          = './images/';
  //               $config['allowed_types']        = 'gif|jpg|png';
  //               $config['max_size']             = 1000;
  //               $config['max_width']            = 1024;
  //               $config['max_height']           = 768;

  //               $this->load->library('upload', $config);
  //               $this->upload->initialize($config);



  //               if ( ! $this->upload->do_upload('userfile'))
  //               {
  //                       $error = array('error' => $this->upload->display_errors());

  //                       $this->load->view('NewItemView', $error);
  //               }
  //               else
  //               {
  //                       $data = $this->upload->data();
  //                   // $data will contain full inforation
  //                   echo "Full path is:". $data['full_path'];
  //                   return $data['full_path'];
  //               }
  //               // else
  //               // {
  //               //         $data = array('upload_data' => $this->upload->data());

  //               //         $this->load->view('upload_success', $data);
  //               // }
  //       }
 
 public function savedata()
 {
 	$this-> load->model('NewItemModel');
 //load registration view form
 	//$this-> load->model('NewItemModel');
 	//$path=$this->do_upload('userfile');
 
 //Check submit button 
 if($this-> input->post('save'))
 {
 	
 //get form's data and store in local varable
 	//echo $path;
 	//$this->load->view('NewItemView',$path);
 $n=$this-> input->post('name');
 $p=$this-> input->post('price');
 $d=$this-> input->post('description');
 //$i=$this-> input->post('userfile');

  //$path="hello";
 //$path=$this->do_upload('userfile');
//call saverecords method of Hello_Model and pass variables as parameter
 $this-> NewItemModel-> saverecords($n,$p,$d);

 //$this->NewItemModel->hey();
 echo "Records Saved Successfully";
 //echo $path;
 }

 }
}
?>