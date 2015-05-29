<?php echo "
<div class=\"p-komentar\">
	<div class='profile-status'>
		Komentar yang ditulis
	</div>";
	for ($i=0; $i < 2; $i++) { 
		echo "
	<div class=\"comment\">
		<div class=\"col-sm-12 c_head\">
			<a href=\"\" class=\"a_thread\">Di topik : [Judul Thread]</a>
		</div>
		<div class=\"col-sm-12 c_body\">
			<div class=\"row\">
				<div class=\"col-sm-12 c_comment\">
					<div class=\"timestamp\">
						timestamp
					</div>
					<div class=\"c_comment_content\">
						blabla
					</div>
				</div>
			</div>
		</div>
	</div>";
	}
	echo "
</div>
"; ?>