<?php
session_start();
require_once("conexion.php");

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
    <title>KModa - Productos</title>
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
          <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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
          <h3><i class="fa fa-th-list"></i> Productos </h3>
          <h><p>La cantidad de productos que ingresan dependerá de la cantidad de pedidos que se reservan</p></h>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Productos</li>
          <li class="breadcrumb-item"><a href="productosbaja.php">Productos de Baja</a></li>
        </ul>  
      </div>

        <div class="row">
     
        <?php
                      $sqlcount="SELECT SUM(p.stock) cant 
                      from producto p
                      inner join proveedor pr on p.id_proveedor = pr.id_proveedor
                      where p.id_proveedor <> 6 and p.estado=1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="col-md-6 col-lg-3">
       <div class="widget-small info coloured-icon"><i class="icon fa fa-list fa-3x"></i>
            <div class="info">
              <h4> Stock KModa </h4>
              <p><h5><?php echo $regc->cant ?></h5></p>
            </div>
          </div>
        </div>

        <?php
                      $sqlcount="SELECT SUM(cantidad) cant from pedido 
                      where id_estado_venta=1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="col-md-6 col-lg-3">
       <div class="widget-small primary coloured-icon"><i class="icon fa fa-check fa-3x"></i>
            <div class="info">
              <h4> Unidades Vendidas </h4>
              <p><h5><?php echo $regc->cant ?></h5></p>
            </div>
          </div>
        </div>

        <?php
                      $sqlcount="SELECT SUM(p.stock) cant 
                      from producto p
                      inner join proveedor pr on p.id_proveedor = pr.id_proveedor
                      where p.id_proveedor = 6 and p.stock<>0 ";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>


      <div class="col-md-6 col-lg-3">
       <div class="widget-small warning coloured-icon"><i class="icon fa fa-list fa-3x"></i>
            <div class="info">
              <h4> Stock Gladys </h4>
              <p><h5><?php echo $regc->cant ?></h5></p>
            </div>
          </div>
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
                      $sqlcount="SELECT count(*) cant FROM producto WHERE estado = 1";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>

                              <!-- INICIO BOTONES -->

                              <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-cart-plus " ></i> Nuevo Producto </button>
                                                    <br/>
                                                    <br/>
                                                    
                            <!-- FIN BOTONES -->


                       <label>Cantidad de registros: <span><?php echo "$regc->cant"; ?></label>

                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th style="text-align: center">Codigo</th>
                                            <th style="text-align: center">Proveedor</th>
                                            <th style="text-align: center">Categoria</th>
                                            <th style="text-align: center">Nombre</th>
                                            <th style="text-align: center">Talla</th>
                                            <th style="text-align: center">Color</th>
                                            <th style="text-align: center; background-color:#F9E79F">Stock</th>
                                            <th style="text-align: center ; background-color:#82E0AA">Precio Unidad</th>
                                            <th style="text-align: center; width:180px">Acciones</th>

                    </tr>
                  </thead>
                   <tbody style="cursor:pointer">

                                     <!-- INICIO ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                                     <?php
                                  $sql="SELECT p.id_producto , pr.nombre_pr , cat.nombrecateg , p.nombre_producto, p.talla , p.color , p.stock , p.precio
                                        from producto p 
                                        inner join categoria cat on p.id_categoria = cat.id_categoria
                                        inner join proveedor pr on p.id_proveedor = pr.id_proveedor
                                        WHERE p.estado = 1
                                        ORDER BY p.stock DESC";
                                  $result = $cnx->query($sql) or die("error");
                                  while($reg=$result->fetchObject()){
                                    echo "<tr>
                                   
                                        <td align=center>$reg->id_producto</td>
                                        <td>$reg->nombre_pr</td>
                                        <td>$reg->nombrecateg</td>
                                        <td>$reg->nombre_producto</td>
                                        <td align=center>$reg->talla</td>
                                        <td align=center>$reg->color</td>
                                        <td style=background-color:#F9E79F; align=center>$reg->stock</td>
                                        <td style=background-color:#82E0AA; align=center><h6> S/. $reg->precio</td></h6>
                                        <td align=center >
                                        
                                        <a onclick='detalle($reg->id_producto)' data-toggle='modal' data-target='#myModal1'><button type='button' class = 'btn btn-info'><i class='fa fa-eye'></i></button></a>

                                        <a onclick='verProducto($reg->id_producto)' data-toggle='modal' data-target='#myModal2'><button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i>  </button></a>	
                                      
                                      <a onclick='stock($reg->id_producto)' data-toggle='modal' data-target='#myModal4'><button class=' btn btn-success'><i class='fa fa-cart-plus'></i></button></a>	
                                     
                                       <a onclick='baja($reg->id_producto)' data-toggle='modal' data-target='#myModal3'><button class=' btn btn-warning'><i class='fa fa-thumbs-down'></i></button></a>	

                                        </td>
                                     
                                      </tr>";
                                  }?>
                                  </tbody>
                                  <!-- FIN ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                        </table>



