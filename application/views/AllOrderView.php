<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/navigation.css">
<style>
	 .text{
        font-size: 20px;
        padding-top: 10px;
        /*padding-left: 650px;*/
    }

</style>
</head>
<body>

	<header>
                <div class="menu-toggle" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
         
                <div class="container">
                   
                   <nav>
                        <!-- <h1 class="brand"><a href="index.html">Br<span>a</span>nd</a></h1> -->
                        <ul>
                            <!-- <li><a href="http://localhost/CanteenApp/index.php/OrdersController/">All Orders</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/AcceptedController/">Accepted Orders</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/ItemController/">All Items</a></li>
                            <li><a href="#">Add Item</a></li> -->
                            <li><a href="http://localhost/CanteenApp/index.php/UserMenuController/">Home</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/AllOrderController/">All Orders</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/AccountController/">Account</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/LoginController/">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </header>


	<?php
	//print_r($order);
		echo "<p class=\"text\">Your Recent orders:";
		if(!empty($order)){
       foreach ($order as $key) {
       	//echo $key->totalBill;
       
       	echo "<form method=\"post\"><li class=\"item\"><input type=\"hidden\"name=\"if\" value=".$key->itemId." >".$key->itemName."    ".$key->quantity."     ".$key->totalBill."</li><br></form>";
       	//echo $key->itemId;
       }

   }
   else{
   	echo "<br><br>No current orders active</p>";
   }

     // echo "<a href=\"http://localhost/CanteenApp/index.php/AllOrderController/deleteorder\"><br><br><input type=\"button\" class=\"add\" align=\"center\" value=\"Cancel Order\" name='deleteOrder'\"></a></p>"4

   //<a href=\"http://localhost/CanteenApp/index.php/AllOrderController/deleteorder\"><input type=\"button\" class=\"add\" align=\"center\" value=\"Cancel Order\" name='deleteOrder'\"></a>

       
       
	?>


</body>
</html>