<html>
<html>
<head>
<link rel="stylesheet" href="style.css">    
<title>FORMULARIO DE REGISTRO</title></head>
<body class="contenedor">
	<form action="index.php" method="REQUEST">
		<fieldset>
			<legend class="datos">DATOS PERSONALES</legend>
			<label>NOMBRE:</label>
			<input type="text" name="nombre"/></br>
			<label>APELLIDO:</label>
			<input type="text" name="apellido"/></br>
			<label>FECHA DE NACIMIENTO:</label>
			<input type="date" name="fecha_nac"/></br>
            <label>DIRECCION:</label>
			<input type="text" name="direccion"/></br>
			<label>CORREO ELECTRONICO</label>
			<input type="email" name="email"/></br>
            <label>TELEFONO:</label>
			<input type="text" name="telefono"/></br>
			
			<input type="submit" value="REGISTRAR"/>
			<input type="reset" value="BORRAR"/>
		</fieldset>
	</form>
</body>
</html>