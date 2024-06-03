<?php 
include("dbconnection.php");
session_start();

$email = stripslashes($_REQUEST["email"]);
$password = stripslashes($_REQUEST["password"]);

$md_5 = md5($password);

$query = $mysqli ->query("SELECT * FROM korisnici WHERE email = '$email' AND sifra = '$md_5'");

if($query->num_rows == 1){

    $data = $query->fetch_object();
    $_SESSION["ime"] = $data->ime;
    $_SESSION["prezime"] = $data->prezime;
    $_SESSION["email"] = $data->email;
    $_SESSION["about"] = $data->about;

    header("Location: ../panel.php");

}else{
    die(header("Location: ../index.php?error=1"));
}


?>