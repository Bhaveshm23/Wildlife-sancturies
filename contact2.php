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


$phone=$_POST['phone'];
$passid=$_POST['passid'];
$name=$_POST['name'];
$address=$_POST['address'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$emailid=$_POST['emailid'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
$comment=$_POST['comment'];

//Execute the query
 
mysqli_query($db,"INSERT INTO record(phone,passid,name,address,state,pincode,emailid,gender,comment)
				VALUES('$phone','$passid','$name','$address','$state','$pincode','$emailid','$gender','$comment')");


							
	if(mysqli_affected_rows($db) > 0){
	echo "<p>New Customer Recorded</p>";
	echo "<a href=validationform.html>Go Back</a>";
} else {
	echo "Please Try Again<br />";
	echo "<a href=validationform.html>Go Back</a>";
	echo mysqli_error ($db);
}


?>
<br>
<br>
<a href="project.html">Start Shopping</a>
</body>
</html>