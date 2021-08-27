<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
require_once './connect.php';
$menu= filter_input(INPUT_GET,"menu",FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Címjegyzék alkalmazás</title>
        <script src="jquery-3.6.0.min.js"></script>
        <script src="popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.1.0-dist/css/bootstrap.min.css"/>
        <script src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stilus.css"/>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-light">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=Felvetel1">KategoriaFelvetel</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="index.php?menu=Modositas1">KategoriaModositas</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="index.php?menu=Torles1">KategoriaTorles</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="index.php?menu=Felvetel2">CimzettFelvetel</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="index.php?menu=Modositas2">CimzettModositas</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="index.php?menu=Torles2">CimzettTorles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=Bongeszes">CimzettBongeszese</a>
                    </li>
                   
                </ul>
            </nav>
            <div class="row">
                <?php
                switch ($menu) {
                    case "Felvetel1":
                        require_once './KategoriaFelvetel.php';
                        break;
                    case "Modositas1":
                        require_once './KategoriaModositas.php';
                        break;
                    case "Torles1":
                        require_once './KategoriaTorles.php';
                        break;
                    case "Felvetel2":
                        require_once './CimzettFelvetel.php';
                        break;
                    case "Modositas2":
                        require_once './CimzettModositas.php';
                        break;
                    case "Torles2":
                        require_once './CimzettTorles.php';
                        break;
                    case "Bongeszes":
                        require_once './CimzettBongeszese.php';
                        break;
                    default:
                        break;
                }
                ?>
            </div>
        </div>
    </body>
    <header>
        <p style="text-align: center;">Készítette: Gyönyörű Lajos 2021.08.26</p>
    </header>
</html>
