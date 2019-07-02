<!DOCTYPE html>
<html>
<head>
	<title></title>

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
	</style>
</head>
<body>
	<form method="post">

	<?php
     
     echo "<form method=\"post\" action=\"http://localhost/CanteenApp/index.php/PaymentController/VerifyCard\">";
     echo "Payment Option <br><br>";
     echo "<input type=\"radio\" name=\"button\">Debit Card<br>";
     echo "<input type=\"text\" name=\"cardNumber\"><br>";
     echo "CVV<br>";
     echo "<input type=\"text\" name=\"cvv\"><br>";
     echo "Expire Date<br>";
     echo "<input type=\"text\" name=\"date\"><br>";
     echo "<br><br>";
     echo "<input type=\"radio\"  name=\"button\">Pay At Canteen<br>";

     echo "</form>";
    
    
	?>


	<br>

	<a href="http://localhost/CanteenApp/index.php/PaymentController/VerifyCard"><input type="button"  class="cart" name="pay" value="PAY"></a>

</form>
	
</body>
</html>