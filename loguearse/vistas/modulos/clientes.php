<?php

if ($_SESSION["perfil"] == "Especial") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

?>

<br><br><br><br><br><br><br><br>
<div class="content-wrapper" style="background-color:white; position:relative; width:970px; left:200px">

  <section class="content-header" style="background-color:white">

    <h1 style="color:black; font-family: monospace; font-weight: bold;" class="text-uppercase">

      Administrar clientes

    </h1>

    <ol class="breadcrumb" style="background-color:white">

      <li><a href="inicio" style="background-color:white;color:black"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar clientes</li>

    </ol>

  </section>

  <section class="content" style="background-color:white">

    <div class="box" style="background-color:white; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:white; border: 2px white solid;">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente" style="background-color:black; color:white; border: 2px black solid;">

          Agregar cliente

        </button>

      </div>

      <div class="box-body" style="background-color:white; color:black; border: 2px white solid;">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%" style="background-color:white; color:black; border: 2px white solid;">

          <thead style="background-color:white; color:black; border: 2px white solid;">

            <tr style="background-color:white; color:black; border: 2px white solid;">

              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">#</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Nombre</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Cédula</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Email</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Teléfono</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Dirección</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Fecha nacimiento</th>
              <th style="width:100px; background-color:white; color:black; border: 2px white solid;">Total de productos comprados</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Última compra</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Ingreso al sistema</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Acciones</th>

            </tr>

          </thead>

          <tbody>

            <?php

            $item = null;
            $valor = null;

            $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

            foreach ($clientes as $key => $value) {


              echo '<tr style="width:10px; background-color:white; color:black; border: 2px white solid;">

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . ($key + 1) . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["nombre"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["documento"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["email"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["telefono"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["direccion"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["fecha_nacimiento"] . '</td>             

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["compras"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["ultima_compra"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["fecha"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">

                      <div class="btn-group">
                          
                        ';

              if ($_SESSION["perfil"] == "Administrador") {

                echo '<button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" style="background:#FFC301; color:black; border: 2px #FFC301 solid;" idCliente="' . $value["id"] . '"><i class="fa fa-pencil"></i></button> <button class="btn btn-danger btnEliminarCliente" style="background:#6A0436; color:white; border: 2px #6A0436 solid;"  idCliente="' . $value["id"] . '"><i class="fa fa-times"></i></button>';
              }
              if ($_SESSION["perfil"] == "Cliente") {

                echo '<a class="btn btn-outline-dark" href="http://localhost/proyecto-complexivo/botones/ayuda-cliente/ver.php"><i class="bi bi-question-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="background:white; color:black;"fill="currentColor" class="bi bi-question-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
              </svg></a>';
              }
              echo '</div>  

                    </td>

                  </tr>';
            }

            ?>

          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:black; color:white">

          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" style="border: 2px transparent solid;border-bottom: 2px black solid; background:white; color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÉDULA  -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-key"></i></span>

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar cédula" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white; color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white; color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(99) 9999-9999'" data-mask style="border: 2px transparent solid;border-bottom: 2px black solid; background:white; color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" style="border: 2px transparent solid;border-bottom: 2px black solid; background:white; color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask style="border: 2px transparent solid;border-bottom: 2px black solid;background:white; color:black;" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:black; color:white; border: 2px black solid;">Guardar cliente</button>

        </div>

      </form>

      <?php

      $crearCliente = new ControladorClientes();
      $crearCliente->ctrCrearCliente();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:black; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background: white; color:black; border: 2px white solid;"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>
                <input type="hidden" id="idCliente" name="idCliente">
              </div>

            </div>

            <!-- ENTRADA PARA EL  CÉDULA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background: white; color:black; border: 2px white solid;"><i class="fa fa-key"></i></span>

                <input type="number" min="0" class="form-control input-lg" name="editarDocumentoId" id="editarDocumentoId" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background: white; color:black; border: 2px white solid;"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background: white; color:black; border: 2px white solid;"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(99) 9999-9999'" data-mask style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background: white; color:black; border: 2px white solid;"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background: white; color:black; border: 2px white solid;"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#EBA401 ; color:black; border: 2px #EBA401  solid;">Guardar cambios</button>

        </div>

      </form>

      <?php

      $editarCliente = new ControladorClientes();
      $editarCliente->ctrEditarCliente();

      ?>



    </div>

  </div>

</div>

<?php

$eliminarCliente = new ControladorClientes();
$eliminarCliente->ctrEliminarCliente();

?>