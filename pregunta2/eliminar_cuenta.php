<?php
    include("conexion.php");
    $conexion=conexion();
    $id=$_REQUEST["id_cuenta"];
    $id_p=$_REQUEST["id_persona"];
    $consulta="DELETE FROM transaccion_bancaria WHERE id_cuenta_origen='$id' OR id_cuenta_dest='$id';";
    $resultado=pg_query($conexion,$consulta);

    $consulta="DELETE FROM cuenta_bancaria WHERE id_cuenta='$id';";

    $resultado=pg_query($conexion,$consulta);
   // echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminar cuenta</title>
</head>
<body>
<?php
    if ($resultado) {
        echo "<script>
                alert('Se ha eliminado la cuenta');
                window.location.href = 'cuentas.php?id=$id_p';
            </script> ";
                
    }

?>

</body>
</html>