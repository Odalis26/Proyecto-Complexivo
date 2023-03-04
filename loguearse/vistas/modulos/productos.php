<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<br><br><br><br>
<div class="content-wrapper" style="background-color:white; position:relative; width:1170px; left:200px">

  <section class="content-header" style="background-color:white">
    
    <h1 style="color:black; font-family: monospace; font-weight: bold;">
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb" style="background-color:white">
      
      <li><a href="inicio" style="background-color:white;color:black"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <section class="content" style="background-color:white">

    <div class="box" style="background-color:white; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:white; border: 2px white solid;">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto" style="background-color:black; color:white; border: 2px black solid;">
          
          Agregar producto

        </button>

      </div>

      <div class="box-body" style="background-color:white; color:black; border: 2px white solid;">
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%" style="background-color:white; color:black; border: 2px white solid;">
         
        <thead style="background-color:white; color:black; border: 2px white solid;">
         
         <tr style="background-color:white; color:black; border: 2px white solid;">
           
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">#</th>
           <th style="width:100px; background-color:white; color:black; border: 2px white solid;">Imagen</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Código</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Descripción</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Categoría</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Stock</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Neto</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Total</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Agregado</th>
           <th style="background-color:white; color:black; border: 2px white solid;">Acciones</th>
           
         </tr> 

        </thead>  
    

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:black; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:black; border: 2px white solid;">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;" required>
                  
                  <option value="" style="background:black;border: 2px black solid;color:white">Selecionar categoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categorias as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" style="background:white; color:black;border: 2px transparent solid;border-bottom: 2px black solid;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" style="background:white; color:black;border: 2px transparent solid;border-bottom: 2px black solid;" required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;" required>

              </div>

            </div>

             <!-- ENTRADA PARA NETO -->

             <div class="form-group row">

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" step="any" min="0" placeholder="Neto" style="background:white; color:black;border: 2px transparent solid;border-bottom: 2px black solid;" required>

                  </div>

                </div>

                <!-- ENTRADA PARA TOTAL -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon" style="background: black; color:white; border: 2px black solid;"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Total" style="background:white; color:black;border: 2px transparent solid;border-bottom: 2px black solid;" required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" style="border: 2px #02016D solid;" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" style="border: 2px transparent solid;border-bottom: 2px black solid; background:white; color:black;" required>

                      <span class="input-group-addon" style="background:black; color:white; border: 2px black solid;"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel" style="background:white; color:black">SUBIR IMAGEN</div>

              <input type="file" style="background:black; color:white;border: 2px black solid;" class="nuevaImagen" name="nuevaImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" style="border: 6px black solid; background-color:white;"class="img-thumbnail previsualizar" width="150px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary"  style="background:black; color:white; border: 2px black solid;">Guardar producto</button>

        </div>

      </form>

        <?php

          $crearProducto = new ControladorProductos();
          $crearProducto -> ctrCrearProducto();

        ?>  

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header"  style="background:black; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:black; border: 2px white solid;">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group" style="background:white; color:white">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg"  style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;" name="editarCategoria" readonly required>
                  
                  <option id="editarCategoria" style="background:black;border: 2px transparent solid;border-bottom: 2px black solid;"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" style="background:white; color:black;  border: 2px transparent solid;border-bottom: 2px black solid;"required>

              </div>

            </div>

             <!-- ENTRADA PARA STOCK -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;" required>

              </div>

            </div>

             <!-- ENTRADA PARA NETO -->

             <div class="form-group row">

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" step="any" min="0" style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;" required>

                  </div>

                </div>

                <!-- ENTRADA PARA TOTAL -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" style="background:white; color:black; border: 2px transparent solid;border-bottom: 2px black solid;" readonly required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" style="border: 2px #02016D solid;color:#D5005B;" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" style=" border: 2px transparent solid;border-bottom: 2px black solid;background:white; color:black;" required>

                      <span class="input-group-addon" style="background:white; color:black; border: 2px transparent solid;"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel" style="background:white; color:black">SUBIR IMAGEN</div>

              <input type="file" style="background:black; color:white;border: 2px black solid;" class="nuevaImagen" name="editarImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" style="border: 6px black solid; background-color:black;" class="img-thumbnail previsualizar" width="150px">

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" style="background:#6A0436; color:white; border: 2px #6A0436 solid;" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#FF0074; color:white; border: 2px #FF0074 solid;">Guardar cambios</button>

        </div>

      </form>

        <?php

          $editarProducto = new ControladorProductos();
          $editarProducto -> ctrEditarProducto();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>      



