
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
    <title>KModa - Nuevo Pedido</title>
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
              <li><a class="treeview-item" href="ventas.php"><i class="icon fa fa-circle-o"></i> Ventas</a></li>
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
          <h3><i class="fa fa-edit"></i>Nuevo Pedido</h3>
          <h4><p>Todo pedido se reserva con el 50% del pago total</p></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="pedidos.php">Pedidos</a></li>
          <li class="breadcrumb-item">Nuevo Pedido</li>
          
        </ul>
      </div>
      <form action="agregarpedido.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-7">
              <form action="agregarped.php" method="POST">

                <!-- INICIO CLIENTE -->

                <font color="blue" face="Comic Sans MS,arial"> <h1 align=center><u>Información de Pedido</u></h1></font>  
                <br/>

                
                <div class="form-group">
                                                                <label>N° Pedido</label>
                                                                    <input style="width: 100px"  type= "text" name="id_pedido" id="id_pedido" class="form-control" readonly >
                                                            </div>

                                                            <div class="form-row">    
                                                              <div class='col' class="form-group">
                                                                  <label>Producto: </label>
                                                                        <select  style="width: 350px" name="producto" id="producto" class="form-control" onchange="mostrarInformacion()"
                                                                        >
                                                                            <?php 
                                                                                $sql="SELECT * FROM producto where stock <> 0 and estado=1";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                            ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['nombre_producto']?></option>
                                                                                                                          
                                                                            <?php endforeach ?>

                                                                        </select>
                                                            </div>

                                                            <div class='col' class="form-group">
                                                                  <label>Precio Unidad (S/.): </label>
                                                                        <SELECT name="precio" id="precio" class="form-control" disabled>
                                                                            <?php 
                                                                                $sql="SELECT * FROM producto where stock<>0 and estado=1";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                            ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['precio']?></option>
                                                                                                                          
                                                                            <?php endforeach ?>

                                                                        </select>
                                                            </div>
                                                            <div class= "col" class="form-group">
                                                                  <label for="exampleInputPassword1">Cantidad:</label>
                                                                  <input  name="cantidad" id="cantidad" class="form-control" id="exampleInputPassword1" type="number" min='1'
                                                                  value="1"
                                                                  required>
                                                            </div>

                                                            <div class= "col" class="form-group">
                                                            <label for="exampleInputPassword1">-</label>
                                                            <br/>
                                                            <button class='btn btn-success'><i class='fa fa-plus'></i></button>
                                                            </div>
                                                            </div>
                                                            <br/>

                                                            <div class="form-row">
                                      
                                                                <div class= "col" class="form-group">
                                                                    <label>Color</label>
                                                                    <SELECT name="color" id="color" class="form-control" disabled>
                                                                            <?php 
                                                                                 $sql="SELECT * FROM producto where stock<>0";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                            ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['color']?></option>
                                                                                                                          
                                                                            <?php endforeach ?>

                                                                        </select>
                                                                </div>
                                                
                                                                <div class= "col" class="form-group">
                                                                    <label>Talla</label>
                                                                    <SELECT name="talla" id="talla" class="form-control" disabled>
                                                                            <?php 
                                                                                  $sql="SELECT * FROM producto where stock<>0";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                            ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['talla']?></option>
                                                                                                                          
                                                                            <?php endforeach ?>

                                                                        </select>
                                                                </div>
                                                
                                                                <div class= "col" class="form-group">
                                                                <label>Stock Disponible</label>
                                                                <SELECT name="stock" id="stock" class="form-control" disabled>
                                                                            <?php 
                                                                                $sql="SELECT * FROM producto where stock<>0";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                            ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['stock']?></option>
                                                                                                                          
                                                                            <?php endforeach ?>

                                                                        </select>
                                                            </div>
                                                
                                                            </div>
                                                            <br/>


                                                                <div class="col-md-20">
                                                                      <div class="tile">
                                                                        <h3 class="tile-title">Mis Productos</h3>
                                                                        <table class="table">
                                                                          <thead>
                                                                          <tr>
                                                                              <th style="text-align: center; width:10px">Código</th>
                                                                              <th style="text-align: center">Nombre</th>
                                                                              <th style="text-align: center">Cantidad</th>
                                                                              <th style="text-align: center">Precio (S/.)</th>
                                                                              <th style="text-align: center">Subtotal (S/.)</th>
                                                                              <th style="text-align: center"></th>
                                                                        
                                                                                </tr>
                                                                          </thead>
                                                                          
                                                                          <tbody>
                                                                          <?php
                                                                $sql="SELECT p.id_producto , p.nombre_producto , pe.cantidad , p.precio, (pe.cantidad*p.precio) subtotal
                                                                      from producto p 
                                                                      inner join pedido pe on p.id_producto = pe.id_producto
                                                                      where p.id_producto=2";
                                                                $result = $cnx->query($sql) or die("error");
                                                                while($reg=$result->fetchObject()){
                                                                  echo "<tr>
                                                                
                                                                      <td align=center>$reg->id_producto</td>
                                                                      <td>$reg->nombre_producto</td>
                                                                      <td align=center>$reg->cantidad</td>
                                                                      <td align=center><h6> S/. $reg->precio</td></h6>
                                                                      <td align=center>$reg->subtotal</td>

                                                                      <td align=center >
                                                                    
                                                                      <button class='btn btn-danger'><i class='fa fa-close'></i></button>

                                                                      </td>
                                                                  
                                                                    </tr>";
                                                                }?>
                                                                          </tbody>
                                                                        </table>
                                                                      </div>
                                                                  </div>

                                                       <div class="form-row">    


                                                       

                                                      <div class="col" class="form-group">
                                                        <label>Atención</label>
                                                              <select style="width: 250px" name="use" id="use" class="form-control" >
                                                                  <?php
                                                                      $sql="SELECT * FROM usuario";
                                                                      $result = $cnx->query($sql) or die("error");
                                                                  ?>
                                                                  <?php foreach ($result as $opciones): ?>

                                                                      <option value="<?php echo $opciones['id_usuario']?>"> <?php echo $opciones['nombre_usuario']. ' ' . $opciones['apellidos'] ?></option>
                                                                                                                
                                                                  <?php endforeach ?>

                                                              </select>
                                                      </div>

                                                      <div class= "col" class="form-group">
                                                          <label>Cliente</label>
                                                          
                                                          <select name="cliente" id="cliente" style="width: 300px" class="form-control" >
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

                                                      <div  class="col" class="form-group">
                                                        <label for="exampleInputPassword1">Fecha de Reserva</label>
                                                        <input name="fecha" id="fecha" class="form-control" id="exampleInputPassword1" type="date" readonly
                                                        value="<?php echo date("Y-d-m");?>" >
                                                      </div>
                                                        
                                        </div>
                                        <br/>

                                        <div class="form-row">  

                                        <div class= "col" class="form-group">
                                                      <label for="exampleInputPassword1">Total a Pagar (S/.)</label>
                                                      <input name="totpaga" id="totpaga" class="form-control" id="exampleInputPassword1" type="number" 
                                                      step="0.5"
                                                      value="0.00" >
                                                  </div>
                                                                   
                                                  <div class= "col" class="form-group">
                                                      <label for="exampleInputPassword1">A cuenta (S/.)</label>
                                                      <input name="cuenta" id="cuenta" class="form-control" id="exampleInputPassword1" type="number" 
                                                      step="0.5"
                                                      value="0.00">
                                                  </div>

                                                  <div class='col' class="form-group">
                                                        <label>Modalidad de Pago</label>
                                                              <select select name="pago" id="pago" class="form-control";>
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
                                                              <select name="pedido" id="pedido" class="form-control" >
                                                                  <?php
                                                                      $sql="SELECT * FROM estado_pedido";
                                                                      $result = $cnx->query($sql) or die("error");
                                                                  ?>
                                                                  <?php foreach ($result as $opciones): ?>

                                                                      <option value="<?php echo $opciones['id_estado_pedido']?>"> <?php echo $opciones['nombre']?></option>
                                                                                                                
                                                                  <?php endforeach ?>

                                                              </select>
                                                  </div>

                                                  <div class="col" class="form-group">
                                                        <label>Estado de Venta</label>
                                                              <select name="venta" id="venta" class="form-control" disabled>
                                                                  <?php
                                                                      $sql="SELECT * FROM estado_venta";
                                                                      $result = $cnx->query($sql) or die("error");
                                                                  ?>
                                                                  <?php foreach ($result as $opciones): ?>

                                                                      <option value="<?php echo $opciones['id_estado_venta']?>"> <?php echo $opciones['nombre_venta']?></option>
                                                                                                                
                                                                  <?php endforeach ?>

                                                              </select>
                                                  </div>
                                                                 
                                                                   
                                        </div>
                                        <br/>   
               

                
<div>
                <img align="right" src="img/logo2.png">
</div>
                  

     
                  
                </form>

                
              </div>
            </div>
            
          </div>
          <button type="submit" hred="agregarped.php" class="btn btn-primary">Grabar</button>
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

    <script src="pedido.js"></script>

<script src="jqueryPedidos.js"></script>
<script src="pedido.js" type="text/javascript"></script>


    <script>
		function habilitar(value)
		{
			if(value=="2" || value==true)
			{
				// habilitamos
				document.getElementById("cuenta").disabled=false;
			}else if(value=="1" || value==false){
				// deshabilitamos
				document.getElementById("cuenta").disabled=true;
			}
		}
    </script>
    
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