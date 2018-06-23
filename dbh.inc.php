<?php

$conn=mysqli_connect('localhost','root','bhavesh1234','comment_section');
if(!$conn){
	die("Connection failed".msqli_connect_error());
}