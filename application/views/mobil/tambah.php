<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
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
      background-image: url('../img/1.jpg');
      background-attachment: fixed;
    }

  </style>

<div class="container">

<!-- bikin Form -->
	<div class="row mt-3">
		<div class="col-md-6">

<!-- keterangan menggunakan kartu -->
			<div class="card">
				<div class="card-header">
					Form Tambah Data
				</div>
				<div class="card-body">

						<form action="" method="post">

							<div class="form-group">
								<label for="merk">merk</label>
								<input type="text" name="merk" class="form-control" id="merk">
								<small class="form-text text-danger"><?= form_error('merk'); ?></small>
							</div>

							<div class="form-group">
								<label for="warna">warna</label>
								<input type="text" name="warna" class="form-control" id="warna">
								<small class="form-text text-danger"><?= form_error('warna'); ?></small>
							</div>
							
							<div class="form-group">
								<label for="tipe">tipe</label>
								<select class="form-control" id="tipe" name="tipe">
									<option value="Sport">Sport</option>
									<option value="Berat">Berat</option>
									<option value="Pickup">Pickup</option>
								</select>
							</div>

							<div class="form-group">
								<label for="harga">harga</label>
								<input type="text" name="harga" class="form-control" id="harga">
							</div>

							<button type="submit" name="tambah" class="btn btn-danger float-right">Tambah data</button>

						</form>
				</div>
			</div>		
		</div>
	</div>

</div>

</body>
</html>


