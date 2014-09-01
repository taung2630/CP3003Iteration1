<?php    
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="Icon" href="images/favicon.ico" >

<script type="text/javascript">

		</script>
<link rel="stylesheet" href="images/main.css" type="text/css" />
<title>Secure</title>

</head>

<body>
<div id="wrap">
	<div id="header">				
	  <h1 id="logo">Group<span class="green">4</span>Cinema<span class="gray"></span></h1>	
		<h2 id="slogan">Best Cinema in Singapore</h2> 
		
	</div>	
	<div id="content-wrap">		
	
		<div id="sidebar" >							
			<p></p>
		</div>
		<div id="main">	
		<?php  
		if ( isset($_POST['submit']) ) {  
	date_default_timezone_set('Asia/Singapore');
	$checked_count = count($_POST['ticket_list']);
	$ticketstring = "";
	$usertickets="";
	
	foreach($_POST['ticket_list'] as $selected){
 	$ticketstring=$ticketstring.$selected;
	$usertickets=$usertickets.",".$selected;
	}
	$output = substr($usertickets,1);
	$date = date('Y-m-d H:i:s');
	$totalcost = $checked_count * 13 + 2;
	$connection = mysql_connect("localhost", "root","","");
		if ( !$connection ) {
			die('Could not connect to localhost.');	
		}
		
	
		$db = mysql_select_db("cp2013", $connection);
		if ( !$db) {
			die ('Could not find database cp2013.');	
		}
	$insert_query = "INSERT INTO ticketinfo (Email, Dateoftickets, Timeoftickets, SeatNo, Moviename, Nooftickets, Dateandtimeofbooking, Totalcost) VALUES ('" . $_SESSION['email'] ."','" . $_REQUEST['bday'] ."','" . $_REQUEST['time']  ."','" .$output."','" . $_REQUEST['movie']  ."','" .$checked_count."','" .$date."','" .$totalcost."')";
	mysql_query($insert_query, $connection);
		
		}
?>
<center><h2>You will automatically be redirected after 5 seconds</h2>
<a href="index.php"><button>Click here to return to homepage now</button></a></center>
<br /><br />
 
		</div>	
		<div id="rightbar">
        
			
		</div>			
	</div>
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
<meta http-equiv="refresh" content="5;URL=booking.php" />
</body>
</html>
