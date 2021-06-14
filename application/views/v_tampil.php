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
</head>

<body>
	<header id="header" class="header-tops">
    <div class="container">
	<center>
       <h1><a href="<?php echo base_url('crud/index'); ?>"><span>Quasi</span> Una Fantasia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>Recruitment <span>Quasi Una Fantasia Event </span>, The Biggest Event For Sonata's Son</h2>
	  <h2>A Flower Between Two Chasms, We are the most unbridled in its representation of emotion.</h2>
	  <h2>Even today, two hundred years later, its ferocity is astonishing.</h2>
	  <h2>Well, The Dearest I Call You Out to Prepare, The Moonlight Sonata Open The Gates to Paradise</h2> 
	  </center>
  </header><!-- End Header -->

	<div class="container">
		<div class="coulmn">
			<div class="col align-self-center">
			<center>
				<h1>
					Come And Join Us
				</h1>
			</center>
			<center>
				<button type="button" class="btn btn-outline-dark">
					<?php echo anchor('crud/tambah','INPUT DATA'); ?>
				</button>
			</center>
			<table class="table table-strip table-dark" style="margin:20px auto;" border="5">
			<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Universitas</th>
			<th>Edit</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
				<td>
					<?php echo anchor('crud/edit/'.$u->id,'UBAH'); ?>
					|
					<?php echo anchor('crud/hapus/'.$u->id,'HAPUS'); ?>		
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Published <a href="https://bootstrapmade.com/">this is privpace</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
</body>
</html>
