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
	<div class="container">
		<?php include 'loremipsum' ?>
	</div>
</body>
</html>