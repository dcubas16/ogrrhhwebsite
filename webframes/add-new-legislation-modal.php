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
			<form id="addNewLegislation" method="post"
				enctype="multipart/form-data" action="upload-file-FTP.php"
				class="form-horizontal">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Tipo</label>
						<div class="col-md-9 selectContainer">
							<select class="form-control" name="legislationType"
								id="legislationType" data-bind="value: legislationTypeId">
								<option value="">Seleccione</option>
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
						<label class="col-md-3 control-label">T�tulo</label>
						<div class="col-md-9">
							<textarea id="legislationName" name="legislationName"
								class="form-control" rows="9" placeholder="T�tulo"
								data-bind="value: legislationTitle"></textarea>
						</div>
					</div>
					<div class="form-group" data-toggle="tooltip"
						title="Esta fecha corresponde a la publicaci�n de la Normativa">
						<label class="col-md-3 control-label">Promulgaci�n</label>
						<div class="col-md-9">
							<input type="text" id="legislationDate" name="legislationDate"
								data-bind="editableText: false, value: legislationPublicationDate">
						</div>
					</div>
					<div class="form-group" data-toggle="tooltip"
						title="Seleccione un archivo de tipo PDF (5 Mb m�ximo)">
						<label class="col-md-3 control-label">Seleccione Archivo</label>
						<div class="col-md-8">
							<div class="input-group">
								<input type="file" accept="application/pdf" id="fileToUpload"
									name="fileToUpload" hidden="true"
									data-bind="visible:false, value: fileToUpload" /> <input
									id="fileInputText" name="fileInputText" type="text"
									class="form-control" placeholder="Archivo"
									data-bind="value: fileToUpload(), fireChange: true" readonly /> <span
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
	kendo.culture("es-PE");
    var datepicker = $("#legislationDate").kendoDatePicker({
    	format: kendo.culture().calendar.patterns.d,
    	culture: "es-PE",
    	change: onChange
    });

    $('div[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'top',
    });
	
	$.fn.bootstrapValidator.validators.fileSize = {
	        validate: function(validator, $field, options) {
	        	if( $("#fileToUpload")[0].files[0] != undefined){
	        		if( Math.round($("#fileToUpload")[0].files[0].size/1024).toFixed(0) > 5000 ){
	        			return false;
	        		}
	        		return true;	
	        	}
	        }
	};

	$('#addNewLegislation').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	legislationType: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            legislationName: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        max: 500,
                        message: 'The director name must be less than 80 characters long'
                    }
                }
            },
            legislationDate: {
                group: '.col-md-1',
                trigger: 'change',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        max: 10,
                        message: 'The director name must be less than 80 characters long'
                    }
                }
            },
            fileInputText: {
                group: '.col-md-1',
                trigger: 'change',
                validators: {
                	fileSize:{
                    	message: 'El archivo debe tener un tama�o menor a 5 Mb'
                    },
                	notEmpty: {
                        message: 'Este campo es requerido'
                    }
                    
                }
            }
        }
    });
});

$(function(){
	$("span.k-datepicker").css({"height": "31px", "padding-right": "0px"});
});

$('#add-new-legislation-modal').on('hidden.bs.modal', function (e) {
	headerViewModel.legislationTypeId(null);
	headerViewModel.legislationTitle(null);
	headerViewModel.legislationPublicationDate(null);
	headerViewModel.fileToUpload(null);
	$("#addNewLegislation").data('bootstrapValidator').resetForm();
})

function onChange(){
	$("#addNewLegislation").data('bootstrapValidator')
    .updateStatus("legislationDate", 'NOT_VALIDATED')
    .validateField("legislationDate");
}

$('#fileInputText').on('change', function(){
	$("#addNewLegislation").data('bootstrapValidator')
    .updateStatus("fileInputText", 'NOT_VALIDATED')
    .validateField("fileInputText");
});
</script>