<?php 

	
	echo "
	<div class=\"p-komentar\">
		<div class=\"profile-status\">
			Thread yang ditulis
		</div>";
		foreach ($thread as $k) { 
			$judul = $k->thread_judul;
			$idT = $k->thread_id;
			$timestamp = $k->thread_tanggal;
			echo "<div class=\"col-sm-12 c_head list_thread\">
				<a href=\"".base_url()."page/thread/$idT\" class=\"a_thread\">$judul</a>
				<div class=\"timestamp\">[$timestamp]</div>
			</div>";
		}
		
	echo "</div>";
?>