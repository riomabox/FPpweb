<div class="comment">
	<div class="col-sm-11 c_head">
		<a href="<?php echo base_url();?>page/profile/$idididid" class="username"><?php echo $userID;?></a>
	</div>
	<div class="col-sm-1 c_head text-right">
		nomer
	</div>
	<div class="col-sm-12 c_body">
		<div class="row">
			<div class="col-sm-2 c_profile text-center">
				<?php if($postU < 100){
					$status = "Junior Member";
				} elseif ($postU < 300) {
					$status = "Member";
				} elseif ($postU < 500) {
					$status = "Member Tua";
				} else {
					$status = "Sesepuh";
				} 
				echo $status;
				?>
				<div class="c_foto">
					<?php
					if($pictU==NULL){
	                    echo "<img class='gambarTS' src='".base_url()."assets/images/default.png' />";
	                }
	                else{
	                    echo '<img class="gambarTS" src="data:image/jpeg;base64,'.base64_encode( $pictU).'"/>';
	                }
	                ?>
				</div>
				<?php echo $postU;?> Post
			</div>
			<div class="col-sm-10 c_comment">
				<div class="timestamp">
					<?php echo $tglU;?>
				</div>
				<div class="c_comment_content">
					<?php echo $isiU;?>
				</div>
			</div>
		</div>
	</div>
</div>