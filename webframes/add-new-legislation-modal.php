<div class="modal fade" id="add-new-legislation-modal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Agregar Nueva Normatividad</h4>
			</div>
			<form class="form-horizontal" role="form" method="post"
				enctype="multipart/form-data" action="upload-file-FTP.php">
				<div class="modal-body">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
						<div class="col-sm-10">
							<select class="form-control" name="legislationType"
								id="legislationType">
								<option value="0" selected="selected">Seleccione</option>
								<option value="1">Leyes</option>
								<option value="2">Decretos</option>
								<option value="3">Reglamentos</option>
								<option value="4">Directivas</option>
								<option value="5">Resoluciones</option>
								<option value="6">Otras Normatividades</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Título</label>
						<div class="col-sm-10">
							<textarea id="legislationName" name="legislationName" class="form-control" rows="3" placeholder="Titulo"></textarea>
<!-- 							<input type="text" class="form-control" id="legislationName" -->
<!-- 								name="legislationName" placeholder="Nombre"> -->
						</div>
					</div>
					<div class="form-group form-group-sm">
						<label for="inputPassword3" class="col-sm-2 control-label">Promulgación</label>
						<div class="col-sm-10">
							<input type="text" id="legislationDate" name="legislationDate"
								data-bind="editableText: false">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Seleccione
							Archivo</label>
						<div class="col-sm-10">
							<div class="input-group">
								<input type="file" accept="application/pdf" id="fileToUpload"
									name="fileToUpload" hidden="true"
									data-bind="visible:false, value:fileToUpload"> 
								<input
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
    var datepicker = $("#legislationDate").kendoDatePicker({
    	format: kendo.culture().calendar.patterns.d,

    	culture: "es",
    });
});

</script>