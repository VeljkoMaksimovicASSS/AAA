<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Novi Dogadjaj</title>
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
            <h1 class="card-header" style="text-align: center;">Dodaj Događaj</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <form action="php/napraviDogadjaj.php" method="post">
                            <div class="form-group">
                                <label for="dogadjajID">DogadjajID:</label>
                                <input type="number" id="dogadjajID" name="dogadjajID" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="naziv">Naziv:</label>
                                <input type="text" id="naziv" name="naziv" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sala">Sala:</label>
                                <input type="text" id="sala" name="sala" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="datum">Datum:</label>
                                <input type="date" id="datum" name="datum" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="opis">Opis:</label>
                                <input type="text" id="opis" name="opis" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="izvodjacID">IzvodjacID:</label>
                                <input type="number" id="izvodjacID" name="izvodjacID" required class="form-control">
                            </div>
                            <button type="button" class="btn btn-primary"><a href="dogadjaj.php">Nazad</a></button>
                            <button type="submit" class="btn btn-primary">Dodaj dogadjaj</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <?php
                        if (isset($_REQUEST["success"]) && $_REQUEST["success"] == 1) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo 'Uspesno dodat dogadjaj!';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>