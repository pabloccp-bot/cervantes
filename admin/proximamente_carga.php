<html>
<head>

 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.js"></script>

 <link rel="stylesheet" href="css/bienvenida.css">
 <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
 
  
  
</head>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Editorial Cervantes</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"

            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>En Linea</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header 
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Buscar...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
       sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>

          <li>
            <a href="bienvenida2.php">
              <i class="fa fa-tachometer-alt"></i>
              <span>Banner</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-book fa-fw"></i>
              <span>Libros</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="novedades.php">Novedades
                  </a>
                </li>
                <li>
                  <a href="proximamente.php">Proximamente</a>
                </li>
                <li>
                  <a href="#">Mas Visitados</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-archive"></i>
              <span>Categorias</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Infantil

                  </a>
                </li>
                <li>
                  <a href="#">Estudiantes</a>
                </li>
                <li>
                  <a href="#">Universitarios</a>
                </li>
                 <li>
                  <a href="#">Docentes</a>
                </li>
                 <li>
                  <a href="#">Romance</a>
                </li>
                 <li>
                  <a href="#">Clasicos</a>
                </li>
                 <li>
                  <a href="#">Misterio</a>
                </li>
                 <li>
                  <a href="#">Interes General</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">
             <i class="fa fa-shopping-cart"></i>
              <span>Puntos De Ventas</span>
            </a>
            <!-- <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>-->
          </li>
          <li>
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Contactos</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-key"></i>
              <span>Cerrar Sesion</span>
            </a>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content scroll">
    <div class="container-fluid">
      <h2>Cervantes Administrador</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <p>Cargar Futuro Libro</p>
          <p> Aqui podras cargar tus futuros Libros</p>
        </div>
      </div>
     
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <form action="" method="post" enctype="multipart/form-data">
      <div class="form group">
        <label class="col-md-12 text-left" for="proximamente_titulo">Libro Titulo</label>
          <div class="col-md-12">
            <input type="text" name="proximamente_titulo" class="form-control" id="proximamente_titulo" ></input>
          </div>
      </div>

      <div class="form group">
        <label class="col-md-12 text-left" for="proximamente_autor">Libro Autor</label>
          <div class="col-md-12">
            <input type="text" name="proximamente_autor" class="form-control" id="proximamente_autor" ></input>
          </div>
      </div>
      <div class="form-group">
        <label for="proximamente_imagen" class="col-md-3">Libro Imagen</label>
        <div class="col-md-12">
          <input type="file" class="form-control" name="proximamente_imagen" id="proximamente_imagen">
        </div>
      </div>
      
      <div class="form-group">
        <label for="proximamente_status" class="col-md-3">Activo</label>
        <div class="col-md-12">
          <input type="checkbox" value="1" name="proximamente_status" id="proximamente_status">
        </div>
      </div>
      <div class="form-group pull-left col-xs-12 mt-40">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="proximamente.php" class="btn btn-primary cerrar">Cancelar</a>
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