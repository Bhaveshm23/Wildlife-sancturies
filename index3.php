<?php
 date_default_timezone_set("Asia/Bangkok");
 include'dbh.inc.php';
 include 'comments2.inc.php';
 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTP-8">
<title>comments</title>
<style>
body{
	background-color:#ddd;
}

textarea{
	width: 850px;
	height: 80px;
	background-color:#fff;
	resize:none;
	
}
button {
	width:100px;
	height:30px;
	background-color:#282828;
	border:none;
	color:#fff;
	font-family: arial;
	font-weight:400px;
	cursor:pointer;
	margin-bottom:60px;
}
.comment-box{
	width:815px;
	padding:20px;
	margin-bottom:4px;
	background-color:#fff;
	border-radius:4px;
	position:relative;
}
.comment-box p{
	font-family:arial;
	font-size:14px;
	font-height:16px;
	color:#282828;
	font-weight:100;
	
}
.edit-btn{
	position :absolute;
	top: 0px;
	right:0px;
}
.edit-btn button{
	width:40px;
	height:20px;
	color:#282828;
	background-color:#fff;
	opacity:0.7;
}
.edit-btn button:hover {
	opacity:1;
}
.delete-btn{
	position :absolute;
	top: 0px;
	right:60px;
}
.delete-btn button{
	width:40px;
	height:20px;
	color:#282828;
	background-color:#fff;
	opacity:0.7;
}
.delete-btn button:hover {
	opacity:1;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>
<ul>
  <li><a href="nmenu1trial.php">Home</a></li>
  <li><a href="index3.php">Reviews</a></li> 
  <li><a href="logout.php">Logout</a></li>

</ul>
<?php
echo "<form method='POST' action='".setComments2($conn)."'>
<input type='hidden' name ='uid' value='anonymous'>
<input type='hidden' name ='date' value='".date('Y-m-d H:i;s')."'>
<textarea name='message'></textarea><br>
<button type='submit' name='commetSubmit'>Comment</button>
</form>";
getComments2($conn);
?>

</body>
</html>
