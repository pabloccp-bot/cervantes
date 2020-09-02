<?php   
session_start();
if(!$_SESSION["usuario"]){
    header("location: login.php");
}

include "../config/conexion.php";
 ?>
<html>
<head>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.js"></script>

 <?php include "inc/menu.php";?>
  <!-- sidebar-wrapper  -->
  
  <style>
  .page-wrapper {
  background-image: url(../images/inicia9.jpg);
  background-size: 100%;
} 
</style>
<body>
  <main class="page-content scroll">
    <div class="container-fluid">
      <h2><span class="label label-info">Bienvenido al Administrador de contenido De Cervantes</span></h2>
      <hr>   
    </div>
  </main>
  <!-- page-content" -->

<!-- page-wrapper -->

<script type="text/javascript">
 function eliminar(valor) {
  if(confirm("esta seguro que desea borrar el banner")){
    location.href = "?id="+valor;
  }
}
  
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