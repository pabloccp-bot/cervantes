<?php

  include "config/conexion.php";
  
  $sql = "SELECT * FROM banner WHERE banner_status = 1 ORDER BY banner_id DESC";
  $banner = $conexion->query($sql);

  $sql = "SELECT * from libro WHERE libro_novedad=1 AND libro_status=1 ORDER BY libro_id DESC LIMIT 9";
  $libro = $conexion->query($sql);

  $sql = "SELECT libro_id,libro_titulo, libro_autor, libro_imagen from libro WHERE libro_proximamente=1 And libro_status=1
   ORDER BY libro_id DESC LIMIT 6";
  $proximamente = $conexion->query($sql);

   $sql = "SELECT * FROM categoria WHERE categoria_status = 1  ORDER BY categoria_id ASC";
  $categoria = $conexion->query($sql);

   $sql = "SELECT * FROM libro WHERE libro_status = 1 order by libro_visita DESC LIMIT 6";
    $mas_visitados = $conexion->query($sql);

?>

<?php include "inc/inicio.php";?>

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#inicio" class="nav-link">Inicio</a></li>
                <li><a href="#novedades" class="nav-link">Novedades</a></li>
                <li><a href="#categorias" class="nav-link">Categorias</a></li>
                <li><a href="#puntos" class="nav-link">Puntos</a></li>
                <li><a href="#mas-visitados" class="nav-link"> Más Visitados</a></li>
                <li><a href="#contactos" class="nav-link">Contactos</a></li>
                <li><a href="usuario.php"><i class=""></i>Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <!-- BANNER -->
    <div class="site-block-wrap">

    <div class="owl-carousel with-dots">
      <?php
        if($banner->num_rows > 0){
      ?>
      <?php while($c = mysqli_fetch_assoc($banner)){?>
      <div class="site-blocks-cover overlay overlay-2" 
      style="background-image: url(upload/banner/<?php echo $c['banner_imagen'];?>);" data-aos="fade" id="inicio"> 
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow"><?php echo $c['banner_titulo'];?></h1>
              <p class="mb-5 text-shadow"><?php echo $c['banner_descripcion'];?></p>
              <!--<p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Ver mas</a></p>-->  
            </div>
          </div>
        </div>
      </div>  
      <?php } } ?>
      </div>
      </div>
      <!-- FIN BANNER -->

      <!--NOVEDADES-->
      <?php
        if($libro->num_rows > 0){
      ?>
  <div class="site-section" id="novedades">   
	  <div class="container">

	  <h1 style="text-center" class="section-title mb-3">Novedades</h1>
        <div class="row large-gutters mt30">
           <?php while($c = mysqli_fetch_assoc($libro)){?>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner  wow fadeInUp">
                <a href="novedades_detalles.php?id=<?php echo $c['libro_id']?>"class="d-inline-block mb-4">
                <img src="upload/libro/<?php echo $c['libro_imagen'];?>" alt="FImageo" class="img-fluid"></a>

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
          </div>
          <?php } } ?>
		 </div>
  </div>
</div>
    <!-- FIN NOVEDADES-->

    <!--PROXIMAMENTE-->
      <?php
        if($libro->num_rows > 0){
      ?>
	<div class="site-section" id="">
    <div class="container">
	   <h1 class="section-title mb-3">Próximamente</h1>
        <div class="row large-gutters mt30">
           <?php while($c = mysqli_fetch_assoc($proximamente)){?>
			<div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1  wow fadeInUp">
              <div class="ftco-media-1-inner">
              <a href="proximamente_detalles.php?id=<?php echo $c['libro_id']?>"class="d-inline-block mb-4">
              <img src="upload/libro/<?php echo $c['libro_imagen'];?>" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3><?php echo $c['libro_titulo'];?></h3>
                  <p><?php echo $c['libro_autor'];?></p>
                </div>
  
              </div> 
            </div>
          </div>
		  
		  
		  <?php } } ?>
		  
		   
		</div> 
      </div>
    </div>
    <!--FIN PROXIMAMENTE-->

			<!--CATEGORIAS-->
      <?php
        if($libro->num_rows > 0){
        ?>
    <section class="site-section" id="categorias">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Categorias</h2>
            <p class="lead">Encuentra Los mejores libros en Cervantes</p>
          </div>
        </div>
        <div class="row">
          
           <?php while($c = mysqli_fetch_assoc($categoria)){?>
          <div class="col-md-6 col-lg-4 mb-4  wow fadeInUp">
            <div class="team-member">
              <figure>
               <a href="infantil.php?id=<?php echo $c['categoria_id']?>"> 
              <img src="upload/categoria/<?php echo $c['categoria_imagen'];?>" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2"><?php echo $c['categoria_nombre'];?></h3>
                <span class="position"></span></a>
              </div>
            </div>
          </div>
           <?php } } ?>          
        </div>
      </div>
    </section>
<!--FIN CATEGORIAS-->

