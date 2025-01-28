<?php

$host = 'localhost';
$db_user = 'root';
$db_pass = 'password';
$db_name = 'crud';


$conn = mysqli_connect( $host, $db_user, $db_pass, $db_name );

$sql = "UPDATE users SET name='Habib Kazi' WHERE id=7";


mysqli_query( $conn, $sql );
