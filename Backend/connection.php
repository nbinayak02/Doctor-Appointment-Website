<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "drappoint";
$connection = new mysqli($servername, $username, $password, $database);
if($connection -> connect_error){
    die("Connection Failed");
}
?>