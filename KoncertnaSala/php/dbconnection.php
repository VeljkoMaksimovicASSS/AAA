<?php 

$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "koncertnasala";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli -> connect_error){
    die("Error : (" . $this->$mysqli->connect_error . ") " . $this->$mysqli->connect_error);
}






?>