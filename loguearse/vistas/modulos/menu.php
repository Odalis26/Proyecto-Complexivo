<aside class="main-sidebar" style="background-color:white;">

	<section class="sidebar" style="background-color:white;">

		<ul class="sidebar-menu" style="background-color:white;">

			<?php

			if ($_SESSION["perfil"] == "Administrador") {

				echo '<br><br><br><br><br><br><br><br><br><li class="active">

				<a href="inicio"  style="background-color:white;font-weight: bold;">

					<i class="fa fa-home"  style="color:black"></i>
					<span style="color:black">Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios"  style="background-color:black;font-weight: bold;">

					<i class="fa fa-user"  style="color:white"></i>
					<span style="color:white">Usuarios</span>

				</a>

			</li>';
			}
			if ($_SESSION["perfil"] == "RegistroCliente") {

				echo '<br><br><br><br><br><br><br><br><br>
				
				<li class="active">

					<a href="inicio"  style="background-color:white;font-weight: bold;">

						<i class="fa fa-home"  style="color:black"></i>
						<span style="color:black">Inicio</span>

					</a>

				</li>
				<li>

					<a href="cliente"  style="background-color:black;font-weight: bold;">

						<i class="fa fa-user"  style="color:white"></i>
						<span style="color:white">Usuario Cliente</span>

					</a>

				</li>';
			}

			if ($_SESSION["perfil"] == "Administrador") {

				echo '<br><br><br><br><br><br><br><br><br><li>

				<a href="grafico-ventas"  style="background-color:black;color:white;font-weight: bold;">

					<i class="bi bi-reception-4" style="color:white"></i>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
  						<path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
					</svg>
					<span style="color:white">Niveles alcanzados</span>

				</a>

			</li>';
			}
			if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>

				<a href="compradores"  style="background-color:white;color:black;font-weight: bold;">
				<i class="bi bi-person-fill-check" style="color:black"></i>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
  					<path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
  					<path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
				</svg>
					<span style="color:black">Gráfica-clientes</span>

				</a>

			</li>';
			}
			if ($_SESSION["perfil"] == "AdministradorComprador") {

				echo '<br><br><br><br><br><br><br><br><br>
				<li class="active">

					<a href="inicio"  style="background-color:white;font-weight: bold;">

						<i class="fa fa-home"  style="color:black"></i>
						<span style="color:black">Inicio</span>

					</a>

				</li>
				<li>

				<a href="vendedores"  style="background-color:black;color:white;font-weight: bold;">
				<i class="bi bi-person-fill-slash" style="color:black"></i>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-slash" viewBox="0 0 16 16">
					<path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465l3.465-3.465Zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465Zm-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
			 	</svg>
					<span style="color:white">Gráfica-Comprador</span>

				</a>

			</li>';
			}
			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial") {

				echo '<br><br><br><br><br><br><br><br><br><li>

				<a href="categorias"  style="background-color:black;color:white;font-weight: bold;">

					<i class="fa fa-th" style="color:white"></i>
					<span style="color:white">Categorías</span>

				</a>

			</li>

			<li>

				<a href="productos"  style="background-color:white;font-weight: bold;">

					<i class="fa fa-product-hunt" style="color:black"></i>
					<span style="color:black">Productos</span>

				</a>

			</li>';
			}


			if ($_SESSION["perfil"] == "Cliente") {

				echo '<br><br><br><br><br><br><br><br><br>
				<li class="active">

					<a href="inicio"  style="background-color:white;font-weight: bold;">
		
						<i class="fa fa-home"  style="color:black"></i>
						<span style="color:black">Inicio</span>
		
					</a>
	
				</li>
				<li>

					<a href="clientes"  style="background-color:black;color:white;font-weight: bold;">

						<i class="fa fa-users" style="color:white"></i>
						<span style="color:white">Clientes</span>

					</a>

				</li>';
			}
			if ($_SESSION["perfil"] == "Administrador") {

				echo '<br><br><br><br><br><br><br><br><br>
				<li>

					<a href="clientes"  style="background-color:black;color:white;font-weight: bold;">

						<i class="fa fa-users" style="color:white"></i>
						<span style="color:white">Clientes</span>

					</a>

				</li>';
			}
			if ($_SESSION["perfil"] == "AdministradorComprador" || $_SESSION["perfil"] == "Cliente") {

				echo '<br><br><br><br><br><br><br><br><br>
				<li class="treeview">

				<a href="ventas"  style="background-color:white;font-weight: bold;">

					<i class="fa fa-list-ul"  style="background-color:white;color:black"></i>
					
					<span  style="background-color:white;color:black">Compras-clientes</span>
					
					<span class="pull-right-container"  style="background-color:white;">
					
						<i class="fa fa-angle-left pull-right"  style="background-color:white;color:black"></i>

					</span>

				</a>

				<ul class="treeview-menu" style="background-color:white;">
					
					<li>

						<a href="ventas"  style="background-color:white;font-weight: bold;">
							
							<i class="fa fa-circle-o" style="color:black"></i>
							<span style="color:black">Administrar</span>

						</a>

					</li>

					<li>

						<a href="crear-venta"  style="background-color:white;font-weight: bold;">
							
							<i class="fa fa-circle-o" style="color:black"></i>
							<span style="color:black">Crear compra</span>

						</a>

					</li>
				 </ul>';
			}

			if ($_SESSION["perfil"] == "AdministradorComprador") {

				echo '<li>

						<a href="reportes"  style="background-color:black;font-weight: bold;">
							
							<i class="fa fa-circle-o" style="color:white"></i>
							<span style="color:white">Reporte </span>

						</a>

					</li>';
			}




			if ($_SESSION["perfil"] == "Administrador") {

				echo '<br><br><br><br><br><br><br><br><br><li>

				<a href="ver"  style="background-color:black;color:white;font-weight: bold;">

					<i class="bi bi-people-fill"style="color:white"></i>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  					<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
					</svg>
					<span style="color:white">Autores</span>

				</a>

			</li>';
			}

			if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>

				<a href="http://localhost/proyecto-complexivo/botones/ayuda-administrador/ver.php"  style="background-color:white;color:black;font-weight: bold;">
					<i class="bi bi-question-square" style="color:black"></i>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-square" viewBox="0 0 16 16">
					<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					<path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
				  	</svg>
					<span style="color:black">Ayuda</span>

				</a>

			</li>';
			}

			if ($_SESSION["perfil"] == "Administrador") {

				echo '<br><br><br><br><br><br><br><br><br><li>

				<a href="http://localhost/proyecto-complexivo/botones/blog-administrador/ver.php"  style="background-color:black;color:white;font-weight: bold;">
					<i class="bi bi-chat-dots-fill" style="color:white"></i>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  						<path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
					</svg>
					<span style="color:white">Blog</span>

				</a>

			</li>';
			}
			?>

		</ul>

	</section>

</aside>