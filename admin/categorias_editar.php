<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }
include "../config/conexion.php";
  $id = $_GET['id'];
      $sql = "SELECT * FROM categoria WHERE categoria_id = '$id'";
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
      <h2>Editar Categoria</h2> 
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/categoria_update.php" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="categoria_nombre">Nombre Categoria</label>
          <div class="col-md-12">
            <input type="text" name="categoria_nombre" value="<?php echo $fila['categoria_nombre']?>" class="form-control" id="categoria_nombre" ></input>
          </div>
      </div>

      <div class="form-group">
        <label for="categoria_imagen" class="col-md-3 mt-15">Imagen</label>
    
      <?php
        if(strlen($fila['categoria_imagen'])>0){
          echo '<img src="../upload/categoria/'.$fila['categoria_imagen'].'" width="30%">';
          }
          ?>
      
        <div class="col-md-12 mt-15">
        <input type="file" class="form-control top" name="categoria_imagen" id="categoria_imagen"></input> 
        </div>
      </div>

      <div class="form-group">
        <label for="proximamente_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" name="categoria_status" id="categoria_status"
          <?php if($fila['categoria_status'] == 1){ ?> checked="checked" <?php } ?>>
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <input type="hidden"  name="categoria_id" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-folder"></i> Guardar</button>
        <a href="categorias.php" class="btn btn-primary cerrar">
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