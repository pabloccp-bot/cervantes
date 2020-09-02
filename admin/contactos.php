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
      <h2>Contactos</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <p>Listado de Contactos</p>
        </div>
      </div>
     <hr>
      <div class="row">
        <div class="sidebar-search col-md-10">
          <div>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar...">
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-40">
         <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Mensaje</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>tes</td>
      <td>tes</td>
      <td>05545</td>
      <td>Hola test test tes test tes</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>tes</td>
      <td>tes</td>
      <td>05545</td>
      <td>Hola Hola test test tes test tes</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>tes</td>
      <td>tes</td>
      <td>05545</td>
      <td>Hola test test tes test tes</td>
    </tr>
  </tbody>
</table>
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