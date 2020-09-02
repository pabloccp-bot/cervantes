<link rel="stylesheet" href="css/bienvenida.css">
 <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="shortcut icon" href="../images/favicon.png">
  <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 
  
  
</head>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="">Editorial Cervantes</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="img/user.jpg"

            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">


            <strong><?php echo $_SESSION["usuario"]; ?></strong>
          </span>
          <span class="user-role">Administrador</span>
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
            <a href="inicia.php">
              <i class="fa fa-desktop"></i>
              <span>Bienvenido</span>
            </a>
          </li>

          <li>
            <a href="bienvenida2.php">
              <i class="fa fa-tachometer-alt"></i>
              <span>Banner</span>
            </a>
          </li>
          <li class="">
            <a href="categorias.php">
              <i class="fa fa-list-ul"></i>
              <span>Categorias</span>
            </a>
          </li>
          <li class="">
            <a href="novedades.php">
              <i class="fa fa-book fa-fw"></i>
              <span>Libros</span>
            </a>
            <!--<div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="mas_visitados.php">Libros Mas Visitados</a>
                </li>
                </ul>
            </div>-->
          </li>
          <li>
            <a href="puntos_ventas.php">
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
            <a href="administrador.php">
              <i class="fa fa-key"></i>
              <span>Administradores</span>
            </a>
          </li>
           <li class="header-menu">
            <span>Reportes</span>
          </li>
          <li>
            <a href="contactos_editorial.php">
              <i class="fa fa-users"></i>
              <span>Contactos</span>
            </a>
          </li>
          <li>
            <a href="mas_visitados.php">
              <i class="fa fa-chart-line"></i>
              <span>Libros Más Visitados</span>
            </a>
          </li>
          <!--<li class="header-menu">
            <span>Mas</span>
          </li>-->
          <li>
            <a href="promciones.php">
              <i class="fa fa-bullhorn"></i>
              <span>Promociones</span>
            </a>
          </li>
          <li>
            <a href="promciones.php">
              <i class="fa fa-user-plus"></i>
              <span>Registros Usuarios</span>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="fa fa-power-off"></i>
              <span>Cerrar Sesión</span>
            </a>
          </li>
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>
