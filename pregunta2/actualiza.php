<?php
include("conexion.php");
$existe_registro=false;
if (isset($_REQUEST["id"])&&!(empty($_REQUEST["id"]))
&& isset($_REQUEST["nombre"])&&!(empty($_REQUEST["nombre"]))
&& isset($_REQUEST["apellido"])&&!(empty($_REQUEST["apellido"])) 
&& isset($_REQUEST["fecha"])&&!(empty($_REQUEST["fecha"]))  
&& isset($_REQUEST["direccion"])&&!(empty($_REQUEST["direccion"])) 
&& isset($_REQUEST["email"])&&!(empty($_REQUEST["email"])) 
&& isset($_REQUEST["telefono"])&&!(empty($_REQUEST["telefono"])) ) {
    $id=$_REQUEST["id"];
    $nombre=$_REQUEST["nombre"];
    $apellido=$_REQUEST["apellido"];
    $fecha=$_REQUEST["fecha"];
    $direccion=$_REQUEST["direccion"];
    $email=$_REQUEST["email"];
    $telefono=$_REQUEST["telefono"];
    $existe_registro=true;
}
if ($existe_registro) {
    $conexion=conexion();
    $consulta="UPDATE persona
	SET nombre='$nombre', apellido='$apellido', fecha_nac='$fecha', direccion='$direccion', correo_electronico='$email', telefono='$telefono'
	WHERE id_persona='$id';";

    $resultado=pg_query($conexion,$consulta) or die("no se ha podido realizar el registro");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>actualiza</title>
</head>
<body class="contenedor">
    <form action="index.php" method="REQUEST">
            <?php
                if ($resultado) {
                   echo "<script>
                            alert('Se ha modificado el usuario');
                            window.location.href = 'index.php';
                        </script> ";
                }
            ?>
    </form>
</body>
</html>