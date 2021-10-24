<?php
include "config/connection.php";
include "models/loginModel.php";
include "controllers/loginController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="../assets/images/faviconbcbs.png" type="image/png">

    <title>Miembros | Burger Club Brothers</title>

    <link href="../assets/css/app.css" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Bienvenido a BCB Live</h1>
                            <p class="lead">
                                Para comenzar, inicia sesión o regístrate en caso de no tener cuenta.
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="controllers/loginController.php" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Correo</label>
                                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" autofocus required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Contraseña</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required />
                                            <small>
                                                <a href="index.html">¿Olvidaste tu contraseña?</a>
                                            </small>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Ingresar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../assets/images/js/app.js"></script>

</body>

</html>