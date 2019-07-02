<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/navigation.css">



	<title></title>
	<style>
		
    .text{
        font-size: 20px;
        padding-top: 10px;
        /*padding-left: 850px;*/
        text-align: center;
    }

    .add{
        background-color: orange;
        padding: 5px;
        shape-margin: 12px;
        margin-top: 10px;
        border-radius: 10px;
        border: 2px solid #00000;
        text-align: center;

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
                            <li><a href="http://localhost/CanteenApp/index.php/OrdersController/">All Orders</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/AcceptedController/">Accepted Orders</a></li>
                            <li><a href="#">All Items</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/NewItemController/">Add Item</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/LoginController/">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

	

	<?php


	foreach($item as $row){

	echo "<form  method=\"post\" class=\"text\"  action =\"http://localhost/CanteenApp/index.php/ItemController/delete\">";

	echo $row->menuId."	 |	".$row->itemName."	 |	".$row->price."	  |	".$row->itemDescription."<input type=\"hidden\" name=\"itemid\" value= ".$row->menuId."></br><input type=\"submit\" class=\"add\" name=\"delete\" value=\"delete\"></br></br>";

echo "</form>";
}
	?>
</form>
</body>
</html>