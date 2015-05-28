<script src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jasny-bootstrap.min.css">
	<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
		  <div class="modal-content">
		      <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		          <div class="modal-text-header text-center">Log In</div>
		      </div>
		      <div class="modal-body">
		      		<div class="container-fluid">
                      <?php echo validation_errors(); ?>
			          <form class="form col-md-12 center-block" action="http://localhost/FPpweb/LoginController/checkLogin" method="POST" enctype="multipart/form-data">
			            <div class="form-group">
			              <input class="form-control input" placeholder="Email" type="text" name="username">
			            </div>
			            <div class="form-group">
			              <input class="form-control input" placeholder="Password" type="password" name="password">
			            </div>
			            <div class="form-group">
			              <button class="btn btn-primary btn btn-block">Sign In</button>
			            </div>
			          </form>
		         	</div>
		      </div>
		      <div class="modal-footer">
		          <div class="col-md-12">
		          	<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
				  </div>	
		      </div>
		  </div>
	  </div>
	</div>

	<div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	          <div class="modal-text-header text-center">Register</div>
	      </div>
	      <div class="modal-body container-fluid">
                <?php echo validation_errors(); ?>
	            <?php echo form_open_multipart('LoginController/account'); ?>
	            <div class="form-group">
	              <input class="form-control input" placeholder="Username" type="text" name="sign-username" id="sign-username">
	            </div>
	            <div class="form-group">
	              <input class="form-control input" placeholder="Email" type="text" name="sign-email" id="sign-email">
	            </div>
	            <div class="form-group">
	              <input class="form-control input" placeholder="Password" type="password" name="sign-password" id="sign-password">
	            </div>
	            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
				  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
				  <div>
				    <span class="btn btn-default btn-file"><span class="fileinput-new">Select Profile Picture</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
				    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				  </div>
				</div>
	            <div class="form-group">
	              <button class="btn btn-primary btn btn-block" name="create" id="create" type="submit">Register</button>
	           </div>
	            <?php echo form_close(); ?>
	      </div>
	      <div class="modal-footer">
	          <div class="col-md-12">
	          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			  </div>	
	      </div>
	  </div>
	  </div>
	</div>