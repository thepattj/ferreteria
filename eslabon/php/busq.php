<?php
include 'conexion.php';
$con = conectarse();

$f = $_POST['flag'];
/******************** BUSQUEDA POR INPUTS O MANDADAS POR EL BOTON ****************************/
if($f == 'almacen'){
    $producto = $_POST['prd'];
    $consulta = "SELECT NombreComun, cantidad, precio FROM producto WHERE NombreComun = '$producto'";

	$result = $con->query($consulta);
	
	$respuesta = new stdClass();
	if($result->num_rows > 0){
		$fila = $result->fetch_array();
		$respuesta->cant = $fila['cantidad'];
		$respuesta->nombN = $fila['NombreComun'];
		$respuesta->precio = $fila['precio'];		
	}
	echo json_encode($respuesta);
}
?>