
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
    <title>KModa - Categorías de Baja</title>
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
          <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Categorias</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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

      <main class="app-content">
      <div class="app-title">
        <div>
          <h3><i class="fa fa-th-list"></i> Categorias Dadas de Baja</h3>
          <p>Registro Actualizado</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Categorias</li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="panel-body">
              <div class="table-responsive">
              <?php
                      $sqlcount="SELECT count(*) cant FROM categoria WHERE estado = 0";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

                       <label>Cantidad de registros: <span><?php echo "$regc->cant"; ?></label>

                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <tr>
                                            <th style="text-align: center" >Codigo</th>
                                            <th style="text-align: center">Nombre</th>
                                            <th style="text-align: center">Motivo de Baja</th>
                                            <th style="text-align: center">Acciones</th>
                                            
                                        </tr>
                  </thead>
                   <tbody style="cursor:pointer">

                                     <!-- INICIO ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                                     <?php
                                  $sql="SELECT * FROM categoria WHERE estado = 0 ";
                                  $result = $cnx->query($sql) or die("error");
                                  while($reg=$result->fetchObject()){
                                    echo "<tr>
                                        <td align=center>$reg->id_categoria</td>
                                        <td>$reg->nombrecateg</td>
                                        <td>$reg->motivo</td>
                                        <td align=center >
                                        <a href='habilitarcategoria.php?id_categoria=$reg->id_categoria'><button type='button' class = 'btn btn-info'> <i class='fa fa-undo'></i>  </button></a></td>
                                     
                                        
                                      </tr>";
                                  }?>
                                  </tbody>
                                  <!-- FIN ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                        </table>


                         <!-- BOTONES -->
  

                                     
<!-- MODAL--> 
<form action="nuevoproducto.php" method="post">
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                 <h4 class="modal-title">Agregar Categorias</h4>
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
                             <div style="width: 120px"  class="form-group">
                                 <label>Codigo Producto</label>
                                     <input name="txtid" id="txtid" class="form-control"disabled >
                 </div>
                                     

         <!-- INICIO LLENO EL COMBO BOX DE PROVEEDOR -->

         <div  class="form-group">
                 <label>Proveedor</label>
                                 
                     <!-- Para cambiar tamañao de combo box se usa en el div: style="width: 120px" -->

                 <select style="width: 300px" name="proveedor" class="form-control" >
                         <?php
                                 $sql="SELECT * FROM proveedor where estado=1";
                                 $result = $cnx->query($sql) or die("error");
                         ?>
                             <?php foreach ($result as $opciones): ?>

                                         <option value="<?php echo $opciones['nombre_pr']?>"> <?php echo $opciones['nombre_pr']?></option>
                                     
                         <?php endforeach

                         ?>

                 </select>
         </div> 

         <!-- FIN LLENO EL COMBO BOX DE PROVEEDOR -->


         <!-- INICIO LLENO EL COMBO BOX DE CATEGORIA -->

         <div  class="form-group">
                         <label>Categoria</label>
                                 
                     <!-- Para cambiar tamañao de combo box se usa en el div: style="width: 120px" -->

                 <select style="width: 300px" name="categoria" class="form-control" >
                         <?php
                                 $sql="SELECT * FROM categoria where estado=1";
                                 $result = $cnx->query($sql) or die("error");
                         ?>
                             <?php foreach ($result as $opciones): ?>

                                         <option value="<?php echo $opciones['nombrecateg']?>"> <?php echo $opciones['nombrecateg']?></option>
                                     
                         <?php endforeach

                         ?>

                 </select>
         </div> 

         <!-- FIN LLENO EL COMBO BOX DE CATEGORIA -->

                     <div class="form-group">
                         <label>Nombre (*)</label>
                             <input name="txtnombre" id="txtnombre" class="form-control" placeholder="Nombre de Producto"
                             required>
                     </div>

         
         <!-- INICIO LLENO EL COMBO BOX DE TALLA -->

         <div  class="form-group">
                         <label>Talla</label>
                                 
                     <!-- Para cambiar tamañao de combo box se usa en el div: style="width: 120px" -->

                 <select style="width: 200px" name="talla" class="form-control" >
                         <?php
                                 $sql="SELECT * FROM talla";
                                 $result = $cnx->query($sql) or die("error");
                         ?>
                             <?php foreach ($result as $opciones): ?>

                                         <option value="<?php echo $opciones['nombre_talla']?>"> <?php echo $opciones['nombre_talla']?></option>
                                     
                         <?php endforeach

                         ?>

                 </select>
                         
         </div> 

         <!-- FIN LLENO EL COMBO BOX DE TALLA -->


         <!-- INICIO LLENO EL COMBO BOX DE COLOR -->

         <div  class="form-group">
                         <label>Color</label>
                                 
                     <!-- Para cambiar tamañao de combo box se usa en el div: style="width: 120px" -->

                 <select style="width: 200px" name="color" class="form-control" >

                         <?php
                                 $sql="SELECT * FROM color";
                                 $result = $cnx->query($sql) or die("error");
                         ?>
                             <?php foreach ($result as $opciones): ?>

                                         <option value="<?php echo $opciones['nombre_color']?>"> <?php echo $opciones['nombre_color']?></option>
                                     
                         <?php endforeach

                         ?>

                 </select>
         </div> 

         <!-- FIN LLENO EL COMBO BOX DE COLOR -->

                     

             <div style="width: 300px" class="form-group">
                 <label>Cantidad (*)</label>
                 <input name="txtstock" id="txtstock" class="form-control" 
                 onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false"
                 placeholder="Cantidad de Producto"
                 required>
             </div>

             <div style="width: 300px" class="form-group">
                 <label>Precio por Unidad en S/. (*)</label>
                 <input name="txtprecio" id="txtprecio" class="form-control" 
                 onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false"
                 placeholder="Precio de Producto"
                 required>
             </div>

             <div class="form-group">
                 <label>Descripcion</label>
                 <input name="txtdescripcion" id="txtdescripcion" class="form-control" 
                 placeholder="Descripcion de Producto"
                 >
             </div>
                                 </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                     <button type="submit" class="btn btn-primary">Grabar</button>
                 </div>
             </div>
         </div>
     </div>
 </form>
 <!-- FIN MODAL -->

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
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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