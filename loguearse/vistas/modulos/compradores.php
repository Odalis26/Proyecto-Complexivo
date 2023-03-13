<?php

$item = null;
$valor = null;

$ventas = ControladorVentas::ctrMostrarVentas($item, $valor);
$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

$arrayClientes = array();
$arraylistaClientes = array();

foreach ($ventas as $key => $valueVentas) {
  
  foreach ($clientes as $key => $valueClientes) {
    
      if($valueClientes["id"] == $valueVentas["id_cliente"]){

        #Capturamos los Clientes en un array
        array_push($arrayClientes, $valueClientes["nombre"]);

        #Capturamos las nombres y los valores netos en un mismo array
        $arraylistaClientes = array($valueClientes["nombre"] => $valueVentas["total"]);

        #Sumamos los netos de cada cliente
        foreach ($arraylistaClientes as $key => $value) {
          
          $sumaTotalClientes[$key] += $value;
        
        }

      }   
  }

}

#Evitamos repetir nombre
$noRepetirNombres = array_unique($arrayClientes);

?>

<!--=====================================
CLIENTES
======================================-->
<br><br><br><br><br>
<h1 style="text-align:center;color:black" class="text-uppercase">Clientes que hicieron compras</h1>
<br><br>
<div class="box box-primary" style="background-color:white; position:relative; width:870px; left:300px">
	
	<div class="box-header with-border" style="background-color: white;border: 2px solid white; color: #dc143c">
    
    	<h3 class="box-title" style="font-weight:700">Clientes</h3>
  	</div>

  	<div class="box-body" style="background-color: white;border: 2px solid white;">
  		
		<div class="chart-responsive">
			
			<div class="chart" id="bar-chart2" style="height: 300px;"></div>

		</div>

  	</div>

</div>

<script>
	
//BAR CHART
var bar = new Morris.Bar({
  element: 'bar-chart2',
  resize: true,
  data: [
     <?php
    
    foreach($noRepetirNombres as $value){

      echo "{y: '".$value."', a: '".$sumaTotalClientes[$value]."'},";

    }

  ?>
  ],
  barColors: ['#dc143c'],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['compras'],
  preUnits: '$',
  hideHover: 'auto'
});


</script>