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

	<?php if( $this->session->flashdata('pi') ) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Akun <strong>Berhasil</strong> <?= $this->session->flashdata('pi'); ?>.
					<button class="close" data-dismiss="alert" arial-label="Close">
						<span arial-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

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
								<label for="username">username</label>
								<input type="text" name="username" class="form-control" id="username">
								<small class="form-text text-danger"><?= form_error('username'); ?></small>
							</div>

							<div class="form-group">
								<label for="password">password</label>
								<input type="text" name="password" class="form-control" id="password">
								<small class="form-text text-danger"><?= form_error('password'); ?></small>
							</div>

							<button type="submit" name="daftar" class="btn btn-danger float-right">daftar</button>

						</form>
				</div>
			</div>		
		</div>
	</div>

</div>

</body>
</html>