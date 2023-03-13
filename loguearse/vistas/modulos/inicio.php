<br>

<div class="content-wrapper" style="background-color:white; color:#800080;width:970px;left:500px">

  <section class="content-header" style="background-color:white; color:#800080;">
    <br><br><br><br><br>
    <div class="col-lg-12">

      <?php

      if ($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Administrador") {

        echo '<div class="box box-success" style="background-color:white;border:white 13px solid;left:200px;">
 
             <div class="box-header" style="background-color:white;border:white 13px solid">
 
             <h1 style="background-color:white; color:#00aae4; text-align:center;font-size:100px">Bienvenid@ ' . $_SESSION["nombre"] . '</h1>
 
             </div>
 
             </div>';
      } if ($_SESSION["perfil"] == "AdministradorComprador") {

        echo '<div class="box box-success" style="background-color:white;border:white 13px solid;left:200px;">
 
             <div class="box-header" style="background-color:white;border:white 13px solid">
 
             <h1 style="background-color:white; color:#00aae4; text-align:center;font-size:80px">Bienvenid@ ' . $_SESSION["nombre"] . '</h1>
             <h1 style="background-color:white; color:#00aae4; text-align:center;font-size:50px">A BEAUTY FASHION </h1>
             </div>
 
             </div>';
      }

      if ($_SESSION["perfil"] == "Cliente") {

        echo '<div class="box box-success" style="background-color:white;border:white 13px solid;left:200px;">
 
             <div class="box-header" style="background-color:white;border:white 13px solid">
 
             <h1 style="background-color:white; color:#00aae4; text-align:center;font-size:80px">Bienvenid@ ' . $_SESSION["nombre"] . '</h1>
             <h1 style="background-color:white; color:#00aae4; text-align:center;font-size:50px">A BEAUTY FASHION </h1>
             <a href="clientes">
             <h1 style="background-color:white; color:black; text-align:center;font-size:50px">Regístrate  Aquí para crear tu perfil</h1>
             </a>
             <a href="crear-venta">
             <h1 style="background-color:white; color:red; text-align:center;font-size:30px">Para realizar tus compras</h1>
             </a>
             </div>
             </div>';
      }
      if ($_SESSION["perfil"] == "RegistroCliente") {

        echo '<div class="box box-success" style="background-color:white;border:white 13px solid;left:200px;">
 
             <div class="box-header" style="background-color:white;border:white 13px solid">
 
             <h1 style="background-color:white; color:#00aae4; text-align:center;font-size:100px">Bienvenid@ ' . $_SESSION["nombre"] . '</h1>
             <h1 style="background-color:white; color:#00aae4; text-align:center;font-size:50px">A BEAUTY FASHION </h1>
             <a href="cliente">
             <h1 style="background-color:white; color:black; text-align:center;font-size:50px">Regístrate  Aquí para crear tu usuario</h1>
             </a>
             <h1 style="background-color:white; color:red; text-align:center;font-size:30px">Para iniciar sesión</h1>
             </div>
 
             </div>';
      }
      ?>

    </div>
    <br><br>   <br><br>   <br><br>   <br><br>   <br><br>

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