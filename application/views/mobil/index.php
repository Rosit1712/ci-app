
<style type="text/css">
	.badge {
		margin-left: 39px;
	}
	.d, .f {
		transform: translateX(35%);
	}
	.f {
		transform: translateX(43%);
	}
</style>

<section class="main">
<div class="container">

	<?php if( $this->session->flashdata('tampil') ) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data <strong>Berhasil</strong> <?= $this->session->flashdata('tampil'); ?>.
					<button class="close" data-dismiss="alert" arial-label="Close">
						<span arial-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<div class="row mt-3 d">
		<div class="col-mt-3">
			<h3 class="text-center">Daftar Mobil</h3>
			<ul class="list-group mt-3">
			<?php foreach( $mobil as $tpl ) : ?>
		  		<li class="list-group-item">
		  			<?= $tpl['merk']; ?>

		  			<a href="<?php base_url(); ?>mobil/hapus/<?= $tpl['id'];  ?>" class="badge badge-danger float-right" onclick="return confirm('yaqin?');">Hapus</a>

		  			<a href="<?php base_url(); ?>mobil/ubah/<?= $tpl['id'];  ?>" class="badge badge-success float-right">Ubah</a>

		  			<a href="<?php base_url(); ?>mobil/detail/<?= $tpl['id'];  ?>" class="badge badge-primary float-right">Detail</a>

		  		</li>
		  	<?php endforeach; ?>

			</ul>
		</div>
	</div>

	<div class="row mt-3 f">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mobil/tambah" class="btn btn-primary text-center">Tambah Data</a>
		</div>
	</div>

</div>
</section>