<?php
    if (isset($_REQUEST["id"])) {
            include("conexion.php");
            //CREACION DE LA CONEXION A LA BASE DE DATOS
            $conexion=conexion();
        //*************************** */
        //MODIFICACION DE DTOS SEGUN EL ID
        $id=$_REQUEST["id"];
        $consulta= "SELECT * FROM persona WHERE id_persona='$id'";
        $res=pg_query($conexion,$consulta) or die("no se ha podido ejecutar la consulta");
        
        $columna=pg_fetch_array($res);
        //echo $nombre=$columna['nombre'];

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>modifica Persona</title>
</head>
<body class="contenedor">
    <form action="actualiza.php" method="REQUEST">
    <fieldset>
            <input type="hidden" name="id" value="<?php echo $columna['id_persona'];?>">
			<legend class="datos">MODIFICAR</legend>
			<label>NOMBRE:</label>
			<input type="text" name="nombre" value="<?php echo $columna['nombre'];?>"/></br>
			<label>APELLIDO:</label>
			<input type="text" name="apellido" value="<?php echo $columna['apellido'];?>"/></br>
			<label>FECHA DE NACIMIENTO:</label>
			<input type="date" name="fecha" value="<?php echo $columna['fecha_nac'];?>"/></br>
            <label>DIRECCION:</label>
			<input type="text" name="direccion" value="<?php echo $columna['direccion'];?>"/></br>
			<label>EMAIL</label>
			<input type="email" name="email" value="<?php echo $columna['correo_electronico'];?>"/></br>
            <label>TELEFONO:</label>
			<input type="text" name="telefono" value="<?php echo $columna['telefono'];?>"/></br>
			
			<input type="submit" value="MODIFICAR"/>
			<input type="reset" value="BORRAR"/>
		</fieldset>

    </form>
</body>
</html>
