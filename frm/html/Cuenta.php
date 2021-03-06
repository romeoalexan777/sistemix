
<!-- INICIA EL BLOQUE DEL BOTON PARA EL MODAL BUSCAR -->
<div class="fixed-action-btn">
	<a class="modal-trigger btn-floating waves-effect waves-light btn-large cyan darken-1 tooltipped" href="#modal1" data-position="top" data-tooltip="Buscar asociado"><i class="large material-icons">search</i></a>
</div>
<!-- FINALIZA EL BLOQUE DEL BOTON PARA EL MODAL BUSCAR -->
<!-- INICIA EL BLOQUE DEL MODAL BUSCAR -->
<link href="../css/bootstrap-table.css" type="text/css" rel="stylesheet" media="screen,projection"/> 
<div id="modal1" class="modal modal-fixed-footer">
	<div class="modal-content" id="modalcontent">
		<h5>Buscar asociado</h5><!-- //TITULO DEL MODAL **********************************************************************************************************-->
		<table id="tabla1" data-toggle="table" class="table table-striped table-hover"  data-url="php/Asociado.php?acc=getjsontabla" data-click-to-select="true"  data-show-refresh="true" data-search="true">
		    <thead>
			    <tr>
			    	<th data-field="operate" data-align="center" data-formatter="operateFormatter1" data-events="operateEvents">Acciones</th>
			    	<!-- INICIA ELEMENTOS DE LA TABLA (CAMBIAR DEPENDIENDO DEL FORMULARIO A TRABAJAR, USAR NOMBRES DE CAMPOS SEGUN BASE DE DATOS)*******************-->
		            <th data-field="asociado_nombre" data-align="center">Nombre</th>
		            <th data-field="asociado_dui" data-align="center">DUI</th>
		            <th data-field="asociado_nit" data-align="center">NIT</th>
		            <!-- FINALIZAN ELEMENTOS DE LA TABLA ************************************************************************************************************-->
			    </tr>
		    </thead>
		</table>
	</div>
	<div class="modal-footer">
		<button class="waves-effect waves-light btn" type="submit">Guardar</button>
		<button class="modal-action modal-close waves-effect waves-light btn-flat" type="reset">Cancelar</button>
	</div>
</div>
<!-- FINALIZA EL BLOQUE DEL MODAL BUSCAR -->
<!-- INICIA EL BLOQUE LA TABLA -->
<div class="container" style="width: 1200px;">
	<h4 class="center teal-text">Cuenta</h4>
	<div class="row">
		<div class="col s12">
			<!-- MODIFICAR LA data-url SEGUN SEA EL CASO DEL FORMULARIO QUE SE ESTE TRABAJANDO -->
			<table id="tabla2" data-toggle="table" class="table table-striped table-hover"  data-url="php/Cuenta.php?acc=getjsontabla" data-click-to-select="true"  data-show-refresh="true" data-search="true" data-pagination="true" data-page-size="5" data-page-list="[5,8,10,20,50,100]">
			    <thead>
				    <tr>
				    	<th data-field="operate" data-align="center" data-formatter="operateFormatter2" data-events="operateEvents">Acciones</th>
				    	<!-- INICIA ELEMENTOS DE LA TABLA (CAMBIAR DEPENDIENDO DEL FORMULARIO A TRABAJAR, USAR NOMBRES DE CAMPOS SEGUN BASE DE DATOS)*******************-->
				    	<th data-field="cuenta_id" data-align="center"># Cuenta</th>
				    	<th data-field="cuenta_asociadonombre" data-align="center">Asociado</th>
			            <th data-field="cuenta_monto" data-align="center">Monto</th>
			            <th data-field="cuenta_fechaapertura" data-align="center">Fecha de apertura</th>
			            <th data-field="cuenta_estado" data-align="center">Estado</th>
			            <th data-field="cuenta_tipocuentanombre" data-align="center">Tipo de cuenta</th>
			            <!-- FINALIZAN ELEMENTOS DE LA TABLA ************************************************************************************************************-->
				    </tr>
			    </thead>
			</table>
		</div>
	</div>
