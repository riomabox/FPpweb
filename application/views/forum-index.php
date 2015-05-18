<!DOCTYPE html>
<html>
<head>
	<title>Front Page</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="icon" type="image/jg" href="<?php echo base_url(); ?>assets/images/favico.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
</head>
<body>
	<?php include 'signin.php'; ?>
	<?php $nav = 'home'; include "navbar.php"; ?>

	<!-- Keadaan -->
	<div id="box2" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h3>Keadaan Afrika Sekarang</h3>
	        <hr>
	        <div class="col-sm-12 text-center">
	        	<?php include 'box2'; ?>
	        </div>
	        <div class="col-sm-4 text-center"></div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Keadaan -->

	<!-- Penyebab -->
	<div id="box3" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	      	<h3>Apa yang menyebabkan kelaparan dan kemiskinan di Afrika?
</h3>
			<hr>
	      </div>
	      <div class="col-sm-4 text-center">
	      	<span class="glyphicon glyphicon-usd"></span>
	      	<div class="text-center box3-judul">Kemiskinan</div>
	      	Sekitar 47 persen dari populasi di sub-sahara afrika hidup dengan penghasilan
hanya sebesar $1.25 atau kurang.<br>
	      </div>
	      <div class="col-sm-4 text-center">
	      	<span class="glyphicon glyphicon-fire"></span>	      
	      	<div class="text-center box3-judul">Konflik</div>
	      	Konflik adalah sumber dari kesengsaraan manusia, termasuk kemiskinan dan kelaparan.
Tingkat kemiskinan naik 20 persen untuk negara yang diselimuti konflik di 3 dekade terakhir.<br>
	      </div>
	      <div class="col-sm-4 text-center">
	      <span class="glyphicon glyphicon-piggy-bank"></span>	
	      	<div class="text-center box3-judul">Sistem Ekonomi yang Buruk</div>
	      	Kontrol dari sumber daya dan penghasilan berbasis militer dan kekuatan
politik menjadikan orang - orang minoritas semakin terpuruk.<br>
	      </div>
	      <div class="col-sm-6 text-center">
	      <span class="glyphicon glyphicon-tree-deciduous"></span>	
	      	<div class="text-center box3-judul">Lingkungan</div>
	      	Afrika menghadapi ancaman lingkungan yang benar benar serius, termasuk erosi,
perluasan padang pasir, penbangan hutan dan yang terpenting adalah kekeringan dan
kurangnya sumber air yang mana hal ini berdampak pada sektor agrikultur dan akhirnya
menuju ke kelaparan.<br>
	      </div>
	      <div class="col-sm-6 text-center">
	      <span class="glyphicon glyphicon-stats"></span>
	      	<div class="text-center box3-judul">Pertumbuhan Populasi</div>
	      	Populasi di afrika berkembang dengan sangat cepat. Dari 221 juta di tahun 1950 menjadi
1 miliar jiwa di tahun 2009. Afrika, sebagai benua yang paling miskin memiliki pertumbuhan jiwa
yang paling besar di dunia. Hal ini semakin memperparah tingkat kemiskinan dan kelaparan di benua ini.
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Penyebab -->


	<!-- Peta -->
	<div id="box4" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h3>Peta Kelaparan Afrika</h3>
	        <hr>
	        <div class="col-sm-12 text-center">
	        	<?php include 'africa.php'; ?>
	        </div>
	        <!-- <div class="col-sm-4 text-center"></div> -->
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Peta -->

	<!-- Donasi -->
	<div id="box5" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h3>Bagaimana anda bisa membantu mereka</h3>
	        <hr>
	        <div class="col-sm-12 text-center">
	        	
	        </div>
	        <!-- <div class="col-sm-4 text-center"></div> -->
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Donasi -->

	<!-- Tentang Kami -->
	<div id="box4" class="pad-section">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 text-center">
	        <h3>Tentang Kami</h3>
	        <hr>
	        <div class="col-sm-1"></div>
	        <div class="col-sm-2">
	        	<div class="kami text-center">
	        		Freddy
	        	</div>
	        </div>
	        <div class="col-sm-2">
	        	<div class="kami">
	        		Agha
	        	</div>
	        </div>
	        <div class="col-sm-2">
	        	<div class="kami">
	        		Fikri
	        	</div>
	        </div>
	        <div class="col-sm-2">
	        	<div class="kami">
	        		Rio
	        	</div>
	        </div>
	        <div class="col-sm-2">
	        	<div class="kami">
	        		Anwar
	        	</div>
	        </div>
	        <!-- <div class="col-sm-4 text-center"></div> -->
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Tentang Kami -->

	<footer>
	  <div class="container text-right">
	    <span class="glyphicon glyphicon-globe"></span> Langkah kecil dari <span>Kita</span> untuk <span>Mereka</span>
	  <div class="container">
	  	<div class="row">
	        <div class="col-sm-2 text-right"><a href="#box1" class="footer-judul">Pweb#3</a></div>
	        <div class="col-sm-3 text-left">
	        	<a href="#box2">Alasan Kami</a><br>
	        	<a href="#box3">Penyebab Kelaparan di Afrika</a><br>
	        	<a href="#box4">Peta Kelaparan</a><br>
	        	<a href="#box5">Donasi</a><br>
	        </div>
	        <div class="col-sm-7 text-left">
	        	<a href="#box5" class="footer-judul">Forum</a><br>
	        </div>
	      </div>
	    </div>
	  </div>  
	  </div>
	</footer>
</body>
</html>