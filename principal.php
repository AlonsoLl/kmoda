<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/css/estilos.css">
</head>
<body>
    <div class="contenedor-form">
        <div>
           
        </div>
        
        <div class="formulario">
            <h2>Ingresa tus datos</h2>
            <form action="accion/login.php"  method="post">
                <input type="text" name="txtemail" id="txtemail" placeholder="Usuario" required>
                <input type="password" name="txtclave" id="txtclave" placeholder="Contraseña" required>
                <input type="submit" value="Ingresar">
                <tr>
   
  </tr>
            </form>
        </div>
        
        
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>