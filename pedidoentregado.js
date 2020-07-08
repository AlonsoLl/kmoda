function verPedido(id_compra){
	$.ajax({
        async: true,
		url: "verCompra.php",
		type: "post",
        data: { 'id_compra': id_compra },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#txtid').val(id_compra);
            $('#fech').val(datos.fecha);
            $('#fech').val(datos.fecha_compra);
            $('#prod').val(datos.nombre_producto);
            $('#pre').val(datos.precio_unidad);
            $('#can').val(datos.cantidad);
            $('#tot').val(datos.total);
            $('#ven').val(datos.precio_vender);
            
		}
  	});
}

function detalle(id_producto){
	$.ajax({
        async: true,
		url: "detalleproducto.php",
		type: "post",
        data: { 'id_producto': id_producto },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#txtcod').val(id_producto);
            $('#nombr').val(datos.nombre_producto);
            $('#fech').val(datos.fecha_ingreso);
            $('#desc').val(datos.descripcion_producto);
            
		}
  	});
}



function baja(id_producto){
	$.ajax({
        async: true,
		url: "baja.php",
		type: "post",
        data: { 'id_producto': id_producto },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#txtcodig').val(id_producto);
            $('#nom').val(datos.nombre_producto);
            $('#mot').val(datos.motivo);
            
		}
  	});
}

function entregado(id_pedido){
	$.ajax({
        async: true,
		url: "confirmarEntrega.php",
		type: "post",
        data: { 'id_pedido': id_pedido },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#ped').val(id_pedido);
            $('#nompro').val(datos.nombre_producto);
            $('#cli').val(datos.id_cliente);
            
		}
  	});
}

function anular(id_pedido){
	$.ajax({
        async: true,
		url: "veranularPedido.php",
		type: "post",
        data: { 'id_pedido': id_pedido },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#numped').val(id_pedido);
            $('#fechapedid').val(datos.fecha);
			$('#products').val(datos.id_producto);
			$('#can').val(datos.cantidad_pago);
			$('#numpre').val(datos.cantidad);
			$('#pag').val(datos.id_estado_pago);
			$('#pedid').val(datos.id_estado_pedido);
			$('#mot').val(datos.motivo);

            
		}
  	});
}

function verDetalle(id_pedido){
	$.ajax({
        async: true,
		url: "DetallePedidoEntregado.php",
		type: "post",
        data: { 'id_pedido': id_pedido },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#idped').val(id_pedido);
            $('#dateped').val(datos.fecha);
			$('#nomproduct').val(datos.id_producto);
			$('#colores').val(datos.id_producto);
			$('#tallas').val(datos.id_producto);
            $('#numpr').val(datos.cantidad);
			$('#pagpro').val(datos.id_producto);
			$('#totpag').val(datos.total);
			$('#modpag').val(datos.id_estado_pago);
			$('#estped').val(datos.id_estado_pedido);
			$('#datusu').val(datos.id_usuario);
			$('#datcli').val(datos.id_cliente);

            
		}
  	});
}

document.getElementById('producto').onchange = function() {
	/* Referencia al option seleccionado */
	var mOption = this.options[this.selectedIndex];
	/* Referencia a los atributos data de la opción seleccionada */
	var mData = mOption.dataset;
  
	/* Referencia a los input */
	var elId = document.getElementById('id');
	var elCodigo = document.getElementById('codigo');
	var elNombre = document.getElementById('nombre');
	var elDni = document.getElementById('dni');
  
  
	/* Asignamos cada dato a su input*/
	elId.value = this.value;
	elCodigo.value = mData.codigo;
	elNombre.value = mOption.text; /*Se usará el valor que se muestra*/
	elDni.value = mData.dni;
  
  
  };


function cancelar(){
	$("#txtnombre").val("");
	$("#txtdescripcion").val("");
}

function nuevo(){
	$("#id").val("");
	$("#txtnombre").val("");
	$("#txtdescripcion").val("");
}

function limpiar(){
	$("#txtbuscar").val("");
	lista();
	$("#txtbuscar").focus();
}