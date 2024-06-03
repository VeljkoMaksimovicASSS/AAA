<?php 

include("dbconnection.php");

$dogadjajID = $_REQUEST['dogadjajID'];
$naziv = $_REQUEST['naziv'];
$sala = $_REQUEST['sala'];
$datum = $_REQUEST['datum'];
$opis = $_REQUEST['opis'];
$izvodjacID = $_REQUEST['izvodjacID'];

if(!empty($dogadjajID) && !empty($naziv) && !empty($sala) && !empty($datum) && !empty($opis) && !empty($izvodjacID)){
    $statement = $mysqli->prepare("INSERT INTO dogadjaji(dogadjajID, naziv, sala, datum, opis, izvodjacID) VALUES (?, ?, ?, ?, ?, ?)");

    $statement->bind_param("ssssss", $dogadjajID, $naziv, $sala, $datum, $opis, $izvodjacID);

    if($statement->execute()){
        header("Location: ../dodajDogadjaj.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>