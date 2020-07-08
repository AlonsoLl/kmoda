
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
    <title>KModa - Compras</title>
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
          <h3><i class="fa fa-th-list"></i> Compras </h3>
          <h6>Compras realizadas hasta el momento a los proveedores con la cantidad especifica de productos</h6>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Compras</li>
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
                      $sqlcount="SELECT SUM(cuenta) cant FROM compras where estado=1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="row">
      <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4> Inversion </h4>
              <p><h3> S/. <?php echo $regc->cant ?></p> </h3>
            </div>
          </div>
        </div>


        <?php
                      $sqlcount="SELECT SUM(flete+pasajes) as cant 
                      from compras where estado=1 ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


        <div class="col-md-6 col-lg-3">
         <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>Pasajes y FLETE</h4>
              <p><h3> S/. <?php echo $regc->cant ?></p></H3>
            </div>
          </div>
        </div>


        <?php
                      $sqlcount="SELECT SUM(cantidad * precio_vender) as cant 
                      from compras where estado=1 ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


        <div class="col-md-6 col-lg-3">
         <div class="widget-small warning coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>Total en Ventas</h4>
              <p><h3> S/. <?php echo $regc->cant ?></p></H3>
            </div>
          </div>
        </div>


        <?php
                      $sqlcount="SELECT SUM((cantidad * precio_vender)-total) as cant 
                      from compras where estado=1 ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

        <div class="col-md-6 col-lg-3">
         <div class="widget-small primary coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>Ganancias</h4>
              <p><h3> S/. <?php echo $regc->cant ?></p></H3>
            </div>
          </div>
        </div>

        <?php
                      $sqlcount="SELECT count(*) cant from compras where estado=0";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

        <div class="col-md-6 col-lg-3">
        <a href="comprasporconfirmar.php" > <div class="widget-small danger coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i> </a>
            <div class="info">
              <h4>Por Confirmar</h4>
              <p><h3><?php echo $regc->cant ?></p></h3>
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
                      $sqlcount="SELECT count(*) cant FROM compras where estado=1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

                        <!-- INICIO BOTONES -->

                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-edit " ></i> Cotizar Compra </button>
                                                    <br/>
                                                    <br/>
                                                    
                            <!-- FIN BOTONES -->


                       <label>Cantidad de registros: <span><?php echo "$regc->cant"; ?></label>

                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    
                    <tr>
                                            <th style="text-align: center; width:50px">Id</th> 
                                            <th style="text-align: center; background-color:#D5DBDB">Fecha de Compra</th>
                                            <th style="text-align: center; width:120px">Proveedor</th>
                                            
                                            <th style="text-align: center">Producto</th>
                                            <th style="text-align: center">Cantidad</th>
                                            <th style="text-align: center; background-color:#F9E79F">Precio Compra</th>
                                            <th style="text-align: center; background-color:#82E0AA">Inversión</th>
                                            <th style="text-align: center; background-color:#85C1E9">Precio Ventas</th>
                                            <th style="text-align: center; background-color:#C39BD3">Total Venta</th>
                                            <th style="text-align: center; background-color:#5DE269">Ganancia</th>
                                            <th style="text-align: center; width:130px">Acciones</th>
                                        </tr>
                  </thead>


                   <tbody style="cursor:pointer">

                                     <!-- INICIO ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                                     <?php
                                  $sql="SELECT c.id_compra, pr.nombre_pr, c.fecha_compra, c.nombre_producto , c.precio_unidad, c.cantidad, c.total, c.precio_vender, 
                                  (c.cantidad * c.precio_vender) as venta ,
                                  ((c.cantidad * c.precio_vender)-c.total) as ganancia
                                   FROM compras c
                                   inner join proveedor pr on c.id_proveedor = pr.id_proveedor
                                   where c.estado=1";
                                  $result = $cnx->query($sql) or die("error");
                                  while($reg=$result->fetchObject()){
                                    echo "<tr>
                                        <td align=center>$reg->id_compra</td> 
                                        <td style=background-color:#D5DBDB; align=center><h6>$reg->fecha_compra</td></h6>
                                        <td>$reg->nombre_pr</td>
                                        
                                        <td>$reg->nombre_producto</td>
                                        <td align=center><h6> $reg->cantidad unidades </td> </h6>
                                        <td style=background-color:#F9E79F; align=center><h6> S/. $reg->precio_unidad</td></h6>
                                        <td style=background-color:#82E0AA; align=center><h6> S/. $reg->total</td></h6>
                                        <td style=background-color:#85C1E9; align=center><h6> S/. $reg->precio_vender</td></h6>
                                        <td style=background-color:#C39BD3; align=center><h6> S/. $reg->venta</td></h6>
                                        <td style=background-color:#5DE269; align=center><h6> S/. $reg->ganancia</h6>
                                        <td align=center >

                                        <a onclick='verCompra($reg->id_compra)' data-toggle='modal' data-target='#myModal2'><button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i>  </button></a>	
                                        <a onclick='eliminarCompra($reg->id_compra)' data-toggle='modal' data-target='#myModal3'> <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button></a>
                                        </tr>";
                                  }?>
                                  </tbody>
                                  <!-- FIN ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                        </table>


                                              <!-- MODAL AGREGAR--> 
                                                              <form action="nuevacompra.php" method="post">
                                                                                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                          <div class="modal-dialog">
                                                                                              <div class="modal-content">
                                                                                                  <div class="modal-header">
                                                                                                  <h4 class="modal-title">Nueva Compra</h4>
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
                                                                                                                          <label>Codigo Compra</label>
                                                                                                                          <input style="width: 120px" name="id_compra" id="id_compra" class="form-control"disabled placeholder="" >
                                                                                                                      </div>

                                                                                                                <!-- INICIO LLENO EL COMBO BOX DE PROVEEDOR -->
                                            
                                                                                                                    <div class="form-row">
                                                                                                                            <div class="col" class="form-group">
                                                                                                                                    <label>Proveedor</label>
                                                                                                                                    
                                                                                                                                    <select name="proveedor" id="proveedor" style="width: 220px" class="form-control" >
                                                                                                                                            <?php
                                                                                                                                                    $sql="SELECT * FROM proveedor where estado=1";
                                                                                                                                                    $result = $cnx->query($sql) or die("error");
                                                                                                                                            ?>
                                                                                                                                                <?php foreach ($result as $opciones): ?>

                                                                                                                                                            <option value="<?php echo $opciones['id_proveedor']?>"> <?php echo $opciones['nombre_pr']?></option>
                                                                                                                                                        
                                                                                                                                            <?php endforeach

                                                                                                                                            ?>

                                                                                                                                    </select>
                                                                                                                            </div> 

                                                                                                                            <!-- FIN LLENO EL COMBO BOX DE PROVEEDOR -->
                                                                                                              
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Fecha</label>
                                                                                                                          <input name="fecha" id="fecha" class="form-control" type="date"
                                                                                                                          readonly
                                                                                                                          value="<?php echo date("Y-m-d");?>" >
                                                                                                                      </div>

                                                                                                                                                </div>
                                                                                                                                                <br/>

                                                                                                                      <div class="form-group">
                                                                                                                          <label>Nombre del Producto (*)</label>
                                                                                                                          <input name="producto" id="producto" class="form-control" placeholder="Escriba el nombre del Producto"
                                                                                                                          required>
                                                                                                                      </div>

                                                                                                                <div class="form-row"> 

                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Precio Unidad (*)</label>
                                                                                                                          <input name="precio" id="precio" class="form-control" placeholder="Precio Compra" type="text"
                                                                                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                                                                          min=1.00
                                                                                                                          step="any"
                                                                                                                          value="0.00"
                                                                                                                          OnkeyUp="Multiplicar()"
                                                                                                                          required />
                                                                                                                      </div>

                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Cantidad (*)</label> 
                                                                                                                          <input name="cantidad" id="cantidad" class="form-control" type="number" 
                                                                                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                                                                          placeholder ="Cantidad a pedir"
                                                                                                                          min=1
                                                                                                                          value="1"
                                                                                                                          required
                                                                                                                          >
                                                                                                                      </div>

                                                                                                                        <div class="col" class="form-group">
                                                                                                                          <label>Total (*)</label>
                                                                                                                          <input name="total" id="total" class="form-control jem" type="number"  readonly
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                </div>
                                                                                                                <br/>

                                                                                                                <div class="form-row">
                                                                                                                <div class="col" class="form-group">
                                                                                                                          <label>A cuenta</label>
                                                                                                                          <input name="cuen" id="cuen" class="form-control jem" type="number" 
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Saldo </label>
                                                                                                                          <input name="saldos" id="saldos" class="form-control" type="number" readonly
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      </div>
                                                                                                                      <br/>

                                                                                                                <div class="form-group">
                                                                                                                          <label>Precio al que se va a vender (*)</label>
                                                                                                                          <input name="venta" id="venta" class="form-control" placeholder="Precio Venta" type="number"
                                                                                                                          value="0.00"
                                                                                                                          min=1
                                                                                                                          step="0.5"
                                                                                                                          required>
                                                                                                                      </div>

                                                                                                                      <fieldset>

                                                                                                                      <legend>Gastos Adicionales</legend>
                                                                                                                      <div class="form-row">
                                                                                                                <div class="col" class="form-group">
                                                                                                                          <label>Flete</label>
                                                                                                                          <input name="flete" id="flete" class="form-control" type="number" 
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Pasajes</label>
                                                                                                                          <input name="pasaje" id="pasaje" class="form-control" type="number"
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      </div>
                                                                                                                      <br/>
                                                                                                                      </fieldset>


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
                                                                                      <!-- FIN MODAL -->

                                              <!-- FIN BOTONES -->


                                              <!-- MODAL EDITAR--> 
                                              <form action="editarcompras.php" method="post">
                                                                                      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                          <div class="modal-dialog">
                                                                                              <div class="modal-content">
                                                                                                  <div class="modal-header">
                                                                                                  <h4 class="modal-title">Editar Compra</h4>
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
                                                                                                                          <label>Codigo Compra</label>
                                                                                                                          <input style="width: 120px" name="txtid" id="txtid" class="form-control" readonly>
                                                                                                                      </div>

                                                                                                                <!-- INICIO LLENO EL COMBO BOX DE PROVEEDOR -->
                                            
                                                                                                                    <div class="form-row">
                                                                                                                            <div class="col" class="form-group">
                                                                                                                                    <label>Proveedor</label>
                                                                                                                                    
                                                                                                                                    <select name="pro" id="pro" style="width: 220px" class="form-control" readonly >
                                                                                                                                            <?php
                                                                                                                                                    $sql="SELECT * FROM proveedor";
                                                                                                                                                    $result = $cnx->query($sql) or die("error");
                                                                                                                                            ?>
                                                                                                                                                <?php foreach ($result as $opciones): ?>

                                                                                                                                                            <option value="<?php echo $opciones['id_proveedor']?>"> <?php echo $opciones['nombre_pr']?></option>
                                                                                                                                                        
                                                                                                                                            <?php endforeach

                                                                                                                                            ?>

                                                                                                                                    </select>
                                                                                                                            </div> 

                                                                                                                            <!-- FIN LLENO EL COMBO BOX DE PROVEEDOR -->
                                                                                                              
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Fecha</label>
                                                                                                                          <input name="fech" id="fech" class="form-control" type="date"
                                                                                                                          readonly
                                                                                                                          value="<?php echo date("Y-m-d");?>" >
                                                                                                                      </div>

                                                                                                                                                </div>
                                                                                                                                                <br/>

                                                                                                                      <div class="form-group">
                                                                                                                          <label>Nombre del Producto (*)</label>
                                                                                                                          <input name="prod" id="prod" class="form-control"
                                                                                                                          required>
                                                                                                                      </div>

                                                                                                                      


                                                                                                                <div class="form-row">
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Precio Unidad (*)</label>
                                                                                                                          <input name="pre" id="pre" class="form-control" placeholder="Precio Compra" type="number"
                                                                                                                          step="any"
                                                                                                                          required>
                                                                                                                      </div>

                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Cantidad (*)</label>
                                                                                                                          <input name="can" id="can" class="form-control" type="number" 
                                                                                                                          placeholder ="Cantidad a pedir"
                                                                                                                          required
                                                                                                                          >
                                                                                                                      </div>

                                                                                                                        <div class="col" class="form-group">
                                                                                                                          <label>Total (*)</label>
                                                                                                                          <input name="tot" id="tot" class="form-control jer" type="number" readonly
                                                                                                                          step="0.01"
                                                                                                                         >
                                                                                                                      </div>
                                                                                                                </div>
                                                                                                                <br/>

                                                                                                                <div class="form-row">
                                                                                                                <div class="col" class="form-group">
                                                                                                                          <label>A cuenta</label>
                                                                                                                          <input name="cuent" id="cuent" class="form-control jer" type="number" 
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Saldo </label>
                                                                                                                          <input name="saldito" id="saldito" class="form-control" type="number" readonly
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      </div>
                                                                                                                      <br/>
                                                                                                                      

                                                                                                                <div class="form-group">
                                                                                                                          <label>Precio al que se va a vender (*)</label>
                                                                                                                          <input name="ven" id="ven" class="form-control" placeholder="Precio Venta"
                                                                                                                          required>
                                                                                                                      </div>

                                                                                                                      <fieldset>

                                                                                                                      <legend>Gastos Adicionales</legend>
                                                                                                                      <div class="form-row">
                                                                                                                <div class="col" class="form-group">
                                                                                                                          <label>Flete</label>
                                                                                                                          <input name="flet" id="flet" class="form-control" type="number" 
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Pasajes</label>
                                                                                                                          <input name="pasa" id="pasa" class="form-control" type="number"
                                                                                                                          step="0.5"
                                                                                                                          value="0.00"
                                                                                                                         />
                                                                                                                      </div>
                                                                                                                      </div>
                                                                                                                      <br/>
                                                                                                                      </fieldset>

                                                                                                                  </form>
                                                                                                  </div>
                                                                                                  <div class="modal-footer">
                                                                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                                                                      <button type="reset" class="btn btn-info">Limpiar</button>
                                                                                                      <button type="submit" class="btn btn-success">Actualizar</button>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <!-- FIN MODAL -->

                                              <!-- FIN BOTONES -->



                                                <!-- MODAL ELIMINAR--> 
                                                <form action="eliminarcompra.php" method="post">
                                                                                      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                          <div class="modal-dialog modal-dialog-centered">
                                                                                              <div class="modal-content">
                                                                                                  <div class="modal-header">
                                                                                                  <h4 class="modal-title">Eliminar Cotización</h4>
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
                                                                                                                          <label></label>
                                                                                                                          <input style="width: 120px" name="cod" id="cod" class="form-control" hidden readonly >
                                                                                                                      </div>
                                                                                                                    
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label><h5>     Esta seguro que desea eliminar la cotizacion de: </h5> </label>
                                                                                                                          <input name="produ" id="produ" class="form-control"
                                                                                                                          readonly>
                                                                                                                      </div>
                                                                                                                      <br/>
                                                                                                                      
                                                                                                                      <br/>

                                                                                                                      


                                                                                                                  </form>
                                                                                                  </div>
                                                                                                  <div class="modal-footer">
                                                                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">No, Cancelar</button>
                                                                                                      <button type="submit" class="btn btn-success">Si, eliminar</button>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
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
    <script src="compra.js"></script>   

    <script src="jqueryCompras.js"></script>
    
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
     <script src="compra.js" type="text/javascript"></script>
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