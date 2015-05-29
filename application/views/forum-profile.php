<!DOCTYPE html>
<html>
<head>
	<title>Forum | Sub-Kategori Name</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="icon" type="image/jg" href="<?php echo base_url(); ?>assets/images/favico.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_forum.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sample.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
	<?php include 'navbar_forum.php'; ?>
	<div id="group1">
		<div id="loading">
			<img src='<?php echo base_url(); ?>assets/images/preloader.GIF' width="100%" height="10px;" />
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 profile">
					<div class="row">
						<div class="col-sm-11 profile-wrapper">
							<div class="row">
								<div class="col-sm-2">
									<div class="gambarTS">
										
									</div>
									 <div class="list-group">
									 
									 <a href="#" class="list-group-item p-menu active" id="overview">Status</a>
									 <a href="#" class="list-group-item p-menu" id="komentar">Komentar</a>
									 <a href="#" class="list-group-item p-menu" id="thread">Judul Topik</a>
									</div>

								</div>
								<div class="col-sm-10 profile-body">
									<?php 
										echo "
									<div class='p-overview'>
										<div class='profile-nama'>
											ID user
										</div>
										Menjadi member sejak [tanggal daftar]
										<div class='profile-last-active timestamp'>
											Last Active hh:mm:yy
										</div>
										<div class='profile-status'>
											Forum Statistik
										</div>
										<div class='row'>
											<div class='col-sm-2 p-status-head text-right'>
												Member Status
											</div>
											<div class='col-sm-10 p-status-column'>
												senior member bla bla bla
											</div>

											<div class='col-sm-2 p-status-head text-right'>
												jumlah Post
											</div>
											<div class='col-sm-10 p-status-column'>
												xxx
											</div>

											<div class='col-sm-2 p-status-head text-right'>
												Profil dilihat
											</div>
											<div class='col-sm-10 p-status-column'>
												x kali
											</div>

											<div class=\"col-sm-2 p-status-head text-right\">
												Umur
											</div>
											<div class=\"col-sm-10 p-status-column\">
												x tahun
											</div>

											<div class=\"col-sm-2 p-status-head text-right\">
												Ulang Tahun
											</div>
											<div class=\"col-sm-10 p-status-column\">
												dd-mm-yyyy
											</div>
										</div>
									</div>
									";?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<footer>
	<div class="footerku">
		<hr></hr>
		&copy; Hapus Kelaparan Afrika
	</div>
</footer>
</html>