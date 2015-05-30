<?php
    error_reporting(E_ALL & ~E_NOTICE);
?>
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
						|
					</div>
					<?php
						foreach ($thread as $thr) {
							echo "
					<div class=\"thread-subthreadlist\">
						<div class=\"thread-subthread\">
							<div class=\"row\">
								<div class=\"col-sm-1 subthread-icon\"><span class=\"glyphicon glyphicon-comment\"></span></div>
								<div class=\"col-sm-11 subthread-isi\"> 
									<div class=\"subthread-judul\"><a href=\"".base_url()."page/thread/$thr->thread_id\">$thr->thread_judul</a><br></div>
									<div class=\"timestamp\">Dimulai oleh $thr->user_username pada $thr->thread_tanggal </div>
									<div>$thr->thread_reply balasan</div>
								</div>
							</div>
						</div>
					</div>";
						}
					?>
					
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