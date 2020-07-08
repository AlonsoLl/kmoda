
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
    <title>KModa - Capital</title>
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
     
        <!-- INICIO Menu Usuario-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
       
          </ul>
        </li>
      </ul>
    </header>
        <!-- FIN Menu Usuario-->

    <!-- INICIO Menu-->

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
           <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Compras</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="capital.php"><i class="icon fa fa-circle-o"></i> Capital </a></li>
              <li><a class="treeview-item" href="compras.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Lista de Compras </a></li>
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
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Transaccion</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="pedidos.php"><i class="icon fa fa-circle-o"></i> Pedidos</a></li>
              <li><a class="treeview-item" href="boleta.php"><i class="icon fa fa-circle-o"></i> Boletas </a></li>
            </ul>
          </li>

          <li><a class="app-menu__item" href="principal.php"><i class=" fa fa-sign-out fa-lg"></i><span class="app-menu__label">Cerrar Sesion</span></i></a>

        </ul>
      </aside>

    <!-- FIN Menu-->

     <!-- INICIO Contenido Pagina-->

    <main class="app-content">
      <div class="app-title">
        <div>
          <h3><i class="fa fa-money"></i> Gestión del Dinero </h3>
          <h5>Seguimiento en tiempo real de Ingresos y Egresos</h5>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a>Capital</a></li>
        </ul>
      </div>


     
          
        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Resumen de Inversion</h3>

            <?php
            $sqlcount="SELECT SUM(cuenta) cant FROM compras where estado=1";


            $resultcount = $cnx->query($sqlcount) or die ("error");

            $regc=$resultcount->fetchObject() 
             ?>



        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
              <div class="info">
                <h4>Compras a la fecha</h4>
                <p><h5> S/. <?php echo $regc->cant ?></p></h5>
              </div>
          </div>
        </div>

        <?php
            $sqlcount="SELECT SUM(flete+pasajes) cant FROM compras where estado=1";


            $resultcount = $cnx->query($sqlcount) or die ("error");

            $regc=$resultcount->fetchObject() 
             ?>


          <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-car fa-3x"></i>
              <div class="info">
                <h4>Flete y Pasajes</h4>
                <p><h5> S/. <?php echo $regc->cant ?></p></h5>
              </div>
          </div>
        </div>
          </div>
        </div>


           
        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Seguimiento en Tiempo Real de los Pedidos</h3>
           
            <?php
            $sqlcount="SELECT SUM(pe.cantidad_pago) cant FROM pedido pe
            inner join estado_pago pa on pe.id_estado_pago = pa.id_estado_pago
            inner join estado_pedido ped on pe.id_estado_pedido = ped.id_estado_pedido
            inner join estado_venta ven on pe.id_estado_venta = ven.id_estado_venta
            where pe.id_estado_pedido = 2 and ven.id_estado_venta=1";


            $resultcount = $cnx->query($sqlcount) or die ("error");

            $regc=$resultcount->fetchObject() 
             ?>


     <div class="row">
            <div class="col-md-6 col-lg-3">
           <div class="widget-small primary coloured-icon"><i class="icon fa fa-check fa-3x"></i></a>
              <div class="info">
                <h4> Entregados</h4>
                <p><h5> S/. <?php echo $regc->cant ?></p></h5>
              </div>
            </div>
            </div>

<?php
            $sqlcount="SELECT SUM(pe.cantidad_pago) cant FROM pedido pe
            inner join estado_pago pa on pe.id_estado_pago = pa.id_estado_pago
            inner join estado_pedido ped on pe.id_estado_pedido = ped.id_estado_pedido
            inner join estado_venta ven on pe.id_estado_venta = ven.id_estado_venta
            where pa.id_estado_pago = 2 and ped.id_estado_pedido = 1 and ven.id_estado_venta=1";


            $resultcount = $cnx->query($sqlcount) or die ("error");

            $regc=$resultcount->fetchObject() 
             ?>

          <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-hourglass-half fa-3x"></i>
            <div class="info">
              <h4> Por Entregar</h4>
              <p><h5> S/. <?php echo $regc->cant ?></p></h5>
            </div>
          </div>
          </div>

          <?php
                      $sqlcount="SELECT SUM(pe.total-pe.cantidad_pago) cant from producto p inner join pedido pe on p.id_producto = pe.id_producto 
                       WHERE pe.id_estado_pedido =1 and pe.id_estado_pago<>2 and pe.id_estado_venta=1 ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

        <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>FALTA QUE PAGUEN</h4>
              <p><h5> S/. <?php echo $regc->cant ?></p></h5>
            </div>
          </div>
        </div>
          </div>
        </div>
  


        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Productos</h3>

            <?php
                      $sqlcount="SELECT SUM(p.stock) cant 
                      from producto p
                      inner join proveedor pr on p.id_proveedor = pr.id_proveedor
                      where p.id_proveedor <> 6 and p.estado=1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

<div class="row">

      <div class="col-md-6 col-lg-3">
       <div class="widget-small warning coloured-icon"><i class="icon fa fa-list fa-3x"></i>
            <div class="info">
              <h4> Stock KModa </h4>
              <p><h5><?php echo $regc->cant ?></h5></p>
            </div>
          </div>
        </div>

        <?php
                      $sqlcount="SELECT SUM(p.precio*stock) cant 
                      from producto p
                      inner join proveedor pr on p.id_proveedor = pr.id_proveedor
                      where p.id_proveedor <> 6 and stock<>0 and p.estado=1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="col-md-6 col-lg-3">
       <div class="widget-small info coloured-icon"><i class="icon fa fa-cart-plus fa-3x"></i>
            <div class="info">
              <h4> Por Colocar </h4>
              <p><h5> S/. <?php echo $regc->cant ?></p></h5>
            </div>
          </div>
        </div>
          </div>
        </div>


        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Ganancias</h3>

            <?php
                      $sqlcount="SELECT SUM(p.stock) cant 
                      from producto p
                      inner join proveedor pr on p.id_proveedor = pr.id_proveedor
                      where p.id_proveedor <> 6";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

<div class="row">

      <div class="col-md-6 col-lg-3">
       <div class="widget-small warning coloured-icon"><i class="icon fa fa-list fa-3x"></i>
            <div class="info">
              <h4> Stock KModa </h4>
              <p><h5><?php echo $regc->cant ?></h5></p>
            </div>
          </div>
        </div>

        <?php
                      $sqlcount="SELECT SUM(p.precio*stock) cant 
                      from producto p
                      inner join proveedor pr on p.id_proveedor = pr.id_proveedor
                      where p.id_proveedor <> 6 and stock<>0";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="col-md-6 col-lg-3">
       <div class="widget-small info coloured-icon"><i class="icon fa fa-cart-plus fa-3x"></i>
            <div class="info">
              <h4> Por Colocar </h4>
              <p><h5> S/. <?php echo $regc->cant ?></p></h5>
            </div>
          </div>
        </div>
          </div>
        </div>



<!--
        <div>
                <img align="right" src="img/ok.png">
</div>
-->

     <!-- FIN Contenido Pagina-->
    

    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
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