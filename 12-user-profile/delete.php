<?php

if(!isset($_GET['id'])){
	echo "User ID should not be empty!";
	die();
}


$user_id = $_GET['id'];

include "inc/connection.php";

$sql = "DELETE FROM users WHERE id='$user_id'";

$run_query = mysqli_query($conn, $sql);

if($run_query) {
	header("Location: index.php");
}