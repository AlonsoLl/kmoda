
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
          <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">Clientes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
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
          <h3><i class="fa fa-th-list"></i> Cartera de Clientes</h3>
          <p>Registro Actualizado</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Clientes</li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="panel-body">
              <div class="table-responsive">
              <?php




                      $sqlcount="SELECT count(*) cant FROM cliente";


                      $resultcount = $cnx->query($sqlcount) or die ("error");

                      $regc=$resultcount->fetchObject() 
                       ?>
                         
                            <!-- INICIO BOTONES -->

                                   <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> <i class=" fa fa-user " ></i> Nuevo Cliente </button>
                                                    <br/>
                                                    <br/>
                                                    
                            <!-- FIN BOTONES -->

                       <label>Cantidad de registros: <span><?php echo "$regc->cant"; ?></label>

                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    <th style="text-align: center">Codigo</th>
                                            <th style="text-align: center">Nombres</th>
                                            <th style="text-align: center">DNI</th>
                                            <th style="text-align: center">Direccion</th>
                                            <th style="text-align: center">Correo Electrónico</th>
                                            <th style="text-align: center">Teléfono</th>
                                            <th style="text-align: center">Acciones</th>
                    </tr>
                  </thead>
                   <tbody>

                                     <?php
                                  $sql="SELECT * from cliente
                                  ORDER BY nombres asc";
                                  $result = $cnx->query($sql) or die("error");
                                  while($reg=$result->fetchObject()){
                                    echo "<tr>
                                   
                                        <td align=center>$reg->id_cliente</td>
                                        <td>$reg->nombres</td>
                                        <td align=center >$reg->dni</td>
                                        <td>$reg->direccion</td>
                                       <td>$reg->correo</td>
                                        <td align=center>$reg->telefono</td>
                                        <td align=center >
                                        <a onclick='verCliente($reg->id_cliente)' data-toggle='modal' data-target='#myModal2'><button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i>  </button></a>	
                                     <!--   <a href='eliminarcliente.php?id_cliente=$reg->id_cliente'> <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button></a>
                                     --> 
                                     </tr>";
                                  }?>
                                  </tbody>
                                  <!-- FIN ENLAZAR TABLAS PARA CAMBIAR EL CODIGO POR NOMBRE DE PROVEEDOR Y CATEGORIA -->
                        </table>


                         <!-- BOTONES -->
                                       
                                              <!-- MODAL AGREGAR--> 
                                              <form action="nuevocliente.php" method="post">
                                                                                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                          <div class="modal-dialog">
                                                                                              <div class="modal-content">
                                                                                                  <div class="modal-header">
                                                                                                  <h4 class="modal-title">Agregar Cliente</h4>
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
                                                                                                                          <label>Codigo Cliente</label>
                                                                                                                          <input style="width: 120px" name="id_cliente" id="id_cliente" class="form-control"disabled placeholder="" >
                                                                                                                      </div>

                                                                                                              <div class="form-row">   
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Nombre y Apellidos (*)</label>
                                                                                                                          <input name="txtnombre" id="txtnombre" class="form-control" placeholder="Nombre del cliente"
                                                                                                                          required
                                                                                                                          autofocus
                                                                                                                          >
                                                                                                                      </div>
                                                                                                             
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>DNI (*)</label>
                                                                                                                          <input name="txtdni" id="txtdni" class="form-control" 
                                                                                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                                                                          maxlength="8"
                                                                                                                          required
                                                                                                                          placeholder="Dni del Cliente">
                                                                                                                      </div>
                                                                                                                      </div>
                                                                                                              <br/>

                                                                                                                      <div class="form-group">
                                                                                                                          <label>Direccion (*)</label>
                                                                                                                          <input name="txtdireccion" id="txtdireccion" class="form-control" placeholder="Direccion del cliente"
                                                                                                                          required
                                                                                                                          >
                                                                                                                      </div>

                                                                                                                <div class="form-row">
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Correo Electrónico</label>
                                                                                                                          <input name="txtcorreo" id="txtcorreo" class="form-control" placeholder="Correo Electrónico del cliente"
                                                                                                                          >
                                                                                                                      </div>
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Teléfono</label>
                                                                                                                          <input name="txttelefono" id="txttelefono" class="form-control" 
                                                                                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                                                                          maxlength="9"
                                                                                                                          placeholder="Teléfono de referencia">
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
                                                                                      <!-- FIN MODAL -->

                                              <!-- FIN BOTONES -->



                                              <!-- MODAL EDITAR--> 
                                              <form action="editarcliente.php" method="post">
                                                                                                              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                                                  <div class="modal-dialog">
                                                                                                                      <div class="modal-content">
                                                                                                                          <div class="modal-header">
                                                                                                                          <h4 class="modal-title">Editar Cliente</h4>
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
                                                                                                                          <label>Codigo Cliente</label>
                                                                                                                          <input style="width: 120px" name="txtid" id="txtid" class="form-control" 
                                                                                                                          value ="<?php echo $reg->id_cliente ?>"
                                                                                                                          readonly >
                                                                                                                      </div>
                                                                                                                      

                                                                                                                <div class="form-row">  
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Nombre y Apellidos (*)</label>
                                                                                                                          <input name="nomb" id="nomb" class="form-control" 
                                                                                                                             required>
                                                                                                                      </div>
                                                                                                                
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>DNI (*)</label>
                                                                                                                          <input name="dni" id="dni" class="form-control" 
                                                                                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                                                                          maxlength="8"
                                                                                                                          
                                                                                                                          readonly
                                                                                                                          >
                                                                                                                      </div>

                                                                                                                      </div>
                                                                                                                <br/>
                                                                                                                      <div class="form-group">
                                                                                                                          <label>Direccion (*)</label>
                                                                                                                          <input name="dir" id="dir" class="form-control" 
                                                                                                                         required>
                                                                                                                      </div>

                                                                                                                <div class="form-row">
                                                                                                                      <div class="col" class="form-group">
                                                                                                                          <label>Correo Electrónico</label>
                                                                                                                          <input type="text" name="cor" id="cor" class="form-control" 
                                                                                                                          >
                                                                                                                      </div>
                                                                                                                      <div class= "col" class="form-group">
                                                                                                                          <label>Teléfono</label>
                                                                                                                          <input name="tel" id="tel" class="form-control" 
                                                                                                                          onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false" 
                                                                                                                          maxlength="9"
                                                                                                                          >
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
    <script src="cliente.js"></script>

    <!-- INICIO SCRIPT AJAX -->

    <script>		
		$(document).on("ready", function(){
			listar();
			guardar();
			eliminar();
		});

		$("#btn_listar").on("click", function(){
			listar();
		});

		var guardar = function(){
			$("form").on("submit", function(e){
				e.preventDefault();
				var frm = $(this).serialize();
				$.ajax({
					method: "POST",
					url: "guardar.php",
					data: frm
				}).done( function( info ){
				console.log( info );		
					var json_info = JSON.parse( info );
					mostrar_mensaje( json_info );
					limpiar_datos();
					listar();
				});
			});
		}

		var eliminar = function(){
			$("#eliminar-usuario").on("click", function(){
				var idusuario = $("#frmEliminarUsuario #idusuario").val(),
					opcion = $("#frmEliminarUsuario #opcion").val();
				$.ajax({
					method:"POST",
					url: "guardar.php",
					data: {"idusuario": idusuario, "opcion": opcion}
				}).done( function( info ){
					var json_info = JSON.parse( info );
					mostrar_mensaje( json_info );
					limpiar_datos();
					listar();
				});
			});
		}

		var mostrar_mensaje = function( informacion ){
			var texto = "", color = "";
			if( informacion.respuesta == "BIEN" ){
					texto = "<strong>Bien!</strong> Se han guardado los cambios correctamente.";
					color = "#379911";
			}else if( informacion.respuesta == "ERROR"){
					texto = "<strong>Error</strong>, no se ejecutó la consulta.";
					color = "#C9302C";
			}else if( informacion.respuesta == "EXISTE" ){
					texto = "<strong>Información!</strong> el usuario ya existe.";
					color = "#5b94c5";
			}else if( informacion.respuesta == "VACIO" ){
					texto = "<strong>Advertencia!</strong> debe llenar todos los campos solicitados.";
					color = "#ddb11d";
			}else if( informacion.respuesta == "OPCION_VACIA" ){
					texto = "<strong>Advertencia!</strong> la opción no existe o esta vacia, recargar la página.";
					color = "#ddb11d";
			}

			$(".mensaje").html( texto ).css({"color": color });
			$(".mensaje").fadeOut(5000, function(){
					$(this).html("");
					$(this).fadeIn(3000);
			});			
		}

		var limpiar_datos = function(){
			$("#opcion").val("registrar");
			$("#idusuario").val("");
			$("#nombre").val("").focus();
			$("#apellidos").val("");
			$("#dni").val("");
		}

		var listar = function(){
				$("#cuadro2").slideUp("slow");
				$("#cuadro1").slideDown("slow");
			var table = $("#sampleTable").DataTable({
				"destroy":true,
				"ajax":{
					"method":"POST",
					"url": "listar.php"
				},
				"columns":[
					{"data":"nombres"},
					{"data":"apellidos"},
          {"data":"dni"},
          {"data":"direccion"},
          {"data":"correo"},
          {"data":"telefono"},
					{"defaultContent": "<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}	
				],
				"language": idioma_espanol
			});

			obtener_data_editar("#sampleTable tbody", table);
			obtener_id_eliminar("#sampleTable tbody", table);
		}

		var agregar_nuevo_usuario = function(){
			limpiar_datos();
			$("#cuadro2").slideDown("slow");
			$("#cuadro1").slideUp("slow");
		}

		var obtener_data_editar = function(tbody, table){
			$(tbody).on("click", "button.editar", function(){
				var data = table.row( $(this).parents("tr") ).data();
        console.log(data);
			});
		}

		var obtener_id_eliminar = function(tbody, table){
			$(tbody).on("click", "button.eliminar", function(){
				var data = table.row( $(this).parents("tr") ).data();
				var idusuario = $("#frmEliminarUsuario #idusuario").val( data.idusuario );
			});
		}

		var idioma_espanol = {
		    "sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
		}
		

  </script>
  

      <!-- FIN SCRIPT AJAX -->


    <script src="lista.js" type="text/javascript"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script src="cliente.js" type="text/javascript"></script>
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