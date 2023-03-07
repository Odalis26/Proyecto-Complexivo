<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<br><br><br><br>
<div class="content-wrapper" style="background-color:white; position:relative; width:1170px; left:200px">

  <section class="content-header" style="background-color:white">
    
    <h1 style="color:black; font-family: monospace; font-weight: bold;" class="text-uppercase">
      
      Registro de Clientes para inicio de sesión 
    
    </h1>

    <ol class="breadcrumb" style="background-color:white">
      
      <li><a href="inicio" style="background-color:white;color:black"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Clientes</li>
    
    </ol>

  </section>

  <section class="content" style="background-color:white">

    <div class="box" style="background-color:white; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:white; border: 2px white solid;">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario" style="background-color:black; color:white; border: 2px black solid;">
          
          Registrar cliente

        </button>

      </div>

     
    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:black; color:white">

          <button type="button" style="color:white;" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title"  style="color:white;">Registrar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoPerfil" style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;">
                  
                  <option value="" style="background:black;border: 2px black solid; color:white;">Selecionar perfil</option>

                  <option value="Cliente">Cliente</option>
                  
                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel" style="background:white; color:black; border: 2px white solid;">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto" style="background:black; color:white; border: 2px black solid;">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="130px" style="background:black; color:white; border: 2px black solid;">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer"  style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:black; color:white; border: 2px black solid;">Guardar usuario</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

</div>



