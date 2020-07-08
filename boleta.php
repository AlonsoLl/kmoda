
<?php
require_once("conexion.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title> Kmoda - Boleta</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="inicio.php">KModa</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
         
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
   
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" img src="logo.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">
          <p>
            <?php echo $_SESSION['nombre'].' '.$_SESSION['apellidos']; ?>
          </p>
          </p>
          <p class="app-sidebar__user-designation">Propietaria</p>
        </div>
        </div>
          <!-- Inicio -->
        <ul class="app-menu">
          <li><a class="app-menu__item " href="inicio.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
  
           <!-- Productos -->
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="productos.php"><i class="icon fa fa-circle-o"></i> Listar Productos</a></li>
              <li><a class="treeview-item" href="productosbaja.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Dados de Baja</a></li>
            </ul>
          </li>
  
          <!-- Compras -->
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-usd"></i><span class="app-menu__label">Cotizar Compras</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
            <li><a class="treeview-item" href="compras.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Comprar </a></li>
              <li><a class="treeview-item" href="capital.php"><i class="icon fa fa-circle-o"></i> Capital </a></li>
            </ul>
          </li>

           <!-- Clientes -->
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">Clientes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="clientes.php"><i class="icon fa fa-user-circle"></i> Lista de Clientes</a></li>
            </ul>
          </li>
  
           <!-- Categorias -->
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Categorias</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="categorias.php"><i class="icon fa fa-folder-o"></i> Lista de Categorias</a></li>
              <li><a class="treeview-item" href="categoriasbaja.php"><i class="icon fa fa-circle-o"></i> Dados de Baja</a></li>
            </ul>
          </li>
  
           <!-- Proveedores -->
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book-o"></i><span class="app-menu__label">Proveedores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="proveedores.php"><i class="icon fa fa-circle-o"></i> Lista de Proveedores</a></li>
              <li><a class="treeview-item" href="proveedoresbaja.php"><i class="icon fa fa-circle-o"></i> Dados de Baja</a></li>
            </ul>
          </li>
  
           <!-- Transacciones -->
          <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Transaccion</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="pedidos.php"><i class="icon fa fa-circle-o"></i> Pedidos</a></li>
              <li><a class="treeview-item" href="boleta.php"><i class="icon fa fa-circle-o"></i> Boletas </a></li>
            </ul>
          </li>

          <li><a class="app-menu__item" href="principal.php"><i class=" fa fa-sign-out fa-lg"></i><span class="app-menu__label">Cerrar Sesion</span></i></a>

        </ul>
      </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h3><i class="fa fa-file-text-o"></i> Boleta KModa</h3>
          <p>Comprobante de Pago</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Comprobante de Pago</li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i> KModa - Viste siempre lo mejor </h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Fecha: <?php echo date("d-m-Y");

?></h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">De:
                  <address><strong>KModa</strong><br>  Tienda Virtual   <br> Lambayeque - Perú<br><br><h6>Correo Electrónico: kmejiachamaya@gmail.com</h6></address>
                </div>
                <div class="col-4">Para:
                  <address><strong>Nombre Cliente</strong><br>Direccion<br>Departamente<br>Teléfono: 958654125<br>Correo Eléctronico: john.doe@example.com</address>
                </div>
                <div class="col-4"><b>Nº Comprobante </b><br><br><b>Codigo de Pedido</b> 4F3S8J<br><b>Total: S/.201,00</b><br></div>
              </div>

              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="text-align: center">Código</th>
                        <th style="text-align: center">Producto</th>
                        <th style="text-align: center">Cantidad</th>
                        <th style="text-align: center">Precio por Unidad</th>
                        <th style="text-align: center">Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        



                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Imprimir</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>