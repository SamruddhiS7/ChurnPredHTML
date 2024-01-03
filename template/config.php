<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mydb');
 
/* Attempt to connect to MySQL database */
/*$link = mysqli_connect("localhost", 'root', '', 'mydb');*/
$link = mysqli_connect('localhost:3309', 'root', '','mydb');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>