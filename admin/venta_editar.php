<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }
include "../config/conexion.php";
  $id = $_GET['id'];
      $sql = "SELECT * FROM venta WHERE venta_id = '$id'";
      $dato = $conexion->query($sql);
      //print_r($dato);
      $fila = mysqli_fetch_assoc($dato);
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
      <h2>Editar Puntos de Ventas</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/venta_update.php" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="venta_titulo">Titulo</label>
          <div class="col-md-12">
            <input type="text" name="venta_titulo" value="<?php echo $fila['venta_titulo']?>"class="form-control" id="venta_titulo" ></input>
          </div>
      </div>

      <div class="form group">
          <label class="col-md-12 text-left mt-15" for="venta_descripcion">Descripcion</label>
            <div class="col-md-12">
              <textarea type="tex" name="venta_descripcion" class="form-controlu" id="venta_descripcion" ><?php echo $fila['venta_descripcion']?></textarea>
            </div>
            
      </div>
       <div class="form-group">
        <label for="venta_imagen" class="col-md-3 mt-15">Imagen</label>
    
      <?php
        if(strlen($fila['venta_imagen'])>0){
          echo '<img src="../upload/venta/'.$fila['venta_imagen'].'" width="auto">';
          }
          ?>
      
        <div class="col-md-12 mt-15">
        <input type="file" class="form-control top" name="venta_imagen" id="venta_imagen"></input> 
        </div>
      </div>
      
      <div class="form-group">
        <label for="venta_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" name="venta_status" id="venta_status"
          <?php if($fila['venta_status'] == 1){ ?> checked="checked" <?php } ?>>
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <input type="hidden"  name="venta_id" value="<?php echo $id?>"> 
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