<?php    
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="Icon" href="images/favicon.ico" >
<link rel="stylesheet" href="images/main.css" type="text/css" />
<title>Booking</title>

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
            <li><a href="feedback.php"><span>Feedback</span></a></li>
            <li id="current"><a href="contact.php"><span>Contact</span></a></li>
		</ul>	
	</div>	
	<div id="content-wrap">		
	
		<div id="sidebar" >							
			<h1>About us</h1>
			<h1>Useful links</h1>
            <p align="center"><a href="http://www.imdb.com" target="_blank">IMDB</a></p>
           	
		</div>
		<div id="main">	
		<?php
		
		$connection = mysql_connect("localhost", "root","","");
		if ( !$connection ) {
			die('Could not connect to localhost.');	
		}
		
		
		$db = mysql_select_db("cp2013", $connection);
		if ( !$db) {
			die ('Could not find database.');	
		}

		$result = mysql_query("SELECT * from userinfo WHERE Email ='".$_SESSION['email']."'", $connection);	
		
			echo "<h1>User information</h1>";
		while ($row = mysql_fetch_array($result)) {
			
			echo "<center><h3>Username: ".$row['Username'] . "</center></h3><br /><br />";
			echo "<center><h3>Email Address: ".$row['Email'] . "</center></h3><br /><br />";	
			echo "<center><h3>Country of origin: ".$row['country'] . "</center></h3><br /><br />";
			echo "<center><h3>Sex: ".$row['sex'] . "</center></h3><br /><br />";
			echo "<center><h3>First Name: ".$row['fname'] . "</center></h3><br /><br />";
			echo "<center><h3>Last Name: ".$row['lname'] . "</center></h3><br /><br />";		
													
											
		}
		
		mysql_free_result($result); 		
		
		$result1 = mysql_query("SELECT username from comments WHERE username ='".$_SESSION['username']."'", $connection);
		$numrow = mysql_num_rows($result1);
		echo "<center><h3>No. of comments given: ".$numrow."</center></h3><br /><br />";
		
		mysql_close($connection);										
    ?>
    <center><h2>You can delete your previous bookings here</h2>
    <form action="deleteuserbooking.php" method="get">  
        <table border="1" cellpadding="10px" cellspacing="0" width="100%">
        <tr>
        <th>Email</th>
        <th>Date of movie</th>
        <th>Time of movie</th>
        <th>Seat No.</th>
        <th>Movie Name</th>
        <th>No. of tickets</th>
        <th>Time of booking</th>
        <th>Total Cost</th>          
        </tr>
        <?php
		$connection = mysql_connect("localhost", "root","","");
		if ( !$connection ) {
			die('Could not connect to localhost.');	
		}
		
		
		$db = mysql_select_db("cp2013", $connection);
		if ( !$db) {
			die ('Could not find database.');	
		}
		
            // retrieve new records and update the page view
            $result = mysql_query("SELECT * FROM ticketinfo WHERE  Email ='".$_SESSION['email']."'", $connection);	
            //loop through all table rows
            while ($row = mysql_fetch_array($result)) {
                echo "<tr>";
                echo "<td height='100px'><input name='email' type='radio' value='" . $row['Email'] . "' /></td>";
                echo "<td height='100px'>" . $row['Dateoftickets'] . "</td>";
                echo "<td height='100px'>" . $row['Timeoftickets'] . "</td>";
                echo "<td height='100px'>" . $row['SeatNo'] . "</td>";
				echo "<td height='100px'>" . $row['Moviename'] . "</td>";		
				echo "<td height='100px'>" . $row['Nooftickets'] . "</td>";		
				echo "<td height='100px'>" . $row['Dateandtimeofbooking'] . "</td>";		
				echo "<td height='100px'>" . $row['Totalcost'] . "</td>";					
                echo "</tr>";										
            }
            // free result memory and close database connection
            mysql_free_result($result);
            mysql_close($connection);										
        ?>
        </table>

    	<p align='center'><input type="submit" name="Submit" value="Delete" /> </p>
    </form></center>
<center><button onclick="goBack()">Go Back</button></center>
<br /><br />
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
