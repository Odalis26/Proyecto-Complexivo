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
				<h1>Autores</h1>
				<?php include "../autores/php/tabla.php"; ?>
				<h2 style="border: none;position:relative;left: 20px;">AUTORA</h2>
				<input type="image" src="../fotos/foto-Odalis-Rea.jpg" style="border: none;" height="250" width="170" />
				<h2 style="border: none;position:relative;top:-310px; left: 200px;">AUTOR</h2>
				<input type="image" src="../fotos/foto-Jorge.jpg" style="border: none;position:relative;top:-310px; left: 170px;" height="250" width="170" />
				<?php include "php/musica.php"; ?>
			</div>
		</div>
	</div>
</body>

</html>