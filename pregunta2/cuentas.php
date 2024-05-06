<?php
    include ("conexion.php");
    
    $conn = conexion();
    
    $id=$_REQUEST["id"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cuentas</title>
</head>
<body class="contenedor">
<form action="alta_cuenta.php" method="post">
        <fieldset>
            <legend class="datos">Cuentas</legend><br>
            
            <h2>REGISTRO DE CUENTAS</h2><br>
            <table border="1">
                <tr><th>ID CUENTA</th><th>ID PERSONA</th><th>NUMERO DE CUENTA</th><th>TIPO DE CUENTA</th><th>SALDO</th><th>FECHA DE APERTURA</th><th colspan="2">ACCIONES</th></tr>
<?php
$consulta="SELECT * FROM cuenta_bancaria WHERE id_persona ='$id'";
$resultado=pg_query($conn,$consulta) or die("no se ha podido mostrar la consulta");
    //INSERTAMOS UNA ESTRUCTURA DE TIPO BUCLE PARA MOSTRAR LOS REGISTROS
    while ($columna=pg_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>". $columna['id_cuenta']."</td>";
        echo "<td>". $columna['id_persona']."</td>";
        echo "<td>". $columna['num_cuenta']."</td>";
        echo "<td>". $columna['tipo_cuenta']."</td>";
        echo "<td>". $columna['saldo']."</td>";
        echo "<td>". $columna['fecha_apertura']."</td>";
        $id_cuenta=$columna['id_cuenta'];
        $id_p=$columna['id_persona'];
        echo "<td> <a href='modificar_cuenta.php?id_cuenta=$id_cuenta'>editar</a></td>";
        echo "<td> <a href='eliminar_cuenta.php?id_cuenta=$id_cuenta&id_persona=$id_p'>eliminar</a></td>";
        echo "</tr>";

    }

?>
</table>
        </fieldset>
        <input type="submit" value="Agregar cuentas"/>
    </form>
</body>
</html>