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
            <a href="login.php">
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
          <p>Listado de Proximamente</p>
          <p> Aqui podras Ver los futuros libros</p>
        </div>
      </div>
     
      <hr>
      <div class="row">
        <div class="sidebar-search col-md-10">
          <div>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar...">
            </div>
          </div>
        </div>

        <div class="col-md-2 form-group">
        <a href="proximamente_carga.php" class="btn btn-primary pull-right cerrar" class="fa fa-plus"> Nuevo</a>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-40">
         <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Imagen</th>
      <th scope="col">Creado</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>El Calentamiento Global</td>
       <td>Daniel Ruiz</td>
      <td><img  height="80" src="img/libro1.jpg"></td>
     
      <td>10/10/19</td>
      <td>
        <button class="btn btn-danger"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>El calentamiento Global</td>
      <td>Daniel Ruiz</td>
      <td><img height="80" src="img/libro1.jpg"></td>
      <td>05/08/19</td>
      <td>
        <button class="btn btn-danger"><i class="fas fa-edit"></i></button>
        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>El calentamiento Global</td>
      <td>Daniel Ruiz</td>
      <td><img height="80" src="img/libro1.jpg"></td>
      <td>03/08/19</td>
      <td>
        <button class="btn btn-danger" alt="Borrar"><i class="fas fa-edit"></i> </button>
        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>
  </tbody>
</table>
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