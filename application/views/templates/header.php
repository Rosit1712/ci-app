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

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container">
  <a class="navbar-brand" href="#">Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>mobil">Penjualan Mobil</a>
      <a class="nav-item nav-link" href="#">Tentang</a>

    </div>
        <form method="post" action="<?php echo site_url('mobil/cari'); ?> ">
          <input type="text" name="cari" placeholder="search">
          <input type="submit" name="search_submit" value="cari">
      </form>
  </div>
</div>

</nav>