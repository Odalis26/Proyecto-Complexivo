<div id="back" style="background-color:white; color:#072664;"></div>

<div class="login-box" style="position:relative;top: -5px;left:500px">

  <div class="login-box-body" style="background-color:white; color:black; font-family: monospace;border: 5px black dashed;">
    <div class="login-logo">
    <img src="vistas/img/plantilla/logo.png" class="img-responsive" width="500px" style="border: 5px white dashed;">

    </div>
    <p class="login-box-msg" style=" color:black;  font-weight: bold; font-size: xx-large"> Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">
        Para registrar al cliente escriba cliente
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" style="background-color:white; color:black;font-family: monospace;" required>
        <span class="glyphicon glyphicon-user form-control-feedback" style="background-color:red; color:white; "></span>

      </div>

      <div class="form-group has-feedback">
      Para registrar al cliente escriba cliente
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" style="background-color:white; color:black;font-family: monospace;" required>
        <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color:black; color:white;"></span>

      </div>
      <br>
      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color:black; color:white; font-family: monospace; font-weight: bold; font-size: large; width:320px;  border: 1px solid red;">Ingresar</button>

        </div>

      </div>

      <?php

      $login = new ControladorUsuarios();
      $login->ctrIngresoUsuario();

      ?>

    </form>

  </div>

</div>
