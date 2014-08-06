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
			<div class="modal-body">
				<form class="form-horizontal" role="form" method="post"
					enctype="multipart/form-data" action="upload-file-FTP.php">
<!-- 					<div class="form-group"> -->
<!-- 						<label for="inputEmail3" class="col-sm-2 control-label">Tipo</label> -->
<!-- 						<div class="col-sm-10"> -->
<!-- 							<select class="form-control"> -->
<!-- 								<option selected="selected">Seleccione</option> -->
<!-- 								<option>Resoluciones</option> -->
<!-- 								<option>Leyes</option> -->
<!-- 								<option>Decretos</option> -->
<!-- 								<option>Directivas</option> -->
<!-- 								<option>Otras Normatividades</option> -->
<!-- 							</select> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 					<div class="form-group"> -->
<!-- 						<label for="inputPassword3" class="col-sm-2 control-label">Nombre</label> -->
<!-- 						<div class="col-sm-10"> -->
<!-- 							<input type="text" class="form-control" id="inputPassword3" -->
<!-- 								placeholder="Nombre"> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 					<div class="form-group"> -->
<!-- 						<label for="inputPassword3" class="col-sm-2 control-label">Promulgación</label> -->
<!-- 						<div class="col-sm-10"> -->
<!-- 							<input type="text" id="inputLegislatioDate" -->
<!-- 								data-bind="editableText: false"> -->
<!-- 						</div> -->
<!-- 					</div> -->
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Seleccione
							Archivo</label>
						<div class="col-sm-10">
							<div class="input-group">
								<input type="file" accept="application/pdf" 
									id="fileInput" name="fileInput"  >
<!-- 								<input id="fileInputText" name="fileInputText" type="text" class="form-control" -->
<!-- 									placeholder="Archivo"  -->
<!-- 									data-bind="value:filePath"> <span class="input-group-btn"> -->
<!-- 									<button id="chooseFile" class="btn btn-default" type="button"> -->
<!-- 										<i class="glyphicon glyphicon-file"></i> Seleccione -->
<!-- 									</button> -->
<!-- 									<button id="1e" class="btn btn-primary" type="button"> -->
<!-- 										<i class="glyphicon glyphicon-cloud-upload"></i> Cargar -->
<!-- 									</button> -->
<!-- 								</span> -->
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" value="submit">Agregar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<?php include("choose-file.php");?>
<script>
$(document).ready(function() {
    // create DatePicker from input HTML element
    kendo.culture("es");
    var datepicker = $("#inputLegislatioDate").kendoDatePicker({
    	format: kendo.culture().calendar.patterns.d,
//     	min: new Date(1950, 0, 1),
    	culture: "es",
//     	editable: false
    });

//     datepicker.readonly();
});


</script>