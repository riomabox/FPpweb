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
	<?php
		if(isset($_SESSION['username'])){
			$login = true;
			foreach($posts as $post) { 
				include 'navbar_forum.php';
			};
		} else include 'navbar_forum.php';
	?>
	<div id="group1">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 thread">
					<div class="row">
						<div class="col-sm-1">
							<div class="gambarTS">
								
							</div>
						</div>
						<div class="col-sm-10">
							<span class="judul_thread">
								<!-- judul thread -->
								Ini judul Thread
							</span>
							<br>
							<span class="timestamp">
								<!-- timestamp -->
								Dimulai oleh ID pada hh:mm:ss
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-11 replysum">
							Thread ini mempunyai xx balasan.
						</div>
						<div class="col-sm-11 comment-wrapper">
							<div class="row">


								<!-- comment -->
								<?php include 'thread-comment.php'; ?>
								<!-- /comment -->
								<?php if(isset($login))include 'thread-form.php'; ?>

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