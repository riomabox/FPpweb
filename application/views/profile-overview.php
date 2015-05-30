
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
";}
	?>