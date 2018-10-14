<?php
include 'conexion.php';
$con = conectarse();

$tipo = $_GET['tipobusca']; //valores para identificar la barra x=almacen y=compra z=cliente a=proveedor b=productoventa


/**************** BUSQUEDA DE LAS BARRAS DE LOS INPUTS ******************/
if ($tipo == 'x') {
	$nombre = $_GET['term'];
	$consulta = "SELECT NombreComun FROM producto WHERE NombreComun LIKE '%$nombre%'";

	$result = $con->query($consulta);

	if($result->num_rows > 0){
		while($fila = $result->fetch_array()){
			$nombres[] = $fila['NombreComun'];		
		}
		echo json_encode($nombres);
	}
}else{
	echo "prudete";
}



?>