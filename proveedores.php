
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
    <title>KModa - Proveedores</title>
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
          <li><a class="app-menu__item" href="inicio.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
  
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
          <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book-o"></i><span class="app-menu__label">Proveedores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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

      <main class="app-content">
      <div class="app-title">
        <div>
          <h3><i class="fa fa-th-list"></i> Mis Proveedores</h3>
          <p>Registro Actualizado</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Proveedores</li>
        </ul>
      </div>

      <?php
                      $sqlcount="SELECT count(*) cant FROM proveedor where estado=0";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="row">
      <div class="col-md-6 col-lg-3">
      <a href="proveedoresbaja.php" > <div class="widget-small danger coloured-icon"><i class="icon fa fa-arrow-down fa-3x"></i></a>
            <div class="info">
              <h4> Dados de Baja</h4>
              <p><?php echo $regc->cant ?></p>
            </div>
          </div>
        </div>
        </div>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="panel-body">
              <div class="table-responsive">


              <?php
                      $sqlcount="SELECT count(*) cant FROM proveedor WHERE estado <> 0";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

                        <!-- INICIO BOTONES -->

                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-user " ></i> Nuevo Proveedor </button>
                                                    <br/>
                                                    <br/>
                                                    
                            <!-- FIN BOTONES -->


                       <label>Cantidad de registros: <span><?php echo "$regc->cant"; ?></label>

                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <tr>
                                            <th style="text-align: center; width:180px">Codigo</th>
                                            <th style="text-align: center">Nombre</th>
                                            <th style="text-align: center">Ubicación</th>
                                            <th style="text-align: center">Teléfono</th>
                                            <th style="text-align: center">Contacto</th>
                                            <th style="text-align: center; width:200px">Acciones</th>
                                        </tr>
                  </thead>
                   <tbody style="cursor:pointer">

                                     <!-- INICIO ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                                     <?php
                                  $sql="SELECT * FROM proveedor WHERE estado = 1
                                  ORDER BY nombre_pr ASC";
                                  $result = $cnx->query($sql) or die("error");
                                  while($reg=$result->fetchObject()){
                                    echo "<tr>
                                        <td align=center>$reg->id_proveedor</td>
                                        <td>$reg->nombre_pr</td>
                                        <td align=center>$reg->direccion</td>
                                        <td align=center>$reg->telefono</td>
                                        <td align=center>$reg->contacto</td>
                                        <td align=center >
                                        <a onclick='verProveedor($reg->id_proveedor)' data-toggle='modal' data-target='#myModal2'><button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i>  </button></a>	
                                        <a onclick='darBaja($reg->id_proveedor)' data-toggle='modal' data-target='#myModal3'> <button type='button' class='eliminar btn btn-warning' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-thumbs-down'></i></button></a>

                                      </tr>";
                                  }?>
                                  </tbody>
                                  <!-- FIN ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                        </table>


                                                        
                                        <!-- MODAL AGREGAR ´PROVEEDOR--> 
                                    <form action="nuevoproveedor.php" method="post">
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Agregar Proveedor</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>


                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                  
                                                            </div>

                                                                
                                                                <!-- /.col-lg-6 (nested) -->
                                                        
                                                                <!-- /.col-lg-6 (nested) -->
                                                        </div>
                                                                <!-- /.row (nested) -->
                                                                            </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                    <form role="form">
                                                                        <div  class="form-group">
                                                                            <label>Codigo Proveedor</label>
                                                                            <input name="id_proveedor" id="id_proveedor" class="form-control" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Nombre Tienda(*)</label>
                                                                            <input name="txtnombre" id="nombre_pr" class="form-control" placeholder="Nombre del proveedor"
                                                                            required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Direccion (*)</label>
                                                                            <input name="txtdireccion" id="direccion" class="form-control" placeholder="Direccion del proveedor"
                                                                            required>
                                                                        </div>
                                                              <div class="form-row">
                                                                        <div class="col" class="form-group">
                                                                            <label>Teléfono (*)</label>
                                                                            <input name="txttelefono" id="telefono" class="form-control" 
                                                                            onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                            maxlength="9"
                                                                            required
                                                                            placeholder="Teléfono del proveedor">
                                                                        </div>
                                                                        <div class="col" class="form-group">
                                                                            <label>Contacto</label>
                                                                            <input name="txtcontacto" id="txtcontacto" class="form-control" placeholder="Direccion del proveedor"
                                                                            required>
                                                                        </div>
                                                                        </div>
                                                                    </form>
                                                              </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                        <button type="reset" class="btn btn-info">Limpiar</button>
                                                        <button type="submit" class="btn btn-success">Registrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FIN MODAL AGREGAR -->

                                        <!-- INICIO MODAL EDITAR --> 
                                        <form action="editarproveedor.php" method="post">
                                                                              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                  <div class="modal-dialog">
                                                                                      <div class="modal-content">
                                                                                          <div class="modal-header">
                                                                                          <h4 class="modal-title">Editar Proveedor</h4>
                                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>


                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                  
                                                            </div>

                                                                
                                                                <!-- /.col-lg-6 (nested) -->
                                                        
                                                                <!-- /.col-lg-6 (nested) -->
                                                        </div>
                                                                <!-- /.row (nested) -->
                                                                            </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                    <form role="form">
                                                                        <div  class="form-group">
                                                                            <label>Codigo Proveedor</label>
                                                                            <input name="txtid" id="txtid" class="form-control" readonly 
                                                                            value="<?php echo $reg->id_proveedor?>"
                                                                            >
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Nombre (*)</label>
                                                                            <input name="nomb" id="nomb" class="form-control" readonly
                                                                            required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Direccion (*)</label>
                                                                            <input name="dir" id="dir" class="form-control" 
                                                                            required>
                                                                        </div>
                                                                  <div class="form-row">
                                                                        <div class="col" class="form-group">
                                                                            <label>Teléfono (*)</label>
                                                                            <input name="tel" id="tel" class="form-control" 
                                                                            onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                            maxlength="9"
                                                                            required
                                                                            placeholder="Teléfono del proveedor">
                                                                        </div>
                                                                        <div class="col" class="form-group">
                                                                            <label>Contacto</label>
                                                                            <input name="contac" id="contac" class="form-control" 
                                                                            required>
                                                                        </div>
                                                                        </div>
                                                                    </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FIN MODAL -->


                                        <!-- INICIO MODAL BAJA --> 
                                        <form action="darbajaproveedor.php" method="post">
                                              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                          <h4 class="modal-title">Motivo de Baja</h4>
                                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                                                              <div class="panel-body">
                                                                  <div class="row">
                                                                      <div class="col-lg-8">
                                                                      
                                                                  </div>
                                                              </div>
                                                            </div>
                                                                  </div>
                                                          <div class="modal-body">
                                                                  <form role="form">


                                                                 <div style="width: 120px"  class="form-group">
                                                                          <label></label>
                                                                              <input type= "text" name="id" id="id" class="form-control" readonly hidden
                                                                              value="<?php echo $reg->id_proveedor ?>">
                                                          </div>

                                                          <div class="form-group">
                                                          <label> <h5> </h5></label>
                                                          <input name="nompr"  id="nompr" style="width: 250px" class="form-control" 
                                                          required
                                                          readonly
                                                          >
                                                      </div>

                                                      <div class="form-group">
                                                          <label> <h5> Porqué motivo le va a dar de baja? </h5></label>
                                                          <input name="motiv"  id="motiv" class="form-control" 
                                                          required
                                                          >
                                                      </div>
                                                      <br/>


                                                  </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="submit" class="btn btn-warning">Dar de Baja!</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                          <!-- FIN MODAL BAJA -->
                                          <!-- FIN BOTONES -->


     

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
    <script src="proveedor.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>

 
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="proveedor.js" type="text/javascript"></script>
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

<script src="lista.js" type="text/javascript"></script>
  </body>
</html>