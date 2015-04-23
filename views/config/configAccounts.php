<script src="js/jquery-1.10.2.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="../posclasico/js/date.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="../posclasico/js/datepicker_cash.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src="js/moment.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script src='js/select2/select2.min.js'></script>
<script language='javascript'>
function valida(cont)
{
	//alert($("#proveedores").val());
	if($("#clientes").val() == '' || !$("#clientes").val())
	{
		alert('Agregue una cuenta a clientes o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#clientes').focus();
    	return false;
	}

	if($("#ventas").val() == '' || !$("#ventas").val())
	{
		alert('Agregue una cuenta a ventas o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#ventas').focus();
    	return false;
	}

	if($("#IVA").val() == '' || !$("#IVA").val())
	{
		alert('Agregue una cuenta a IVA o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#IVA').focus();
    	return false;
	}

	if($("#caja").val() == '' || !$("#caja").val())
	{
		alert('Agregue una cuenta a caja o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#caja').focus();
    	return false;
	}

	/*if($("#TR").val() == '' || !$("#TR").val())
	{
		alert('Agregue una cuenta a tarjeta de regalo o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#TR').focus();
    	return false;
	}*/

	if($("#bancos").val() == '' || !$("#bancos").val())
	{
		alert('Agregue una cuenta a bancos o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#bancos').focus();
    	return false;
	}

	/*if($("#compras").val() == '' || !$("#compras").val())
	{
		alert('Agregue una cuenta a compras o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#compras').focus();
    	return false;
	}

	if($("#devoluciones").val() == '' || !$("#devoluciones").val())
	{
		alert('Agregue una cuenta a devoluciones o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#devoluciones').focus();
    	return false;
	}*/

	if($("#capital").val() == '' || !$("#capital").val())
	{
		alert('Agregue una cuenta a capital o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#capital').focus();
    	return false;
	}

	/*if($("#flujo").val() == '' || !$("#flujo").val())
	{
		alert('Agregue una cuenta a flujo o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#flujo').focus();
    	return false;
	}*/
	
	if($("#proveedores").val() == '' || !$("#proveedores").val())
	{
		alert('Agregue una cuenta a proveedores o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#proveedores').focus();
    	return false;
	}
	if($("#utilidad").val() == '' || !$("#utilidad").val())
	{
		alert('Agregue una cuenta a Utilidad o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#utilidad').focus();
    	return false;
	}
	if($("#perdida").val() == '' || !$("#perdida").val())
	{
		alert('Agregue una cuenta para Perdida o cancele la operacion')
    	// seleccionamos el campo incorrecto
    	$('#perdida').focus();
    	return false;
	}


}
</script>
<link rel="stylesheet" href="js/select2/select2.css">
<style>
a{
	display:none;
}
</style>
<?php



	$optionsList = "<option value='-1'>NINGUNO</option>";
	while($Cuentas = $Accounts->fetch_array())
	{
		$optionsList .= "<option value='".$Cuentas['account_id']."'>".$Cuentas['description']."(".$Cuentas['manual_code'].")</option>";
	}

