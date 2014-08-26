<div class="modal fade" id="add-new-convocatory-modal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Agregar Nueva Convocatoria</h4>
			</div>
			<form id="addNewWorkCall" method="post" class="form-horizontal"
				enctype="multipart/form-data" action="upload-convocatory-FTP.php">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Tipo</label>
						<div class="col-md-9 selectContainer">
							<select name="convocatory_type_id" id="convocatory_type_id"
								class="form-control" data-bind="value:convocatoryTypeId">
								<option value="">Seleccione</option>
								<option value="1">CAS</option>
								<option value="2">Régimen 276</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Dependencia</label>
						<div class="col-md-9 selectContainer">
							<select name="dependency_id" id="dependency_id"
								class="form-control" data-bind="value : dependencyId">
								<option value="">Seleccione</option>
								<option value="1">Adm. Central</option>
								<option value="2">Facultades</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Número</label>
						<div class="col-md-4">
							<input type="number" name="number" id="number"
								class="form-control" data-bind="value : convocatoryNumber" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Título</label>
						<div class="col-md-9">
							<textarea id="title" name="title" class="form-control" rows="9"
								data-bind="value : convocatoryTitle"></textarea>
						</div>
					</div>
					<div class="form-group" data-toggle="tooltip"
						title="Esta fecha corresponde al último día que se reciben los C.V.">
						<label class="col-md-3 control-label">Vigencia Convocatoria</label>
						<div class="col-md-5">
							<input type="text" name="life_date" id="life_date"
								class="form-control" data-bind="editableText: false, value : convocatoryLifeTime" />
						</div>
					</div>
					<div class="form-group" data-toggle="tooltip"
						title="Seleccione un archivo de tipo PDF (5 Mb máximo)">
						<label class="col-md-3 control-label">Seleccione Archivo</label>
						<div class="col-md-8">
							<div class="input-group">
								<input type="file" accept="application/pdf" id="fileToUpload"
									name="fileToUpload" hidden="true"
									data-bind="visible:false, value:fileToUpload" /> <input
									id="fileInputText" name="fileInputText" type="text"
									class="form-control" placeholder="Archivo"
									data-bind="value:fileToUpload(), fireChange: true" readonly /> <span
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
	    var datepicker = $("#life_date").kendoDatePicker({
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
	
    $('#addNewWorkCall').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	convocatory_type_id: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            dependency_id: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            number: {
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
            title: {
                validators: {
                	 notEmpty: {
                         message: 'Este campo es requerido'
                     },
                    stringLength: {
                        max: 500,
                        message: 'The review must be less than 500 characters long'
                    }
                }
            },
            life_date: {
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
                	notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    fileSize:{
                    	message: 'El archivo debe tener un tamaño menor a 5 Mb'
                    }
                }
            }
        }
    });
});

$(function(){
	$("span.k-datepicker").css({"height": "31px", "padding-right": "0px"});
});

$('#add-new-convocatory-modal').on('hidden.bs.modal', function (e) {
	headerViewModel.convocatoryTypeId(null);
	headerViewModel.dependencyId(null);
	headerViewModel.convocatoryNumber(null);
	headerViewModel.convocatoryTitle(null);
	headerViewModel.convocatoryLifeTime(null);
	headerViewModel.fileToUpload(null);
	$("#addNewWorkCall").data('bootstrapValidator').resetForm();
})

function onChange(){
	$("#addNewWorkCall").data('bootstrapValidator')
    .updateStatus("life_date", 'NOT_VALIDATED')
    .validateField("life_date");
}

$('#fileInputText').on('change', function(){
	$("#addNewWorkCall").data('bootstrapValidator')
    .updateStatus("fileInputText", 'NOT_VALIDATED')
    .validateField("fileInputText");
});

</script>