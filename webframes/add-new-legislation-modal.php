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
								id="legislationType" data-bind="value: legislationTypeId, foreach: headerViewModel.legislationTypes">
									<!-- ko if: ($index() == '0') -->
									<option data-bind="text: 'Seleccione'"></option>	
									<!-- /ko -->
									<option data-bind="value: id, text: name"></option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Número</label>
						<div class="col-md-7">
							<input type="text" name="legislationNumber" id="legislationNumber"
								class="form-control" data-bind="value : legislationNumber" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Título</label>
						<div class="col-md-9">
							<textarea id="legislationName" name="legislationName"
								class="form-control" rows="5" placeholder="Título"
								data-bind="value: legislationTitle"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Descripción</label>
						<div class="col-md-9">
							<textarea id="legislationDescription" name="legislationDescription"
								class="form-control" rows="5" placeholder="Descripción"
								data-bind="value: legislationDescription"></textarea>
						</div>
					</div>
					<div class="form-group" data-toggle="tooltip"
						title="Esta fecha corresponde a la publicación de la Normativa">
						<label class="col-md-3 control-label">Promulgación</label>
						<div class="col-md-9">
							<input type="text" id="legislationDate" name="legislationDate"
								data-bind="editableText: false, value: legislationPublicationDate">
						</div>
					</div>
					<div class="form-group" data-toggle="tooltip"
						title="Seleccione un archivo de tipo PDF (5 Mb máximo)">
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
	        		if( Math.round($("#fileToUpload")[0].files[0].size/1024).toFixed(0) > 6000 ){
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
            decreeTypeId: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            legislationNumber: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        max: 80,
                        message: 'The director name must be less than 80 characters long'
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
                    	message: 'El archivo debe tener un tamaño menor a 5 Mb'
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
	headerViewModel.legislationNumber(null);
	headerViewModel.fileToUpload(null);
	headerViewModel.decreeTypeId(null);
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