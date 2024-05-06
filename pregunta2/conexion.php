<?php
function conexion(){
	$conn = pg_connect("host=localhost dbname=BD_ITATI port=5432 user=itati324 password=123456")or die("<script language='javascript'> alert('ocurrio un error en la conexión');</script>") ;
	return $conn;
}

?>