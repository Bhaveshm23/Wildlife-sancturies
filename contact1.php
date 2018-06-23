<!DOCTYPE html>
<html>
<title>neoteric online shopping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="new.css">

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="#home" class="w3-bar-item w3-button"><b>Neoteric Online Shopping</b></a>
    <!-- Float links to the right. Hide them on small screens -->

<?php

error_reporting(0);
$user ='root';
$pass ='';
$db = 'neoteric';
$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");


$cardnumber=$_POST['cardnumber'];
$dateofexpiry=$_POST['dateofexpiry'];
$cvv=$_POST['cvv'];
$emailid=$_POST['emailid'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }

$password=$_POST['password'];
$phone=$_POST['phone'];
$otp=$_POST['otp'];
//Execute the query
 
mysqli_query($db,"INSERT INTO save_payment(cardnumber,dateofexpiry,cvv,emailid,password,phone,otp)
				VALUES('$cardnumber','$dateofexpiry','cvv','$emailid','$password','$phone','$otp')");


							
	if(mysqli_affected_rows($db) > 0){
	echo "<p>New Customer Payment Recorded</p>";
	echo "<a href=payment.html>Go Back</a>";
} else {
	echo "Please Try Again<br />";
	echo "<a href=payment.html>Go Back</a>";
	echo mysqli_error ($db);
}

?>
<br>
<br>


<a href="project.html">Shop Again</a>
</body>
</html>