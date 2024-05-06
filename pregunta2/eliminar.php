<?php
    include("conexion.php");
    $conexion=conexion();
    $id=$_REQUEST["id"];

    $consulta= "SELECT * FROM cuenta_bancaria WHERE id_persona='$id'";
    $res=pg_query($conexion,$consulta) or die("no se ha podido ejecutar la consulta");
    $columna=pg_fetch_array($res);

    $id_cuenta=$columna['id_cuenta'];

    $consulta="DELETE FROM transaccion_bancaria WHERE id_cuenta_origen='$id_cuenta' OR id_cuenta_dest='$id_cuenta';";
    $resultado=pg_query($conexion,$consulta);

    $consulta="DELETE FROM cuenta_bancaria WHERE id_persona='$id';";
    $resultado=pg_query($conexion,$consulta);
    $consulta="DELETE FROM persona WHERE id_persona='$id';";
    $resultado=pg_query($conexion,$consulta);
   // echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminar</title>
</head>
<body>
<script>
   alert("Se ha eliminado exitosamente");
   window.location.href = "index.php";
</script>

</body>
</html>