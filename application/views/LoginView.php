<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
              <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bitter|Pacifico" rel="stylesheet">
        
        
        
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
      
      
</head>

<body style="background-image:url(<?php echo base_url('images/autumn-2902507_1920.jpg'); ?>)">
    
   
  
    
    
    
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>
			<img src="<?php echo base_url('images/download1.png'); ?>" style="height: 215px;width: 215px">
        <!-- <h2>Digital Solutions</h2> -->
      <h5 class="orange-text" style="font-family: 'bitter',serif;">LogIn</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12"  method="post" action="http://localhost/CanteenApp/index.php/LoginController/verifyUser">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='#' required="Can't Be Empty" />
                <label for='email'>Enter your username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required="Can't Be Empty" />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='red-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                   <button name='login_user' class='col s12 btn btn-large waves-effect orange'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="RegisterController" style="font-family: 'bitter',serif ;color :white">Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
  <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <script>
        //sidenav
       const drop = document.querySelector('.dropdown-trigger');
            M.Dropdown.init(drop,{edge:'right'});
            const drop1 = document.querySelector('.dropdown-trigger1');
            M.Dropdown.init(drop1,{edge:'right'});
            
        //slider
            const slider = document.querySelector('.slider'); 
            M.Slider.init(slider,{indicators:false});
    </script>
    
</body>

</html>

















