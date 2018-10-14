<?php
include 'php/conexion.php';
$con = conectarse();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ferreteria Eslabon 3</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
	<div class="container-fluid" id="bg">
		<div id="bg-negro" onclick="cerrarm()"></div>
	    <div id="modal">
	    	<div id="nuevacompra">
	    		<div class='cmodal col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'> <button onclick='cerrar()' class='col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 amaranto'> X </button> </div>
	    		<div class='cmodal col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'> <h1>Nueva Factura</h1> </div>
	    		<div class='cmodal col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'> <p>Introduce los datos que se te piden para agregar la nueva factura y sus articulos.</p> </div>
	    		<div class='cmodal col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6'> <p>No. Factura</p> </div> <div class='cmodal col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6'> <input type='text' style='width:100%;' placeholder='Escribe...'> </div>
	    		<div class='cmodal col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'></div>
	    		<div class='cmodal col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6'> <p>Provedor</p> </div>    <div class='cmodal col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6'> <select id="comprove"  >
	   				<option style="display:none">Selecciona...</option>
	   				<?php $qri = "SELECT Nombre AS nombre, idProv AS clave FROM proveedor";
					  $resul=mysqli_query($con,$qri);
					  while($row1 = $resul->fetch_object()){?>
					<option value="<?php echo $row1->clave;?>"  <?php /*if($row1->clave==146){ echo "selected='selected'"; }*/?> > <?php echo($row1->nombre);?> </option>
				<?php } ?>
	   			</select> </div>
	   			<div class='cmodal col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>  <table style='width:100%' id="compart">
	   				<tr>
	   					<th> Clv Articulo </th>  <th>Nombre</th>  <th>Cantidad</th> <th>Categoria</th> <th>Marca</th> <th>P/U</th> <th>TOTAL</th>
	   				</tr>
	   				<tr>
	   					<td><input type="text" id="clvamcomp" disabled></td> <td> <input type="text" id="nommcomp" name="nommcomp"> </td> <td><input type="text" id="catmcomp"></td> <td><input type="text" id="marcmcomp" disabled></td> <td><input type="text" id="marcmcomp" disabled></td> <td><input type="text" id="pumcomp"></td> <td><input type="text" id="totmcomp" disabled></td> <td><button id="masfac">+</button></td>
	   				</tr>
	   				</table>
	   			</div>
	    		<div class='cmodal col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'> <button id="guardarfac" class='col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 menta'> AGREGAR </button> </div>
	    	</div>
	    </div>
	    <div id="menuh"></div>
		
	    <header class="header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">ESLABON 3</div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
			<div class="menu col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<div class="textM col-md-2"><a href="almacen.php"> Almacen </a></div>
				<div class="textM col-md-2"><a href="venta.php">Venta </a> </div>
				<div class="textM col-md-2"><a href="compra.php"> Compra </a> </div>
				<div class="textM col-md-2"><a href="renta.php"> Renta </a> </div>
				<div class="textM col-md-2"><a href="pend.php"> Pendiente </a> </div>
				<div class="textM col-md-2"><a href="clpr.php"> Clientes/<br>Proveedor </a> </div>
			</div>
		</header>	
		
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
		</div>
		<div class="menut col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;"><h2>COMPRA (Entrada de Productos)</h2></div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<!-- BUSCAR FACTURA -->
			<div class="busqueda col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">No. de Factura</div>
			</div>
			<div class="busqueda col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><input type="text" style="width:100%;" placeholder="Escribe ..."></div>
			</div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<!-- ************ TABLA DE  RESPUESTA **************** -->

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="tabla">
			</div>
			<div class="espacio col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button style="margin-left: 25%;" id="buscarcom">Buscar</button></div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button style="margin-left: 25%;" id="nuecom">Nuevo</button></div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button style="margin-left: 25%;" id="delcom">Eliminar</button></div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"><button style="margin-left: 25%;" id="updcom">Actualizar</button></div>
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