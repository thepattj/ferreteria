/*var flag = '';*/


$(document).ready(function(){
	/*----------------ALMACEN--------------------------*/
	$( "#ncomunbus" ).autocomplete({
      	source: "php/autoc.php?tipobusca=x",
      	minLength: 1,
      	open:function (event,ui) {
      		$("ui-autocomplete").css("z-index",10000);
      	}
    });

    $("#ncomunbus").focusout(function(){
        produc = $("#ncomunbus").val();
        alert('DATOS QUE SE MANDAN'+produc);
        $.ajax({
            method:"POST",
            url:'php/busq.php',
            data:{prd:produc,flag:'almacen'}
        }).done(function(respuesta){
            alert(respuesta);
            var obj = JSON.parse(respuesta);
            alert('Nombre:'+obj.nombN+'Cantidad'+obj.cant+'Precio'+obj.precio+'Ubicacion');
            /*$('#materno').text(respuesta);*/
        });
    });

	
  	$('#nue').click(function(){
  		alert('mod de nuevo, clave, categoria, cantidad, p/u fecha(reset)');
  	});

  	$('#dele').click(function(){
  		alert('se tiene que cancelar y cuadno se de clic se habilita y se debe tener check en el producto.');
  	});

  	$('#upd').click(function(){
  		alert('igual que eliminar, pero se debe poner los elementos de categoria, cantidad, p/u, fecha(reset)');
  	});


  	/*----------------COMPRA--------------------------*/
  	$('#buscarcom').click(function(){
  		document.getElementById('tabla').innerHTML += '<table style="width:100%">'+
  		                                              '<tr>'+
  		                                               ' <th> No.Factura </th>  <th>Proveedor</th>  <th>Fecha</th>'+
  		                                              '</tr>'+
  		                                              '<tr>'+
  		                                               '<td>Jill</td> <td>Smith</td> <td>50</td>'+
  		                                              '</tr>'+
  		                                              '<tr>'+
  		                                               '<td>Eve</td>    <td>Jackson</td>     <td>94</td>'+
  		                                              '</tr>'+
  		                                              '</table>';
  	});

  	$('#nuecom').click(function(){
  		vermodal('nuevacompra');
  	});
  	$('#delcom').click(function(){
  		alert('se tiene que cancelar y cuadno se de clic se habilita y se debe tener check en el producto.');
  	});

  	$('#updcom').click(function(){
  		alert('igual que eliminar, pero se debe poner los elementos de categoria, cantidad, p/u, fecha(reset)');
  	});
  	/*------------------------DENTRO DEL MODAL--------------------------*/
  	$('#guardarfac').click(function() {
  		alert("hola");
  	});
  	$('#masfac').click(function() {
  		alert("otra linea");
  		tds = "<tr> <td><input type='text' id='clvamcomp' disabled></td> <td><input type='text' id='nommcomp'></td> <td><input type='text' id='catmcomp'></td> <td><input type='text' id='marcmcomp' disabled></td> <td><input type='text' id='marcmcomp' disabled></td> <td><input type='text' id='pumcomp'></td> <td><input type='text' id='totmcomp' disabled></td> <td><button id='masfac'>+</button></td> </tr>";
  		$("#compart").append(tds);
  	});

  	$("#nommcomp").autocomplete({
        source: "php/search.php",
        minLength: 2
    });  

  	


  	/*----------------CLIENTE / PROVEEDOR--------------------------*/
  	$('#nuecp').click(function(){
  		tipo = $('#selcl option:selected').text(); //escrito lo que tiene la option
  		/*tipo = $('#selcl option:selected').val(); para los valores dentro del value*/
  		alert('se escribe la seleccion'+tipo);
  		if (tipo == 'Cliente') {
  			$('#cliente').removeClass('nv');
  			$('#cliente').addClass('ver');
  			$('#prove').removeClass('ver');
  			$('#prove').addClass('nv');
  		}if (tipo == 'Proveedor') {
  			$('#prove').removeClass('nv');
  			$('#prove').addClass('ver');
  			$('#cliente').removeClass('ver');
  			$('#cliente').addClass('nv');;
  		}if (tipo == 'Selecciona'){
  			alert('DEBES SELECIONAR EL TIPO DE REGISTROS');
  		}
  	}); /*ESTA LISTO EL BOTON DE AGREGAR O NUEVO*/

  	$('#delcp').click(function(){
  		tipo = $('#selcl option:selected').text(); //escrito lo que tiene la option
  		alert('se tiene que cancelar y cuadno se de clic se habilita y se debe tener check en el producto.');
  	});

  	$('#updcp').click(function(){
  		tipo = $('#selcl option:selected').text(); //escrito lo que tiene la option
  		alert('igual que eliminar, pero se debe poner los elementos de categoria, cantidad, p/u, fecha(reset)');
  	});

  	/*AGREGAR LOS CLIENTES*/
  	$('#agregarcli').click(function(){
  		nombre = $('#nomclie').val(); 
  		rfc = $('#rfcclie').val(); 
  		addrs = $('#dirclie').val(); 
  		mail = $('#corclie').val(); 
  		alert('ESTOS SON LOS DATOS: NOMBRE-'+nombre+' RFC'+rfc+' direccion'+addrs+' correo'+mail);
  		/*$.post('php/add.php',{nomclie:nombre, rfcliente:rfc, addrclie:addrs, mailclie:mail, flag:'cliente'},function(msg){
  			alert("datos enviados");
  		});*/
  		$.ajax({
		  method: "POST",
		  url: "php/add.php",
		  data: { nomclie:nombre, rfcliente:rfc, addrclie:addrs, mailclie:mail, flag:'cliente'}
		})
		.done(function( msg ) {
		   alert( "Data Saved: " + msg );
		});
  	}); //YA AGREGA CLIENTES
  	/*AGREGAR PROVEEDORES*/
  	$('#agregarpro').click(function(){
  		nombrep = $('#nompro').val(); 
  		tel = $('#telpro').val(); 
  		addrsp = $('#dirpro').val(); 
  		mailp = $('#corpro').val(); 
  		alert('ESTOS SON LOS DATOS: NOMBRE-'+nombrep+' TELEFONO'+tel+' direccion'+addrsp+' correo'+mailp);
  		$.ajax({
		  method: "POST",
		  url: "php/add.php",
		  data: { nompro: nombrep, telpro: tel, dirpro:addrsp, correopro:mailp, flag:'proveedor'}
		})
		.done(function( msg ) {
		   alert( "Data Saved: " + msg );
		});  		
  	}); //YA AGREGA PROOVEDORES
});


function vermodal(boton){//MODAL DE ALERTA
	acc = boton;
    bgNegro = document.getElementById('bg-negro');
    modal = document.getElementById('modal');

    bgNegro.classList.add('verModal');
    modal.classList.add('verModal');

    if(acc == 'nuevacompra'){
    	tipo = 'grande';
	    modal.classList.add(tipo);
    }
   /* if(acc == 'actuacompra'){}*/
}

function cerrar() { //BOTON QUE SE CREA
    bgNegro.classList.remove('verModal');
    modal.classList.remove('verModal');

    if (modal.classList.contains('chico')) {
        modal.classList.remove('chico');
    } else {
        modal.classList.remove('grande');
    }
}
