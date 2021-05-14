<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
    <link href="<?php echo ROOT_URL;?>./assets/css/style.css">
    <title>PHP E-comm</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
        <div class="container">

            <a class="navbar-brand" href="<?php echo ROOT_URL;?>public/?page=homepage">PHP E-comm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav" style="margin-right:auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>public/?page=about">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>public/?page=services">Servizi Offerti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>public/?page=products">Prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>public/?page=contacts">Contatti</a>
                    </li>
                </ul>
                <ul class="navbar-nav" style="margin-left:auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Area riservata</a>
                        <ul class="dropdown-menu " aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
   