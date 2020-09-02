<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }
include "../config/conexion.php";
  $id = $_GET['id'];
      $sql = "SELECT * FROM admin WHERE admin_id = '$id'";
      $dato = $conexion->query($sql);
      //print_r($dato);
      $fila = mysqli_fetch_assoc($dato);
  //echo "Bienvenido: " .$_SESSION['nombre'];
  //echo "Bienvenido: " .$_SESSION['nombre'];
?>

<html>
<head>

 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.js"></script>

 <?php include "inc/menu.php";?>
  <!-- sidebar-wrapper  -->
  <main class="page-content scroll">
    <div class="container-fluid">
      <h2>Editar Administrador</h2> 
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/administrador_update.php" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="usuario">Editar Usuario</label>
          <div class="col-md-12">
            <input type="text" name="usuario" value="<?php echo $fila['admin_user']?>" class="form-control" id="usuario" ></input>
          </div>
      </div>

       <div class="form group">
        <label class="col-md-12 text-left mt-15" for="usuario">Editar Clave</label>
          <div class="col-md-12">
            <input type="text" name="clave" value="<?php $fila['admin_clave']?>" class="form-control" id="clave" ></input>
          </div>
      </div>

     

      <div class="form-group">
        <label for="admin_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" name="admin_status" id="admin_status"
          <?php if($fila['admin_estado'] == 1){ ?> checked="checked" <?php } ?>>
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <input type="hidden"  name="admin_id" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary">
        <i class="fa fa-folder"></i> Guardar</button>
        <a href="administrador.php" class="btn btn-primary cerrar">
        <i class="fa fa-reply"></i> Cancelar</a>
      </div>
    </form>
</div>
</div>          
 </div>
</div>
  </main>
  <!-- page-content" -->

<!-- page-wrapper -->

<script type="text/javascript">
$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
</script>
</body>
</html>