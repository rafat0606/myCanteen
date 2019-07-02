<?php
 class PaymentModel extends CI_Model{

    public function verify($card,$cvv,$expire){
    	$sql = "Select * from payment where cardNo = $card";
    	$res=$this->db->query($sql);

    	if($res->num_rows() >= 1)
    		return true;
    	else
    		return false;
    	
    }
 }
?>