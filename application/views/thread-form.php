<div class="comment">
	<div class="col-sm-12 c_input">        

        	<?php 
				echo validation_errors();
				echo form_open_multipart('page/createComment');
			?>
			<div class="form-group">
				<input class="form-control input" placeholder="" type="text" name="userID" value="<?php echo $_SESSION['id'];?>">
			</div>
			<div class="form-group">
				<input class="form-control input" placeholder="" type="text" name="threadID" value="<?php echo $idT;?>">
			</div>
			<div class="form-group ">
				<textarea name="content" id="content" rows="10" cols="80"></textarea>
		        <script>
		            CKEDITOR.replace( 'content' );
		        </script>
			</div>
			<div class="form-group">
              <button class="btn btn-success btn btn-block" name="create" id="create" type="submit">Submit</button>
           </div>
           <?php echo form_close(); ?>
    </div>
</div>