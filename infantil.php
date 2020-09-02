<?php

  include "config/conexion.php";
  $id = $_GET['id'];
  $sql = "SELECT * from libro WHERE categoria_id='$id' and libro_proximamente='0' AND libro_status=1 ORDER BY libro_id DESC";
  $categoria = $conexion->query($sql);

  $sql = "SELECT categoria_nombre FROM categoria WHERE categoria_id = '$id'";
          $nom = $conexion->query($sql);
          $nombre = mysqli_fetch_array($nom);
    
?>


<?php include "inc/inicio.php";?>

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="index.php?d=novedades" class="nav-link">Novedades</a></li>
                <li><a href="index.php?d=categorias" class="nav-link">Categorias</a></li>
                <li><a href="index.php?d=puntos" class="nav-link">Puntos De Venta</a></li>
                <li><a href="index.php?d=mas-visitados" class="nav-link"> Más Visitados</a></li>
                <li><a href="index.php?d=contactos" class="nav-link">Contactos</a></li>
                
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
	
      <?php
        if($categoria->num_rows > 0){
      ?>
  <div class="site-section" id="properties-section">   
    <div class="container">
     <h1 style="text-align: center;" class="section-title mb-3 mt90">
      <?php  echo $nombre['categoria_nombre'];?></h1>
        <div class="row large-gutters mt50">
           <?php while($c = mysqli_fetch_assoc($categoria)){?>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner wow fadeInLeft">
                <a href="categorias_dellates.php?id=<?php echo $c['libro_id']?>"class="d-inline-block mb-4">
                  <img src="upload/libro/<?php echo $c['libro_imagen'];?>" class="img-fluid"></a>

                <div class="ftco-media-details">
                  <h3><?php echo $c['libro_titulo'];?></h3>
                  <p><?php echo $c['libro_autor'];?></p>
                  <?php if($c['libro_oferta'] == 1){ ?>
                    <strong><s><?php echo $c['libro_precio'];?>Gs.</s></strong><br>
                    <strong style="color: orangered"> OFERTA <?php echo $c['libro_preciooferta'];?>Gs.</strong>
                  <?php }else{ ?>
                    <strong><?php echo $c['libro_precio'];?>Gs.</strong><br>
                  <?php } ?>
                </div>
              </div> 
            </div>
            <!--<a href="" onclick="verModal('ignacio');return!1;"><button type="button" class="btn btn-primary " data-dismiss="modal">Ver Detalles</button></a>-->
          </div>
          <?php } } ?>
       </div>
   </div>
</div>
	
	 <?php include "inc/footer.php";?>