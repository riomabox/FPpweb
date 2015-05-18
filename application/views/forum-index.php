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
	        <div class="col-sm-4 text-center"></div>
	        <div class="col-sm-4 text-center"></div>
	      </div>
	    </div>
	  </div>
	</div>
	<div id="box3" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	      	<h3>How Bad The Hunger is in Africa</h3>
	      	<br>
	        <?php include 'africa.php';?>
	      </div>
	    </div>
	  </div>
	</div>

	<footer>
	  <div class="container text-right">
	    <span class="glyphicon glyphicon-globe"></span> Langkah kecil dari <span>Kita</span> untuk <span>Mereka</span>
	  </div>
	</footer>
</body>
</html>