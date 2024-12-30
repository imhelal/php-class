<?php 
// Database connection
$host = 'localhost';
$db_user = 'root';
$db_password = 'password';
$db_name = 'crud';

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if(!$connection){
	echo "Database connection errror!";
}



// Inser Data
$username = $_REQUEST['name'];
$useremail = $_REQUEST['email'];
$userpass = $_REQUEST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$username', '$useremail', '$userpass')";

$insert_data = mysqli_query($connection, $sql);

if($insert_data){
	echo "Data inserted!";
}