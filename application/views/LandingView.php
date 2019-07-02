<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/landing.css">
    
</head>
<body>
        <header style="background-image: url(<?php echo base_url('images/blur-1867981_1920.jpg'); ?>);">
                <div class="menu-toggle" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="overlay"></div>
                <div class="container">
                   
                   <!-- <nav> -->
                        <!-- <h1 class="brand"><a href="index.html">Br<span>a</span>nd</a></h1> -->
                        <!-- <ul> -->
                            <!-- <li><a href="#">Home</a></li> -->
                            <!-- <li><a href="#">Services</a></li> -->
                            <!-- <li><a href="#">About</a></li> -->
                            <!-- <li><a href="#">Contact</a></li> -->
                        <!-- </ul> -->
                    <!-- </nav> -->
                    <div class="caption center-align"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                       <center> <a href="#"><img class="responsive-img" src="<?php echo base_url('images/download1.png')?>" style="width: 350px;" ></a></center>
                       <!-- <a class="waves-effect waves-light btn">button</a> -->
                       <a href="RegisterController"><button type="button"  class="btn red btn-lg btn-block ">I am New Here</button></a>
                      <a href="LoginController"> <button type="button" class="btn btn-secondary btn-lg btn-block">I've been here</button></a>
                   
                   
                </div>
               
        </header>
      



    <script>


        
    var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script> //slider
            const slider = document.querySelector('.slider'); 
            M.Slider.init(slider,{indicators:false});</script>
</body>
</html>