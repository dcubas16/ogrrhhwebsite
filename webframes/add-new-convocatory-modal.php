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
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
						<div class="col-sm-10">
							<select class="form-control">
								<option selected="selected">Seleccione</option>
								<option>CAS</option>
								<option>Otros</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword3"
								placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Vigencia</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword3"
								placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Seleccione Archivo</label>
						<div class="col-sm-10">
 							<div class="input-group">
 								<input type="file" hidden="true" id="fileInput" data-bind="value:filePath" style="display: none">
								<input id="fileInputText" type="text" class="form-control" placeholder="Archivo" disabled="disabled" data-bind="value:filePath"> <span
									class="input-group-btn">
								<button id="chooseFile" class="btn btn-default" type="button"><i class="glyphicon glyphicon-file"></i> Seleccione</button>
								<button id="1e" class="btn btn-primary" type="button"><i class="glyphicon glyphicon-cloud-upload"></i> Cargar</button>
								</span>
							</div>
 						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Agregar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<?php include("choose-file.php");?>