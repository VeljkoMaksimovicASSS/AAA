<?php
include("dbconnection.php");

if(isset($_GET['kartaID'])) {
    $kartaID = $_GET['kartaID'];

    $statement = $mysqli->prepare("DELETE FROM karta WHERE kartaID = ?");
    $statement->bind_param("i", $kartaID);

    if($statement->execute()) {
        header("Location: ../karta.php");
    } else {
        echo "Greska prilikom brisanja karte.";
    }

    $statement->close(); 
}
?>
