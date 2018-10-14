<?php
include 'conexion.php';
$con = conectarse();

$valida = $_POST['flag'];
if($valida == 'cliente'){
	$nomcliente = $_POST['nomclie'];
	$rfccliente = $_POST['rfcliente'];
	$dircliente = $_POST['addrclie'];
	$correoclie = $_POST['mailclie'];

	mysqli_query($con,"INSERT INTO clientes (Nombre,Direccion,RFC,Correo) VALUES ('".$nomcliente."','".$dircliente."','".$rfccliente."','".$correoclie."')"); //'Glenn','Quagmire',33)");
	mysqli_close($con);
	echo 'Recibio correcto'.$nomcliente; // ESTO ES PARA CUANDO TENGAMOS LA FORMA DE SABER QUE SI SE HIZO CORRECTO EL INSERT SIN NINGUN FALLO.****INVESTIGAR
}if($valida == 'proveedor'){
	$nomprove = $_POST['nompro'];
	$telprove = $_POST['telpro'];
	$direcprove = $_POST['dirpro'];
	$coreoprove = $_POST['correopro'];

	mysqli_query($con,"INSERT INTO proveedor (Nombre,Direccion,Telefono,Correo) VALUES ('".$nomprove."','".$direcprove."','".$telprove."','".$coreoprove."')"); //'Glenn','Quagmire',33)");
	mysqli_close($con);

	echo 'Recibio correcto'.$nomprove; // ESTO ES PARA CUANDO TENGAMOS LA FORMA DE SABER QUE SI SE HIZO CORRECTO EL INSERT SIN NINGUN FALLO.****INVESTIGAR
}	
?>