<?php

$item = null;
$valor = null;
$orden = "id";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

 ?>


<div class="box box-primary"style="border: 2px solid white;width:580px; left:28px">

  <div class="box-header with-border" style="color:white; background-color:black;">

    <h3 class="box-title" style="color:white;font-weight:bolder">Productos añadidos recientemente</h3>

    <div class="box-tools pull-right">

      <button type="button" class="btn btn-box-tool" data-widget="collapse" style="background-color:black;">

        <i class="fa fa-minus"></i>

      </button>

      <button type="button" class="btn btn-box-tool" data-widget="remove" style="background-color:black;">

        <i class="fa fa-times"></i>

      </button>

    </div>

  </div>
  
  <div class="box-body" style="color:black;background-color:white;border: 2px solid white;">

    <ul class="products-list product-list-in-box">

    <?php

    for($i = 0; $i < 10; $i++){

      echo '<li class="item" style="border: 2px solid white;">

        <div class="product-img">

        <img src="'.$productos[$i]["imagen"].'" alt="Product Image" style="margin-right:10px;width:120px; background-color:white; color: black;border: 2px solid black;">

        </div>

        <div class="product-info">

          <a href="" class="product-title" style="color:black;background-color:white">

            '.$productos[$i]["descripcion"].'

            <span class="label label-warning pull-right">$'.$productos[$i]["precio_venta"].'</span>

          </a>
    
       </div>

      </li>';

    }

    ?>

    </ul>

  </div>

  <div class="box-footer text-center"  style="color:black; background-color:red;">

    <a href="productos" class="uppercase"  style="background-color:red;color:white;">Ver todos los productos</a>
  
  </div>

</div>
