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

function verCliente(id_cliente){
	$.ajax({
        async: true,
		url: "verCliente.php",
		type: "post",
        data: { 'id_cliente': id_cliente },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
    		$('#txtid').val(id_cliente);
            $('#nomb').val(datos.nombres);
            $('#dni').val(datos.dni);
            $('#dir').val(datos.direccion);
            $('#cor').val(datos.correo);
            $('#tel').val(datos.telefono);
            
		}
  	});
}

function editar(id_categoria){
	$.ajax({
	url:   'ver.php',
	type:  'post',
	data:  { "id_categoria":id_categoria },
	success:  function (data) { 
		  $("#myModal2").show();
		  var datos = JSON.parse(data);
		  $("#txtid").val(id_categoria);
		  $("#nomb").val(datos.nombrecateg);
		  $("#des").val(datos.descripcion);
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