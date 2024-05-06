<html>
<html>
<head>
<link rel="stylesheet" href="style.css">    
<title>FORMULARIO DE REGISTRO DE CUENTAS</title></head>
<body class="contenedor">
	<form action="cuentas.php" method="REQUEST">
		<fieldset>
			<legend class="datos">DATOS DE LA CUENTA</legend>
			<label>NUMERO DE CUENTA:</label>
			<input type="text" name="numero"/></br>
			<label>TIPO DE CUENTA:</label>
			<input type="text" name="tipo"/></br>
			<label>SALDO:</label>
			<input type="date" name="saldo"/></br>
            <label>FECHA DE APERTURA:</label>
			<input type="date" name="fecha_apertura"/></br>
			
			
			<input type="submit" value="REGISTRAR"/>
			<input type="reset" value="BORRAR"/>
		</fieldset>
	</form>
</body>
</html>