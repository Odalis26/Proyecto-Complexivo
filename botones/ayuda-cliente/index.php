<?php
session_start();
?>
<html>
	<head>
		<title>Autores</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h2>AUTORA</h2>
	<a data-toggle="modal" href="#myModal" class="btn btn-default"><input type="image" src="../fotos/foto-Odalis-Rea.jpg" style="border: none;" height="250" width="170" /></a>
	<br><br>
	<?php include "../autores/php/tabla.php"; ?>
	<h2>AUTOR</h2>
	<a data-toggle="modal" href="#myModal" class="btn btn-default"><input type="image" src="../fotos/" style="border: none;" height="250" width="170" /></a>
	<br><br>
	<?php include "php/musica.php"; ?>
	</div>
	</div>
	</div>
	</body>
</html>