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
	<?php
		if(isset($_SESSION['username'])){
			foreach($posts as $post) { 
				include 'navbar_forum.php';
			};
		} else include 'navbar_forum.php';
	?>
	<div id="group1">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 thread">
					<div class="thread-category pad-left pad-bottom" style="background-color:white; color:black">
						<h2 id="judul-sub">Forum blablabla</h2><br>
						Penjelasan Forum
					</div>
					<div class="col-sm-12 category-header">
						<a href="">Paling Banyak dilihat</a><t>
						<a href="">Paling Baru</a>
					</div>
					<div class="thread-subthreadlist">
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4 subthread-isi"> 
									<div class="subthread-judul"><a href="<?php echo base_url(); ?>page/thread">thread-1</a><br></div>
									<div>blablabl</div>
								</div>
							</div>
						</div>
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4 subthread-isi"> 
									<div class="subthread-judul"><a href="<?php echo base_url(); ?>page/thread">thread-2</a><br></div>
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