function lista(){
	$.ajax({
        async: true,
		url: "proveedores.php",
		type: "post",
        data: { 'p':p},
    	success: function(data){
            $("#divlistado").html(data);
		}
  	});
}

function guardar(){
	var id = document.getElementById('txtid').value;
	var nom = document.getElementById('nomb').value;
	var des = document.getElementById('des').value;
		$.ajax({
	        async: true,
			url: "editarcategoria.php",
			type: "post",
	        data: { 'id':id_categoria, 'nom':nombrecateg, 'dir':descripcion},
	    	success: function(data){
	    		console.log(data);
	    		if(data==1){
	    			alert("Error al registrar");
	    		} else {
	    			alert("Registro exitoso!");
	    			lista();
	    		}
			}
	
	  	});
	}

function borrar(id){
	$.ajax({
        async: true,
		url: "eliminarcategoria.php",
		type: "post",
        data: { 'id':id },
    	success: function(data){
    		console.log(data);
    		if(data==1){
    			alert("Error al borrar");
    		} else {
    			alert("Borrado exitoso!");
    			lista();
    		}
		}
  	});
}

function verProveedor(id_proveedor){
	$.ajax({
        async: true,
		url: "verProveedor.php",
		type: "post",
        data: { 'id_proveedor': id_proveedor },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
    		$('#txtid').val(id_proveedor);
    		$('#nomb').val(datos.nombre_pr);
            $('#dir').val(datos.direccion);
            $('#tel').val(datos.telefono);
            $('#contac').val(datos.contacto);
		}
  	});
}

function darBaja(id_proveedor){
	$.ajax({
        async: true,
		url: "bajaProveedor.php",
		type: "post",
        data: { 'id_proveedor': id_proveedor },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
			$('#id').val(id_proveedor);
			$('#nompr').val(datos.nombre_pr);
    		$('#motiv').val(datos.motivo);
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
			$('#pro').val(datos.id_producto);
			$('#cantidad').val(datos.cantidad);
			$('#total').val(datos.total);
    		$('#cli').val(datos.id_cliente);
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