<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from single where id = ".$_GET["id"];
$query = $con->query($sql1);
$single = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $single=$r;
  break;
}

  }
?>

<?php if($single!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $single->name; ?>" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $single->lastname; ?>" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="address">Comentario</label>
    <input type="text" class="form-control" value="<?php echo $single->address; ?>" name="address" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $single->email; ?>" name="email" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $single->phone; ?>" name="phone" >
  </div>
<input type="hidden" name="id" value="<?php echo $single->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>