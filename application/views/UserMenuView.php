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

    .add{
        background-color: orange;
        padding: 5px;
        shape-margin: 12px;
        margin-top: 10px;
        border-radius: 10px;
        border: 2px solid #00000;
    }

    .addNew{
        background-color: orange;
        padding: 5px;
        shape-margin: 12px;
        margin-top: 10px;
        border-radius: 10px;
        border: 2px solid #00000;
        font-size: 20px;
        text-align: center;
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

.quant{

	border-radius: 5px;
	margin-left: 10px;


}

.item{
	font-style: cursive;
	font-size: 24px;
	list-style-type: square; 

	}

	.pw{
		font-style:italic;
		/*color:#ed3330 ;*/
		/*text-align: center;*/
		padding-top: 50px;
		color: orange;
	}

	p{
		font-style:bold;
		font-size: 30px;
			}

			nav a{
				list-style: none;
				float: right;
				text-decoration: none;
			}
	</style>


	
</head>
<body bgcolor="beige">

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

          
     <p class="pw">All you need is Food.... Made with Love </p>
               
                   
                                 


	<ul>
	<?php
	
foreach ($item as $item) {
	# code...
	echo "<form method=\"post\" class=\"text\" action=\"http://localhost/CanteenApp/index.php/UserMenuController/calculate\" >";
	// echo $item->menuId;
	echo "<li class=\"item\">".$item->itemName." |  ".$item->price." |  ".$item->itemDescription."<input type=\"hidden\" name=\"price\" value=".$item->price."/><input type=\"hidden\" name=\"id\" value=".$item->menuId."/><input type=\"text\" class=\"quant\" name=\"quantity\">      <input type= \"submit\" name=\"calculate\" class=\"add\" value=\"Add to cart\" /></li><br>";
	echo "</form>";

}
	?>



</ul>


</form>

<p class="text" >Total <?php echo $cart; ?>
	</p>
	<a href="http://localhost/CanteenApp/index.php/ConfirmCartController/"><input type="button" class="addNew" value="view cart"></a>


</body>
</html>