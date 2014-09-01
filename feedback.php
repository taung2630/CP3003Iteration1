<?php    
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="Icon" href="images/favicon.ico" >
<link rel="stylesheet" href="images/main.css" type="text/css" />
<title>Feedback</title>

</head>

<body>
<div id="wrap">
	<div id="header">				
		<h1 id="logo">Group<span class="green">4</span>Cinema<span class="gray"></span></h1>	
		<h2 id="slogan">Best Cinema in Singapore</h2> 
		<ul>
			<li><a href="index.php"><span>Home</span></a></li>
			<li><a href="movies.php"><span>Movies</span></a></li>
            <li><a href="booking.php"><span>Booking</span></a></li>
            <li><a href="about.php"><span>About</span></a></li>
            <li id="current"><a href="feedback.php"><span>Feedback</span></a></li>
            <li><a href="contact.php"><span>Contact</span></a></li>
		</ul>	
	</div>	
	<div id="content-wrap">		
	
		<div id="sidebar" >							
			<h1>Useful links</h1>
            <p align="center"><a href="http://www.imdb.com" target="_blank">IMDB</a></p>
           	
		</div>
		<div id="main">	
		<h2 align="center">Feedback</h2>
        <?php
		$username = $_SESSION["username"];
		if ($_SESSION['login']=="1"){
       echo '
	
	<center><h3>Welcome </h3>
	<h3>'.$username.'</h3>
	<h3>Please leave us valuable feedback on our services and website</h3></center>
	
	   <form action="comments.php" method="post">		
				<center><label>Your Comments</label>
				<textarea rows="5" cols="5" name="comment" id="comment"></textarea>
				<br /><h3>Please rate the quality of our services</h3>
				 <input type="radio" name="servicerating" value="1">1
<input type="radio" name="servicerating" value="2" >2
<input type="radio" name="servicerating" value="3" checked="checked">3
<input type="radio" name="servicerating" value="4">4
<input type="radio" name="servicerating" value="5">5<br /><br />
<h3>Please rate the quality of our website</h3>
 <input type="radio" name="websiterating" value="1">1
<input type="radio" name="websiterating" value="2">2
<input type="radio" name="websiterating" value="3" checked="checked">3
<input type="radio" name="websiterating" value="4">4
<input type="radio" name="websiterating" value="5">5<br /><br />
				<input class="button" type="submit" />		
				</p></center>		
			</form>';	
		}
		else	{
			echo '<center><h3>Please login or register to leave feedback </h3></center>';
	  }
             ?>	
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