<!--Nosotros-->

    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center wow fadeInUp">
            <h2 class="section-title mb-3 text-black">Nosotros</h2>
          </div>
        </div>
        <div class="row">
           <div class="col-md-6 wow fadeInUp">
            <div class="">
              <h3 class="text-black">Visión</h3>
              <p class="text-dark">Con responsabilidad social estar cerca de nuestros clientes con productos vanguardistas.</p>
            </div>
          </div>
		  
		  <div class="col-md-6  wow fadeInUp">
            <div class="">
              <h3 class="text-black">Misión</h3>
              <p class="text-dark">Respondiendo a las exigencias seremos aliados de nuestros clientes.</p>
            </div>
          </div>

          <div class="col-md-12  wow fadeInUp">
            <div class="pr-5">
              <h3 class="text-black">Quienes somos</h3>
              <p class="text-dark">La accesibilidad a las herramientas de educación ha sido un
					déficit en la generación de una sociedad más inclusiva. Y
					nuestro propósito es estar cerca de todos y cada uno de los
					que habitan el Paraguay. De ahí que nuestro objetivo fundamental
					es estar cerca de nuestros clientes.</p>
            </div>
          </div>
        </div>
      </div>  
    </section>
    <!--FIN Nosotros-->

    <!--Puntos de Venta-->

		<section class="site-section fondo" id="puntos">
			
			<div class="container wow fadeInUp">
			<h1 class="section-title mb-3">Puntos De Venta</h1>
				<div class="row ex4  mt30">
							<?php 
                $sql = " SELECT * FROM venta where venta_status = 1";
                $puntos = $conexion->query($sql);
                while ($fila = mysqli_fetch_assoc($puntos)) {
              ?>
                  <div class="col-md-3">
                    <a href="" onclick="verModal('<?php echo $fila["venta_id"];?>');return!1;"> 
                    <img src="upload/venta/<?php echo $fila['venta_imagen'];?>"></a>
                  </div>
              <?php
                }
              ?>
              
							<!--
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="" onclick="verModal('stock');return!1;"><img  src="images/stokc.jpg"></a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="" onclick="verModal('espana');return!1;"><img  src="images/espana.jpg"></a>
							</div>
							<div class="col-md-3 col-sm-12 col-xs-12">
								<a href="" onclick="verModal('salemma');return!1;">
									<img alt="img3" src="images/salema.jpg" />
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="" onclick="verModal('Gran Via');return!1;">
									<img alt="img3" src="images/gran.jpg" />
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="" onclick="verModal('Pueblo');return!1;">
									<img alt="img3" src="images/pueblo.jpg" />
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="" onclick="verModal('Los Jardines');return!1;">
									<img alt="img3" src="images/losjardines.jpg" />
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="" onclick="verModal('Real');return!1;">
									<img alt="img3" src="images/real.jpg" />
								</a>
							</div>

					 -->
			   </div>
		</div>
    </section>
    <!--FIN Puntos de venta-->
    <!--Mas visitados-->
    <?php
        if($libro->num_rows > 0){
      ?>
    <section class="site-section" id="mas-visitados">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title mb-3">Más Visitados</h2>
          </div>
        </div>
        <div class="row large-gutters mt30">
           <?php while($c = mysqli_fetch_assoc($mas_visitados)){?>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="">
              <div class="ftco-media-1-inner wow fadeInUp">
              <a href="visitados_detalles.php?id=<?php echo $c['libro_id']?>"class="d-inline-block mb-4">
              <img src="upload/libro/<?php echo $c['libro_imagen'];?>" alt="FImageo" class="img-fluid"></a>
              <div class="meta mb-4"><?php echo $c['libro_titulo'];?>
                <span class="mx-2">&bullet;</span> <?php echo date("d/m/Y", strtotime($c["libro_timestamp"]));?><span class="mx-2">&bullet;</span></div>
            </div> 
          </div>    
        </div>
        <?php } } ?>
      </div>
    </section>
    <!--FIN Mas visitados-->

<!--Contactos-->
    <section class="site-section bg-light bg-image" id="contactos">
      <div class="container wow fadeInUp">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contactos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            
            <form action="ajax/procesa.php" id="formulario-mensaje" method="post" class="p-5 bg-white" 
            onsubmit="contacto_envia();return!1;">
              
              <h2 class="h4 text-black mb-5">Contacte con nosotros</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="nombre">Nombre</label>
                  <input type="text" name="nombre" required="required" id="nombre" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="apellido">Apellido</label>
                  <input type="text" name="apellido" id="apellido" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email"  name="email" required="required" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="telefono">Teléfono</label> 
                  <input type="subject" name="telefono" required="required" id="telefono" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="mensaje">Mensaje</label> 
                  <textarea name="mensaje" id="mensaje" cols="30" rows="7" class="form-control" placeholder="Escriba su consulta aqui..."></textarea>
                </div>
              </div>

              <div class="row form-group" colspan="2">
                <div class="col-md-12">
                  <input type="submit" value="Enviar Mensaje" class="btn btn-primary btn-md text-white">
                </div>
              </div>
              
            </form>
             
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Encuéntranos en Cde</p>
              <p class="mb-4">Avda Los Lapachos c/ Los Laureles</p>

              <p class="mb-0 font-weight-bold">Celular</p>
              <p class="mb-4"><a href="#">0985 441 383</a></p>
			  <p class="mb-0 font-weight-bold">Teléfono</p>
              <p class="mb-4"><a href="#">021 555 720 / 021 480 379</a></p>

            </div>
			
			 <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Encuéntranos en Asunción</p>
              <p class="mb-4">Mariscal López N° 749 c/ Avda Perú</p>

              <p class="mb-0 font-weight-bold">Celular</p>
              <p class="mb-4"><a href="#">0983 363 331</a></p>
			  
			  <p class="mb-0 font-weight-bold">Teléfono</p>
              <p class="mb-4"><a href="#">021 618 400 / 021 961 777</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!--FIN Contactos-->

    
  <?php include "inc/footer.php";?>