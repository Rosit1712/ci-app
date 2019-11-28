<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">

     <!-- CSS buatan -->
     <link rel="stylesheet" href="<?= base_url(); ?>../css/style.css">

     <title><?php echo "Daftar Mobil"; ?></title>
</head>
<body>

  <style>

    html {
      position: relative;
    }

    body {
      margin-bottom: 100px;
    }

    .nav {
      padding: 5px;
    }
    
    /*.formd {
      margin-right: 130px;
    }*/

    .formd .nyari {
      margin-left: 30px;
    }

    .jumbotron {
      margin-top: -70px;
      height: 400px;
      width: 100%;
      padding-top: 130px;
      text-align: center;
      background-image: url('img/1.jpg');
      background-attachment: fixed;
    }

  </style>

<ul class="nav justify-content-center">

  <li class="nav-item">
    <a class="nav-link text-light" href="<?= base_url(); ?>">Home<span class="sr-only">(current)</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-light" href="<?= base_url(); ?>mobil">Penjualan Mobil</a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-light" href="<?= base_url(); ?>tentang/tentangkhami">Tentang</a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-light" href="<?= base_url() ?>Home/logout">Logout</a>
  </li>

  <form method="post" class="form-inline my-2 my-lg-0 formd" action="<?php echo site_url('mobil/cari'); ?> ">
    <input type="text" name="cari" placeholder="search" class="form-control mr-mg-2 cari">
    <input type="submit" name="search_submit" value="cari" class="btn btn-outline-success my-2 my-sm-90 nyari">
  </form>

</ul>

<div class="jumbotron jumbotron-fluid">
  <h1 class="display-4 text-light">Penjualan Mobil</h1>
  <p class="lead text-light">Menerima Pesanan , No nego</p>
  <p class="lead text-light">CopyRight QWERTY</p>
</div>