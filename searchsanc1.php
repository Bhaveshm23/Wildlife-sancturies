<?php
include 'header1.php';
?>

<h1>Search Results</h1>
<div class="article_container">
<?php
	if(isset($_POST['submit-search'])){
		$search=mysqli_real_escape_string($conn,$_POST['search']);
		$sql="SELECT * FROM sanctuary WHERE s_name LIKE '%%$search%'";
		$result=mysqli_query($conn,$sql);
		$queryResults= mysqli_num_rows($result);
		echo "<h3>There is/are ".$queryResults." result(s)!</h3>";
		if($queryResults > 0){
			
			while($row=mysqli_fetch_assoc($result)){
				if($row['s_id']=='1')
				{
					echo"<a href='finalintropagejcpara.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else if($row['s_id']=='2')
				{
					echo"<a href='kaziintro.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else if($row['s_id']=='3')
				{
					echo"<a href='girintro.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else if($row['s_id']=='4')
				{
					echo"<a href='finalintropagebha.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else if($row['s_id']=='5')
				{
					echo"<a href='Sariskaintro.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else if($row['s_id']=='6')
				{
					echo"<a href='kanhaintro.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				
				else if($row['s_id']=='7')
				{
					echo"<a href='finalintropageban.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else if($row['s_id']=='8')
				{
					echo"<a href='finalintropageran.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else if($row['s_id']=='9')
				{
					echo"<a href='finalintropageper.html?name=".$row['s_name']."'><div class='article_box'>
					<h3>".$row['s_name']."</h3></a>";
				}
				
				else
				{
					echo"Oops!! The sanctuary you are looking for is not found";
				}
			}
			
		}
		else{
			echo" NO RESULTS";
		}
			
	}
?>
<style>
body {margin:0;
	  background-color:lightgrey;
    width: 90%;
	height:100%;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
}

</style>
</div>
