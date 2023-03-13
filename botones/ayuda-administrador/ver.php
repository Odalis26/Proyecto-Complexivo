<html>

<head>
  <title>.: FASHION BEAUTY :.</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
</head>

<body>
  <?php include "php/navbar.php"; ?>
  <div class="container" style="width:970px;">
    <div class="row">
      <div class="col-md-12">
        <h2>AYUDA - AL CLIENTE</h2>
        <!-- Button trigger modal -->
        <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar ayuda</a>
        <br><br>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Agregar ayuda</h4>
              </div>
              <div class="modal-body">
                <form role="form" method="post" action="php/agregar.php">
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" class="form-control" name="lastname" required>
                  </div>
                  <div class="form-group">
                    <label for="help">¿En qué le podemos ayudar?</label>
                    <input type="text" class="form-control" name="help" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="text" class="form-control" name="phone" required>
                  </div>

                  <button type="submit" class="btn btn-success" style="width:150px;">Agregar</button>
                  <button type="reset" id="reset" class="btn btn-sm btn-danger" style="position:relative; width:150px; left:235px">Borrar</button>
                </form>
              </div>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <?php include "php/tabla.php"; ?>
        <a href="http://localhost/proyecto-complexivo/loguearse">
          <button type="button" class="btn btn-outline-dark" style="font-weight: bolder; position: relative;top: 40px; left: 200px;height: 76px;width: 46px;">
            <i class="bi bi-arrow-left-square-fill"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="66" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
              <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
            </svg>
          </button>
        </a>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>