
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
    <title>KModa - Pedidos Entregados</title>
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
          <h3><i class="fa fa-th-list"></i> Lista de Pedidos Entregados</h3>
          <p>Registro Actualizado</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pedidos Entregados</li>
          <li class="breadcrumb-item"><a href="nuevopedido.php">Nuevo Pedido</a></li>
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

      <?php
                      $sqlcount="SELECT count(*) cant FROM pedido where id_estado_pedido=1 and id_estado_pago<>2 and id_estado_venta=1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="row">
      <div class="col-md-6 col-lg-3">
      <a href="pedidos.php" > <div class="widget-small danger coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i></a>
            <div class="info">
              <h4>Pendientes de Pago</h4>
              <p><?php echo $regc->cant ?></p>
            </div>
          </div>
        </div>

        <?php
                      $sqlcount="SELECT SUM(pe.cantidad_pago) cant
                      from pedido pe
                      inner join producto p on pe.id_producto = p.id_producto 
                       WHERE pe.id_estado_pedido =2
                     ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

        <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>GANANCIAS</h4>
              <p><h4> S/. </a><?php echo $regc->cant ?></p>
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
                      $sqlcount="SELECT count(*) cant FROM pedido WHERE id_estado_pedido = '2' ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>
                         
                            <!-- INICIO BOTONES 
                             <button class="btn btn-success"><a href="nuevopedido.php"><i class=" fa fa-edit"></i>Nuevo Pedido</a></button>
                                                    <br/>
                                                    <br/>
                                                    
                            FIN BOTONES -->

                       <label>Cantidad de registros: <span><?php echo "$regc->cant"; ?></label>

                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th style="text-align: center">N° Pedido</th>
                    <th style="text-align: center">Fecha de Reser</th>
                                            <th style="text-align: center">Cliente</th>
                                            
                                            <th style="text-align: center">Costo total</th>
                                            <th style="text-align: center">Estado de Pago</th>
                                            <th style="text-align: center">Estado de Pedido</th>
                                            <th style="text-align: center">Comprobante de Pago</th>
                    </tr>
                  </thead>
                   <tbody style="cursor:pointer">

                                     <!-- INICIO ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                                     <?php
                                  $sql="SELECT pe.id_pedido , p.nombre_producto , c.nombres, pe.fecha, pe.total, pe.cantidad_pago, (p.precio - pe.cantidad_pago) as saldo, 
                                  pa.nombre_pago, e.nombre 
                                  from pedido pe 
                                  inner join producto p on pe.id_producto = p.id_producto 
                                  inner join cliente c on pe.id_cliente = c.id_cliente 
                                  inner join estado_pedido e on pe.id_estado_pedido = e.id_estado_pedido 
                                  inner join estado_pago pa on pe.id_estado_pago = pa.id_estado_pago 
                                  inner join estado_venta ven on pe.id_estado_venta = ven.id_estado_venta
                                  WHERE pe.id_estado_pedido = '2' and pa.id_estado_pago = 2 and ven.id_estado_venta=1
                                  order by pe.fecha asc";
                                  $result = $cnx->query($sql) or die("error");
                                  while($reg=$result->fetchObject()){
                                    echo "<tr>
                                   
                                        <td align=center>$reg->id_pedido</td>
                                        <td align=center >$reg->fecha</td>
                                        <td>$reg->nombres</td>
                                        
                                        <td align=center ><h6> S/. $reg->total</td></h6>
                                        <td align=center >$reg->nombre_pago</td>
                                        <td align=center>$reg->nombre</td>
                                        <td align=center>
                                        <a onclick='verDetalle($reg->id_pedido)' data-toggle='modal' data-target='#myModal2'><button type='button' class = 'btn btn-info'><i class='fa fa-search'></i>Ver</button></a>                                        

                                        <a href='boleta.php'><button type='button' class = 'btn btn-success'><i class='fa fa-print'></i>Comprobante</button></a></td>
                                     </td>


                                         </tr>";
                                  }?>
                                  </tbody>
                                  <!-- FIN ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                        </table>

                            <!-- INICIO MODAL DETALLE PEDIDO--> 
                            <form action="pago.php" method="post">
                                              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered"> <!-- para modal mas ancho es modal-lg y para modal mas estrecho es modal-sm, dentro del class modal dialog-->
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                          <p><h3 class="modal-title"> Detalle de Pedido Entregado</h3></p>
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

                                                                  <div class="form-row">    
                                                                      <div class="col" class="form-group">
                                                                          <label>N° Pedido</label>
                                                                              <input style="width: 150px"  type= "text" name="idped" id="idped" class="form-control" readonly >
                                                                      </div>

                                                        
                                                                      <div class="col" class="form-group">
                                                                        <label for="exampleInputPassword1">Con fecha del:</label>
                                                                        <input  name="dateped" id="dateped" class="form-control" id="exampleInputPassword1"  disabled
                                                                        value="<?php echo $reg->fecha?>" >
                                                                      </div>   
                                                          </div>
                                                          <br/>

                                                         

                                                                    <div class="form-group">
                                                                          <label>Producto: </label>
                                                                                <select name="nomproduct" id="nomproduct" class="form-control" disabled>
                                                                                    <?php
                                                                                        $sql="SELECT * FROM producto";
                                                                                        $result = $cnx->query($sql) or die("error");
                                                                                    ?>
                                                                                    <?php foreach ($result as $opciones): ?>

                                                                                        <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['nombre_producto']?></option>
                                                                                                                                  
                                                                                    <?php endforeach ?>

                                                                                </select>
                                                                    </div>

                                                                    <div class="form-row">

                                                                    <div class= "col" class="form-group">
                                                                    <label>Color</label>
                                                                    <SELECT name="colores" id="colores" class="form-control" disabled>
                                                                            <?php 
                                                                                 $sql="SELECT * FROM producto";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                            ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['color']?></option>
                                                                                                                          
                                                                            <?php endforeach ?>

                                                                        </select>
                                                                </div>
                                                
                                                                <div class= "col" class="form-group">
                                                                    <label>Talla</label>
                                                                    <SELECT name="tallas" id="tallas" class="form-control" disabled>
                                                                            <?php 
                                                                                  $sql="SELECT * FROM producto";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                            ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['talla']?></option>
                                                                                                                          
                                                                            <?php endforeach ?>

                                                                        </select>
                                                                </div>
                                                                            </div>
                                                                            <br/>


                                                          <div class="form-row">  
                                                          
                                                          <div class= "col" class="form-group">
                                                                          <label for="exampleInputPassword1">Precio Unidad (S/.):</label>
                                                                          <select name="pagpro" id="pagpro" class="form-control" disabled >
                                                                                    <?php
                                                                                        $sql="SELECT * FROM producto";
                                                                                        $result = $cnx->query($sql) or die("error");
                                                                                    ?>
                                                                                    <?php foreach ($result as $opciones): ?>

                                                                                        <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['precio']?></option>
                                                                                                                                  
                                                                                    <?php endforeach ?>

                                                                                </select>
                                                                    </div>

                                                                   <div class= "col" class="form-group">
                                                                          <label for="exampleInputPassword1">Cantidad:</label>
                                                                          <input  name="numpr" id="numpr" class="form-control" id="exampleInputPassword1" type="number" min='1'disabled
                                                                          required>
                                                                    </div>
                                                                    
                                                                    <div class= "col" class="form-group">
                                                                          <label for="exampleInputPassword1">Total a Pagar (S/.):</label>
                                                                          <input  name="totpag" id="totpag" class="form-control" id="exampleInputPassword1" type="number" min='1'disabled
                                                                          value="0.00"
                                                                          required>
                                                                    </div>
                                                                  


                                                          </div>
                                                          <br/>   


                                                                <div class="form-row">
                                                                    <div class="col" class="form-group">
                                                                          <label>Modalidad de Pago</label>
                                                                                <select name="modpag" id="modpag" class="form-control" disabled >
                                                                                    <?php
                                                                                        $sql="SELECT * FROM estado_pago";
                                                                                        $result = $cnx->query($sql) or die("error");
                                                                                    ?>
                                                                                    <?php foreach ($result as $opciones): ?>

                                                                                        <option value="<?php echo $opciones['id_estado_pago']?>"> <?php echo $opciones['nombre_pago']?></option>
                                                                                                                                  
                                                                                    <?php endforeach ?>

                                                                                </select>
                                                                    </div>

                                                                    <div class="col" class="form-group">
                                                                          <label>Estado de Pedido</label>
                                                                                <select name="estped" id="estped" class="form-control"  disabled>
                                                                                    <?php
                                                                                        $sql="SELECT * FROM estado_pedido";
                                                                                        $result = $cnx->query($sql) or die("error");
                                                                                    ?>
                                                                                    <?php foreach ($result as $opciones): ?>

                                                                                        <option value="<?php echo $opciones['id_estado_pedido']?>"> <?php echo $opciones['nombre']?></option>
                                                                                                                                  
                                                                                    <?php endforeach ?>

                                                                                </select>
                                                                    </div>
                                                                </div>
                                                                <br/>

                                             <div class="form-row">
                                                  
                                                  <div class="col" class="form-group">
                                                        <label>Le Atendió</label>
                                                              <select style="width: 185px" name="datusu" id="datusu" class="form-control" disabled>
                                                                  <?php
                                                                      $sql="SELECT * FROM usuario";
                                                                      $result = $cnx->query($sql) or die("error");
                                                                  ?>
                                                                  <?php foreach ($result as $opciones): ?>

                                                                      <option value="<?php echo $opciones['id_usuario']?>"> <?php echo $opciones['nombre_usuario']. ' ' . $opciones['apellidos'] ?></option>
                                                                                                                
                                                                  <?php endforeach ?>

                                                              </select>
                                                  </div>

                                                  <div class= "col" class="form-row">
                                                                    <div class="col" class="form-group">
                                                                            <label>Cliente</label>
                                                                            
                                                                            <select name="datcli" id="datcli" style="width: 240px" disabled class="form-control" disabled>
                                                                                    <?php
                                                                                            $sql="SELECT * FROM cliente";
                                                                                            $result = $cnx->query($sql) or die("error");
                                                                                    ?>
                                                                                        <?php foreach ($result as $opciones): ?>

                                                                                                    <option value="<?php echo $opciones['id_cliente']?>"> <?php echo $opciones['nombres']?></option>
                                                                                                
                                                                                    <?php endforeach

                                                                                    ?>

                                                                            </select>
                                                                    </div> 
                                                        
                                                          </div>
                                                          </div>
                                                          <br/>


                                                                                                              <div class="modal-footer">
                                                                                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                                                                              </div>
                                                                                                              
                                          </form>
                                         <!-- FIN MODAL DETALLE PEDIDO -->
                                    </div>



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
    <script src="pedidoentregado.js"></script>

    <script src="lista.js" type="text/javascript"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
    <script src="pedidoentregado.js" type="text/javascript"></script>

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