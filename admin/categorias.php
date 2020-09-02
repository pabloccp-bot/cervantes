<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }

 include "../config/conexion.php";
 
 $where = "";
  if(isset($_GET['s'])){
    $where = " WHERE categoria_nombre like '%".$_GET['s']."%'";
   // $where = " WHERE admin_user = '".$_GET['s']."'";
  }
  $sql = "SELECT * FROM categoria $where ORDER BY categoria_id DESC";
  $lista = $conexion->query($sql);
if(isset($_GET['id'])){
      $id= $_GET['id'];
      $sql = "DELETE FROM categoria WHERE categoria_id = $id";
      $conexion->query($sql);
      header("location: categorias.php");
    }
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
      <h2>Listado de Categorias</h2>
      <hr>
      <div class="row">
        

        <div class="col-md-12 form-group">
        <a href="categoria_carga.php" class="btn btn-primary pull-right cerrar"><i class="fa fa-plus-circle"></i> Nuevo</a>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
         <table id="example1" data-order='[[ 0, "DESC" ]]' class="table table-bordered table-hover">
           <?php
        if($lista->num_rows == 0){
          echo '<p class="alert alert-danger">No se encuentran Registros de categorias con esos caracteres vuelve a intentarlo</p>';
        }else{
        ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categoria</th>
      <th scope="col">Imagen</th>
      <th scope="col">Creado</th>
      <th scope="col">Estado</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php while($fila = mysqli_fetch_assoc($lista)){ ?>
    <tr>
      <th> <?php echo $fila["categoria_id"];?></th>
      <td><?php echo $fila["categoria_nombre"];?></td>
      <td>
          <img  height="80" src="../upload/categoria/<?php echo $fila["categoria_imagen"];?>">
      </td>
      <td><?php echo date("d/m/Y H:i:s", strtotime($fila["categoria_timestamp"]));?></td>
      <?php if($fila['categoria_status'] == 1){ ?>
        <td><span class="label label-info"><?php  $fila["categoria_status"];?>Activo</span></td>
      <?php }else{ ?>
        <td><span class="label label-warning"><?php  $fila["categoria_status"];?>Inactivo</span></td>
      <?php } ?>
      <td>
        <a href="categorias_editar.php?id=<?php echo $fila["categoria_id"];?>">
            <button class="btn btn-success"><i class="fas fa-edit"></i> Editar
            </button></a>
        
        <a href="" onclick="eliminar('<?php echo $fila["categoria_id"];?>');return!1">
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
  if(confirm("esta seguro que desea borrar esta categoria")){
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