?>
<form name='newCompany' method='post' action='index.php?c=Config&f=saveConfigAccounts' onsubmit='return valida(this)'>
	<div id='title'>Asignacion de Cuentas.</div>
	<table>
		<tr>
			<td>Nombre de la organizaci&oacute;n: </td>
			<td><input type='text' class="nminputtext" name='NameCompany' size='50' readonly value='<?php echo $name['nombreorganizacion']; ?>'></td>
		</tr>
		<tr>
			<td>Ejercicio Vigente: </td>
			<td><input type='text'  class="nminputtext" name='NameExercise' size='50' readonly value='<?php echo $data['EjercicioActual']; ?>'></td>
		</tr>
	</table>
	<div class="lateral">
		<div class='nmsubtitle'>Selecciona la cuenta de mayor</div>
		<table>
			<tr>
				<td>
					<label for="clientes">Cuenta de Clientes:</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showClientes" data-id='clientes' value='Asignar cuenta de clientes'>
					<div id="hideclientes">
						<select name='clientes' id='clientes' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelclientes" data-id="clientes" value='Cancelar'>
					</div>
				</td>
				<td><label title='nada' style='font-wenght:bold;'>?</label></td>
			</tr>
			<tr>
				<td>
					<label for="ventas">Cuenta de Ventas:</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showVentas" data-id='ventas' value='Asignar cuenta de ventas'>
					<div id="hideventas">
						<select name='ventas' id='ventas' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelventas" data-id="ventas" value='Cancelar'>
					</div>
				</td>
				<td><label title='nada' style='font-wenght:bold;'>?</label></td>
			</tr>
			<tr>
				<td>
					<label for="IVA">Cuenta de IVA:</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showIva" data-id='IVA' value='Asignar cuenta de IVA'>
					<div id="hideIVA">
						<select name='IVA' id='IVA' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelIVA" data-id="IVA" value='Cancelar'>
					</div>
				</td>
				<td><label title='nada' style='font-wenght:bold;'>?</label></td>
			</tr>
			<tr>
				<td>
					<label for="caja">Cuenta de Caja:</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showCaja" data-id='caja' value='Asignar cuenta de Caja'>
					<div id="hidecaja">
						<select name='caja' id='caja' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelcaja" data-id="caja" value='Cancelar'>
					</div>
				</td>
				<td><label title='nada' style='font-wenght:bold;'>?</label></td>
			</tr>
			<!--<tr>
				<td>
					<label for="TR">Cuenta de Tarjetas de regalo:</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showTr" data-id='TR' value='Asignar cuenta de tarjeta de regalo'>
					<div id="hideTR">
						<select name='TR' id='TR' class='s2'>
							<?php
								//echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelTR" data-id="TR" value='Cancelar'>
					</div>
				</td>
			</tr>-->
			<tr>
				<td>
					<label for="bancos">Cuenta de Bancos:</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showBancos" data-id='bancos' value='Asignar cuenta de Bancos'>
					<div id="hidebancos">
						<select name='bancos' id='bancos' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelbancos" data-id="bancos" value='Cancelar'>
					</div>
				</td>
				<td><label title='nada' style='font-wenght:bold;'>?</label></td>
			</tr>
			<!--<tr>
				<td>
					<label for="compras">Cuenta de Compras:</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showCompras" data-id='compras' value='Asignar cuenta de Compras'>
					<div id="hidecompras">
						<select name='compras' id='compras' class='s2'>
							<?php
							//	echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelcompras" data-id="compras" value='Cancelar'>
					</div>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="devoluciones">Cuenta de Devoluciones</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showDevoluciones" data-id="devoluciones" value='Asignar Cuenta de Devoluciones'>
					<div id="hidedevoluciones">
						<select name='devoluciones' id='devoluciones' class='s2'>
							<?php
								//echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="canceldev" data-id="devoluciones" value='Cancelar'>
					</div>
				</td>
			</tr>-->
			<tr>
				<td>
					<label for="capital">Cuenta de Capital (Saldos ejercicios)</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showCapital" data-id="capital" value='Asignar Cuenta de Saldo ejercicios'>
					<div id="hidecapital">
						<select name='capital' id='capital' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelcap" data-id="capital" value='Cancelar'>
					</div>
				</td>
				<td><label title='nada' style='font-wenght:bold;'>?</label></td>
			</tr>
			<!--<tr>
				<td>
					<label for="flujo">Cuenta de flujo de efectivo</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showFlujo" data-id="flujo" value='Asignar Cuenta de Flujo de efectivo'>
					<div id="hideflujo">
						<select name='flujo' id='flujo' class='s2'>
							<?php
								//echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelflu" data-id="flujo" value='Cancelar'>
					</div>
				</td>
			</tr>-->
			
			<tr>
				<td>
					<label for="proveedores">Cuenta de Proveedores</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showProveedores" data-id="proveedores" value='Asignar Cuenta de Proveedores'>
					<div id="hideproveedores">
						<select name='proveedores' id='proveedores' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelpro" data-id="proveedores" value='Cancelar'>
					</div>
				</td>
				<td><a href="javascript:alert('nada de nada')">?</a></td>
			</tr>
			<!-- nuevo para utilidad y perdida -->
			<tr>
				<td>
					<label for="utilidad">Utilidad en cambios</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showUtilidad" data-id="utilidad" value='Asignar Cuenta de Utilidad'>
					<div id="hideutilidad">
						<select name='utilidad' id='utilidad' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelutilidad" data-id="utilidad" value='Cancelar'>
					</div>
				</td>
				<td></td>
			</tr>	
			
			<tr>
				<td>
					<label for="perdida">Perdida en cambios</label>
				</td>
				<td>
					<input type='button' class="nminputbutton_color2" id="showPerdida" data-id="perdida" value='Asignar Cuenta de Perdida'>
					<div id="hideperdida">
						<select name='perdida' id='perdida' class='s2'>
							<?php
								echo $optionsList;
							?>
						</select>
						<input type="button" class="nminputbutton_color2" id="cancelperdida" data-id="perdida" value='Cancelar'>
					</div>
				</td>
				<td></td>
			</tr>	
				
		</table>
	</div>
	<div id='buttons'>
		<input type='submit' name='save'  class="nminputbutton" value='Guardar'>
	</div>
