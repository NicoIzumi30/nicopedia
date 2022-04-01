<?php 

require "config/connect.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>
    <link href="<?=BASE_URL;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>assets/css/shop-homepage.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>assets/css/custom.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49ce8739f2.js" crossorigin="anonymous"></script>


</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark shadow-sm bg-custom">
            <div class="container">
                <a class="navbar-brand" href="<?=BASE_URL;?>">
                    <h2 class="text-white">Nicopedia</h2>
        
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="color:#fff !important ; " class="navbar-toggler-icon" > <i class="fas fa-bars color-primary2" style="font-size: 26px;"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mr-auto "></div>
                    <ul class="navbar-nav" >
                        <div class="cotak">
                        <li class="nav-item" >
                        <a class="nav-link  active text-white" href="<?=BASE_URL;?>" ><i class="fas fa-home" style=" "></i> Home</a >
                        </li>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?=BASE_URL;?>tentangKami.php" ><i class="fa-solid fa-street-view"></i> About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://bit.ly/3rRcJIf"><i class="fas fa-phone"></i> Contac</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?=BASE_URL;?>admin"><i class="fa-solid fa-circle-user"></i> Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
            </header>
        

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">

            <a class="navbar-brand text-center font-weight-bold " href="<?=BASE_URL;?>"><img src="<?=BASE_URL;?>assets/img/icon.png" style="height: 35px;">Nicopedia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=BASE_URL;?>">Home
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentangKami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://bit.ly/3rRcJIf">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav> -->
    <div class="container">