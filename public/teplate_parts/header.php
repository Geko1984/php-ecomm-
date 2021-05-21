

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>shop/?page=product-list">Prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>public/?page=contacts">Contatti</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
        <li  class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>shop?page=cart">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-success rounded-pill js-totCartItems"></span>
          </a>
        </li>
      </ul>
      <?php if (!$loggedInUser) : ?>
                
        <ul class="navbar-nav" style="margin-left:auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Area riservata</a>
                        <ul class="dropdown-menu " aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="<?php echo ROOT_URL; ?>auth?page=login">Login / Registrazione</a>
                        </ul>
                    </li>
                </ul>

            </div>
            <?php endif; ?>

            <?php if ($loggedInUser) : ?>
                
                <ul class="navbar-nav" style="margin-left:auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $loggedInUser->email ?></a>
                                <ul class="dropdown-menu " aria-labelledby="dropdown04">
                               <a class="dropdown-item" href="<?php echo ROOT_URL; ?>auth?page=logout">Logout</a>
                                </ul>
                            </li>
                        </ul>
        
                    </div>
                    <?php endif; ?>
        
                    <?php if ($loggedInUser && $loggedInUser->is_admin) : ?>
                
                <ul class="navbar-nav" style="margin-left:auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Amministrazione</a>
                                <ul class="dropdown-menu " aria-labelledby="dropdown04">
                               <a class="dropdown-item" href="<?php echo ROOT_URL; ?>admin">Dashboard</a>
                                </ul>
                            </li>
                        </ul>
        
                    </div>
                    <?php endif; ?>
        


        </div>
    </nav>
   