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
      <img class="responsive-img" style="width: 250px;" src="<?php echo base_url('images/download1.png'); ?>">
      <div class="section"></div>

      <h5 class="orange-text" style="font-family: 'bitter',serif;">Please, Register yourself.</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            
<div class="row">
    <form class="col s12" id="reg-form" method="post" action="http://localhost/CanteenApp/index.php/RegisterController/saveUser">
      <div class="row">
        <div class="input-field col s6">
          <input name="username" type="text" required><!-- value="<?php echo $username; ?>"> -->
          <label for="username">Username</label>
        </div>
       
      </div>
     
          <div class="row">
        <div class="input-field col s6">
        <input name="phone" type="text" data-length="10" required><!--  value="<?php echo $phone; ?>"> -->
        <label >Phone</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password_1" type="password" required >
          <label for="password">Password</label>
        </div>
      </div>
			<div class="row">
        <div class="input-field col s12">
          <input name="password_2" type="password" required>
          <label for="password">Confirm Password</label>
        </div>
      </div>
      <div class="row">


        <div class="input-field col s6">
          <button class="btn btn-med btn-register waves-effect waves-light orange" type="submit" name="reg_user">Register
            <!-- <i class="material-icons right">done</i> -->

          </button>
          
        </div>
      </div>

    </form>

  </div>
            
          
  <a  href="LoginController"  class="ngl btn-floating btn-large waves-effect waves-light black"><i class="material-icons">input</i></a>

 </div>
        </div>
      </center>
          </main>
      
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <script>
        //sidenav
         const sideNav = document.querySelector('.sidenav');
            M.Sidenav.init(sideNav,{edge:'right'});
            
            
        //slider
            const slider = document.querySelector('.slider'); 
            M.Slider.init(slider,{indicators:false});
            //regform
            
            const sel = document.querySelector('.select');
            M.Select.init(select,{});
            
            //telephone count
            const tel = document.querySelector('input#icon_telephone');
            M.Telephone.init(tel,{});
    </script>
    
</body>

</html>  
      