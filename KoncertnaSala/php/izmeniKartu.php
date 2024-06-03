<?php
include("dbconnection.php");

$kartaID = $_REQUEST['kartaID'];
$dogadjajID = $_REQUEST['dogadjajID'];
$cena = $_REQUEST['cena'];
$brojSedista = $_REQUEST['brojSedista'];
$redSedista = $_REQUEST['redSedista'];

if (!empty($kartaID) && !empty($dogadjajID) && !empty($cena) && !empty($brojSedista) && !empty($redSedista)) {

    $statement = $mysqli->prepare("UPDATE karta SET dogadjajID=?, cena=?, brojSedista=?, redSedista=? WHERE kartaID=?");

    $statement->bind_param("ssssi", $dogadjajID, $cena, $brojSedista, $redSedista, $kartaID);

    if ($statement->execute()) {
        header("Location: ../karta.php?success=1");
    } else {
        die("Error : (" . $mysqli->errno . ") " . $mysqli->error); 
    }
}
?>
