<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>quasiunafantasia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

	<!-- Favicons -->
	<link rel="icon" href="<?php echo base_url('/assets/img/favicon.png') ?>">
  <link href="<?php echo base_url('/assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/icofont/icofont.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/venobox/venobox.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/assets/css/style.css')?>" rel="stylesheet">
<body>
<header id="header" class="header-tops">
    <div class="container">

      <h1><a href="<?php echo base_url('crud/index'); ?>"><span>Quasi</span> Una Fantasia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>Recruitment <span>Quasi Una Fantasia Event </span>, The Biggest Event For Sonata's Son</h2>
	  <h2>A Flower Between Two Chasms, We are the most unbridled in its representation of emotion.</h2>
	  <h2>Even today, two hundred years later, its ferocity is astonishing.</h2>
	  <h2>Well, The Dearest I Call You Out to Prepare, The Moonlight Sonata Open The Gates to Paradise</h2> 

    </div>
  </header>

	<div class="container">
		<div class="column">
			<div class="col align-self-center">
			<center>
		<h2>One Step To Be A Part Of Us</h2>
	</center>
	<form action="<?php echo base_url().'crud/tambah_aksi'; ?>" method="post">
	<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Universitas</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
			<td></td>
			<td>
				<input class="btn btn-outline-dark" type="submit" value="TAMBAH">
			</td>
			</tr>
	</table>
	</form>	
			</div>
		</div>
	</div> 
</body>
</html>
