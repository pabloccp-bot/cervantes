<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }

  include "../config/conexion.php";
  $where = "";
  if(isset($_GET['s'])){
    $where = " WHERE venta_titulo like '%".$_GET['s']."%'";
   // $where = " WHERE admin_user = '".$_GET['s']."'";
  }

  $sql = "SELECT * FROM venta $where ORDER BY venta_id DESC";
  $lista = $conexion->query($sql);
if(isset($_GET['id'])){
      $id= $_GET['id'];
      $sql = "DELETE FROM venta WHERE venta_id = $id";
      $conexion->query($sql);
      header("location: puntos_ventas.php");
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
      <h2>Listado de Puntos De Ventas</h2>
      <hr>
      <div class="row">
        <div class="col-md-12 form-group">
        <a href="puntosventas_carga.php" class="btn btn-primary pull-right cerrar"><i class="fa fa-plus-circle"></i> Nuevo</a>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <table id="example1" data-order='[[ 0, "DESC" ]]' class="table table-bordered table-hover">
          <?php
            if($lista->num_rows == 0){
              echo '<p class="alert alert-danger">No se encuentran Registros de Puntos de Venta con esos caracteres vuelve a intentarlo.</p>';
            }else{
          ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Empresa</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Imagen</th>
      <th scope="col">Creado</th>
      <th scope="col">Estado</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php while($fila = mysqli_fetch_assoc($lista)){ ?>
    <tr>
      <th><?php echo $fila["venta_id"];?></th>
      <td><?php echo $fila["venta_titulo"];?></td>
      <td><?php echo $fila["venta_descripcion"];?></td>
      <td>
          <img  height="80" src="../upload/venta/<?php echo $fila["venta_imagen"];?>">
      </td>
       <td><?php echo date("d/m/y H:i:s", strtotime($fila["venta_timestamp"]));?></td>
       <?php if($fila['venta_status'] == 1){ ?>
        <td><span class="label label-info"><?php  $fila["venta_status"];?>Activo</span></td>
      <?php }else{ ?>
        <td><span class="label label-warning"><?php  $fila["venta_status"];?>Inactivo</span></td>
      <?php } ?>
      <td>
        <a href="venta_editar.php?id=<?php echo $fila["venta_id"];?>">
            <button class="btn btn-success"><i class="fas fa-edit"></i> Editar
            </button></a>
        <a href="" onclick="eliminar('<?php echo $fila["venta_id"];?>');return!1">
        <button class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button></a>
      </td>
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
  function eliminar(valor) {
  if(confirm("esta seguro que desea borrar este punto de venta")){
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
<?php include "inc/footer.php";?>
</body>
</html>