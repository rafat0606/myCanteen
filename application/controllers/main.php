<?php

class main extends CI_Controller{

	public function index(){
		$this->load->view('addMenuView',array('error' =>'' ));
	}

public function upload(){
	$config['upload_path']='./images/';
	$config['allowed_types']='jpeg | jpg | png | gif';
	$this->load->library('upload',$config);
	if($this->upload->do_upload())
	{
		$file_data = $this->upload->data();
		$data['img']=base_url().'/images/'.$file_data['file_name'];
		//$this->load->view('success',$data);

	}
	else
	{
		
		$error =  array('error' => $this->upload->display_errors());
		echo "hey";
		$this->load->view('addMenuView',$error);


	}
}
}
?>