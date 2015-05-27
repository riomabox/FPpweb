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
				<div class="col-sm-12 thread">
					<div class="row">
						<div class="col-sm-1">
							<div class="gambarTS">
								<!-- isi gambar TS disini -->
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
								<div class="comment">
									<div class="col-sm-11 c_head">
										ID
									</div>
									<div class="col-sm-1 c_head text-right">
										nomer
									</div>
									<div class="col-sm-12 c_body">
										<div class="row">
											<div class="col-sm-2 c_profile text-center">
												Member
												<div class="c_foto">
													
												</div>
												xxx Post
											</div>
											<div class="col-sm-10 c_comment">
												<div class="timestamp">
													timestamp
												</div>
												<div class="c_comment_content">
													blabla
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /comment -->
								<div class="comment">
									<div class="col-sm-12 c_input">
										<form>
								            <textarea name="editor1" id="c_input_form" rows="10" cols="80"></textarea>
								            <script>
								                CKEDITOR.replace( 'c_input_form' );
								            </script>
								            <input type="submit" value="Komentar" class="btn btn-primary">
								        </form>
								    </div>
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