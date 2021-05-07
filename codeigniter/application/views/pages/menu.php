<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>About us</title> 
      <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/foodmenu.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
	
   <body>
        <div class="topnav">
            <h1> Restaurant Tema </h1>
            <a href="#contact">Contact Us</a>
            <a class="active" href="#menu">Food Menu</a>
            <a href="#reservations">Reservations</a>
            <a href = "<?php echo site_url('/about'); ?>">About Us</a>
            <a href = "<?php echo site_url('/home'); ?>">Home</a>
        </div>

        <div class="soupmenu">
            <h1> Soup menu </h1>
            <div class="spinach-soup">
                <h3>Spinach soup</h3>
                <img src="<?php echo base_url(); ?>images/spinachsoup.png"/>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>

    </body>
	
</html>