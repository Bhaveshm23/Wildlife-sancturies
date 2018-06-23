<?php
include 'header1.php';
?>

<h1>Sanctuaries Page</h1>

<div class="article_container">
<?php
 $name=mysqli_real_escape_string($conn,$_GET['name']);
	$sql="SELECT * FROM sanctuary WHERE s_name='$name'";
	$result = mysqli_query($conn,$sql);
	$queryResults=mysqli_num_rows($result);
	if($queryResults > 0){
	 while ($row=mysqli_fetch_assoc($result)){
		echo"<div class='article_box'>
			<h3>".$row['s_name']."</h3>
			</div>";
		
	 }
	}
?>
</body>
</html>