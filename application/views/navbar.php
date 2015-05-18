<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
<!-- box1 -->
<div id="box-box1"></div>
<div id="box-box2"></div>
<div id="box1" class="home" >
  <div class="text-vcenter">
    <h1>Hapus Kelaparan Afrika</h1>
 </div>
</div>
<!-- /box1 --> 

<!-- navbar -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Pweb#3</a></div>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav">
        <li <?php if($nav == 'home')echo "class=active";?>><a href="#box1"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="box1"><a href="#box2">Alasan</a></li>
        <li><a href="#box3">Penyebab</a></li>
        <li><a href="#box4">Peta Kelaparan</a></li>
        <li><a href="#box5">Donasi</a></li>
        <li><a href="#box6">Tentang Kami</a></li>
        <li><a href="javascript:void(0);">Forum</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#registerModal" ><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
        <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- /navbar --> 