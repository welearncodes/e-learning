<?php $title = "eLearning"; ?>
<?php include ('../html/header.html'); ?>


<body>
  <header class=navbar-default>
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Git E-learning</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a style="pointer-events: none; cursor: default;" href="page.html">init</a>
          <li><a style="pointer-events: none; cursor: default;" href="page.html">add</a>
          <li><a style="pointer-events: none; cursor: default;" href="page.html">status</a>
          <li><a style="pointer-events: none; cursor: default;" href="page.html">commit</a>
          <li><a style="pointer-events: none; cursor: default;" href="page.html">push</a>
          <li><a style="pointer-events: none; cursor: default;" href="page.html">pull</a>
          <li><a style="pointer-events: none; cursor: default;" href="page.html">clone</a>
       </div><!-- /.navbar-collapse -->
    </div>
  </header>  
  </body>


<div class="videowrapper">

  <h1 class="text-center">Introduksjonsvideo om Git og GitHub</h1><hr>
  <iframe width="1080" height="608" src="https://www.youtube.com/embed/DR7MLaAKcUk?rel=0" align="middle" frameborder="0" allowfullscreen></iframe>


  <div class="row">
      <a href="Steg/init.php" type="button" class="btn btn-success btn-block" style="text-align: center; margin-top: 4em">Fortsett</a>
  </div>
</div>



<?php include ('../html/scripts.html'); ?>
<?php include ('../html/footer.html'); ?>