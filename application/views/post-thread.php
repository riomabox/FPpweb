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
    <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js" type="text/javascript"></script>
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
						<h2 id="judul-sub">Membuat topik baru</h2>
					</div>
					
					<div class="thread-subthreadlist">
						<div class="thread-subthread post-thread">
								<div class="form-group">
									<label for="thread-topic">Judul Topik</label>
									<input class="form-control input" placeholder="" type="text" name="thread-title" id="thread-title">
								</div>
								<div class="form-group">
									<label for="thread-tag">Tag</label>
									<input class="form-control input" placeholder="" type="text" name="thread-tag" id="thread-tag">
								</div>
								<div class="form-group ">
									<textarea name="content" id="thread-content" rows="10" cols="80"></textarea>
							        <script>
							            CKEDITOR.replace( 'thread-content' );
							        </script>
								</div>
								<div class="form-group">
					              <button class="btn btn-success btn btn-block" name="create" id="create" type="submit">Submit</button>
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