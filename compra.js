function verCompra(id_compra){
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
            $('#pro').val(datos.id_proveedor);
            $('#fech').val(datos.fecha_compra);
            $('#prod').val(datos.nombre_producto);
            $('#pre').val(datos.precio_unidad);
            $('#can').val(datos.cantidad);
			$('#tot').val(datos.total);
			$('#cuent').val(datos.cuenta);
			$('#saldito').val(datos.saldo);
			$('#ven').val(datos.precio_vender);
			$('#flet').val(datos.flete);
			$('#pasa').val(datos.pasajes);
            
		}
  	});
}

function verCompraOk(id_compra){
	$.ajax({
        async: true,
		url: "verCompraConfirmar.php",
		type: "post",
        data: { 'id_compra': id_compra },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#txtid').val(id_compra);
            $('#pro').val(datos.id_proveedor);
            $('#fech').val(datos.fecha_compra);
            $('#prod').val(datos.nombre_producto);
            $('#pre').val(datos.precio_unidad);
            $('#can').val(datos.cantidad);
			$('#tot').val(datos.total);
			$('#cuen').val(datos.cuenta);
			$('#sal').val(datos.saldo);
			$('#ven').val(datos.precio_vender);
			$('#fle').val(datos.flete);
			$('#pas').val(datos.pasajes);
            
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



function eliminarCompra(id_compra){
	$.ajax({
        async: true,
		url: "eliminarCompraConfirmada.php",
		type: "post",
        data: { 'id_compra': id_compra },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#cod').val(id_compra);
            $('#produ').val(datos.nombre_producto);
            
		}
  	});
}

function confirmarCompra(id_compra){
	$.ajax({
        async: true,
		url: "verconfirmarCompra.php",
		type: "post",
        data: { 'id_compra': id_compra },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#codigocompra').val(id_compra);
            $('#productoOk').val(datos.nombre_producto);
            
		}
  	});
}




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