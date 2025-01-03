<?php

// Database info
$host = 'localhost';
$db_user = 'root';
$db_pass = 'password';
$db_name = 'crud';

// DB connection
$conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

// Query 
$user_id =  $_REQUEST['id'];

$query = "SELECT * FROM users WHERE id = '$user_id' ";

// Run the query 
$result = mysqli_query($conn, $query);

// Result
// while( $item = mysqli_fetch_assoc($result) ){
// 	echo $item['name'];
// }


