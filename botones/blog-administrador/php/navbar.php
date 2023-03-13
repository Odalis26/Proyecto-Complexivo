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
      <a class="navbar-brand" href="./ver.php" style="background-color:black; color:white;position:relative; left:50px;top: 90px;font-size:20px;"><b></b><i class="bi bi-chat-dots-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
          <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </svg></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
      <li><a href="http://localhost/proyecto-complexivo/loguearse" style="background-color:black; color:white;"><b><i class="bi bi-arrow-left-square-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="position:relative; left:-250px"fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
          <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
        </svg></b></a></li>
        <li><?php include "php/musica.php"; ?></li>
        <li> <?php include "php/impresora.php"; ?></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="./buscar.php" style="position:relative;top:100px; left:50px;">
        <div class="form-group">
          <input type="text" name="s" class="form-control" placeholder="Buscar" >
        </div>
        <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>