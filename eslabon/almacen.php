<!DOCTYPE html>
<html>
<head>
	<title>Ferreteria Eslabon 3</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
	<div class="container-fluid" id="bg">
	    <header class="header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">ESLABON 3</div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<div class="textM col-md-1"><a href="almacen.php"> Almacen </a></div>
				<div class="textM col-md-1"><a href="venta.php">Venta </a> </div>
				<div class="textM col-md-1"><a href="compra.php"> Compra </a> </div>
				<div class="textM col-md-1"><a href="renta.php"> Renta </a> </div>
				<div class="textM col-md-1"><a href="pend.php"> Pendiente </a> </div>
				<div class="textM col-md-1"><a href="clpr.php"> Clientes/<br>Proveedor </a> </div>
				<div class="textM col-md-1"><a href=""> Caja </a> </div>
				<div class="textM col-md-1"><a href=""> ADMIN </a> </div>
			</div>
		</header>		
		
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
		</div>
		<div class="menut col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;"><h2>ALMACEN</h2></div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<!-- BUSCAR ARTICULO -->
			<div class="busqueda col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> Busqueda por nombre </div>
			<div class="busqueda col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> <input type="text" style="width:100%;" placeholder="Nombre común ..." id="ncomunbus"> </div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button id="nue" style="margin-left: 25%;">Nuevo</button></div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button id="dele" style="margin-left: 25%;">Eliminar</button></div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button id="upd" style="margin-left: 25%;">Actualizar</button></div>
				<div id="target" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button id="venta" style="margin-left: 25%;">Venta</button></div>
				
			</div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>

			<!-- ************ TABLA DE  RESPUESTA **************** -->

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="tabla">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 nv" id="buscartab">
					<table style="width:100%" id="tablarest"> 
						<tr>
						 <th>Nombre</th> 
						 <th>Cantidad</th>
						 <th>Precio Unitario</th>
						 <th>Unidad</th>
						 <th>Precio Unitario</th>
						</tr>
						<tr>
						 <td>Jill</td>
						 <td>Smith</td>
						 <td>50</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="nuevopr"></div>	
			</div>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
		</div>
		
		<!--EL FOOTER-->
		
		<footer class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			
		</footer>
	</div>
</body>
</html>