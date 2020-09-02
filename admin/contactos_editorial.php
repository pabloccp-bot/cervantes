<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }
include "../config/conexion.php";
$where = "";
  if(isset($_GET['s'])){
    $where = " WHERE contacto_nombre like '%".$_GET['s']."%'";
   // $where = " WHERE admin_user = '".$_GET['s']."'";
  }
  $sql = "SELECT * FROM contacto  $where ORDER BY contacto_id DESC";
  $lista = $conexion->query($sql);
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
      <h2>Listado de Contactos</h2>
     <hr>
      <div class="row">
       
        <div class="col-xs-12 col-sm-12 col-md-12">
         <table id="example1" data-order='[[ 5, "ASC" ]]' class="table table-bordered table-hover">
          <?php
            if($lista->num_rows == 0){
              echo '<p class="alert alert-danger">No se encuentran Registros de Contactos con esos caracteres vuelve a intentarlo.</p>';
            }else{
          ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php while($fila = mysqli_fetch_assoc($lista)){ ?>
          <tr>
            <td><?php echo $fila["contacto_nombre"];?></td>
            <td><?php echo $fila["contacto_apellido"];?></td>
            <td><?php echo $fila["contacto_email"];?></td>
            <td><?php echo $fila["contacto_telefono"];?></td>
            <td><?php echo $fila["contacto_mensaje"];?></td>
            <td><?php echo date("d/m/y H:i:s", strtotime($fila["contacto_timestamp"]));?></td>
          </tr> 
          <?php } ?>
  </tbody>
</table>
<?php } ?>

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
<?php include "inc/footer.php";?>

</body>
</html>