</div>
<script src="../js/bootstrap-table.js"></script>
<!-- FINALIZA EL BLOQUE DE LA TABLA -->
<!-- INICIA EL BLOQUE DEL MODAL NUEVA CUENTA -->
<div id="modal2" class="modal modal-fixed-footer">
	<form class="col s12" id="formulario" onsubmit="return submit1();">
		<input id="idid" type="hidden" value="">
		<div class="modal-content" id="modalcontent">
			<h5>Nueva cuenta</h5><!-- //TITULO DEL MODAL **********************************************************************************************************-->
			<!-- INICIAN ELEMENTOS DEL FORMULARIO (CAMBIAR DEPENDIENDO DEL FORMULARIO A TRABAJAR) *****************************************************************-->
			<div class="row">
				<input id="asoid" type="hidden" value="">
				<div class="input-field col s12">
					<input type="text" name="tit" id="tit" readonly>
					<label for="tit" class="active">Titular de la cuenta</label>
				</div>
				<div class="input-field col s12" hidden>
					<input type="text" name="tit2" id="tit2" readonly>
					<label for="tit2">Co-titular de la cuenta</label>
				</div>
				<div class="input-field col s12">
					<input name="fecape" id="fecape" type="date" class="datepicker" required value="<?php date_default_timezone_set('America/El_Salvador'); echo date("Y-m-d");?>">
					<label for="fecape" class="active">Fecha de apertura</label>
				</div>
				<div class="input-field col s11">
					<input type="text" name="cueid" id="cueid" required max="10">
					<label for="cueid" class="active"></label>
				</div>
				<div class="input-field col s1">
					<a id="cueidbtn" title="Actualizar" class="btn" onclick="getnumber();"><i class="material-icons">loop</i></a>
				</div>
				<div class="input-field col s12">
					<input type="number" name="mon" id="mon" required min="0.00" step="0.01">
					<label for="mon">Monto de apertura</label>
				</div>
				<div class="input-field col s12">
				    <select class="" id="tipcueid" required  autocomplete="off">
				    	<option value="0" disabled selected>Seleccionar</option>
				    </select>
				    <label for="tipcueid">Tipos de cuenta</label>
				</div>
				<div class="input-field col s12">
				    <select class="" id="est" required  autocomplete="off">
				    	<option value="0" disabled >Seleccionar</option>
				    	<option value="Activada" selected>Activada</option>
				    	<option value="Congelada">Congelada</option>
				    	<option value="Cerrada">Cerrada</option>
				    </select>
				    <label for="est">Estados</label>
				</div>
			</div>
			<!-- FINALIZAN ELEMENTOS DEL FORMULARIO *****************************************************************************************************************************-->
		</div>
		<div class="modal-footer">
			<button class="waves-effect waves-light btn" type="submit">Guardar</button>
			<button class="modal-action modal-close waves-effect waves-light btn-flat" type="reset">Cancelar</button>
		</div>
	</form>
