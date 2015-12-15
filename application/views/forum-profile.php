<!DOCTYPE html>
<?php
    error_reporting(E_ALL & ~E_WARNING);
?>

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
	<?php foreach($posts as $post) { include 'navbar_forum.php'; ?>
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
									<div >
										<?php 
											
                                        // mysql_connect("10.151.34.159","root","") or die(mysql_error());
                                        // mysql_select_db("fppweb") or die(mysql_error());

                                        // $email = $_SESSION['username'];
                                        // $image = mysql_query("SELECT * FROM user WHERE user_email='$email'");
                                        // $image = mysql_fetch_assoc($image);
                                        // $image = $image['user_pict'];

                                        if($post->user_pict==NULL){
                                            echo "<img class='gambarTS' src='".base_url()."assets/images/default.png' />";
                                        }
                                        else{
                                            echo '<img class="gambarTS" src="data:image/jpeg;base64,'.base64_encode( $post->user_pict).'"/>';
                                        }
                                        ?>
									</div>
									 <div class="list-group">
									 
										<a href="#" class="list-group-item p-menu active" id="overview">Status</a>
										<a href="#" class="list-group-item p-menu" id="komentar">Komentar</a>
										<a href="#" class="list-group-item p-menu" id="thread">Judul Topik</a>
									</div>

								</div>
								<input type="hidden" id="userID" value="<?php echo $post->user_id;?>">
								<div class="col-sm-10 profile-body">

									<?php 
									$user_register = $post->user_register;
									$user_register = strtotime($post->user_register);
									$user_register = date("H:i:s d-M-y", $user_register);

									$user_last_login = $post->user_last_login;
									$user_last_login = strtotime($post->user_last_login);
									$user_last_login = date("H:i:s d-M-y", $user_last_login);
									$jumlah = $post->user_jumlah_post;
									if($jumlah < 100){
										$status = "Junior Member";
									} elseif ($jumlah < 300) {
										$status = "Member";
									} elseif ($jumlah < 500) {
										$status = "Member Tua";
									} else {
										$status = "Sesepuh";
									}
										echo "
									<div class='p-overview'>
											<div class='profile-nama'>
												ID : $post->user_username
											</div>
											Menjadi member sejak [$user_register]
											<div class='profile-last-active timestamp'>
												Terakhir Login : $user_last_login
											</div>
											<div class='profile-status'>
												Forum Statistik
											</div>
											<div class='row'>
												<div class='col-sm-2 p-status-head text-right'>
													Member Status
												</div>
												<div class='col-sm-10 p-status-column'>
													$status
												</div>
												<div class='col-sm-2 p-status-head text-right'>
													Jumlah Post
												</div>
												<div class='col-sm-10 p-status-column'>
													$jumlah
												</div>
												<div class='col-sm-2 p-status-head text-right'>
													Email
												</div>
												<div class='col-sm-10 p-status-column'>
													$post->user_email
												</div>
											</div>
										</div>
									</div>
									";}?>
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