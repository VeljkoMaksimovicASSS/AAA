<?php 

include("dbconnection.php");

$kartaID = $_REQUEST['kartaID'];
$dogadjajID = $_REQUEST['dogadjajID'];
$cena = $_REQUEST['cena'];
$brojSedista = $_REQUEST['brojSedista'];
$redSedista = $_REQUEST['redSedista'];

if(!empty($kartaID) && !empty($dogadjajID) && !empty($cena) && !empty($brojSedista) && !empty($redSedista)){

    $statement = $mysqli->prepare("INSERT INTO karta(kartaID, dogadjajID, cena, brojSedista, redSedista) VALUES (?, ?, ?, ?, ?)");

    $statement->bind_param("sssss", $kartaID, $dogadjajID, $cena, $brojSedista, $redSedista);

    if($statement->execute()){
        header("Location: ../dodajKarte.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}


?>