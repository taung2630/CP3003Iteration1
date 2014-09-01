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
	
		
	
		<table border="1">
    <tr>
    <th>Username</th>
    <th>Password</th>
    <th>Email Address</th>  
    <th>Country</th>
    <th>Sex</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Telephone</th>                              
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

		$result = mysql_query('SELECT * FROM userinfo', $connection);	
		
	
		while ($row = mysql_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['Username'] . "</td>";
			echo "<td>" . $row['Password'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";	
			echo "<td>" . $row['country'] . "</td>";
			echo "<td>" . $row['sex'] . "</td>";
			echo "<td>" . $row['fname'] . "</td>";
			echo "<td>" . $row['lname'] . "</td>";	
            echo "<td>" . $row['telephone'] . "</td>";		
			echo "</tr>";											
		}
		mysql_free_result($result);		
		
	
		mysql_close($connection);										
    ?>
    </table></p><h1>Add info</h1>
    <form action="adduserinfo.php" method="get">
    	<table width="350" border="0">
          <tr >
            <td>Username</td>
            <td><input type="text" name="username" width="200"/></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="password" width="200"/></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" width="200"/></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><input type="text" name="country" width="200" /></td>
          </tr>
          <tr>
            <td>Sex</td>
            <td><input type="text" name="sex" width="200" /></td>
          </tr>
          <tr>
            <td>First Name</td>
            <td><input type="text" name="fname" width="200" /></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" width="200" /></td>
          </tr>
           <tr>
            <td>Movie Title</td>
            <td><input type="text" name="mname" width="200" /></td>
          </tr>
           <tr>
            <td>Cinema No.</td>
            <td><input type="number" name="cinemano" width="200" /></td>
          </tr>
           <tr>
            <td>Date and time</td>
            <td><input type="datetime" name="dateandtime" width="200" /></td>
          </tr>
           <tr>
            <td>Seat No.</td>
            <td><input type="text" name="seatno" width="200" /></td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td><input type="number" name="telephone" width="200" /></td>
          </tr>
          
          <tr >
          	<td></td>
            <td align="center"><input type="submit" name="Submit" value=" Add ">&nbsp;&nbsp;<input type="reset" name="Reset" value="Reset"></td>
          </tr>
		</table>
    </form>
    
    

<?php
	// step 1: connect to database server 
	$connection = mysql_connect("localhost", "root","","");
	if ( !$connection ) {
		die('Could not connect to localhost.');	
	}
	
	// step 2: select a database
	$db = mysql_select_db("cp2013", $connection);
	if ( !$db) {
		die ('Could not find database addressBook.');	
	}

	// if user clicked submit button
	if (isset($_REQUEST['Submit']))
	{		
		// step 3: send SQl statement to database		
		// construct a delete query
		$delete_query = "DELETE FROM colleague WHERE email= '" . $_REQUEST['email'] . "'";
		//echo $delete_query;  //for debug
		
		// run the query and check result
		$result = mysql_query($delete_query, $connection);	
		if ($result == TRUE)
			echo "<h3 style='color:blue;'>Record is deleted from database.</h3>";
		else 
			echo "<h3 style='color:red'>Fail to delete selected record from database.</h3>";	
			
		// step 4: close the connection
		//close at line 81				
	}
?>
<p>
    <!-- upon the page launch, retrieve all records from table colleague and display -->
    <h2>Select a record to delete </h2>     
	<form action="deleteAddress.php" method="get">  
        <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
    <th>Username</th>
    <th>Password</th>
    <th>Email Address</th>  
    <th>Country</th>
    <th>Sex</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Movie Title</th>    
    <th>Cinema No.</th>
    <th>Date and time</th>
    <th>Seat No.</th>                            
    </tr>
        <?php
            // retrieve new records and update the page view
            $result = mysql_query("SELECT * FROM colleague", $connection);	
            //loop through all table rows
            while ($row = mysql_fetch_array($result)) {
                echo "<tr>";
                echo "<td><input name='email' type='radio' value='" . $row['email'] . "' /></td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";			
                echo "</tr>";										
            }
            // free result memory and close database connection
            mysql_free_result($result);
            mysql_close($connection);										
        ?>
        </table>

    	<p align='center'><input type="submit" name="Submit" value="Delete" /> </p>
    </form>
    <?php 
	// step 1: connect to database server 
	$connection = mysql_connect("localhost", "root","","");
	if ( !$connection ) {
		die('Could not connect to localhost.');	
	}
	
	// step 2: select a database
	$db = mysql_select_db("cp2013", $connection);
	if ( !$db) {
		die ('Could not find database addressBook.');	
	}
	
	// if user clicked submit button
	if (isset($_REQUEST['Submit'])  )
	{
		//check any record is selected
		if ( !isset($_REQUEST['email']) ) {
			echo "<h3 style='color:red;'>Use radio button to select a record to update.</h3>";
		}
		else {
			// step 3: send SQl statement to database
			// construct a modify query
			$modify_query = "UPDATE colleague SET firstname='" . $_REQUEST['firstName'] . "', lastname='" . $_REQUEST['lastName'] . "', telephone='" .$_REQUEST['telephone'] . "' WHERE email='" . $_REQUEST['email'] . "'";
			//echo $modify_query;  //for debug
		
			// run the query and check result
			$result = mysql_query($modify_query, $connection);	
			if ($result == TRUE)
				echo "<h3 style='color:blue;'>Record is modified.</h3>";
			else 
				echo "<h3 style='color:red;'>Fail to modify selected record in database.</h3>";	
			
			// step 4: close the connection
			//close at line 85
	  	}
	}
?>
<p>
    <!-- upon the page launch, retrieve all records from table colleague and display -->
    <h2>Select a record to modify </h2>     
	<form action="modifyAddress.php" method="get" >  
        <table border="1" cellspacing="0" >
        <tr>
        <th></th>
        <th>Email Address</th>         
        <th>First Name</th>
        <th>Last Name</th>
        <th>Telephone</th>               
        </tr>
        <?php
            // run a query
            $result = mysql_query("SELECT * FROM colleague");	
            //loop through all table rows
            while ($row = mysql_fetch_array($result)) {
                echo "<tr >";
                echo "<td><input name='email' type='radio' value='" . $row['email'] . "' /></td>";
                echo "<td cellpadding=\"2px\" >" . $row['email'] . "</td>";				
                echo "<td ><input name='firstName' type='text' value='"  . $row['firstname'] . "' /></td>";
                echo "<td ><input name='lastName' type='text' value='"  . $row['lastname'] . "' /></td>";
                echo "<td ><input name='telephone' type='text' value='"  . $row['telephone'] . "' /></td>";			
                echo "</tr>";										
            }
            // free result memory and close database connection
            mysql_free_result($result);
            mysql_close($connection);										
        ?>
        </table>
    	<p align='center'><input type="submit" name="Submit" value="Update" /> </p>
    </form>
    <center><a href="index.php">Homepage</a></center>
<br /><br />
 
		
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

</body>
</html>