</form>
<script>
	$(document).ready(function(){
		// Inicia seccion de asignacion de valores iniciales
			/*jshint ignore:start*/
				<?php
					$datos  = ( $data['CuentaClientes'] 	 != -1) ? "$( '#clientes'     ).val( " . $data['CuentaClientes'] . ");" : "";
					$datos .= ( $data['CuentaVentas']  		 != -1) ? "$( '#ventas'       ).val( " . $data['CuentaVentas']   . ");" : "";
					$datos .= ( $data['CuentaIVA']  		 != -1) ? "$( '#IVA'          ).val( " . $data['CuentaIVA']      . ");" : "";
					$datos .= ( $data['CuentaCaja']  		 != -1) ? "$( '#caja'         ).val( " . $data['CuentaCaja']     . ");" : "";
					$datos .= ( $data['CuentaTR']  			 != -1) ? "$( '#TR'           ).val( " . $data['CuentaTR']     	 . ");" : "";
					$datos .= ( $data['CuentaBancos']  		 != -1) ? "$( '#bancos'       ).val( " . $data['CuentaBancos']   . ");" : "";
					$datos .= ( $data['CuentaCompras']  	 != -1) ? "$( '#compras'      ).val( " . $data['CuentaCompras']  . ");" : "";
					$datos .= ( $data['CuentaDev']  		 != -1) ? "$( '#devoluciones' ).val( " . $data['CuentaDev']      . ");" : "";
					$datos .= ( $data['CuentaSaldos']  		 != -1) ? "$( '#capital' 	  ).val( " . $data['CuentaSaldos']   . ");" : "";
					$datos .= ( $data['CuentaFlujoEfectivo'] != -1) ? "$( '#flujo'		  ).val( " . $data['CuentaFlujoEfectivo'] . ");" : "";
					$datos .= ( $data['CuentaProveedores']   != -1) ? "$( '#proveedores'  ).val( " . $data['CuentaProveedores']   . ");" : "";
					$datos .= ( $data['CuentaUtilidad']   != -1) ? "$( '#utilidad'  ).val( " . $data['CuentaUtilidad']   . ");" : "";
					$datos .= ( $data['CuentaPerdida']   != -1) ? "$( '#perdida'  ).val( " . $data['CuentaPerdida']   . ");" : "";

					echo $datos;
				?>
			/* jshint ignore:end*/
		// Termina seccion de asignacion de valores iniciales

		// Inicia seccion de control de botones de modificacion
			$("select.s2").each(function(){
				if( parseInt( $(this).val(),10 ) !== -1 )
				{
					$(this).attr("disabled",'disabled').after("<input type='hidden' name='" + $(this).attr("name") + "' value='" + $(this).val() + "'>");
					$(":button[data-id=" + $(this).attr("id") + "]").remove();
				}
				else
				{
					$("#compras,#ventas,#devoluciones,#clientes,#IVA,#caja,#TR,#bancos,#capital,#flujo,#proveedores,#utilidad,#perdida").select2({"width":"300px"});
					$("#hide"+$(this).attr("id")).hide();
				}
			});
		// Termina seccion de control de botones de modificacion

		// Inicia seccion de boton de modificacion de cuentas
			$("#showCompras,#showVentas,#showDevoluciones,#showClientes,#showIva,#showCaja,#showTr,#showBancos,#showCapital,#showFlujo,#showProveedores,#showPerdida,#showUtilidad").click(function(){
				if(confirm("Esta seguro de asignar la cuenta de " + $(this).data("id") + "?.\nEsta accion no podra ser modificada en ningun momento."))
				{
					$("#hide" + $(this).data("id") ).show();
					$( "#" + $(this).data('id') + " option[value=-1]" ).prop("disabled",true);
					$( "#" + $(this).data('id') ).select2({"width": "300px"});
					$(this).hide();
				}
			});
		// Termina seccion de boton de modificacion de cuentas

		// Inicia seccion de cancelacion de modificacion de cuentas
			$("#cancelcompras,#cancelventas,#canceldev,#cancelclientes,#cancelIVA,#cancelcaja,#cancelTR,#cancelbancos,#cancelcap,#cancelflu,#cancelpro,#cancelutilidad,#cancelperdida").click(function(){
				var type = ucFirst($(this).data("id"));
				$("#show" + type).show();
				$("#hide" + $(this).data("id") ).hide();
				$("#" + $(this).data('id') + " option[value=-1]").prop("disabled",false);
				$("#" + $(this).data('id') ).select2('destroy').select2({'width':'300px'});
				$('#' + $(this).data('id') ).val('-1');
			});
		// Termina seccion de cancelacion de modificacion de cuentas

		// Inicia Validacion de desigualdad
			$("#compras,#ventas,#devoluciones,#clientes,#IVA,#caja,#TR,#bancos,#capital,#flujo,#proveedores,#perdida,#utilidad").on('change',function(){
				//var compras = $("#compras").val();
				var compras = 0;
				var ventas  = $("#ventas").val();
				var IVA  = $("#IVA").val();
				var caja  = $("#caja").val();
//				var TR  = $("#TR").val();
				var TR  = 0;
				var bancos = $("#bancos").val();
				//var dev = $("#devoluciones").val();
				var dev = 0;
				var clientes = $("#clientes").val();
				var capital = $("#capital").val();
				//var flujo = $("#flujo").val();
				var flujo = 0;
				var proveedores = $('#proveedores').val();
				var utilidad = $('#utilidad').val();
				var perdida = $('#perdida').val();
				
				var id = $(this).attr('id');
				
				switch(id)
				{
					// en todas se quito la compracion con devoluciones || compras == devoluciones 
					case "compras":
					alert(compras)
						if(compras == ventas || compras == clientes || compras == IVA || compras == caja || compras == TR || compras == bancos || compras==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						} 
						break;
					case "ventas":
						if(ventas == compras  || ventas == clientes || ventas == IVA || ventas == caja || ventas == TR || ventas == bancos || ventas==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;
					case "IVA":
						if(IVA == compras || IVA == clientes  || IVA == ventas || IVA == caja || IVA == TR || IVA == bancos || IVA==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;
					case "devoluciones":
						if(devoluciones == ventas || devoluciones == compras || devoluciones == clientes || devoluciones == IVA || devoluciones == caja || devoluciones == TR || devoluciones == bancos || devoluciones==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;
					case "clientes":
						if(clientes == ventas || clientes == compras  || clientes == IVA || clientes == caja || clientes == TR || clientes == bancos || clientes==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;	

					case "caja":
						
						if(caja == ventas || caja == compras || caja == IVA || caja == TR || caja == bancos || caja == clientes || caja==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;	
						
					case "TR":
						if(TR == ventas || TR == compras || TR == IVA || TR == caja || TR == bancos || TR == clientes || TR==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;	
						
					case "bancos":
						if(bancos == ventas || bancos == compras || bancos == IVA || bancos == TR || bancos == caja || bancos == clientes || bancos==proveedores)
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;	
					case "proveedores":
						if(proveedores == ventas || proveedores == compras  || proveedores == IVA || proveedores == TR || proveedores == caja || proveedores == clientes || proveedores == bancos )
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;
					case "utilidad":
						if(utilidad == ventas || utilidad == compras  || utilidad == IVA || utilidad == TR || utilidad == caja || utilidad == clientes || utilidad == bancos || utilidad==proveedores || utilidad==perdida )
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;
					case "perdida":
				
					 //ver q entre aki y valide la cuenta repetida
						if(perdida == ventas || perdida == compras  || perdida == IVA || perdida == TR || perdida == caja || perdida == clientes || perdida == bancos || perdida==proveedores || perdida==utilidad )
						{
							alert("No debe Elegir cuentas repetidas para esta operacion. Cancelando...");
							$("#cancel" + id).click();
						}
						break;				
				}
			});
		// Termina Validacion de desigualdad		
	});
	function ucFirst(string) {
		return string.substring(0, 1).toUpperCase() + string.substring(1).toLowerCase();
    }
</script>