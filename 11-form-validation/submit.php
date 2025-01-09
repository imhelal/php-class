<?php

$has_error = false;
$errors = array(); // error list 

// Request validation
$request_method = $_SERVER['REQUEST_METHOD'];

if( 'POST' != $request_method ){
	$has_error = true;
	array_push($errors, 'Invalid request method!');
}

// Validate input fields
$username = $_POST['username'];
$email 	  = $_POST['email'];
$password = $_POST['password'];

// check username
if( empty($username) ){
	$has_error = true;
	array_push($errors, 'Username cannot be empty!');
}
// check email
if( empty($email) ){
	$has_error = true;
	array_push($errors, 'Email address cannot be empty!');
}
// check password
if( empty($password) ){
	$has_error = true;
	array_push($errors, 'Password cannot be empty!');
}

// check password length
if( strlen($password) < 5 ){
	$has_error = true;
	array_push($errors, 'Password length must be more than 4!');
}


// Display errors
if($has_error){

	foreach ($errors as $error) {
		echo $error . "<br/>";
	}

}


// Insert 
if($has_error) {
	die();
}

// database connection
$host = 'localhost';
$db_user = 'root';
$db_password = 'password';
$db_name = 'crud';

$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

if($conn){

	$sql = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$password')";
	$insert = mysqli_query($conn, $sql);

	if($insert){
		echo "User inserted successfully!";
	}

}

