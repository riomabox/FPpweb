<?php echo "
<div class=\"p-komentar\">
	<div class='profile-status'>
		Komentar yang ditulis
	</div>";
	foreach ($komen as $k) {
	 	$judul = $k->thread_judul;
	 	$idT = $k->thread_id;
	 	$timestamp = $k->comment_tanggal;
	 	$content = $k->comment_isi;
		echo "
	<div class=\"comment\">
		<div class=\"col-sm-12 c_head\">
			<a href=\"".base_url()."page/thread/$idT\" class=\"a_thread\">Di topik : [$judul]</a>
		</div>
		<div class=\"col-sm-12 c_body\">
			<div class=\"row\">
				<div class=\"col-sm-12 c_comment\">
					<div class=\"timestamp\">
						$timestamp
					</div>
					<div class=\"c_comment_content\">
						$content
					</div>
				</div>
			</div>
		</div>
	</div>";
	}
	echo "
</div>
"; ?>