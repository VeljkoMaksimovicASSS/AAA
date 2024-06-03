<?php
session_start();
if (empty($_SESSION["ime"])) {
    die(header("Location: ../index.php"));
} else {
    $ime = $_SESSION["ime"];
    $prezime = $_SESSION["prezime"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Izvođači</title>
</head>

<style>
    body {
        background-image: url('img/muzika.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>

<body>

    <div class="container-fluid fixed-top">
        <div class="card text-white bg-dark">
            <h1 class="card-header" style="text-align: left;">Izvođači
                <button type="button" class="btn btn-primary"><a href="php/logout.php">Logout</a></button>
                <button type="button" class="btn btn-primary"><a href="panel.php">Nazad</a></button>
                <button type="button" class="btn btn-primary"><a href="dodajIzvodjaca.php">Dodaj izvodjaca</a></button>
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6" id="izvodjaci-container">
                <?php
                require("./php/dbconnection.php");
                $sql = "SELECT * FROM izvodjac";
                $rezultat = $mysqli->query($sql);
                while ($rez = mysqli_fetch_assoc($rezultat)) {
                    echo '<div class="card text-white bg-dark">';
                    echo '<div class="card-header">Izvođač: ' . $rez["ime"] . '</div>';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $rez["ime"] . '</h5>';
                    echo '<p class="card-text">' . $rez["zanr"] . '</p>';
                    echo '<p class="card-text">' . $rez["opis"] . '</p>';
                    echo '<img class="img-fluid" src="img/' . $rez["slika"] . ' " />';
                    echo '</div>';
                    echo '</div>';
                    echo '<p>';
                }
                ?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>