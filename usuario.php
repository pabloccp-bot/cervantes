<?php 
  session_start();
  if(isset($_SESSION["user"]))  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Editorial Cervantes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" href="images/favicon.png">
  <style>
  .mt30{  
  margin-top: 30px;
  }
  .mt10{  
  margin-top: 10px;
  }
  .mt90{  
  margin-top: 90px;
  }
  .mt130{ 
  margin-top: 130px;
  }
  .ex4 img {
    width:180px;
    margin: 30px;
    height:200px;
    -webkit-box-shadow: 4px 4px 4px rgba(0,0,0,0.0);
    -moz-box-shadow: 4px 4px 4px rgba(0,0,0,0.0);
    box-shadow: 4px 4px 4px rgba(0,0,0,0.0);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    display: inline-block;
    }
    .fondo{
      background-color:#f5eae3!important;
    }
    no{
      position: unset !important;
      width: 100% !important;
      min-height: 1px !important;
      padding-right: 15px !important;
      padding-left: 15px !important;
      display: inline-block !important;
    }
    .img-fluid {
    max-width: 80%;
    height: auto;
    }
    
    @media(max-width: 780px){
    .ex4 img {
      width: 50%;
      margin-left: 110px;
      height: 192px;


    }
    .img-fluid {
    max-width: 100%;
    height: auto;
    }
    }
    
  .site-blocks-cover.overlay-2:after {
    z-index: 1;
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
    right: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.7);
    background: linear-gradient(to bottom, rgba(221, 239, 234, 0.7) 0%, rgba(255, 255, 255, 0) 25%) !important;
  }
  </style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
      <img src="images/logo.png" class="img-responsive"style="width: 120px" alt="logo">
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                
               
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="index.php?d=novedades" class="nav-link">Novedades</a></li>
                <li><a href="index.php?d=categorias" class="nav-link">Categorias</a></li>
                <li><a href="index.php?d=puntos" class="nav-link">Puntos</a></li>
                <li><a href="index.php?d=mas-visitados" class="nav-link"> Más Visitados</a></li>
                <li><a href="index.php?d=contactos" class="nav-link">Contactos</a></li>
                <li><a href="usuario.php"><i class=""></i>Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="site-section" id="property-details">
      
        <div class="container mt90">
          <div class="col-md-8 offset-md-2 form-content mb3e" style="" id="login-content">
            <form id="formulario-inicia" method="post" onsubmit="iniciaSession();return!1;">
              <h4 style="text-align: center;">Acceder a mi Cuenta</h4>
              <div id="cajaError" class="d-none col-md-12 alert alert-info text-center">
                Usuario y contraseña no válidos.
              </div>
              <div class="sign-in">
                <label for="username">Email</label>
                  <input type="email" class="form-control" placeholder="" required="" id="email" name="email" value=""> 
              </div>
              <div class="sign-in">
                <label for="password">Clave:</label>
                <input type="password" value="" class="form-control" required="" id="clave" name="clave">
              </div>

              <div class="col-md-12 p0 mt10 mb40 text-right">
                <a href="registro.php">No tienes una cuenta? Registrate!</a>
              </div>
              <div class="sign-in mt10">
                <input type="hidden" name="" id="" value="">
                <button type="submit" class="btn btn-primary " class="fa fa-plus">Iniciar Sesion</button>
              </div>
            </form>
          </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function iniciaSession(){
      $("#cajaError").addClass("d-none");
      $.ajax({
        url: "ajax/usuario_inicia.php",
        data: $("#formulario-inicia").serialize(),
        type: "post",
        success: function(recibo){
          if(recibo){
            $("#cajaError").removeClass("d-none");
          }else{
            location.href = "index.php";
          }
         
        }
      });
      
    }
  </script>
    <?php include "inc/footer.php";?>