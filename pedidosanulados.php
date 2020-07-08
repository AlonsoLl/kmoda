
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

     <link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="main.css">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>KModa - Clientes</title>
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
          
        </li>
      </ul>
    </header>
     
    <!-- FIN Menu Usuario-->

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
          <h3><i class="fa fa-th-list"></i> Pedidos Anulados</h3>
          <p>Registro Actualizado</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="pedidos.php">Pedidos</a></li>
          <li class="breadcrumb-item">Pedidos Anulados</li>
        </ul>
      </div>


        <div class="social-bar">
    <a href="https://www.facebook.com/KModasYAccesorios/?modal=admin_todo_tour" class="icon icon-facebook" target="_blank"></a>
   <!--
    <a href="" class="icon icon-twitter" target="_blank"></a>
    <a href="" class="icon icon-youtube" target="_blank"></a>
-->
    <a href="" class="icon icon-instagram" target="_blank"></a>
      </div>


</div>

        
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="panel-body">
              <div class="table-responsive">


                                                    
              <?php

              
                      $sqlcount="SELECT count(*) cant FROM pedido pe
                      inner join estado_venta ve on pe.id_estado_venta = ve.id_estado_venta
                      
                      WHERE ve.id_estado_venta = '2' ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>
                       
                       <label>Cantidad de registros: <span><?php echo "$regc->cant"; ?></label>

                <table style="width:100%" class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th style="text-align: center  width:100px">N° Pedido</th>
                                            <th style="text-align: center">Producto(s)</th>
                                            <th style="text-align: center">Cliente</th>
                                            <th style="text-align: center">Fecha de Reserva</th>
                                            <th style="text-align: center">Costo Total</th>
                                            <th style="text-align: center">Porque se anuló?</th>
                                            <th style="text-align: center; background-color:#EF2510">Estado</th>
                    </tr>
                  </thead>
                   <tbody style="cursor:pointer">

                                     <!-- INICIO ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                                     <?php
                                  $sql="SELECT pe.id_pedido , p.nombre_producto , c.nombres, pe.fecha, p.precio, pe.cantidad_pago, (p.precio - pe.cantidad_pago) as saldo, 
                                  pa.nombre_pago, pe.motivo, ve.nombre_venta
                                  from pedido pe 
                                  inner join producto p on pe.id_producto = p.id_producto 
                                  inner join cliente c on pe.id_cliente = c.id_cliente 
                                  inner join estado_pedido e on pe.id_estado_pedido = e.id_estado_pedido 
                                  inner join estado_pago pa on pe.id_estado_pago = pa.id_estado_pago 
                                  inner join estado_venta ve on pe.id_estado_venta = ve.id_estado_venta
                                  WHERE ve.id_estado_venta='2'
                                  order by pe.fecha  asc";
                                  $result = $cnx->query($sql) or die("error");
                                  while($reg=$result->fetchObject()){
                                    echo "<tr>
                                   
                                        <td align=center>$reg->id_pedido</td>
                                        <td>$reg->nombre_producto</td>
                                        <td>$reg->nombres</td>
                                        <td align=center >$reg->fecha</td>
                                        <td align=center ><h6> S/. $reg->precio</td>
                                        <td align=center >$reg->motivo</td>
                                        <td style=background-color:#EF2510; align=center>$reg->nombre_venta</td>
                                        </tr>";
                                  }?>
                                  </tbody>
                                  <!-- FIN ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                        </table>

                          <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
                                     
                              
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
   <!-- Essential javascripts for application to work-->
   <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="pedido.js"></script>


    <script src="lista.js" type="text/javascript"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="pedido.js" type="text/javascript"></script>
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