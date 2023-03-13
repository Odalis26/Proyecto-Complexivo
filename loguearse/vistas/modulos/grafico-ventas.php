<div class="row" style="background-color:white; position:relative; width:970px; left:200px">

  <div class="col-lg-8">

    <?php

    if ($_SESSION["perfil"] == "Administrador") {

      include "reportes/grafico-ventas.php";
    }

    ?>

  </div>
  <div class="col-lg-6">

    <?php

    if ($_SESSION["perfil"] == "Administrador") {

      include "reportes/productos-mas-vendidos.php";
    }

    ?>

  </div>

  <div class="col-lg-6">

    <?php

    if ($_SESSION["perfil"] == "Administrador") {

      include "inicio/productos-recientes.php";
    }

    ?>

  </div>

</div>