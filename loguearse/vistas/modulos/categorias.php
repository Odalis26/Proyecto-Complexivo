<?php

if ($_SESSION["perfil"] == "Vendedor") {

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

      Administrar categorías

    </h1>

    <ol class="breadcrumb" style="background-color:white">

      <li><a href="inicio" style="background-color:white;color:black"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar categorías</li>

    </ol>

  </section>

  <section class="content" style="background-color:white">

    <div class="box" style="background-color:white; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:white; border: 2px white solid;">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria" style="background-color:black; color:white; border: 2px black solid;">

          Agregar categoría

        </button>

      </div>

      <div class="box-body" style="background-color:white; color:black; border: 2px white solid;">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%" style="background-color:white; color:black; border: 2px white solid;">

          <thead style="background-color:white; color:black; border: 2px white solid;">

            <tr style="background-color:white; color:black; border: 2px white solid;">

              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">#</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Categoria</th>
              <th style="width:10px; background-color:white; color:black; border: 2px white solid;">Acciones</th>

            </tr>

          </thead>

          <tbody>

            <?php

            $item = null;
            $valor = null;

            $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

            foreach ($categorias as $key => $value) {

              echo ' <tr style="width:10px; background-color:white; color:black; border: 2px white solid;">

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . ($key + 1) . '</td>

                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["categoria"] . '</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">

                      <div class="btn-group" >
                          
                        <button class="btn btn-warning btnEditarCategoria" style="background:#63FC00; color:black; border: 2px #63FC00 solid;" idCategoria="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button>';

              if ($_SESSION["perfil"] == "Administrador") {

                echo '<button class="btn btn-danger btnEliminarCategoria" style="background:#6A0436; color:white; border: 2px #6A0436 solid;" idCategoria="' . $value["id"] . '"><i class="fa fa-times"></i></button>';
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
MODAL AGREGAR CATEGORÍA
======================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:black; color:white">

          <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>

          <h4 class="modal-title">Agregar categoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">
            <br>
            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" style="border: 2px transparent solid;border-bottom: 2px black solid;background:white;color:black;" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:black; color:white; border: 2px black solid;">Guardar categoría</button>

        </div>

        <?php

        $crearCategoria = new ControladorCategorias();
        $crearCategoria->ctrCrearCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CATEGORÍA
======================================-->

<div id="modalEditarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:black; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar categoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">
            <br>

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" style="border: 2px transparent solid;border-bottom: 2px black solid; background:white;color:black;" required>

                <input type="hidden" name="idCategoria" id="idCategoria" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#00FF00; color:black; border: 2px #63FC00 solid;">Guardar cambios</button>

        </div>

        <?php

        $editarCategoria = new ControladorCategorias();
        $editarCategoria->ctrEditarCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

$borrarCategoria = new ControladorCategorias();
$borrarCategoria->ctrBorrarCategoria();

?>