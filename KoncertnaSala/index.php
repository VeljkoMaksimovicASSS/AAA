<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css" type="text/css">

    <title>Login</title>
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
            <h1 class="card-header" style="text-align: center;">Login</h1>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <p class="card-text">

                        <form action="php/log.php" method="post">
                            <div class="form-group">
                                <label for="email">Email adresa:</label>
                                <input type="email" name="email" class="form-control" placeholder="Unesite email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Sifra:</label>
                                <input type="password" name="password" class="form-control" placeholder="Sifra" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-primary"><a href="register.php">Registracija</a></button>
                        </form>

                        </p>
                    </div>
                    <div class="card-footer">

                        <?php

                        if (isset($_REQUEST["success"])) {
                            if ($_REQUEST["success"] == 1) {
                                echo '<div class = "alert alert-success" role = "success">';
                                echo 'Uspesno logovanje!';
                                echo '</div>';
                            } elseif ($_REQUEST["success"] == 2) {
                                echo '<div class = "alert alert-success" role = "success">';
                                echo 'Uspesan logout!';
                                echo '</div>';
                            }
                        }
                        if (isset($_REQUEST["error"])) {
                            if ($_REQUEST["error"] == 1) {
                                echo '<div class = "alert alert-danger" role = "danger">';
                                echo 'Proverite Email i sifru!';
                                echo '</div>';
                            } elseif ($_REQUEST["error"] == 2) {
                                echo '<div class = "alert alert-danger" role = "danger">';
                                echo 'Doslo je do greske!';
                                echo '</div>';
                            }
                        }
                        ?>


                    </div>
                </div>

            </div>
            <div class="col-2">

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>