<!DOCTYPE html>
<html>
<head>
	<title>Forum Page</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="icon" type="image/jg" href="<?php echo base_url(); ?>assets/images/favico.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_forum.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
</head>
<body>
	<?php include 'signin.php'; ?>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Pweb#3 Forum</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Home</a></li>
	        <li><a href="#">Page 1</a></li>
	        <li><a href="#">Page 2</a></li>
	        <li><a href="http://localhost/FPpweb/page/index">Front Page</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#" data-toggle="modal" data-target="#registerModal" ><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
	        <li><a href="#" data-toggle="modal" data-target="#loginModal" id="kanan"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div id="group1">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="thread-category">
						Kategori Thread 1
					</div>
					<div class="thread-subthreadlist">
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4"> 
									<div class="subthread-judul"><a href="">subthread-1</a><br></div>
									<div>blablabl</div>
								</div>
							</div>
						</div>
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4"> 
									<div class="subthread-judul"><a href="">subthread-2</a><br></div>
									<div>blablabl</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="group2">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="thread-category">
						Kategori Thread 2
					</div>
					<div class="thread-subthreadlist">
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4"> 
									<div class="subthread-judul"><a href="">subthread-1</a><br></div>
									<div>blablabl</div>
								</div>
							</div>
						</div>
						<div class="thread-subthread">
							<div class="row">
								<div class="col-sm-1 subthread-icon"><span class="glyphicon glyphicon-comment"></span></div>
								<div class="col-sm-4"> 
									<div class="subthread-judul"><a href="">subthread-2</a><br></div>
									<div>blablabl</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>