<!DOCTYPE html>
<html>
<head>
	<title>Forum | Sub-Kategori Name</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="icon" type="image/jg" href="<?php echo base_url(); ?>assets/images/favico.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_forum.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
</head>
<body>
	<?php include 'navbar_forum.php'; ?>
	<div id="group1">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 thread">
					<div class="thread-category pad-left pad-bottom" style="background-color:white; color:black">
						<h2 id="judul-sub">Judul Sub-Kategori</h2><br>
						Penjelasan Sub-Kategori
					</div>
					<div class="col-sm-12 category-header">
						<a href="">Most Viewed</a><t>
						<a href="">Most Recent</a>
					</div>
					<div class="thread-subthreadlist">
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4 subthread-isi"> 
									<div class="subthread-judul"><a href="http://localhost/FPpweb/page/forumCat">thread-1</a><br></div>
									<div>blablabl</div>
								</div>
							</div>
						</div>
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4 subthread-isi"> 
									<div class="subthread-judul"><a href="">thread-2</a><br></div>
									<div>blablabl</div>
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