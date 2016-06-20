<?php
$server_name="localhost";
$user_name="root";
$user_pwd="";
$db_name="mydb";
$conn = new mysqli ($server_name,$user_name,$user_pwd,$db_name);


if($conn->connect_error){
	die("Connection Failed: " .$conn->connect_error);
}
?>