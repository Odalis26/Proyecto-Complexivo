<br>

<div class="content-wrapper" style="background-color:white; color:#800080;">

  <section class="content-header" style="background-color:white; color:#800080;">
    <br><br><br><br><br>
    <div class="col-lg-12">

      <?php

      if ($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Cliente" || $_SESSION["perfil"] == "Administrador") {

        echo '<div class="box box-success" style="background-color:white;border:white 3px solid">
 
             <div class="box-header" style="background-color:white;border:white 3px solid">
 
             <h1 style="background-color:white; color:#00aae4; text-align:center">Bienvenid@ ' . $_SESSION["nombre"] . '</h1>
 
             </div>
 
             </div>';
      }

      ?>

    </div>
    <br><br>   <br><br>   <br><br>   <br><br>   <br><br>
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Tablero</li>

    </ol>

  </section>

  <section class="content" style="background-color:white; color:#800080;">

    <div class="row">

      <?php

      if ($_SESSION["perfil"] == "Administrador") {

        include "inicio/cajas-superiores.php";
      }

      ?>

    </div>


  </section>
</div>