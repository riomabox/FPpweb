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
		foreach ($TS as $tees ) {
			$gambarTS = $tees->user_pict;
			$idTS = $tees->user_username;
			$postTS = $tees->user_jumlah_post;
		}
		foreach ($thread as $thr) {
			$judulT = $thr->thread_judul;
			$isiT = $thr->thread_isi;
			$replyT = $thr->thread_reply;
			$idT = $thr->thread_id;


			$tglT = $thr->thread_tanggal;
			$tglT = strtotime($tglT);
			$tglT = date("H:i:s d-M-y", $tglT);
		}

		
	?>
	<div id="group1">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 thread">
					<div class="row">
						<div class="col-sm-1">
							<div class="gambarTS">
								<?php
									if($gambarTS==NULL){
                                        echo "<img class='gambarTS' src='".base_url()."assets/images/default.png' />";
                                    }
                                    else{
                                        echo '<img class="gambarTS" src="data:image/jpeg;base64,'.base64_encode( $gambarTS).'"/>';
                                    }
								?>
							</div>
						</div>
						<div class="col-sm-10 header_thread">
							<span class="judul_thread">
								<!-- judul thread -->
								<?php echo $judulT;?>
							</span>
							<br>
							<span class="timestamp">
								<!-- timestamp -->
								Dimulai oleh <strong><?php echo $idTS;?></strong> pada <?php echo $tglT;?>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-11 replysum">
							Thread ini mempunyai <?php echo $replyT;?> balasan.
						</div>
						<div class="col-sm-11 comment-wrapper">
							<div class="row">
							<!-- post TS -->
								<div class="comment">
									<div class="col-sm-11 c_head">
										<?php echo $idTS;?>
									</div>
									<div class="col-sm-1 c_head text-right">
										nomer
									</div>
									<div class="col-sm-12 c_body">
										<div class="row">
											<div class="col-sm-2 c_profile text-center">
												<?php if($postTS < 100){
													$status = "Junior Member";
												} elseif ($postTS < 300) {
													$status = "Member";
												} elseif ($postTS < 500) {
													$status = "Member Tua";
												} else {
													$status = "Sesepuh";
												} 
												echo $status;
												?>
												<div class="c_foto">
													<?php
														if($gambarTS==NULL){
					                                        echo "<img class='gambarTS' src='".base_url()."assets/images/default.png' />";
					                                    }
					                                    else{
					                                        echo '<img class="gambarTS" src="data:image/jpeg;base64,'.base64_encode( $gambarTS).'"/>';
					                                    }
													?>
												</div>
												<?php echo $postTS;?> Post
											</div>
											<div class="col-sm-10 c_comment">
												<div class="timestamp">
													<?php echo $tglT;?>
												</div>
												<div class="c_comment_content">
													<?php echo $isiT;?>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- comment -->
								<?php 
									foreach ($komen as $kom ) {
										$userID = $kom->user_username;
										$isiU = $kom->comment_isi;
										$pictU = $kom->user_pict;
										$postU = $kom->user_jumlah_post;

										$tglU = $kom->comment_tanggal;
										$tglU = strtotime($tglU);
										$tglU = date("H:i:s d-M-y", $tglU);
										

										include 'thread-comment.php';

									} 
								?>
								<!-- /comment -->
								<?php if(isset($login)){
									echo "
									<div class=\"comment\">
										<div class=\"col-sm-12 c_input\">        ";

									       
										echo validation_errors();
										echo form_open_multipart('page/createComment');
										echo "
												<div class=\"form-group\">
													<input type='hidden' class=\"form-control input\" name=\"userID\" value=\"". $_SESSION['userid']."\">
												</div>
												<div class=\"form-group\">
													<input type='hidden' class=\"form-control input\" name=\"threadID\" value=\"". $idT."\">
												</div>
												<div class=\"form-group \">
													<textarea name=\"content\" id=\"content\" rows=\"10\" cols=\"80\"></textarea>
											        <script>
											            CKEDITOR.replace( 'content' );
											        </script>
												</div>
												<div class=\"form-group\">
									              <button class=\"btn btn-success btn btn-block\" name=\"create\" id=\"create\" type=\"submit\">Submit</button>
									           </div>";
									    echo form_close();
									    echo "</div>
									    </div>";

}
								 ?>

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