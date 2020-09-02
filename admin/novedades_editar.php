<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("location: login.php");
  }

include "../config/conexion.php";
  $id = $_GET['id'];
      $sql = "SELECT * FROM libro WHERE libro_id = '$id'";
      $dato = $conexion->query($sql);
      //print_r($dato);
      $fila = mysqli_fetch_assoc($dato);

      

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

<?php include "inc/menu.php";?>
  <!-- sidebar-wrapper  -->
  <main class="page-content scroll">
    <div class="container-fluid">

      <!--<?php 
        echo "<pre>";
        print_r($fila);
        echo "</pre>";
        
      ?>-->
     <h2>Editar Libro</h2>
      <hr>
     <!-- <div class="row">
        <div class="form-group col-md-12">
          <p>Editar</p>
        </div>
      </div>
     
      <hr>-->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="ajax/novedades_update.php" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="categorias">Categoria</label>
          <div class="col-md-12">
            <select style="color:#000;" class="form-control" name="categoria_id" id="categorias_combo">
                  <option value="" selected="selected">Seleccionar</option>
                  <?php
                    while($catego = mysqli_fetch_assoc($categoria)){
                  ?>
                  <option <?php if($fila["categoria_id"] ==  $catego['categoria_id']){ ?> selected="selected" <?php } ?>value="<?php echo $catego['categoria_id']?>">
                    <?php echo $catego['categoria_nombre']?>
                  </option>
                  <?php } ?>
              </select>
          </div>
      </div>
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="libro_titulo">Libro Titulo</label>
          <div class="col-md-12">
            <input type="text" name="libro_titulo" value="<?php echo $fila['libro_titulo']?>"class="form-control" id="libro_titulo" ></input>
          </div>
      </div>

      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="libro_autor">Libro Autor</label>
          <div class="col-md-12">
            <input type="text" name="libro_autor" value="<?php echo $fila['libro_autor']?>" class="form-control" id="libro_autor" ></input>
          </div>
      </div>

      <div class="form group mt30">
            <label class="col-md-12 text-left mt-15" for="libro_sinopsis">Sinopsis</label>
            <div class="col-md-12">
            <textarea type="tex" name="libro_sinopsis" class="form-controlu" id="libro_sinopsis" ><?php echo $fila['libro_sinopsis']?></textarea>
            </div>
       </div>
      
      <div class="form-group">
        <label for="libro_imagen" class="col-md-3 mt-15">Imagen</label>
    
      <?php
        if(strlen($fila['libro_imagen'])>0){
          echo '<img src="../upload/libro/'.$fila['libro_imagen'].'" width="30%">';
          }
          ?>
      
        <div class="col-md-12">
        <input type="file" class="form-control" name="libro_imagen" id="libro_imagen"></input> 
        </div>
      </div>

      <div class="form group">
            <label class="col-md-12 text-left mt-15" for="libro_pagina">Paginas</label>
              <div class="col-md-12">
                <input type="text" name="libro_pagina" value="<?php echo $fila['libro_pagina']?>" class="form-control" id="libro_pagina" ></input>
              </div>
          </div>

      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="libro_novedad">Es Novedad?</label>
          <div class="col-md-12">
            <select style="color:#000;" class="form-control" name="libro_novedad" id="novedad">
              <option <?php echo $fila["libro_novedad"] == 1 ? 'selected="selected"' : ""; ?> value="1">si</option>
              <option <?php echo $fila["libro_novedad"] == 0 ? 'selected="selected"' : ""; ?> value="0">no</option>
          </select>
          </div>
      </div>
      <div class="form group">
        <label class="col-md-12 text-left mt-15" for="libro_proximamente">Proximamente</label>
          <div class="col-md-12">
            <select style="color:#000;" class="form-control" name="libro_proximamente" id="libro_proximamente">
             <option <?php echo $fila["libro_proximamente"] == 1 ? 'selected="selected"' : ""; ?> value="1">si</option>
              <option <?php echo $fila["libro_proximamente"] == 0 ? 'selected="selected"' : ""; ?> value="0">no</option>
          </select>
          </div>
      </div>

      <div class="form group">
            <label class="col-md-12 text-left mt-15" for="novedad">Precio</label>
              <div class="col-md-12">
                <input type="text" class="form-control" name="libro_precio" 
                value="<?php echo $fila['libro_precio']?>" id="libro_precio">
              </div>
          </div>

       <div class="form group">
            <label class="col-md-12 text-left mt-15" for="novedad">En oferta?</label>
              <div class="col-md-12">
                <select style="color:#000;" onchange="cambiarOferta(this.value);" class="form-control" name="libro_oferta" id="libro_oferta">
                  <option <?php echo $fila["libro_oferta"] == 0 ? 'selected="selected"' : ""; ?> value="0">no</option>
                  <option <?php echo $fila["libro_oferta"] == 1 ? 'selected="selected"' : ""; ?> value="1">si</option>
              </select>
              </div>
          </div>
          
       <div id="caja-preciooferta" class="form group <?php echo $fila["libro_oferta"] == 0 ? 'hidden' : ''; ?>">
            <label class="col-md-12 text-left mt-15" for="novedad">Precio Oferta</label>
              <div class="col-md-12">
                <input type="text" class="form-control" name="libro_preciooferta"
                value="<?php echo $fila['libro_preciooferta']?>" id="libro_preciooferta">
              </div>
          </div>       
      
      <div class="form-group">
        <label for="novedades_status" class="col-md-3 mt-15">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" name="libro_status" id="libro_status" 
          <?php if($fila['libro_status'] == 1){ ?> checked="checked" <?php } ?>>
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <input type="hidden"  name="libro_id" value="<?php echo $id?>"> 
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