<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }

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
      <h2>Cargar Nuevo Administrador</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/guarda_administrador.php" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="categoria_nombre">Nombre Usuario</label>
          <div class="col-md-12">
          <input type="text" name="usuario" class="form-control" id="usuario" ></input>
          </div>
      </div>

      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="categoria_clave">Clave</label>
          <div class="col-md-12">
          <input type="password" name="clave" class="form-control" id="clave" ></input>
          </div>
      </div>
      <div class="form-group">
        <label for="admin_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" checked="checked" name="admin_status" id="admin_status">
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
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