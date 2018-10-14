<?php
function conectarse() {
  $serverName = "localhost";
  $enlace = mysqli_connect($serverName, 'root', '', 'Ferreteria');
  
  if (!$enlace) {
    /*echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit*/;
  return mysqli_connect_error();
  }else{
    /*echo "Éxito: Se realizó una conexión apropiada a MySQL!";*/
    return $enlace;
  }
}
?>