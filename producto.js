function verProducto(id_producto){
	$.ajax({
        async: true,
		url: "verProducto.php",
		type: "post",
        data: { 'id_producto': id_producto },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#txtid').val(id_producto);
            $('#prov').val(datos.id_proveedor);
            $('#cate').val(datos.id_categoria);
            $('#nomb').val(datos.nombre_producto);
            $('#tall').val(datos.talla);
            $('#colo').val(datos.color);
            $('#can').val(datos.stock);
            $('#pre').val(datos.precio);
            $('#des').val(datos.descripcion_producto);
            
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
            $('#id').val(id_producto);
            $('#motiv').val(datos.motivo);
            
		}
  	});
}



function stock(id_producto){
	$.ajax({
        async: true,
		url: "stock.php",
		type: "post",
        data: { 'id_producto': id_producto },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
            $('#codigo').val(id_producto);
			$('#produc').val(datos.nombre_producto);
			$('#ing').val(datos.ingreso);
            
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