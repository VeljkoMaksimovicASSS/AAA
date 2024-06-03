<?php
include("php/dbconnection.php");

if (isset($_GET['kartaID'])) {
    $kartaID = $_GET['kartaID'];
    $query = $mysqli->query("SELECT * FROM karta WHERE kartaID = $kartaID");
    $data = $query->fetch_object();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izmeni Kartu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Izmeni Kartu</h2>
        <form action="php/izmeniKartu.php" method="POST">
            <input type="hidden" name="kartaID" value="<?php echo $data->kartaID; ?>">
            <div class="form-group">
                <label for="dogadjajID">ID Događaja</label>
                <input type="number" class="form-control" id="dogadjajID" name="dogadjajID" value="<?php echo $data->dogadjajID; ?>">
            </div>
            <div class="form-group">
                <label for="cena">Cena</label>
                <input type="number" class="form-control" id="cena" name="cena" value="<?php echo $data->cena; ?>">
            </div>
            <div class="form-group">
                <label for="brojSedista">Broj Sedišta</label>
                <input type="number" class="form-control" id="brojSedista" name="brojSedista" value="<?php echo $data->brojSedista; ?>">
            </div>
            <div class="form-group">
                <label for="redSedista">Red Sedišta</label>
                <input type="number" class="form-control" id="redSedista" name="redSedista" value="<?php echo $data->redSedista; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMi6zOW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