</div>
<!-- FINALIZA EL BLOQUE DEL MODAL NUEVA CUENTA-->
<!-- INICIA EL BLOQUE JAVASCRIPT -->
<script type="text/javascript">
	/*INICIA FUNCION READY PARA INICIALIZAR LOS ELEMENTOS */
	$(document).ready(function(){
		$('.tooltipped').tooltip({delay: 50});
		$('.datepicker').pickadate({
			selectMonths: true, // Creates a dropdown to control month
    		selectYears: true, // Creates a dropdown of 15 years to control year
			max: 1 //dias equivalentes  years restados for today
		});
		$('select').material_select('destroy');
		$('select').material_select();	
	    $.ajax({
	        type:"post",
	        url: "php/TipoCuenta.php",
	        data:{acc:'getjsonselect'},
	        success:function(responseText){
	        	var obj = $.parseJSON(responseText);
	        	$.each(obj, function(i,item){
	        		var x = document.getElementById("tipcueid");
	        		var option = document.createElement("option");
	        		option.text = item.tipocuenta_nombre;
	        		option.value = item.tipocuenta_id;
	        		x.add(option);
	        	});
	        	$('#tipcueid').material_select('destroy');
        		$('#tipcueid').material_select();
	        }
	    });

	    /*INICIA BLOQUE DE CONFIGURACION DEL MODAL BUSCAR */
		$('#modal1').modal({
			dismissible: true,
			opacity: .5,
			inDuration: 300,
			outDuration: 200,
			startingTop: '4%',
			endingTop: '10%',
			ready: function(modal, trigger){/*FUNCION QUE SE ACTIVA CUANDO SE ABRE EL MODAL */
				document.getElementById("cueid").removeAttribute("readonly");
				document.getElementById("cueidbtn").removeAttribute("disabled");
			},
			complete: function() {/*FUNCION QUE SE ACTIVA CUANDO SE CIERRA EL MODAL*/
			}
		});
		/*FINALIZA BLOQUE DE CONFIGURACION DEL MODAL BUSCAR */
		/*INICIA BLOQUE DE CONFIGURACION DEL MODAL NUEVA CUENTA */
		$('#modal2').modal({
			dismissible: true,
			opacity: .5,
			inDuration: 300,
			outDuration: 200,
			startingTop: '4%',
			endingTop: '10%',
			ready: function(modal, trigger){/*FUNCION QUE SE ACTIVA CUANDO SE ABRE EL MODAL */
				document.getElementById("mon").focus();/*ID DEL PRIMER ELEMENTO DEL MODAL ****************************************************************************/
				$('#modalcontent').animate({scrollTop:0},{duration:"slow"});
			},
			complete: function() {/*FUNCION QUE SE ACTIVA CUANDO SE CIERRA EL MODAL*/
				$("#idid").val("");
				//iNICIA BLOQUE PARA ANADIR CODIGO SEGUN SE NECESITE *************************************************************************************************
				$("#tipcueid").val("Activada");
		        $('select').material_select('destroy');
		    	$('select').material_select();
				//FINALIZA BLOQUE ANADIR CODIGO SEGUN SE NECESITE******************************************************************************************************
				$('#modal1').modal('close');
			}
		});
		/*FINALIZA BLOQUE DE CONFIGURACION DEL MODAL NUEVA CUENTA */
	});
	/*FINALIZA FUNCION READY PARA INICIALIZAR LOS ELEMENTOS */

	/*INICIA FUNCION GETNUMBER PARA ACTUALIZAR NUMEROS DE CUENTA */
	function getnumber(){
		$.ajax({
	        type:"post",
	        url: "php/Cuenta.php",
	        data:{acc:'getNumeroCuenta'},
	        success:function(responseText){
	        	$("#cueid").val(responseText);
	        }
	    });
	}
	/*FINALIZA FUNCION GETNUMBER PARA ACTUALIZAR NUMEROS DE CUENTA */

	/*INICIA FUNCION SUBMIT1 PARA GUARDAR Y MODIFICAR */
	function submit1(){
		if($("#idid").val() == ""){/*DATOS PARA CREAR NUEVO REGISTRO (CAMBIAR DEPENDIENDO DEL FORMULARIO A TRABAJAR) *************************************************/
	            datos = {
	            	cueid:$("#cueid").val(),
	            	asoid:$("#asoid").val(),
	            	fecape:$("#fecape").val(),
	            	mon:$("#mon").val(),
	            	tipcueid:$("#tipcueid").val(),
	            	est:$("#est").val(),
	            	acc:'set'
	            }
		}
		else{/*DATOS PARA MODIFICAR UN REGISTRO (SON LOS MISMOS QUE PARA CREAR NUEVO PERO AñADIENDO ID Y CAMBIA set A upd) *******************************************/
	            datos = {
	            	id:$("#idid").val(),
	            	fecape:$("#fecape").val(),
	            	mon:$("#mon").val(),
	            	tipcueid:$("#tipcueid").val(),
	            	est:$("#est").val(),
	            	acc:'upd'
	            }
		}
		/*DATOS PARA MODIFICAR UN REGISTRO (FIN DEL BLOQUE) ********************************************************************************************************/
		ejecutarajax(datos);
    	return false;
	}
	/*FINALIZA LA FUNCION SUBMIT1 PARA GUARDAR Y MODIFICAR */
	/*INICIA EL BLOQUE DEL BOTON NUEVA CUENTA DE LA TABLA ASOCIADOS*/
	function operateFormatter1(value, row, index) {
        return [
            '<a class="new ml10" href="javascript:void(0)" title="Nueva cuenta">',
                '<i class="material-icons">add</i>',
            '</a>'
        ].join('');
    }
/*FINALIZA EL BLOQUE DEL BOTON NUEVA CUENTA DE LA TABLA ASOCIADOS*/
/*INICIA EL BLOQUE DE LOS BOTONES MODIFICAR, ELIMINAR Y VER DE LA TABLA CUENTAS*/
	function operateFormatter2(value, row, index) {
        return [
            '<a class="edit ml10" href="javascript:void(0)" title="Modificar">',
                '<i class="material-icons">mode_edit</i>',
            '</a>',
            '&nbsp;<a class="remove ml10" href="javascript:void(0)" title="Eliminar">',
                '<i class="material-icons">delete</i>',
            '</a>',
            '&nbsp;<a class="view ml10" href="javascript:void(0)" title="Ver más">',
                '<i class="material-icons">info</i>',
            '</a>'
        ].join('');
    }
