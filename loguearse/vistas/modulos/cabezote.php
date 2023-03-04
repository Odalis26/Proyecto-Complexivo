 <header style="background-color:#031466;" class="main-header">

 	<!--=====================================
	LOGOTIPO
	======================================-->
 	<a href="inicio" class="logo" style="height:185px; background-color:white">

 		<!-- logo mini -->
 		<span class="logo-mini">


 		</span>

 		<!-- logo normal -->

 		<span class="logo-lg">

 			<img src="vistas/img/plantilla/logo.png" class="img-responsive" style="padding:50px 0px; width: 200px; height:185px;">

 		</span>

 	</a>

 	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
 	<nav class="navbar navbar-static-top" role="navigation" style="background-color: white;">

 		<!-- Botón de navegación -->

 		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: white;color:black">

 			<span class="sr-only">Toggle navigation</span>

 		</a>

 		<!-- perfil de usuario -->

 		<div class="navbar-custom-menu">

 			<ul class="nav navbar-nav">

 				<li class="dropdown user user-menu">

 					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:white;border:white 7px solid;color:black ">

 						<?php

							if ($_SESSION["foto"] != "") {

								echo '<img src="' . $_SESSION["foto"] . '" class="user-image">';
							} else {


								echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
							}


							?>

 						<span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>

 					</a>

 					<!-- Dropdown-toggle -->

 					<ul class="dropdown-menu" style="background-color:transparent;border:transparent 7px solid; width:150px">

 						<li class="user-body" style="position:relative; top: -27px;left:10px;background-color:transparent;border:white 7px solid; width:150px">



 							<a href="salir" class="btn btn-default btn-flat">Salir</a>



 						</li>

 					</ul>

 				</li>

 			</ul>

 		</div>

 		<img src="vistas/img/plantilla/logo.png" class="img-responsive" style="padding-top:30px;width: 500px; height:130px;position:relative; left:520px">

 		<p style="background-color: red;color:white; font-size:20px;text-align:center;font-weight:bolder;width: 500px;position:relative; left:562px">Beauty Fashion</p>
 	</nav>

 </header>