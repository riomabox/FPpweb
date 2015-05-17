<!DOCTYPE html>
<html>
<head>
	<title>Pweb - Signin Page</title>
	<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
</head>
<body>
	<script src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jasny-bootstrap.min.css">
	<div class="container">
		<div class="row-text-center">
			<a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#loginModal">Login</a>
		</div>
		<div class="row-text-center">
			<a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#registerModal">Register</a>
		</div>
	</div>

	<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	          <h1 class="text-center">Login</h1>
	      </div>
	      <div class="modal-body">
	          <form class="form col-md-12 center-block">
	            <div class="form-group">
	              <input class="form-control input-lg" placeholder="Email" type="text">
	            </div>
	            <div class="form-group">
	              <input class="form-control input-lg" placeholder="Password" type="password">
	            </div>
	            <div class="form-group">
	              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
	              <span class="pull-right"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Register</a></span><span><a href="#">Need help?</a></span>
	            </div>
	          </form>
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
	          <h1 class="text-center">Register</h1>
	      </div>
	      <div class="modal-body">
	          <form class="form col-md-12 center-block">
	            <div class="form-group">
	              <input class="form-control input-lg" placeholder="Nama" type="text">
	            </div>
	            <div class="form-group">
	              <input class="form-control input-lg" placeholder="Username" type="text">
	            </div>
	            <div class="form-group">
	              <input class="form-control input-lg" placeholder="Email" type="email">
	            </div>
	            <div class="form-group">
	              <input class="form-control input-lg" placeholder="Password" type="password">
	            </div>
	            <div class="form-group">
	              <input class="form-control input-lg" placeholder="Confirm Password" type="password">
	            </div>
	            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
				  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
				  <div>
				    <span class="btn btn-default btn-file"><span class="fileinput-new">Select Profile Picture</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
				    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				  </div>
				</div>
	            <div class="form-group">
	              <button class="btn btn-primary btn-lg btn-block">Register</button>
	              <span class="pull-right"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Sign In</a></span><span><a href="#">Need help?</a></span>
	            </div>
	          </form>
	      </div>
	      <div class="modal-footer">
	          <div class="col-md-12">
	          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			  </div>	
	      </div>
	  </div>
	  </div>
	</div>

</body>
</html>