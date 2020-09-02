<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }

  include "../config/conexion.php";
  $sql = "SELECT *
      FROM categoria
    WHERE categoria_status = 1 
    ORDER BY categoria_nombre ASC";
    $categoria = $conexion->query($sql);
?>

<html>
<head>

 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.js"></script>
</head>
  <style>
.mt30{
margin-top:15px !important;
}
</style>

<?php include "inc/menu.php";?>
  <!-- sidebar-wrapper  -->
  <main class="page-content scroll">
    <div class="container-fluid">
      <h2>Cargar Nuevo Libro</h2>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/guarda.php" method="post" enctype="multipart/form-data">
          <div class="form group">
            <input type="hidden" name="option" value="libros">
            <label class="col-md-12 text-left" for="categorias">Categoria</label>
              <div class="col-md-12">
                <select style="color:#000;" class="form-control" name="categoria_id" id="categorias_combo">
                  <option value="" selected="selected">Seleccionar</option>
                  <?php
                    while($catego = mysqli_fetch_assoc($categoria)){
                  ?>
                  
                  <option value="<?php echo $catego['categoria_id']?>">
                    <?php echo $catego['categoria_nombre']?>
                  </option>
                  <?php } ?>
              </select>
              </div>
          </div>
          <div class="form group">
            <label class="col-md-12 text-left mt30" for="libro_titulo">Libro Titulo</label>
              <div class="col-md-12">
                <input type="text" name="libro_titulo" required="required" class="form-control" id="libro_titulo" ></input>
              </div>
          </div>

          <div class="form group">
            <label class="col-md-12 text-left mt30" for="libro_titulo">Libro Autor</label>
              <div class="col-md-12">
                <input type="text" name="libro_autor" class="form-control" id="libro_autor" ></input>
              </div>
          </div>

          <div class="form group mt30">
            <label class="col-md-12 text-left mt30" for="libro_sinopsis">Sinopsis</label>
            <div class="col-md-12">
            <textarea type="tex" name="libro_sinopsis" class="form-controlu" id="libro_sinopsis" ></textarea>
            </div>
            
          </div>
          <div class="form-group">
            <label for="libro_imagen" class="col-md-3 mt30">Libro Imagen</label>
            <div class="col-md-12">
              <input type="file" class="form-control" required="required" name="libro_imagen" id="libro_imagen">
              <P>Dimensiones (836 x 1030px)</P>
            </div>
          </div>

          <div class="form group">
            <label class="col-md-12 text-left mt30" for="libro_pagina">Paginas</label>
              <div class="col-md-12">
                <input type="text" name="libro_pagina" class="form-control" id="libro_pagina" ></input>
              </div>
          </div>



          <div class="form group">
            <label class="col-md-12 text-left mt30" for="novedad">Es Novedad?</label>
              <div class="col-md-12">
                <select style="color:#000;" class="form-control" name="libro_novedad" id="libro_novedad">
                  <option value="1">SI</option>
                  <option value="0">NO</option>
              </select>
              </div>
          </div>
          <div class="form group">
            <label class="col-md-12 text-left mt30" for="novedad">Proximamente</label>
              <div class="col-md-12">
                <select style="color:#000;" class="form-control" name="libro_proximamente" id="libro_proximamente">
                  <option value="1">SI</option>
                  <option value="0">NO</option>
              </select>
              </div>
          </div>


          <div class="form group">
            <label class="col-md-12 text-left mt30" for="novedad">Precio</label>
              <div class="col-md-12">
                <input type="text" class="form-control" name="libro_precio" id="libro_precio">
              </div>
          </div>
          
          <div class="form group">
            <label class="col-md-12 text-left mt30" for="novedad">En oferta?</label>
              <div class="col-md-12">
                <select style="color:#000;" onchange="cambiarOferta(this.value);" class="form-control" name="libro_oferta" id="libro_oferta">
                  <option value="0" selected="selected">NO</option>
                  <option value="1">SI</option>
              </select>
              </div>
          </div>

    

          <div id="caja-preciooferta" class="form group hidden">
            <label class="col-md-12 text-left mt30" for="novedad">Precio Oferta</label>
              <div class="col-md-12">
                <input type="text" class="form-control" name="libro_preciooferta" id="libro_preciooferta">
              </div>
          </div>


          <div class="form-group">
            <label for="libro_status" class="col-md-3 mt30">Activo</label>
            <div class="col-md-12">
              <input type="checkbox" value="1" checked="checked" name="libro_status" id="libro_status">
            </div>
          </div>
          <div class="form-group pull-left col-xs-12 mt-40">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-folder"></i> Guardar</button>
            <a href="novedades.php" class="btn btn-primary cerrar">
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
  
  function cambiarOferta(r){
    if(r == 1){
        $("#caja-preciooferta").removeClass("hidden");
        $("#libro_preciooferta").focus();
    }else{
        $("#caja-preciooferta").addClass("hidden");
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