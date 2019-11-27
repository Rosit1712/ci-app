<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<div class="container">

<!-- bikin Form -->
	<div class="row mt-3">
		<div class="col-md-6">

<!-- keterangan menggunakan kartu -->
	<div class="card">
		<div class="card-header">
			Form Ubah
		</div>
		<div class="card-body">

				<form action="" method="post">

					<input type="hidden" name="id" value="<?= $mobil['id']; ?>">

					<div class="form-group">
						<label for="merk">merk</label>
						<input type="text" name="merk" class="form-control" id="merk" value="<?= $mobil['merk']; ?>">
						<small class="form-text text-danger"><?= form_error('merk'); ?></small>
					</div>

					<div class="form-group">
						<label for="warna">warna</label>
						<input type="text" name="warna" class="form-control" id="warna" value="<?= $mobil['warna']; ?>">
						<small class="form-text text-danger"><?= form_error('warna'); ?></small>
					</div>
					
					<div class="form-group">
						<label for="tipe">tipe</label>
						<select class="form-control" id="tipe" name="tipe">

						<?php foreach( $tipe as $t ) : ?>

							<?php if ( $t == $mobil['tipe'] ) : ?>
							<option value="<?= $t; ?>" selected><?= $t; ?></option>

							<?php else : ?>
							<option value="<?= $t; ?>"><?= $t; ?></option>

							<?php endif; ?>
						<?php endforeach; ?>

						</select>
					</div>

					<div class="form-group">
						<label for="harga">harga</label>
						<input type="text" name="harga" class="form-control" id="harga" value="<?= $mobil['harga']; ?>">
						<small class="form-text text-danger"><?= form_error('harga'); ?></small>
					</div>

					<button type="submit" name="ubah" class="btn btn-danger float-right">Ubah data</button>

				</form>
				</div>
			</div>		
		</div>
	</div>

</div>