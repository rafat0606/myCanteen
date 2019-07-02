
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
        padding-left: 850px;
    }

    .add{
        background-color: orange;
        padding: 5px;
        shape-margin: 12px;
        margin-top: 10px;
        border-radius: 10px;
        border: 2px solid #00000;
        font-size: 20px;
    }
    
    .boxSize{
    	height: 30px;
    	width: 100px;
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
                            <li><a href="http://localhost/CanteenApp/index.php/ItemController/">All Items</a></li>
                            <li><a href="#">Add Item</a></li>
                            <li><a href="http://localhost/CanteenApp/index.php/LoginController/">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
<form method="post"  action="http://localhost/CanteenApp/index.php/NewItemController/savedata" >
		<input type="hidden" name="product_create" value="1" />
		<input type="hidden" id="index_arr" name="index_arr" value="" />
		<input type="hidden" id="remove_arr" name="remove_arr" value="" />
		<br>

					<p  data-index="1" style="display: ">
				<label class="text">Name</label>
				<span >
						<!-- <?php echo $this->session->userid; ?> -->
					<input type="text" id="i18n_name_1" name="name" lang="1" class="boxSize" />
									</span>
			</p>
						<p  data-index="1" style="display: ">
				<label class="text">Description:</label>
				<span>
					<textarea id="i18n_description_1" class="boxSize"  name="description" class="pj-form-field w500 h150 required" lang="1"></textarea>
									</span>
			</p>
					<!-- <p>
			<label class="text">Category</label>
			<span id="boxCategory">
									<select name="category_id" id="category_id">
						<option value="1">Breakfast</option><option value="3">Deli Platters</option><option value="4">Desserts</option><option value="5">Drinks</option><option value="6">Snacks</option><option value="7">Sushi</option>					</select>
								</span>
		</p> -->
		
		<p id="signle_price" style="display: block;">
			<label class="text">Price</label>
			<span>
				<!-- <span><abbr >&euro;</abbr></span> -->
				<input type="text" class="boxSize" id="price" name="price"/>
			</span>
		</p>
		<!-- <div id="multiple_prices" style="display: none;">
			<p class="pj-size-count pj-size-title">
				<label class="title">&nbsp;</label>
				<span class="inline_block">
					<label class="content float_left r218">Size</label>
					<label class="content float_left">Price</label>
				</span>
			</p>
			<div id="fd_size_list" class="fd-size-list">
								<div class="fd-size-row" data-index="fd_751784">
											<p class="pj-multilang-wrap" data-index="1" style="display: ">
							<label class="title fd-title-fd_751784">Size 1:</label>
							<span class="inline_block">
								<input type="text" name="i18n[1][price_name][fd_751784]" class="pj-form-field float_left r3 w200 fdRequired" lang="1"/>
															</span>
						</p>
											<div class="pj-size-count">
						<span class="pj-form-field-custom pj-form-field-custom-before">
							<span class="pj-form-field-before"><abbr class="pj-form-field-icon-text">&euro;</abbr></span>
							<input type="text" name="product_price[fd_751784]" class="pj-form-field pj-positive-number w80"/>
						</span>
					</div>
				</div>
			</div> -->
			<!-- <p>
				<label class="title">&nbsp;</label>
				<input type="button" value="+ Add" class="pj-button pj-add-size" />
			</p> -->
		</div>
		<!-- <p>
			<label class="title">Image</label>
			<span class="inline_block">
				<input type="file" name="image" id="image" class="pj-form-field w300"/>
			</span>
		</p> -->
		<!-- <p>
			<label class="title">Status</label>
			<span class="inline_block">
				<select name="status" id="status" class="pj-form-field required">
					<option value="">-- Choose--</option>
					<option value="F">Inactive</option><option value="T" selected="selected">Active</option>				</select>
			</span>
		</p> -->

	


<!-- <input type="file" name="userfile" size="20" />
 -->




<br /><br />

<!-- <input type="submit" value="upload" /> -->


		<p>
			<label>&nbsp;</label>
			<span >
				<input type="submit" class="add" name="save" value="Save"/>
				<!-- <input type="button" value="Cancel" class="add" onclick="window.location.href='https://demo.phpjabbers.com/1554699234_502/index.php?controller=pjAdminProducts&action=pjActionIndex';" /> -->
			</span>
		</p>
	</form>

</body>
</html>
