<?php
 date_default_timezone_set("Asia/Bangkok");
 include'dbh.inc.php';
 include 'comments.inc.php';
 
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
</style>
</head>
<body>
<?php
		$cid=$_POST['cid'];
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];
echo "<form method='POST' action='".editComments($conn)."'>
<input type='hidden' name ='cid' value='".$cid."'>
<input type='hidden' name ='uid' value='".$uid."'>
<input type='hidden' name ='date' value='".$date."'>
<textarea name='message' >".$message."</textarea><br>
<button type='submit' name='commetSubmit'>Edit</button>
</form>";

?>
<script>

</script>
</body>
</html>
