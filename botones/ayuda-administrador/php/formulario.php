<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from person_help where id = ".$_GET["id"];
$query = $con->query($sql1);
$person_help = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person_help=$r;
  break;
}

  }
?>

<?php if($person_help!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person_help->name; ?>" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $person_help->lastname; ?>" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="help">Comentario</label>
    <input type="text" class="form-control" value="<?php echo $person_help->help; ?>" name="help" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $person_help->email; ?>" name="email" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person_help->phone; ?>" name="phone" >
  </div>
<input type="hidden" name="id" value="<?php echo $person_help->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>