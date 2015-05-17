<!DOCTYPE html>
<html>
<head>
	<title>Forum - Front Page</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
</head>
<body>
	<?php include 'signin.php'; ?>
	<?php $nav = 'home'; include "navbar.php"; ?>
	<div id="box2" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h3>Option #2</h3>
	        <?php include 'loremipsum'; ?>
	      </div>
	    </div>
	  </div>
	</div>
	<div id="box3" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h3>Option #3</h3>
	      </div>
	    </div>
	  </div>
	</div>

	<footer>
	  <hr />
	  <div class="container">
	    <p class="text-right">Third Web Progamming Class' Project </p>
	  </div>
	</footer>
</body>
</html>