<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
                                     
                                            <!-- INICIO MODAL AGREGAR--> 
                                            <form action="nuevoproducto.php" method="post">
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog"> <!-- para modal mas ancho es modal-lg y para modal mas estrecho es modal-sm, dentro del class modal dialog-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Agregar Nuevo Producto</h4>
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
                                                                                <input type= "text" name="id_producto" id="id_producto" class="form-control" readonly >
                                                                        </div>
                                                                                

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

                                                        <div class="col"  class="form-group">
                                                                        <label>Categoria</label>
                                                                                
                                                                    <!-- Para cambiar tamañao de combo box se usa en el div: style="width: 120px" -->
                                                                    
                                                                <select name="categoria" id="categoria" style="width: 220px" class="form-control" >

                                                                        <?php
                                                                                $sql="SELECT * FROM categoria where estado=1";
                                                                                $result = $cnx->query($sql) or die("error");
                                                                        ?>
                                                                            <?php foreach ($result as $opciones): ?>

                                                                                        <option  value="<?php echo $opciones['id_categoria']?>"> <?php echo $opciones['nombrecateg']?></option>
                                                                                    
                                                                        <?php endforeach

                                                                        ?>

                                                                </select>
                                                        </div> 
                                                        
                                              </div>
                                              <br/>

                                              <div class="form-group">
                                                  <label>Nombre (*)</label>
                                                      <input id="txtnombre" name="txtnombre" class="form-control" placeholder="Nombre de Producto"
                                                      required>
                                              </div>

                                                    

                                              <div class="form-row">
                            
                                                   <div class="col" class="form-group">
                                                       <label>Talla (*)</label>
                                                           <input id="talla" name="talla" class="form-control" placeholder="Talla de Producto"
                                                           required>
                                                   </div>
                                                   <div class="col" class="form-group">
                                                       <label>Color (*)</label>
                                                           <input id="color" name="color" class="form-control" placeholder="Color de Producto"
                                                           required>
                                                   </div>
                                              </div> 
                                              <br/>


                                                <div class="form-row">                
                                                    <div class="col" class="form-group">
                                                        <label>Cantidad (*)</label>
                                                        <input  type= "number"  id="txtstock" name="txtstock"  class="form-control" 
                                                        onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false"
                                                        min="1"
                                                        value="1"
                                                        placeholder="Cantidad de Productos"
                                                        > 
                                                    </div>
                                                    <div class="col" class="form-group">
                                                        <label>Precio por Unidad en S/. (*)</label>
                                                        <input  type="text" id="txtprecio" name="txtprecio"  class="form-control" 
                                                        onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false"
                                                        placeholder="Precio de Producto"
                                                        value="0.00"
                                                        min="1.00"
                                                         step="any"
                                                        >
                                                    </div>
                                                </div>
                                                <br/>

                                                <div class="form-group">
                                                    <label>Descripcion</label>
                                                    <textarea type= "text" id="txtdescripcion" name="txtdescripcion"  class="form-control" 
                                                    placeholder="Descripcion de Producto"
                                                 
                                                    ></textarea>
                                                </div>
                                                      
                                                <div class="form-group">
                                                  <label>Imagen (Opcional)</label>
                                                  <input type="file" class="form-control" id="image" name="image"> 
                                                </div> 
                                                                 

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                    <button type="reset" class="btn btn-info">Limpiar</button>
                                                    <button type="submit" class="btn btn-success">Registrar</button>
                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                </div>
                                            </form>
                                            <!-- FIN MODAL AGREGAR -->

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

                                          <!-- INICIO MODAL EDITAR--> 
                                           <form action="editarproducto.php" method="post">
                                              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                          <h4 class="modal-title">Editar Producto</h4>
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
                                                                              <input name="txtid" id="txtid" class="form-control" 
                                                                             
                                                                              readonly >
                                                          </div>

                                                                              

                                                  <!-- INICIO LLENO EL COMBO BOX DE PROVEEDOR -->
                                                  <div class="form-row">
                                                  <div class="col" class="form-group">
                                                          <label>Proveedor</label>
                                                                          
                                                              <!-- Para cambiar tamañao de combo box se usa en el div: style="width: 120px" -->

                                                          <select style="width: 220px" name="prov" id="prov" class="form-control"  >
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


                                                  <!-- INICIO LLENO EL COMBO BOX DE CATEGORIA -->
                                                
                                                  <div class="col" class="form-group">
                                                                  <label>Categoria</label>
                                                                          
                                                              <!-- Para cambiar tamañao de combo box se usa en el div: style="width: 120px" -->

                                                          <select style="width: 220px" name="cate" id="cate" class="form-control"   >
                                                                  <?php
                                                                          $sql="SELECT * FROM categoria where estado=1";
                                                                          $result = $cnx->query($sql) or die("error");
                                                                  ?>
                                                                      <?php foreach ($result as $opciones): ?>

                                                                        <option value="<?php echo $opciones['id_categoria']?>"> <?php echo $opciones['nombrecateg']?></option>

                                                                  <?php endforeach

                                                                  ?>

                                                          </select>
                                                  </div> 

                                              </div>

                                              <br/>

                                                  <!-- FIN LLENO EL COMBO BOX DE CATEGORIA -->

                                                              <div class="form-group">
                                                                  <label>Nombre (*)</label>
                                                                      <input name="nomb" id="nomb" class="form-control" placeholder="Nombre de Producto"
                                                                      required>
                                                              </div>

                                                  
                                                  <div class="form-row"> 
                                                    <div class="col" class="form-group">
                                                        <label>Talla (*)</label>
                                                          <input name="tall" id="tall" class="form-control" required>
                                                    </div>


                                                    <div clas="col" class="form-group">
                                                        <label>Color (*)</label>
                                                          <input name="colo" id="colo" class="form-control" required>
                                                    </div>
                                                  </div>
                                                              
                                                  <div class="form-row">
                                                      <div class="col"style="width: 210px" class="form-group">
                                                          <label>Cantidad (*)</label>
                                                          <input  type= "number" name="can" id="can" class="form-control" 
                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false"
                                                          placeholder="Cantidad de Productos"
                                                          min="1"
                                                          
                                                          required> 
                                                      </div>

                                                      <div class="col" style="width: 210px" class="form-group">
                                                          <label>Precio por Unidad en S/. (*)</label>
                                                          <input name="pre" id="pre" class="form-control" 
                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false"
                                                         min="1.00"
                                                         step="0.5"
                                                          required>
                                                      </div>
                                                  </div>
                                                  <br/>

                                                      <div class="form-group">
                                                          <label>Descripcion</label>
                                                          <textarea name="des" id="des" class="form-control" 
                                                          placeholder="Descripcion de Producto"
                                                          ></textarea>

                                                      </div>

                                                      <!--
                                                      <div class="form-group">
                                                                                                                    <label>Imagen (Opcional)</label>
                                                                                                                      <input type="file" class="form-control" id="image" name="image" multiple>
                                                                                                                  </div>  
                                                                      -->                                                                                                                                  </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                              <button type="submit" class="btn btn-success">Actualizar</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                           </form>
                                          <!-- FIN MODAL EDITAR -->

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

                                           <!-- INICIO MODAL VER--> 
                                           <form action="" method="post">
                                              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                          <h4 class="modal-title">Detalle de tu Producto</h4>
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
                                                                          <label>Codigo Producto</label>
                                                                              <input name="txtcod" id="txtcod" class="form-control" 
                                                                              value="<?php echo $reg->id_producto
                                                          ?>"
                                                                              readonly >
                                                          </div>

                                                  <div class="form-row">

                                                          <div class="col" class="form-group">
                                                          <label>Nombre</label>
                                                          <input type="text" name="nombr"  id="nombr" class="form-control" 
                                                          disabled
                                                          value="<?php echo $reg->nombre_producto?>"
                                                          >
                                                      </div>

                                                      <div class="col" class="form-group">
                                                            <label for="exampleInputPassword1">Fecha de Ingreso</label>
                                                            <input  name="fech" id="fech" class="form-control" id="exampleInputPassword1"  disabled
                                                            value="<?php echo $reg->fecha_ingreso?>" >
                                                          </div>  
                                                  </div>
                                                  <br/>

                                                      <div class="form-group">
                                                          <label>Descripción</label>
                                                          <textarea name="desc"  id="desc" class="form-control" 
                                                          disabled
                                                          ></textarea>

                                                        
                                                      </div>


                                                  </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                          <!-- FIN MODAL VER -->

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->        

                                           <!-- INICIO MODAL BAJA --> 
                                           <form action="darbajaproducto.php" method="post">
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
                                                                              <input type= "text" name="id" id="id" class="form-control" readonly hidden
                                                                              value="<?php echo $reg->id_producto ?>">
                                                          </div>

                                                      <div class="form-group">
                                                          <label><h5>Porqué motivo va a dar de baja?</h5></label>
                                                          <input name="motiv"  id="motiv" class="form-control" 
                                                          required
                                                          >
                                                      </div>


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

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->        

                                          <!-- INICIO MODAL STOCK--> 
                                          <form action="agregarstock.php" method="POST">
                                              <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-sm modal-dialog-centered">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                          <h4 class="modal-title">Agregar Stock</h4>
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
                                                          <div class="col" class="modal-body">
                                                                  <form role="form">
                                                                      <div style="width: 120px"  class="form-group">
                                                                              <input name="codigo" id="codigo" class="form-control" readonly hidden
                                                                              value="<?php echo $reg->id_producto?>">
                                                          </div>
                                                          <br/>
                                                                           

                                                              
                                                              <div col="col" class="form-group">
                                                              <label>Producto </label>
                                                                  <input  type= "text" name="produc" id="produc" class="form-control" readonly> 
                                                              </div>

                                                          <div class="col" class="form-row">
                                                              <div class="form-group">
                                                              <label>Cantidad que ingresa </label>
                                                                  <input  type= "number" name="ing" id="ing" class="form-control" required
                                                                  min="1"
                                                                  max="24"
                                                                  > 
                                                          </div>
                                                          <br/>


                                            </form>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fa fa-close'></i>Cancelar</button>
                                                              <button type="submit" class="btn btn-success"><i class='fa fa-plus-square'></i>Añadir</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                          <!-- FIN MODAL EDITAR -->




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
    <script src="producto.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript">
      $('#demoNotify').click(function(){
      	$.notify({
      		title: "Update Complete : ",
      		message: "Something cool is just updated!",
      		icon: 'fa fa-check' 
      	},{
      		type: "info"
      	});
      });
      $('#demoSwal').click(function(){
      	swal({
      		title: "Are you sure?",
      		text: "You will not be able to recover this imaginary file!",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Yes, delete it!",
      		cancelButtonText: "No, cancel plx!",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Deleted!", "Your imaginary file has been deleted.", "success");
      		} else {
      			swal("Cancelled", "Your imaginary file is safe :)", "error");
      		}
      	});
      });
    </script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="producto.js" type="text/javascript"></script>
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