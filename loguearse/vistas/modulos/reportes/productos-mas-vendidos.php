<?php

$item = null;
$valor = null;
$orden = "ventas";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

$colores = array("black", "black");

$totalVentas = ControladorProductos::ctrMostrarSumaVentas();


?>

<!--=====================================
PRODUCTOS MÁS COMPRADOS POR LOS CLIENTES
======================================-->

<div class="box box-default"  style="background-color:white; position:relative; width:470px; left:40px">

  <div class="box-header with-border" width="110px"style="background-color:black;border: 3px solid black;">

    <h3 class="box-title" style="color:white; font-weight:bolder">Productos más comprados por los clientes</h3>

  </div>

  <div class="box-body" style="background-color:white;border: 3px solid white;">

    <div class="row">


    </div>

  </div>

  <div class="box-footer no-padding" style="background-color:white;border: 3px solid white;">

    <ul class="nav nav-pills nav-stacked" style="background-color:white;border: 3px solid white;">

      <?php

      for ($i = 0; $i < 5; $i++) {

        echo '<li style="color:black; background-color:white;border: 3px solid white;">
						 
						 <a style="color:black; background-color:white;border: 3px solid white;">
						 <img src="'.$productos[$i]["imagen"].'"  class="img-thumbnail" width="90px"  style="margin-right:10px; background-color:white; color: black;"> 
						 ' . $productos[$i]["descripcion"] . '

						 <span class="pull-right text-' . $colores[$i] . '">   
						 ' . ceil($productos[$i]["ventas"] * 100 / $totalVentas["total"]) . '%
						 </span>
							
						 </a>

      				</li>';
      }

      ?>


    </ul>

  </div>

</div>