

<?php 

function setComments($conn){
	session_start();
	$name=$_SESSION['username'];
if(isset($name))
	{
		
		if(isset($_POST['commetSubmit'])){
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];
		
					

		$sql="INSERT INTO comments(uid,date,message,name) VALUES('$uid','$date','$message','$name')";
		$result=$conn->query($sql);
		
		
	}
}	
	else
	{  header('Location:login.php');
	}
	
}
function getComments($conn){
	$sql="SELECT * FROM comments";
	

	$result=$conn->query($sql);
	
	while($row=$result->fetch_assoc()){
			echo "<div class='comment-box'><p>";
			echo $row['name']."<br>";
			echo nl2br($row['message'])."<br>";
            echo $row['date']."<br>";
			
			echo"</p>
			
		
			</div>";
	}

	
}
