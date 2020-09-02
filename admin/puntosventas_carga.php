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
      <h2>Cargar Nuevos Puntos de Ventas</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/guarda_venta.php" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="venata_titulo">Titulo Empresa</label>
          <div class="col-md-12">
            <input type="text" name="venta_titulo" class="form-control" required="required" id="venta_titulo" ></input>
          </div>
      </div>

      <div class="form group">
          <label class="col-md-12 text-left mt-15" for="venta_descripcion">Sucursal</label>
            <div class="col-md-12">
              <textarea type="tex" name="venta_descripcion" class="form-controlu" required="required" id="venata_descripcion" ></textarea>
            </div>
            
      </div>
      <div class="form-group">
        <label for="venta_imagen" class="col-md-3 mt-15">Imagen</label>
        <div class="col-md-12">
          <input type="file" class="form-control" required="required" name="venta_imagen" id="venta_imagen">
        </div>
      </div>
      
      <div class="form-group">
        <label for="venta_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1"  checked="checked"  name="venta_status" id="venta_status">
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-folder"></i> Guardar</button>
        <a href="puntos_ventas.php" class="btn btn-primary cerrar">
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