/*FINALIZA EL BLOQUE DE LOS BOTONES MODIFICAR, ELIMINAR Y VER DE LA TABLA CUENTAS*/
/*INICIA EL BLOQUE DE LAS ACCIONES DE LOS BOTONES MODIFICAR Y ELIMINAR DE LA TABLA*/
    window.operateEvents = {
/*INICIA ACCION DEL BOTON MODIFICAR (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
        'click .edit': function (e, value, row, index) {
        	/*CAMBIAR SEGUN EL FORMULARIO QUE SE TRABAJA, LOS NOMBRES DE CAMPO DE row. SON COMO EN LA BASE DE DATOS***************************************************/
        	$("#idid").val(JSON.stringify(row.cuenta_id).replace(/"/gi,''));
        	//$("#asoid").val(JSON.stringify(row.cuenta_asociadoid).replace(/"/gi,''));
        	$("#tit").val(JSON.stringify(row.cuenta_asociadonombre).replace(/"/gi,''));
        	$("#tit2").val(JSON.stringify(row.cuenta_asociadonombre).replace(/"/gi,''));
        	$("#fecape").val(JSON.stringify(row.cuenta_fechaapertura).replace(/"/gi,''));
            $("#mon").val(JSON.stringify(row.cuenta_monto).replace(/"/gi,''));
            $("#cueid").val(JSON.stringify(row.cuenta_id).replace(/"/gi,''));
            $("#mon").val(JSON.stringify(row.cuenta_monto).replace(/"/gi,''));
            $("#tipcueid").val(JSON.stringify(row.cuenta_tipocuentaid).replace(/"/gi,''));
            $("#est").val(JSON.stringify(row.cuenta_estado).replace(/"/gi,''));
        	/*CAMBIAR SEGUN EL FORMULARIO QUE SE TRABAJA, LOS NOMBRES DE CAMPO DE row. SON COMO EN LA BASE DE DATOS***************************************************/
        	$('select').material_select('destroy');
		    $('select').material_select();
		    document.getElementById("cueid").setAttribute("readonly", "");
		    document.getElementById("cueidbtn").setAttribute("disabled", "");
        	//$('label').addClass("active");
        	$('#modal2').modal('open');
        },
/*FINALIZA ACCION DEL BOTON MODIFICAR (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
/*INICIA ACCION DEL BOTON ELIMINAR (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
        'click .remove': function (e, value, row, index) {
        	/*CAMBIAR SEGUN EL FORMULARIO QUE SE TRABAJA, LOS NOMBRES DE CAMPO DE row. SON COMO EN LA BASE DE DATOS***********************************************/
            if(confirm("Realmente desea eliminar el registro de la cuenta "+JSON.stringify(row.cuenta_id).replace(/"/gi,''))){ /* CAMBIAR FRASE SEGUN LO QUE SE VA A ELIMINAR*/
            	datos = {
	            	id:JSON.stringify(row.cuenta_id).replace(/"/gi,''),
	            	acc:'del'
	            }
        	/*CAMBIAR SEGUN EL FORMULARIO QUE SE TRABAJA, LOS NOMBRES DE CAMPO DE row. SON COMO EN LA BASE DE DATOS***********************************************/
	            ejecutarajax(datos);
            }
        },
/*FINALIZA ACCION DEL BOTON ELIMINAR (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
/*INICIA ACCION DEL BOTON VIEW (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
        'click .view': function (e, value, row, index) {
        	alert("---"); /********************************************************************************************************/
        },
/*FINALIZA ACCION DEL BOTON VIEW (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
/*INICIA ACCION DEL BOTON NUEVA CUENTA (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
        'click .new': function (e, value, row, index) {
        	//alert("jajajaja"); /********************************************************************************************************/
        	$("#asoid").val(JSON.stringify(row.asociado_id).replace(/"/gi,''));
        	$("#tit").val(JSON.stringify(row.asociado_nombre).replace(/"/gi,''));
        	$("#tit2").val(JSON.stringify(row.asociado_nombre).replace(/"/gi,''));
        	getnumber();
        	//$('label').addClass("active");
        	$('#modal2').modal('open');
        }
/*FINALIZA ACCION DEL BOTON NUEVA CUENTA (COPIA LOS VALORES DEL REGISTRO A LOS CAMPOS DEL FORMULARIO MODAL)*/
    };
/*FINALIZA EL BLOQUE DE LAS ACCIONES DE LOS BOTONES MODIFICAR Y ELIMINAR DE LA TABLA*/
function ejecutarajax(datos){
	$.ajax({
        type:"post",
        url: "php/Cuenta.php",/*CAMBIAR LA RUTA DE ACUERDO AL FORMULARIO A TRABAJAR *****************************************************************************/
        data:datos,
        success:function(responseText){
        	if(/Registro/.test(responseText)){
        		$('.modal').modal('close');
        		alert(responseText);
        		$("#formulario")[0].reset();
        		$('#tabla1').bootstrapTable('refresh',{url:'php/Asociado.php?acc=getjsontabla'});/*CAMBIAR LA RUTA DE ACUERDO AL FORMULARIO A TRABAJAR ************/
        		$('#tabla2').bootstrapTable('refresh',{url:'php/Cuenta.php?acc=getjsontabla'});/*CAMBIAR LA RUTA DE ACUERDO AL FORMULARIO A TRABAJAR ************/
        		document.getElementById("buscar1").focus();
				$('html,body').animate({scrollTop:$("#buscar1").offset().top},{duration:"slow"});
        	}
        	else{
        		alert(responseText);
        	}
        }
    });
}
</script>