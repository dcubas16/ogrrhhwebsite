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
				<?php include('webframes/left-navbar.php');?>
				<!-- ko stopBinding: true -->
					<div class="col-md-9"
						style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Escribenos</h1>
						<form role="form" id="sendMessage" name="sendMessage"
							method="post" action="send-message.php" class="form-horizontal">
							<div class="form-group col-md-8">
								<label for="exampleInputEmail1">Nombre</label> <input
									type="text" class="form-control" id="name" name="name"
									placeholder="Ingrese su nombre">
							</div>
							<div class="form-group col-md-8">
								<label for="exampleInputEmail1">Dirección de email</label> <input
									type="email" class="form-control" id="emailAddress"
									name="emailAddress" placeholder="Ingrese su dirección de email">
							</div>
							<div class="form-group col-md-12">
								<label for="exampleInputPassword1">Mensaje</label>
								<textarea class="form-control" rows="3" id="message"
									name="message" placeholder="Ingrese su mensaje"
									style="height: 140;"></textarea>
							</div>
							<div class="form-group col-md-12" style="text-align: right;">
								<button type="button" class="btn btn-danger">Limpiar</button>
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
</html>
