
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
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
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
          <li><a class="app-menu__item" href="inicio.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
  
           <!-- Productos -->
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="productos.php"><i class="icon fa fa-circle-o"></i> Listar Productos</a></li>
              <li><a class="treeview-item" href="productosbaja.php"  rel="noopener"><i class="icon fa fa-circle-o"></i> Dados de Baja</a></li>
            </ul>
          </li>

          <!-- Compras -->
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Compras</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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
          <li class="treeview"><a class="app-menu__item " href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book-o"></i><span class="app-menu__label">Proveedores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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
          <h3><i class="fa fa-edit"></i>Nuevo Pedido</h3>
          <h4><p>Todo pedido se reserva con el 50% del pago total</p></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="pedidos.php">Pedidos</a></li>
          <li class="breadcrumb-item">Nuevo Pedido</li>
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
      
        <div class="container" >
        <div class="col-md-12" >
          <div  class="tile">
            <font color="blue" face="Comic Sans MS,arial"> <h1 align=center><u> Reservar Pedido</u></h1></font>  
                <br/>
                <br/>

    <form action="agregarpedido.php" method="post">

            <div class="form-row">

                <div  class="col" class="form-group">
                    <label for="exampleInputPassword1"><h4>N° Pedido</h4></label>
                    <input name="numero_pedido" id="numero_pedido" class="form-control" id="exampleInputPassword1" type="text" readonly
                   >
                  </div>

                <div  class="col" class="form-group">
                    <label for="exampleInputPassword1"><h4>Fecha de Reserva</h4></label>
                    <input name="fecha" id="fecha" class="form-control" id="exampleInputPassword1" type="date" readonly
                    value="<?php echo date("Y-m-d");?>" >
                  </div>

                  

                <div class="col" class="form-group">
                       <label><h4>Cliente</h4></label>
                            <select  name="cliente" id="cliente" class="form-control" >
                                <?php
                                    $sql="SELECT * FROM cliente ORDER BY nombres asc";
                                    $result = $cnx->query($sql) or die("error");
                                ?>
                                <?php foreach ($result as $opciones): ?>

                                    <option value="<?php echo $opciones['id_cliente']?>"> <?php echo $opciones['nombres']?></option>
                                                                              
                                <?php endforeach ?>

                            </select>

                            
                </div> 

                <!--
                <div>
                <img align="right" src="img/logo2.png">
                </div>
                                -->
            </div>
            <br/>

            <label> Informacion de Producto </label>


            <div class="form-row">
                  <div class="col" class="form-group" >
                      
                       <label><h4>Producto</h4></label>
                            <select style="width: 450px" name="producto" id="producto" class="form-control" >
                                <?php
                                    $sql="SELECT p.nombre_producto, t.nombre_talla, c.nombre_color, p.stock
                                    from producto p 
                                    inner join talla t on p.id_talla = t.id_talla
                                    inner join color c on p.id_color = c.id_color
                                    WHERE stock <> 0
                                    ORDER BY nombre_producto asc  ";
                                    $result = $cnx->query($sql) or die("error");
                                ?>
                                <?php foreach ($result as $opciones): ?>

                                    <option value="<?php echo $opciones['id_producto']?>"> <?php echo $opciones['nombre_producto']. ' - ' . $opciones['nombre_color']. ' - ' .$opciones['nombre_talla']. ' - ' .$opciones['stock'] ?></option>
                                                                              
                                <?php endforeach ?>

                            </select>
                  </div>


                  <div class= "col" class="form-group">
                      <label for="exampleInputPassword1"><h4>Color</h4></label>
                      <input style="width: 150px" class="form-control" id="exampleInputPassword1" type="text" disabled>
                  </div>
  
                  <div class= "col" class="form-group">
                      <label for="exampleInputPassword1"><h4>Talla</h4></label>
                      <input style="width: 150px" class="form-control" id="exampleInputPassword1" type="text" disabled>
                  </div>
  
                  <div class= "col" class="form-group">
                      <label for="exampleInputPassword1"><h4>Precio</h4></label>
                      <input style="width: 150px" class="form-control" id="exampleInputPassword1" type="number" min="1" disabled>
                  </div>
  
                  <div class= "col" class="form-group">
                      <label for="exampleInputPassword1"><h4>Stock</h4></label>
                      <input style="width: 150px" class="form-control" id="exampleInputPassword1" type="text" disabled>
                  </div>

                  <div class="col" class="form-group">
                    <label for="exampleInputPassword1"><h4>Cantidad</h4></label>
                    <input style="width: 150px" name= "cantidad" id="cantidad" style="width: 170px" class="form-control" id="exampleInputPassword1" type="number" min="1" required>
                  </div>


            </div>
                                
            <br/>      
            <div class="form-row">
            <div class="col" class="form-group">
                       <label><h4>Modalidad de Pago</h4></label>
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


                
            
            <div class= "col" class="form-group">
                    <label for="exampleInputPassword1"><h4>A cuenta (S/.)</h4></label>
                    <input name="cuenta" id="cuenta" class="form-control" id="exampleInputPassword1" type="number" min='5' >
                </div>

                <div class="col" class="form-group">
                       <label><h4>Estado de Pedido</h4></label>
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

                <div class ="col" class="form-group">
                       <label><h4>Le Atendió</h4></label>
                            <select name="usuario" id="usuario" class="form-control" readonly>
                                <?php
                                    $sql="SELECT * FROM usuario";
                                    $result = $cnx->query($sql) or die("error");
                                ?>
                                <?php foreach ($result as $opciones): ?>

                                    <option value="<?php echo $opciones['id_usuario']?>"> <?php echo $opciones['nombre_usuario']. ' ' . $opciones['apellidos'] ?></option>
                                                                              
                                <?php endforeach ?>

                            </select>
                </div>


            </div>
            <br/>

              

         
            

            
          </div>

          
        </div>

        </form>
      <div class="form-group col-md-4 align-self-end">
                 <button class="btn btn-outline-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Reservar</button>
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