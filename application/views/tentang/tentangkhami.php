<!DOCTYPE html>
<html>
<head>
  <title>Tentang</title>
  <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">
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

  </style>

<ul class="nav justify-content-center bg-dark">

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
<br><br>
<h1 class="text-center font-weight-light">Tentang Kelompok QWERT</h1>
<br><br>
<div class="container">
  <div class="row">

    <div class="col-sm-4">

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Rosit Sanusi</h5>
          <h6 class="card-subtitle mb-2 text-muted">Teknik Informatika</h6>
          <p class="card-text">175410095</p>
        </div>
      </div>

    </div>

    <div class="col-sm-4">

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Judith Herlambang</h5>
          <h6 class="card-subtitle mb-2 text-muted">Teknik Informatika</h6>
          <p class="card-text">175410093</p>
        </div>
      </div>

    </div>

    <div class="col-sm-4">

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">M Rifly Hidayat Mundung</h5>
          <h6 class="card-subtitle mb-2 text-muted">Teknik Informatika</h6>
          <p class="card-text">175410102</p>
        </div>
      </div>

    </div>

  </div>
</div>

</body>
</html>