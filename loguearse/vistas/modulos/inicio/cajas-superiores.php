<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>


<br><br><br><br><br><br><br><br><br><br>
<div class="col-lg-3 col-xs-6" style="width:450px; left:250px">

  <div class="small-box bg-aqua" style="background-color:white;">

    <div class="inner" style="background:white; border: 2px solid white; color:black;height: 200px;">

      <h3 style="color:black;font-size: 50px;">$
        <?php echo number_format($ventas["total"], 2); ?></h3>
      <p style="color:black;font-size: 70px;"><b>Ventas</b></p>

    </div>

    <div class="icon">
      <i class="bi bi-piggy-bank-fill"></i>
      <svg xmlns="http://www.w3.org/2000/svg" style="color:#FC00AC;" width="146" height="146" fill="currentColor" class="bi bi-piggy-bank-fill" viewBox="0 0 16 16">
        <path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595Zm7.173 3.876a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199Zm-8.999-.65a.5.5 0 1 1-.276-.96A7.613 7.613 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.602 6.602 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
      </svg>

    </div>

    <a href="ventas" class="small-box-footer" style="background-color: black;border: 2px solid black; color:white;">

      Más info <i class="fa fa-arrow-circle-right" style="color:white;"></i>

    </a>

  </div>

</div>
<div class="col-lg-3 col-xs-6" style="width:450px; position:relative;top:0px;left:250px">

  <div class="small-box bg-yellow">

    <div class="inner" style="color:black; border: 2px solid white; background-color:white;height: 200px;">

      <h3 style="color:black;font-size: 50px;"><?php echo number_format($totalClientes); ?></h3>
      <p style="color:black;font-size: 70px;"><b>Clientes</b></p>

    </div>

    <div class="icon">
      <i class="bi bi-person-fill-add"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="146" height="146" style="color:#0099FC;" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
      </svg>
    </div>

    <a href="clientes" class="small-box-footer" style="border: 2px solid black;border-top: transparent; color:white;background-color:black">

      Más info <i class="fa fa-arrow-circle-right" style="color:white;"></i>

    </a>

  </div>

</div>
<div class="col-lg-3 col-xs-6" style="width:450px; left:-200px;top:100px">

  <div class="small-box bg-green">

    <div class="inner" style="background:white; border: 2px solid white; color:black; height: 240px;">

      <h3 style="color:black;font-size: 50px;"><?php echo number_format($totalCategorias); ?></h3>
      <br><br>
      <p style="color:black;font-size: 70px;"><b>Categorías</b></p>

    </div>

    <div class="icon">
      <i class="bi bi-clipboard2-plus-fill" style="color:black;"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" style="color:#63FC00;" fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
        <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
        <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0Z" />
      </svg>
    </div>

    <a href="categorias" class="small-box-footer" style="border: 2px solid black;border-top: transparent; background-color:black; color:white;">

      Más info <i class="fa fa-arrow-circle-right" style="color:white;"></i>

    </a>

  </div>

</div>



<div class="col-lg-3 col-xs-6" style="width:450px; position:relative; top:-190px; left:700px">

  <div class="small-box bg-red">

    <div class="inner" style="background:white; border: 2px solid white; color: black;height: 240px;">

      <h3 style="color:black;font-size: 50px;"><?php echo number_format($totalProductos); ?></h3>
      <br><br>
      <p style="color:black;font-size: 70px;"><b>Productos</b></p>

    </div>

    <div class="icon">

      <i class="bi bi-bag-plus-fill"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" style="color:#FCCA00;" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
      </svg>
    </div>

    <a href="productos" class="small-box-footer" style="border: 2px solid black;border-top: transparent; color:white;background-color:black">

      Más info <i class="fa fa-arrow-circle-right" style="color:white;"></i>

    </a>

  </div>

</div>