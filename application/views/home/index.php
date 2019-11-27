
<h1>HALLO DUNIA SANA <?= $nama ?></h1>
<br>
<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
<a href="<?php echo base_url('login/logout'); ?>">Logout</a>