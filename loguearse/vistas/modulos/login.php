<div id="back" style="background-color:white; color:#072664;"></div>

<div class="login-box" style="position:relative;top: -60px;left:50px;width: 400px;height:300px">

  <div class="login-box-body" style="background-color:white; color:black; font-family: monospace;border: 5px black dashed;">
    <div class="login-logo">
    <img src="vistas/img/plantilla/logo.png" class="img-responsive" width="500px" style="border: 5px white dashed;">

    </div>
    <p class="login-box-msg" style=" color:black;  font-weight: bold; font-size: xx-large"> Ingresar al sistema</p>

    <form method="post">
    <b>Para registrar al cliente escriba cliente</b>
      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" style="background-color:white; color:black;font-family: monospace;" required>
        <span class="glyphicon glyphicon-user form-control-feedback" style="background-color:red; color:white; "></span>

      </div>
      <b>Para registrar al cliente escriba cliente</b>
      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" style="background-color:white; color:black;font-family: monospace;" required>
        <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color:black; color:white;"></span>

      </div>
      <br>
      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color:black; color:white; font-family: monospace; font-weight: bold; font-size: large; width:350px;  border: 1px solid red;">Ingresar</button>

        </div>

      </div>

      <?php

      $login = new ControladorUsuarios();
      $login->ctrIngresoUsuario();

      ?>

    </form>

  </div>

</div>

<div class="row">

<div class="col-xs-4">
<a class="nav-link" href="http://localhost:9000/categorias" style="background-color: transparent;color:black; position:relative; top:-300px;left: -150px;">
<i class="bi bi-arrow-left-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="56" height="50" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>  
</a>
</div>

</div>