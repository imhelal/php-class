<?php

// Connect database
$servername = "localhost";
$db_username = "root";
$db_password = "password";
$db_name = "testdb";

$conn = mysqli_connect($servername, $db_username, $db_password, $db_name);

if($conn){
	echo "Database connected! <br/>";
}

// Insert data to database

// has password
$hash_pass = md5(12345);

$sql = "INSERT INTO users (name, email, password) VALUES ('Habib', 'habib@gmail.com','$hash_pass')";

$insert_user = mysqli_query($conn, $sql);

if($insert_user) {
	echo "User created!";
}