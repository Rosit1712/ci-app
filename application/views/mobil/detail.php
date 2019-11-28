<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>

	 <style>

    /*html {
      position: relative;
    }*/

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
      background-image: url('../../img/1.jpg');
      background-attachment: fixed;
    }

  </style>

	<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			<div class="card-header">
				Detail Mobil
			</div>
			
			<div class="card-body">
				<h5 class="card-title"><?= $mobil['merk'] ?></h5>
				<h5 class="card-subtitle mb-2 text-muted"><?= $mobil['warna'] ?></h5>
				<p class="card-text"><?= $mobil['tipe'] ?></p>
				<p class="card-text"><?= $mobil['harga'] ?></p>
				<a href="<?= base_url(); ?>mobil" class="btn btn-primary">Kembali</a>
			</div>

			</div>
		</div>
	</div>
</div>

</body>
</html>


 
