
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <style>
 	    html {
      position: relative;
    }

    body {
      margin-bottom: 100px;
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

<div class="container text-center">
	<h1>Selamat Datang</h1>
	<br>
	<h2>Hai, <?= $this->session->userdata("user_name") ?></h2>
</div>
<br><br>
<section>
	<div class="container text-center s">
		<div class="row">
			<div class="col-sm-4">
				<img src="img/2.jpg" alt="cuma gambar" class="figure-img img-fluid rounded">
				<figcaption class="figure-caption">A caption for the above image.</figcaption>
			</div>
			<div class="col-sm-4">
				<img src="img/3.jpg" alt="cuma gambar" class="figure-img img-fluid rounded">
				<figcaption class="figure-caption">A caption for the above image.</figcaption>
			</div>
			<div class="col-sm-4">
				<img src="img/4.jpg" alt="cuma gambar" class="figure-img img-fluid rounded">
				<figcaption class="figure-caption">A caption for the above image.</figcaption>
			</div>
		</div>
	</div>
</section>