<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<style>
		.cart{
border: none;
background: #ed3330;
color: #ffffff !important;
font-weight: 100;
padding: 10px;
margin-top: 15px;
margin-left: 10px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
}


.cart:hover {
color: #404040 !important;
font-weight: 700 !important;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}	

.text{
	font-size: 22px;
	font-style: bold;
	margin-top: 8px
}

	</style>
</head>
<body>

	<?php
	$grandTotal=0;
		foreach ($order as $ListItem) {
			//echo $this->session->userid;

			
			
			echo $ListItem->itemName."   *   ".$ListItem->quantity."     =   ".$ListItem->totalBill."<br>";
			$grandTotal +=$ListItem->totalBill;

            
		}

		echo "Total Bill =". $grandTotal;
	?>
<br>
<br>
	<a href="http://localhost/CanteenApp/index.php/PaymentController/"><input type="button"  class="cart" value="Proceed to Pay"></a>

</body>
</html>