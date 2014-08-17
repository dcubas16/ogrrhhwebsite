<?php include('webframes/verify-login.php');?>
<?php include('webframes/upload-ftp-settings.php');?>
<?php

$page_id = 5;
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
					<div id="contentSection" class="col-md-9 text-content-style">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Trabaja con
							Nosotros</h1>
						<p>La Oficina General de Recursos Humanos es el órgano de apoyo,
							dependiente de la Dirección General de Administración, encargado
							de planificar, normar y ejecutar los procesos técnicos en materia
							de gestión del recurso humano de la Institución.</p>
						<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" data-target="#add-new-convocatory-modal"
							data-bind="visible: headerViewModel.logedUser()">
							<span class="glyphicon glyphicon-plus"></span> Agregar Nueva
							Convocatoria
						</button>
					</div>
					<?php include('webframes/add-new-convocatory-modal.php');?>
					<!-- /ko -->
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<script>
	var contentViewModel = {
		fileToUpload : 	ko.observable(null)			
	};	

	$(function() {
		ko.applyBindings(contentViewModel, $('#contentSection')[0]);
	});
</script>
<?php include('./webframes/header-view-model.php');?>
</html>
