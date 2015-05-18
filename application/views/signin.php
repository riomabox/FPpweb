<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jasny-bootstrap.min.css">
	<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
		  <div class="modal-content">
		      <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		          <div class="modal-text-header text-center">Masuk</div>
		      </div>
		      <div class="modal-body">
		      		<div class="container-fluid">
			          <form class="form col-md-12 center-block">
			            <div class="form-group">
			              <input class="form-control input" placeholder="Email" type="text">
			            </div>
			            <div class="form-group">
			              <input class="form-control input" placeholder="Password" type="password">
			            </div>
			            
		         	</div>
		      </div>
				      <div class="modal-footer">
				          <div class="form-group">
				          	<button class="btn btn-primary btn btn-block">Masuk</button>
				          </div>
					  </div>
		      		</form>
		  </div>
	  </div>
	</div>

	<div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	          <div class="modal-text-header text-center">Daftar</div>
	      </div>
	      <div class="modal-body container-fluid">
	          <form class="form col-md-12 center-block">
	            <div class="form-group">
	              <input class="form-control input" placeholder="Nama" type="text">
	            </div>
	            <div class="form-group">
	              <input class="form-control input" placeholder="Username" type="text">
	            </div>
	            <div class="form-group">
	              <input class="form-control input" placeholder="Email" type="email">
	            </div>
	            <div class="form-group">
	              <input class="form-control input" placeholder="Password" type="password">
	            </div>
	            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
				  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
				  <div>
				    <span class="btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar Profil</span><span class="fileinput-exists">Ganti</span><input type="file" name="..."></span>
				    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
				  </div>
				</div>
	            
	        
	      </div>
	      	<div class="modal-footer">
	          	<div class="form-group">
	              <button class="btn btn-primary btn btn-block">Daftar</button>
	            </div>
	      	</div>
	      	</form>
	  </div>
	  </div>
	</div>