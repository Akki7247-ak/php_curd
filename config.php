<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";
// database connection
$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    echo "db not conneted!!!";
}


?>
