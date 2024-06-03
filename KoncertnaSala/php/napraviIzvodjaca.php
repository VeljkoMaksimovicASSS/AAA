<?php 

include("dbconnection.php");

$izvodjacID = $_REQUEST['izvodjacID'];
$ime = $_REQUEST['ime'];
$zanr = $_REQUEST['zanr'];
$opis = $_REQUEST['opis'];
$dogadjajID = $_REQUEST['dogadjajID'];
$slika = $_REQUEST['slika'];

if(!empty($izvodjacID) && !empty($ime) && !empty($zanr) && !empty($opis) && !empty($dogadjajID) && !empty($slika)){

    $statement = $mysqli->prepare("INSERT INTO izvodjac(izvodjacID, ime, zanr, opis, dogadjajID, slika) VALUES (?, ?, ?, ?, ?, ?)");

    $statement->bind_param("ssssss", $izvodjacID, $ime, $zanr, $opis, $dogadjajID, $slika);

    if($statement->execute()){
        header("Location: ../dodajIzvodjaca.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>