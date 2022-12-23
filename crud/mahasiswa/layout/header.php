<?php

include 'koneksi.php';
include 'function.php';

?>

<!doctype html>
<html>
  <head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <script src="https://kit.fontawesome.com/2d17ba45f4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>
  <div class="header">  
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="data-mahasiswa.php">Beranda</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tambah-data.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="edit-data.php">Edit Data </a></li>
                    </ul>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
  </div>