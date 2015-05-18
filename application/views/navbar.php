
<!-- box1 -->
<div id="box1" class="home">
  <div class="text-vcenter">
    <h1>No More Hunger in Africa</h1>
 </div>
</div>
<!-- /box1 --> 

<!-- navbar -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#"></a> </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav">
        <li <?php if($nav == 'home')echo "class=active";?>><a href="javascript:void(0);"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="box1"><a href="#box2">Menu Item #2</a></li>
        <li><a href="#box3">Menu Item #3</a></li>
        <li><a href="#">Menu Item #4</a></li>
        <li><a href="javascript:void(0);">Menu Item #5</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#registerModal" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- /navbar --> 