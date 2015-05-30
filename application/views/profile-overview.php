<?php
// $userID = $('#userID').val();
foreach ($posts as $post) {
	date_default_timezone_set('Asia/Bangkok');
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
			ID User : $userID
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
";
	?>