<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }
  include "../config/conexion.php";
  $where = "";
  if(isset($_GET['s'])){
    $where = " AND libro_titulo like '%".$_GET['s']."%'";
   // $where = " WHERE admin_user = '".$_GET['s']."'";
  }
  
  $sql = "SELECT * FROM libro  WHERE libro_visita >0  $where ORDER BY libro_visita DESC";

  //SELECT * from libro WHERE libro_visita > 0  AND libro_titulo like '%test%' ORDER BY libro_visita DESC
  $lista = $conexion->query($sql);
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
      <h2>Listado de Libros más Visitados</h2>
      <hr>
      <!--<div class="row">
        <div class="form-group col-md-12">
          <p>Listado de Libros</p>
        </div>
      </div>
     
      <hr>-->
      <div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<table id="example1" data-order='[[ 3, "DESC" ]]' class="table table-bordered table-hover">
          <?php
            if($lista->num_rows == 0){
              echo '<p class="alert alert-danger">No se encuentran Registros de Libros mas Visitados con esos caracteres vuelve a intentarlo.</p>';
            }else{
          ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Categoria</th>
      <th scope="col">Titulo</th>
      <th scope="col">Imagen</th>
      <th scope="col">Visitas</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($fila = mysqli_fetch_assoc($lista)){ 
          $sql = "SELECT categoria_nombre FROM categoria WHERE categoria_id = '{$fila["categoria_id"]}'";
          $cat = $conexion->query($sql);
          $categoria = mysqli_fetch_array($cat);
          // print_r($categoria);
    ?>
    <tr>
      <td><?php echo $categoria["categoria_nombre"];?></td>
      <td><?php echo $fila["libro_titulo"] ?></td>
      <td>
          <img  height="80" src="../upload/libro/<?php echo $fila["libro_imagen"];?>">
      </td>
      <td><span class="label label-success"><?php echo $fila["libro_visita"]?></span></td>
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
  if(confirm("esta seguro que desea borrar el libro")){
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