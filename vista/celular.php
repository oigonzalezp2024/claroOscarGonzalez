<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_celular.js"></script>

    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tabla"></div>
	</div>
	<!-- MODAL PARA INSERTAR REGISTROS -->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
		    </div>
		    <div class="modal-body">
			<label for="id_celular" for="">id_celular</label>
			<input type="number" id="id_celular" class="form-control input-sm" required="">
			<label for="celularNombre">celularNombre</label>
			<textarea id="celularNombre" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularPrecioContado">celularPrecioContado</label>
			<textarea id="celularPrecioContado" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularPrecioCuotas">celularPrecioCuotas</label>
			<textarea id="celularPrecioCuotas" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularValorCuota">celularValorCuota</label>
			<textarea id="celularValorCuota" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularTamPantalla">celularTamPantalla</label>
			<textarea id="celularTamPantalla" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularCamaraP">celularCamaraP</label>
			<textarea id="celularCamaraP" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularCamaraS">celularCamaraS</label>
			<textarea id="celularCamaraS" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularVideo">celularVideo</label>
			<textarea id="celularVideo" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularCapMemoInterna">celularCapMemoInterna</label>
			<textarea id="celularCapMemoInterna" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularCapMemoRAM">celularCapMemoRAM</label>
			<textarea id="celularCapMemoRAM" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularBateria">celularBateria</label>
			<textarea id="celularBateria" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularTiempoCarga">celularTiempoCarga</label>
			<textarea id="celularTiempoCarga" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularSistemaOperativo">celularSistemaOperativo</label>
			<textarea id="celularSistemaOperativo" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularFuente">celularFuente</label>
			<textarea id="celularFuente" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularImagen">celularImagen</label>
			<textarea id="celularImagen" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label for="celularcasa">celularcasa</label>
			<textarea id="celularcasa" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
			    Agregar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<!-- MODAL PARA EDICION DE DATOS-->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
		    </div>
		    <div class="modal-body">
			<input type="number" hidden="" id="id_celularu">
			<label for="">celularNombre</label>
			<textarea id="celularNombreu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularPrecioContado</label>
			<textarea id="celularPrecioContadou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularPrecioCuotas</label>
			<textarea id="celularPrecioCuotasu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularValorCuota</label>
			<textarea id="celularValorCuotau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularTamPantalla</label>
			<textarea id="celularTamPantallau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularCamaraP</label>
			<textarea id="celularCamaraPu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularCamaraS</label>
			<textarea id="celularCamaraSu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularVideo</label>
			<textarea id="celularVideou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularCapMemoInterna</label>
			<textarea id="celularCapMemoInternau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularCapMemoRAM</label>
			<textarea id="celularCapMemoRAMu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularBateria</label>
			<textarea id="celularBateriau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularTiempoCarga</label>
			<textarea id="celularTiempoCargau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularSistemaOperativo</label>
			<textarea id="celularSistemaOperativou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularFuente</label>
			<textarea id="celularFuenteu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularImagen</label>
			<textarea id="celularImagenu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label for="">celularcasa</label>
			<textarea id="celularcasau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
			    Actualizar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_celular.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_celular = $('#id_celular').val();
		    celularNombre = $('#celularNombre').val();
		    celularPrecioContado = $('#celularPrecioContado').val();
		    celularPrecioCuotas = $('#celularPrecioCuotas').val();
		    celularValorCuota = $('#celularValorCuota').val();
		    celularTamPantalla = $('#celularTamPantalla').val();
		    celularCamaraP = $('#celularCamaraP').val();
		    celularCamaraS = $('#celularCamaraS').val();
		    celularVideo = $('#celularVideo').val();
		    celularCapMemoInterna = $('#celularCapMemoInterna').val();
		    celularCapMemoRAM = $('#celularCapMemoRAM').val();
		    celularBateria = $('#celularBateria').val();
		    celularTiempoCarga = $('#celularTiempoCarga').val();
		    celularSistemaOperativo = $('#celularSistemaOperativo').val();
		    celularFuente = $('#celularFuente').val();
		    celularImagen = $('#celularImagen').val();
		    celularcasa = $('#celularcasa').val();
		    agregardatos(id_celular, celularNombre, celularPrecioContado, celularPrecioCuotas, celularValorCuota, celularTamPantalla, celularCamaraP, celularCamaraS, celularVideo, celularCapMemoInterna, celularCapMemoRAM, celularBateria, celularTiempoCarga, celularSistemaOperativo, celularFuente, celularImagen, celularcasa);
		});
		$('#actualizadatos').click(function () {
		    modificarCliente();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
