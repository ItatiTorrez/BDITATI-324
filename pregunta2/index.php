<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pregunta 2</title>
</head>
<body class="contenedor">
    <center> <h1>BIENVENIDO A LA PREGUNTA 2</h1>
    <br>
    <form action="alta.php" method="post">
        <fieldset>
            <legend class="datos">ALTA BAJA CAMBIO (ABC) DE USUARIOS A CUENTAS</legend><br>
            <?php
           
            $existe_registro=false;
            //RECUPERAMOS INFORMACION DEL FORMULARIO
            //Y VERIFICAMOS QUE NO SEA VACIO
            if(isset($_REQUEST["nombre"])&&!empty($_REQUEST["nombre"])
            && isset($_REQUEST["apellido"])&&!empty($_REQUEST["apellido"])
            && isset($_REQUEST["fecha_nac"])&&!empty($_REQUEST["fecha_nac"])
            && isset($_REQUEST["email"])&&!empty($_REQUEST["email"])
            && isset($_REQUEST["direccion"])&&!empty($_REQUEST["direccion"])
            && isset($_REQUEST["telefono"])&&!empty($_REQUEST["telefono"])){
            $nombre=$_REQUEST["nombre"];
            $apellido=$_REQUEST["apellido"];
            $fecha_nac=$_REQUEST["fecha_nac"];
            $email=$_REQUEST["email"];
            $direccion=$_REQUEST["direccion"];
            $telefono=$_REQUEST["telefono"];
            $existe_registro=true;
            }
                include ("conexion.php");
                $conn = conexion();
                
                if($existe_registro){
                    $consulta_regsitro="INSERT INTO persona (nombre,apellido,fecha_nac,direccion, correo_electronico, telefono) VALUES ('$nombre','$apellido','$fecha_nac','$direccion','$email','$telefono')";
                    $resultado=pg_query($conn,$consulta_regsitro) or die("no se ha podido realizar el registro");
                }
                $consulta="SELECT * FROM persona";
                $resultado=pg_query($conn,$consulta) or die("no se ha podido mostrar la consulta");
            ?>
            <h2>REGISTRO DE USUARIOS</h2>
            <table border="1">
                <tr><th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>FECHA DE NACIMIENTO</th><th>DIRECCION</th><th>EMAIL</th><th>TELEFONO</th><th colspan="3">ACCIONES</th></tr>
<?php
    //INSERTAMOS UNA ESTRUCTURA DE TIPO BUCLE PARA MOSTRAR LOS REGISTROS
    while ($columna=pg_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>". $columna['id_persona']."</td>";
        echo "<td>". $columna['nombre']."</td>";
        echo "<td>". $columna['apellido']."</td>";
        echo "<td>". $columna['fecha_nac']."</td>";
        echo "<td>". $columna['direccion']."</td>";
        echo "<td>". $columna['correo_electronico']."</td>";
        echo "<td>". $columna['telefono']."</td>";
        $id=$columna['id_persona'];
        echo "<td> <a href='modificar.php?id=$id'>editar</a></td>";
        echo "<td> <a href='eliminar.php?id=$id'>eliminar</a></td>";
        echo "<td> <a href='cuentas.php?id=$id'>cuentas</a></td>";
        echo "</tr>";

    }

?>
</table>
<input type="submit" value="Agregar usuario"/>
        </fieldset>
    </form>
    </center>
</body>
</html>