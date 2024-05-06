<?php
    if (isset($_REQUEST["id_cuenta"])) {
            include("conexion.php");
            //CREACION DE LA CONEXION A LA BASE DE DATOS
            $conexion=conexion();
        //*************************** */
        //MODIFICACION DE DTOS SEGUN EL ID
        $id=$_REQUEST["id_cuenta"];
       // echo $id;
        $consulta= "SELECT * FROM cuenta_bancaria WHERE id_cuenta='$id'";
        $res=pg_query($conexion,$consulta) or die("no se ha podido ejecutar la consulta");
        
        $columna=pg_fetch_array($res);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>modifica cuenta</title>
</head>
<body class="contenedor">
    <form action="actualiza_cuenta.php" method="REQUEST">
    <fieldset>
            <input type="hidden" name="id_cuenta" value="<?php echo $columna['id_cuenta'];?>">
            <input type="hidden" name="id_persona" value="<?php echo $columna['id_persona'];?>">
			<legend class="datos">MODIFICAR CUENTA</legend>
			<label>NUMERO DE CUENTA:</label>
			<input type="text" name="numero" value="<?php echo $columna['num_cuenta'];?>"/></br>
			<label>TIPO DE CUENTA:</label>
			<input type="text" name="tipo" value="<?php echo $columna['tipo_cuenta'];?>"/></br>
			<label>SALDO:</label>
			<input type="text" name="saldo" value="<?php echo $columna['saldo'];?>"/></br>
            <label>FECHA DE APERTURA:</label>
			<input type="date" name="fecha_apertura" value="<?php echo $columna['fecha_apertura'];?>"/></br>
			
			<input type="submit" value="MODIFICAR"/>
			<input type="reset" value="BORRAR"/>
		</fieldset>

    </form>
</body>
</html>
