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
									 <a href=".?p=overview" class="list-group-item">Status</a>
									 <a href=".?p=komentar" class="list-group-item">Komentar</a>
									 <a href=".?p=thread" class="list-group-item">Judul Topik</a>
									</div>

								</div>
								<div class="col-sm-10 profile-body">
									<?php if(!isset($_GET['p']) || $_GET['p'] == 'overview'){
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
									";}
										elseif(isset($_GET['p']) && $_GET['p']=='komentar'){
											echo "
									<div class=\"p-komentar\">
										<div class='profile-status'>
											Komentar yang ditulis
										</div>";
										for ($i=0; $i < 2; $i++) { 
											echo "
										<div class=\"comment\">
											<div class=\"col-sm-12 c_head\">
												<a href=\"\" class=\"a_thread\">Di topik : [Judul Thread]</a>
											</div>
											<div class=\"col-sm-12 c_body\">
												<div class=\"row\">
													<div class=\"col-sm-12 c_comment\">
														<div class=\"timestamp\">
															timestamp
														</div>
														<div class=\"c_comment_content\">
															blabla
														</div>
													</div>
												</div>
											</div>
										</div>";
										}
										echo "
									</div>
									";} elseif (isset($_GET['p']) && $_GET['p']=='thread') {
										echo "
									<div class=\"p-komentar\">
										<div class=\"profile-status\">
											Thread yang ditulis
										</div>";
										for ($i=0; $i < 100; $i++) { 
										echo "<div class=\"col-sm-12 c_head list_thread\">
											<a href=\"\" class=\"a_thread\">[Judul Thread]</a>
											<div class=\"timestamp\">[waktu post]</div>
										</div>";
										}
										
									echo "</div>";
									}?>
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