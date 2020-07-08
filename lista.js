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
	var nom = document.getElementById('txtnombre').value;
	var dir = document.getElementById('txtdireccion').value;
	var tel = document.getElementById('txttelefono').value;
	if(id>0){
		$.ajax({
	        async: true,
			url: "editarbarberia.php",
			type: "post",
	        data: { 'id':id, 'nom':nom, 'dir':dir, 'tel':tel },
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
	} else {
		$.ajax({
	        async: true,
			url: "nuevabarberia.php",
			type: "post",
	        data: { 'nom':nom, 'dir':dir, 'tel':tel },
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

function ver(id_categoria){
	$.ajax({
        async: true,
		url: "ver.php",
		type: "post",
        data: { 'id_categoria': id_categoria },
    	success: function(data){
    		//console.log(data);
    		var datos = JSON.parse(data);
    		//console.log(datos);
    		//console.log("id:"+id);
    		nuevo();
    		$('#txtid').val(id_categoria);
    		$('#nomb').val(datos.nombrecateg);
            $('#des').val(datos.descripcion);
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