<?php

error_reporting(0);

if (isset($_GET["fechaInicial"])) {

  $fechaInicial = $_GET["fechaInicial"];
  $fechaFinal = $_GET["fechaFinal"];
} else {

  $fechaInicial = null;
  $fechaFinal = null;
}

$respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

$arrayFechas = array();
$arrayVentas = array();
$sumaPagosMes = array();

foreach ($respuesta as $key => $value) {

  #Capturamos sólo el año y el mes
  $fecha = substr($value["fecha"], 0, 7);

  #Introducir las fechas en arrayFechas
  array_push($arrayFechas, $fecha);

  #Capturamos las ventas
  $arrayVentas = array($fecha => $value["total"]);

  #Sumamos los pagos que ocurrieron el mismo mes
  foreach ($arrayVentas as $key => $value) {

    $sumaPagosMes[$key] += $value;
  }
}


$noRepetirFechas = array_unique($arrayFechas);


?>

<!--=====================================
GRÁFICO DE VENTAS
======================================-->

<br><br><br><br><br><br>

<div class="box box-solid bg-teal-gradient" style="background-color:white; color:#330470;width:1170px; left:200px">

  <div class="box-header" style="background-color:white; color:black;border: 2px solid white; color:black;border-bottom: 2px solid transparent;">

    <i class="fa fa-th" style="color:black;"></i>

    <h3 class="box-title" style="font-weight: 700;">Gráfico de ventas</h3>

  </div>

  <div class="box-body border-radius-none nuevoGraficoVentas" style="background-color:white; color:black;border: 2px solid white;border-top: 2px solid transparent;">

    <div class="chart" id="line-chart-ventas" style="height: 250px; color:#00FF00;"></div>

  </div>

</div>

<script>
  var line = new Morris.Line({
    element: 'line-chart-ventas',
    resize: true,
    data: [

      <?php

      if ($noRepetirFechas != null) {

        foreach ($noRepetirFechas as $key) {

          echo "{ y: '" . $key . "', ventas: " . $sumaPagosMes[$key] . " },";
        }

        echo "{y: '" . $key . "', ventas: " . $sumaPagosMes[$key] . " }";
      } else {

        echo "{ y: '0', ventas: '0' }";
      }

      ?>

    ],
    xkey: 'y',
    ykeys: ['ventas'],
    labels: ['ventas'],
    lineColors: ['#00aae4'],
    lineWidth: 2,
    hideHover: 'auto',
    gridTextColor: 'black',
    gridStrokeWidth: 0.4,
    pointSize: 4,
    pointStrokeColors: ['#00aae4'],
    gridLineColor: 'black',
    gridTextFamily: 'Open Sans',
    preUnits: '$',
    gridTextSize: 10
  });
</script>
