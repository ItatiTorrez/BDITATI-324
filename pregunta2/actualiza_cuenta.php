<?php
include("conexion.php");
$existe_registro=false;
if (isset($_REQUEST["id_cuenta"])&&!(empty($_REQUEST["id_cuenta"]))
&& isset($_REQUEST["id_persona"])&&!(empty($_REQUEST["id_persona"]))
&& isset($_REQUEST["numero"])&&!(empty($_REQUEST["numero"]))
&& isset($_REQUEST["tipo"])&&!(empty($_REQUEST["tipo"])) 
&& isset($_REQUEST["saldo"])&&!(empty($_REQUEST["saldo"]))  
&& isset($_REQUEST["fecha_apertura"])&&!(empty($_REQUEST["fecha_apertura"])) ) {
    $id_cuenta=$_REQUEST["id_cuenta"];
    $id=$_REQUEST["id_persona"];
    $numero=$_REQUEST["numero"];
    $tipo=$_REQUEST["tipo"];
    $saldo=$_REQUEST["saldo"];
    $fecha_apertura=$_REQUEST["fecha_apertura"];

    $existe_registro=true;
}
if ($existe_registro) {
    $conexion=conexion();
    $consulta="UPDATE cuenta_bancaria
	SET num_cuenta='$numero', tipo_cuenta='$tipo', saldo='$saldo', fecha_apertura='$fecha_apertura'
	WHERE id_cuenta='$id_cuenta';";

    $resultado=pg_query($conexion,$consulta) or die("no se ha podido realizar el registro");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>actualiza cuenta</title>
</head>
<body class="contenedor">
    <form action="" method="REQUEST">
            <?php
            
            $id=$_REQUEST['id_persona'];
                if ($resultado) {
                   echo "<script>
                            alert('Se ha modificado la cuenta');
                            window.location.href = 'cuentas.php?id=$id';
                        </script> ";
                
                    }

            ?>
    </form>
</body>
</html>