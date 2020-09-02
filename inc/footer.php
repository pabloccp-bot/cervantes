<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5  wow fadeInUp">
                <h2 class="footer-heading mb-4">Editorial Cervantes</h2>
                <p>La Editorial número uno del Mercado <br>Los mejores libros.<br> Gran variedad.<br> Te esperamos!!!</p>
              </div>
              <div class="col-md-3 mx-auto  wow fadeInUp">
                <h2 class="footer-heading mb-4">Cervantes</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="index.php?d=categorias">Categorias</a></li>
                  <li><a href="index.php?d=mas-visitados">Más Visitados</a></li>
                  <li><a href="index.php?d=contactos">Contactos</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4  wow fadeInUp">
              <h2 class="footer-heading mb-4">Suscribete para Recibir Promociones</h2>
            <form action="ajax/procesa_promciones.php" id="promocion-mensaje" method="post" class="footer-subscribe"  onsubmit="promocion_envia();return!1;">
              <div class="input-group mb-3">
                <input type="email" class="form-control border-secondary text-white bg-transparent" placeholder="ejemplo@gmail.com" name ="email" required="required" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black  wow fadeInUp" type="submit" id="button-addon2">Enviar</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class=" wow fadeInUp">
              <h2 class="footer-heading mb-4">Siguenos</h2>
                <a href="https://www.facebook.com/Planetadelibros/?ref=py_c" target="_blank" class="pl-0 pr-3">
                  <span class="icon-facebook"></span>
                </a>
                <a href="https://twitter.com/login?lang=es" target="_blank"class="pl-3 pr-3">
                  <span class="icon-twitter"></span>
                </a>
                <a href="https://www.instagram.com/?hl=es-la" target="_blank" class="pl-3 pr-3">
                  <span class="icon-instagram"></span>
                </a>
                <a href="https://es.linkedin.com/" target="_blank" class="pl-3 pr-3">
                  <span class="icon-linkedin"></span>
                </a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center  wow fadeInUp">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright">
            © 2019 - Todos los derechos reservados
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  <!-- .site-wrap -->
  
  
  
  
           <div class="modal" id="ventana-modal" tabindex="-1" role="dialog">
						  <div class="modal-dialog" role="document">
							   <div class="modal-content">
							   <div class="modal-header">
								    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								      <span aria-hidden="true">&times;</span>
								    </button>
							  </div>
							  <div class="modal-body">
								  <p>Modal body text goes here.</p>
							  </div>
							  <div class="modal-footer">
								  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
							  </div>
							</div>
						</div>
				  </div>
						
						
						

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
					<!-- Animation -->
					<!--[if gte IE 9]><!-->
					<script src="js/wow.min.js"></script>
					<script type="text/javascript">
						wow = new WOW({
								boxClass: 'wow',          // animated element css class (default is wow)
								animateClass: 'animated', // animation css class (default is animated)
								offset: 50,               // distance to the element when triggering the animation (default is 0)
								mobile: false,            // trigger animations on mobile devices (true is default)
								live: true 
							})
							wow.init();
							
					function verModal(nombre){
						$.ajax({
							url: 'ajax/lista.php',
							data: {"empresa": nombre},
							type: 'post',
							success: function(respuesta){
								$("#ventana-modal .modal-body").html(respuesta);
								$("#ventana-modal").modal('show');	
							}
						})
					}


          
          <?php if(isset($_GET["d"])){ ?>
            setTimeout("ir_a('<?php echo $_GET["d"]; ?>')", 800);    
          <?php } ?>

          function ir_a(dato){
             $('html, body').animate({
                  'scrollTop': $('#'+dato).offset().top
                }, 1000, 'easeInOutExpo');
              
          }

           function contacto_envia(){
              $("#cajaError").remove();
              
              $.ajax({
                url: "ajax/procesa.php",
                data: $("#formulario-mensaje").serialize(),
                type: "post",
                success: function(x){
                  /*
                  if(recibo == 1){
                    $("#formulario-mensaje").append('');
                  }else{
                    $("#formulario-mensaje").append('');
                  }*/

                  $("#formulario-mensaje").append(x);
                   $("#formulario-mensaje")[0].reset();

                  
                 
                }
              });
              
              
            }

             function contacto_envia_registro(){
              $("#cajaError_registro").remove();
              
              $.ajax({
                url: "ajax/procesa_registro.php",
                data: $("#formulario-mensaje_registro").serialize(),
                type: "post",
                success: function(x){
                  /*
                  if(recibo == 1){
                    $("#formulario-mensaje").append('');
                  }else{
                    $("#formulario-mensaje").append('');
                  }*/

                  $("#formulario-mensaje_registro").append(x);
                   $("#formulario-mensaje_registro")[0].reset();

                  
                 
                }
              });
              
              
            }

            function promocion_envia(){
              $("#cajaError").remove();
              
              $.ajax({
                url: "ajax/procesa_promciones.php",
                data: $("#promocion-mensaje").serialize(),
                type: "post",
                success: function(c){
                  /*
                  if(recibo == 1){
                    $("#formulario-mensaje").append('');
                  }else{
                    $("#formulario-mensaje").append('');
                  }*/

                  $("#promocion-mensaje").append(c);
                   $("#promocion-mensaje")[0].reset();

                  
                 
                }
              });
              
              
            }
				</script>
    
  </body>
</html>