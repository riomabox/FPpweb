<?php include 'signin.php'; ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FFA</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>page/forum">Forum</a></li>
        <li><a href="<?php echo base_url();?>page/index">Web</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <?php
        if(!isset($_SESSION['username'])){
       echo '<li><a href="" data-toggle="modal" data-target="#registerModal" ><span class="glyphicon glyphicon-user"></span> Daftar</a></li>';
      echo '<li><a href="" data-toggle="modal" data-target="#loginModal" id="kanan"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>'; 
      
        }   
        else{

       echo '<li><a href="'.base_url().'page/profile/'.$post->user_id.'">Profil</a></li>';
       echo '<li><a href="'.base_url().'page/posting">Tambah Topik</a></li>';
       echo '<li><a href="'.base_url().'page/logout" id="kanan">Keluar</a>';
   
        }
         ?>

      </ul>
    </div>
  </div>
</nav>