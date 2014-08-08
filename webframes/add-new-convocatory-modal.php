<div class="modal fade" id="add-new-legislation-modal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Agregar Nueva Convocatoria</h4>
			</div>
			<form class="form-horizontal" role="form">
				<div class="modal-body">

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Tipo</label>
						<div class="col-sm-9">
							<select class="form-control">
								<option selected="selected">Seleccione</option>
								<option>CAS</option>
								<option>Ley N° 276</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Dependencia</label>
						<div class="col-sm-9">
							<select class="form-control">
								<option selected="selected">Seleccione</option>
								<option>Adm. Central</option>
								<option>Facultades</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Número</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" id="inputPassword3"
								placeholder="Número">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Nombre</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputPassword3"
								placeholder="Nombre">
						</div>
					</div>
					<div class="form-group form-group-sm">
						<label for="inputPassword3" class="col-sm-3 control-label">Vigencia
							Convocatoria</label>
						<div class="col-sm-9">
							<input type="text" id="callDate" name="callDate"
								data-bind="editableText: false">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Seleccione
							Archivo</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="file" accept="application/pdf" id="fileToUpload"
									name="fileToUpload" hidden="true"
									data-bind="visible:false, value:fileToUpload"> <input
									id="fileInputText" name="fileInputText" type="text"
									class="form-control" placeholder="Archivo"
									data-bind="value:fileToUpload, enable:false"> <span
									class="input-group-btn">
									<button id="chooseFile" class="btn btn-default" type="button">
										<i class="glyphicon glyphicon-file"></i> Seleccione
									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include("choose-file.php");?>
<script>
$(document).ready(function() {
    kendo.culture("es");
    var datepicker = $("#callDate").kendoDatePicker({
    	format: kendo.culture().calendar.patterns.d,

    	culture: "es",
    });
});

</script>