<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang= "en">

<head>
<link rel="Icon" href="images/favicon.ico" >
<link rel="stylesheet" href="images/main.css" type="text/css" />
<title>Movies</title>

</head>

<body>
<div id="wrap">
	<div id="header">				
		<h1 id="logo">Group<span class="green">4</span>Cinema<span class="gray"></span></h1>	
		<h2 id="slogan">Best Cinema in Singapore</h2> 
		<ul>
			<li><a href="index.php"><span>Home</span></a></li>
			<li id="current"><a href="movies.php"><span>Movies</span></a></li>
            <li><a href="booking.php"><span>Booking</span></a></li>
            <li><a href="about.php"><span>About</span></a></li>
            <li><a href="feedback.php"><span>Feedback</span></a></li>
            <li><a href="contact.php"><span>Contact</span></a></li>
		</ul>	
	</div>	
	<div id="content-wrap">		
	
		<div id="sidebar" >							
			<h1>Useful links</h1>
            <p align="center"><a href="http://www.imdb.com" target="_blank">IMDB</a></p>
           	
		</div>
		<div id="main">	
		<h2 align="center">Now Showing</h2>
        	<div id="fiftyleft">
            	<a href="booking.php" target="_blank"><img src="images/Transformer.jpg" alt="Transfomer" /></a>
            	<p>Transformers: Age of Extinction (PG13/Action Violence & Brief Coarse Language) 165 Minutes <br /> Cinema 1 <br />Time: 9:00, 12:00, 15:00, 18:00 21:00</p>
                <br  /><br  />
            	<a href="booking.php" target="_blank"><img src="images/Deliver us from evil.jpg" alt="Deliver us from Evil" /></a>
                <p>Deliver us From Evil (NC16/Coarse Language & Some Disturbing Scenes)
118 minutes <br /> Cinema 3 <br />Time: 9:00, 12:00, 15:00, 18:00 21:00</p>
            
            </div>
        	<div id="fiftyright">
            	<a href="booking.php" target="_blank"><img src="images/Dawn of The Planet of the Apes.jpg" alt="Dawn of the planet of the apes" height="333" /></a>
              <p>Dawn of the Planet of the Apes (2014) (PG13/Some Violence & Brief Coarse Language) 131 minutes <br /> Cinema 2 <br  />Time: 9:00, 12:00, 15:00, 18:00 21:00</p>
              <br  />
              <a href="booking.php" target="_blank"><img src="images/22 Jump Street.jpg" alt="22 Jump Street" /></a>
              <p>22 Jump Street (M18/Coarse Language & Sexual References) 112 minutes <br /> Cinema 4 <br /> Time: 9:00, 12:00, 15:00, 18:00 21:00</p>
        
		</div>	
        </div>
		<div id="rightbar">
        
		<?php 
		include('login.php');
		 ?>  
			<h1>About Singapore</h1>
			<p>Group4Cinema is the best cinema in Singapore, showing all the latest movies, serving the best food and offering the best viewing experience, come down and watch movies now or book tickets online!</p></div>
<div id="footer">
	<div class="footer-left">
		<p class="align-left">			
		&copy; 2014 <strong>Group 4 Cinema</strong> |
		Design by <strong>SP53 2014</strong>
		
		</p>		
	</div>
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.php">Home</a>&nbsp;|&nbsp;
  		<a href="contact.php">Contact</a>
   	
		</p>
	</div>
	</div>
</div>

</body>
</html>
