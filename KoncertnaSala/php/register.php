<?php 
include("dbconnection.php");

$password = $_REQUEST["password"];
$passwordCheck = $_REQUEST["password-re"];

if($password != $passwordCheck){
    die(header("Location: ../register.php?error=1"));
} else {
    $ime = $_REQUEST["ime"];
    $prezime = $_REQUEST["prezime"];
    $email = $_REQUEST["email"];
    $about = $_REQUEST["about"];

    $query = $mysqli->query("SELECT * FROM korisnici WHERE email = '$email'");
    $num = $query->num_rows;

    if($num > 0){
        die(header("Location: ../register.php?error=2"));    
    } 

    $sifra = md5($password);
    $statement = $mysqli->prepare("INSERT INTO korisnici (ime, prezime, email, sifra, about) VALUES (?, ?, ?, ?, ?)");

    if ($statement) {
        $statement->bind_param("sssss", $ime, $prezime, $email, $sifra, $about);

        if($statement->execute()){
            header("Location: ../index.php?success=1");    
        } else {
            die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
        }
    } else {
        die("Error preparing statement: " . $mysqli->error);
    }
}





?>