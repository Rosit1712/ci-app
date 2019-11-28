<link rel="stylesheet" href="../css/bootstrap.min.css">
<style type="text/css">
	.badge {
	margin-left: 39px;
}
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
      background-image: url('../img/1.jpg');
      background-attachment: fixed;
    }
</style>

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
	
	<div class="row mt-3">
		<div class="col-mt-3">
			<?php $jml  = count($mobil);?>
			<h3>Hasil Pencarian : <?php echo $jml ?></h3>
			<ul class="list-group mt-3">
			<?php if($jml == 0){
					echo "Data tidak ditemukan";
				}?>
			<?php foreach( $mobil as $tpl ) : ?>
		  		<li class="list-group-item">
		  			<?= $tpl->merk; ?>
		  			<a href="<?php base_url(); ?>detail/<?= $tpl->id;  ?>" class="badge badge-primary float-right">Detail</a>
		  		</li>
		  	<?php endforeach; ?>

			</ul>
		</div>
	</div>

</div>