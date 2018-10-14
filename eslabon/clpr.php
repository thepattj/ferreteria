<!DOCTYPE html>
<html>
<head>
	<title>Ferreteria Eslabon 3</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
	<div class="container-fluid" id="bg">
		<div id="bg-negro" onclick="cerrarm()"></div>
	    <div id="modal"></div>
	    <div id="menuh"></div>
		
	    <header class="header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">ESLABON 3</div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<div class="textM col-md-1"><a href="almacen.php"> Almacen </a></div>
				<div class="textM col-md-1"><a href="venta.php">Venta </a> </div>
				<div class="textM col-md-1"><a href="compra.php"> Compra </a> </div>
				<div class="textM col-md-1"><a href="renta.php"> Renta </a> </div>
				<div class="textM col-md-1"><a href="pend.php"> Pendiente </a> </div>
				<div class="textM col-md-1"><a href=""> Clientes/<br>Proveedor </a> </div>
				<div class="textM col-md-1"><a href=""> Caja </a> </div>
				<div class="textM col-md-1"><a href=""> ADMIN </a> </div>
			</div>
		</header>	
		
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
		</div>
		<div class="menut col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;"><h2>Clientes / Provedores</h2></div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<!-- TIPO -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><select style="margin-left: 42%" id="selcl">
				<option style="display:none;">Selecciona</option>
		        <option value="cliente">Cliente</option>
		        <option value="proveedor">Proveedor</option>
			</select></div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<!-- ************ DATOS DE CLIENTES - PROVEDORES **************** -->

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="tabla">
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 nv" id="cliente">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="Nombre(s) Apellidos" id="nomclie"></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="RFC" id="rfcclie"> </div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="Direccion - CP" id="dirclie"> </div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="Correo" id="corclie"> </div>
					<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><button style="margin-left: 42%;" id="agregarcli">Agregar</button></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 nv" id="prove">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="Nombre(s) Apellidos" id="nompro"></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="Telefono" id="telpro"> </div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="Direccion" id="dirpro"> </div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><input type="text" placeholder="Correo" id="corpro"> </div>
					<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><button style="margin-left: 42%;" id="agregarpro">Agregar</button></div>
				</div>
			</div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><button style="margin-left: 25%;" id="nuecp">Nuevo</button></div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><button style="margin-left: 25%;" id="delcp">Eliminar</button></div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><button style="margin-left: 25%;" id="updcp">Actualizar</button></div>
			</div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
		</div>
		
		<!--EL FOOTER-->
		
		<footer class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			
		</footer>
	</div>
</body>
</html>