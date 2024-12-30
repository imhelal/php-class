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

// Read Data
$sql = "SELECT * FROM users";

$result = mysqli_query($connection, $sql);

while($user_arr = mysqli_fetch_assoc($result)){

	echo $user_arr['id'] . $user_arr['name'] . "<br/>";
	
}