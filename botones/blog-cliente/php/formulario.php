<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from person_blog where id = ".$_GET["id"];
$query = $con->query($sql1);
$person_blog = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person_blog=$r;
  break;
}

  }
?>

<?php if($person_blog!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person_blog->name; ?>" name="name" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $person_blog->lastname; ?>" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="comentario">Comentario</label>
    <input type="text" class="form-control" value="<?php echo $person_blog->comentario; ?>" name="comentario" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $person_blog->email; ?>" name="email" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person_blog->phone; ?>" name="phone" >
  </div>
<input type="hidden" name="id" value="<?php echo $person_blog->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>