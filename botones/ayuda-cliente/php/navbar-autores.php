<nav class="navbar navbar-default" role="navigation" style="background-color:black; color:white;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./" style="background-color:black; color:white;position:relative; left:250px;top: 90px;font-size:20px;"><b></b> <i class="bi bi-people-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
        </svg></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost:9000/" style="background-color:black; color:white;position:relative; left:-150px;font-size:22px;top:100px"><b>FASHION BEAUTY</b></a></li>
        <li><?php include "php/musica.php"; ?></li>
        <li>	<?php include "php/impresora.php"; ?></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="./buscar.php" style="position:relative;top:100px; left:-250px;">
        <div class="form-group">
          <input type="text" name="s" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>