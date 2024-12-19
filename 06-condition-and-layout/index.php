<?php 
$userAge = 26;

/*
if($userAge == 20) {
	echo "User age is 20";
}elseif ($userAge == 30) {
	echo "User age is 30";
}elseif($userAge == 40) {
	echo "User age is 40";
}else{
	echo "User age is Undefined";
}
*/
// multiple value check
/*
if($userAge > 20 || $userAge < 30) {
	echo "You are accepted!";
}	
*/

/*
$isLoggedin = true;

if($isLoggedin){
	echo "You are logged in. ";
	echo "<button>Logout</button>";
}else {
	echo "You are logged out. ";
	echo "<button>Login</button>";
}
*/
/* incude files 
include('layout/header.php');
echo "<h1>Home Page content </h1>";
include('layout/footer.php');
*/

/* redirect */
/*
$isLoggedin = true;

if(!$isLoggedin) {
	header('Location: 06-condition-and-layout/login.php');
}
*/


/* Swtich statement */
/*
$number = 4;

switch ($number) {
	case 1:
		echo "One";
		break;

	case 2:
		echo "Two";
		break;

	default:
		echo "Undefined";
		break;
}
*/


$number = 1;
echo $number;
$number = 2;
echo $number;
