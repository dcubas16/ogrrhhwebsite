<?php include('webframes/verify-login.php');?>
<?php

$page_id = 6;
$sub_page_id = 0;
?>
<html lang="es_PE">
<?php include('webframes/resources.php');?>
<body class="body-style">
	<div class="container-fluid">
		<div class="row background-image-style">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<?php include('webframes/header.php');?>
			<div id="content-div" class="row">
					<div class="col-md-6 text-content-style">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Dirección</h1>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div id="page">
											<script
												src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
											<script>
															function initialize() {
																var map_canvas = document
																		.getElementById('map_canvas');
																var map_options = {
																	center : new google.maps.LatLng(
																			-12.052625, -77.085099),
																	zoom : 14,
																	mapTypeId : google.maps.MapTypeId.ROADMAP
																}
																var map = new google.maps.Map(map_canvas,
																		map_options)
															}
															google.maps.event.addDomListener(window,
																	'load', initialize);
														</script>
											<div id="map_canvas" style="height: 320px; width: 100%"></div>
										</div>
									</div>
								</div>
								<br />
								<div class="row">
									<address>
										<i class="glyphicon glyphicon-map-marker"></i> Av.
										Universitaria /Av. Germán Amézaga s/n. Edificio Jorge Basadre
										Ciudad Universitaria, Lima 1. <br /> <br /> <i
											class="glyphicon glyphicon-phone-alt"></i> Central
										Telefónica: <strong>619-7000</strong> Anexo 7600 (Recepción y
										mesa de partes)<br />
										<a href="aboutus-directory.php"> Enlace directo al directorio</a> <br /><br /> <i
											class="glyphicon glyphicon-envelope"></i>
										recursoshumanos@unmsm.edu.pe
									</address>
								</div>
							</div>
						</div>

					</div>
					<!-- ko stopBinding: true -->
					<div class="col-md-6 text-content-style">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Escribenos</h1>
						<form role="form" id="sendMessage" name="sendMessage"
							method="post" action="send-message.php" class="form-horizontal">
							<div class="form-group col-md-10">
								<label for="exampleInputEmail1">Nombre</label> <input
									type="text" class="form-control" id="name" name="name"
									placeholder="Ingrese su nombre" data-bind="value:contentViewModel.name">
							</div>
							<div class="form-group col-md-10">
								<label for="exampleInputEmail1">Dirección de email</label> <input
									type="email" class="form-control" id="emailAddress"
									name="emailAddress" placeholder="Ingrese su dirección de email" data-bind="value:contentViewModel.emailAddress">
							</div>
							<div class="form-group col-md-12">
								<label for="exampleInputPassword1">Mensaje</label>
								<textarea class="form-control" rows="3" id="message"
									name="message" placeholder="Ingrese su mensaje"
									style="height: 140;" data-bind="value:contentViewModel.message"></textarea>
							</div>
							<div class="form-group col-md-12" style="text-align: right;">
								<button type="button" class="btn btn-danger" data-bind="click:contentViewModel.cleanForm">Limpiar</button>
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>
					<!-- /ko -->
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<script>
		$(document).ready(function() {
		    $('#sendMessage').bootstrapValidator({
		        feedbackIcons: {
		            valid: 'glyphicon glyphicon-ok',
		            invalid: 'glyphicon glyphicon-remove',
		            validating: 'glyphicon glyphicon-refresh'
		        },
		        fields: {
		        	name: {
		                group: '.col-md-1',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
		                        max: 200,
		                        message: 'The director name must be less than 80 characters long'
		                    }
		                }
		            },
		            emailAddress: {
		                group: '.col-md-1',
		                validators: {
		                    notEmpty: {
		                        message: 'Este campo es requerido'
		                    },
		                    stringLength: {
		                        max: 200,
		                        message: 'The director name must be less than 80 characters long'
		                    }
		                }
		            },
		            message: {
		                validators: {
		                	 notEmpty: {
		                         message: 'Este campo es requerido'
		                     },
		                    stringLength: {
		                        max: 500,
		                        message: 'The review must be less than 500 characters long'
		                    }
		                }
		            }
		        }
		    });
		});
</script>
<?php include('./webframes/header-view-model.php');?>
<script>
var contentViewModel = {
		name : ko.observable(null),
		emailAddress : ko.observable(null),
		message : ko.observable(null),
		cleanForm : function(){
			contentViewModel.name(null);
			contentViewModel.emailAddress(null);
			contentViewModel.message(null);
		}
};

$(function() {
	ko.applyBindings(contentViewModel, $("#sendMessage")[0]);
});
</script>
</html>
