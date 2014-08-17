<?php include('webframes/verify-login.php');?>
<?php include('webframes/upload-ftp-settings.php');?>
<?php
$page_id = 4;
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
						<!-- 						<div class="alert alert-success fade in" role="alert"> -->
						<!-- 							<button type="button" class="close" data-dismiss="alert"> -->
						<!-- 								<span aria-hidden="true">×</span><span class="sr-only">Close</span> -->
						<!-- 							</button> -->
						<!-- 							<strong>Holy guacamole!</strong> Best check yo self, you're not -->
						<!-- 							looking too good. -->
						<!-- 						</div> -->
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Normatividad</h1>
						<p>En esta sección Usted podrá encotrar la normatividad vigente
							bajo la cual se ríge la Oficina General de Recursos Humanos de la
							Universidad Nacional Mayor de San Marcos, además de la
							normatividad que regula a las universidades y la gestión de
							recursos humanos</p>
						<p>Para mayor comodidad se clasificó la normatividad vigente así:</p>
						<ul>
							<li><a href="legislation-laws.php">Leyes y Decretos</a></li>
							<li><a href="legislation-laws.php">Reglamentos</a></li>
							<li><a href="legislation-directives.php">Directivas</a></li>
							<li><a href="legislation-resolutions.php">Resoluciones</a></li>
							<li><a href="legislation-ogrrhh-legislation.php">Normatividad
									OGRRHH y UNMSM</a></li>
						</ul>
						<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" data-target="#add-new-legislation-modal"
							data-bind="visible: headerViewModel.logedUser()">
							<span class="glyphicon glyphicon-plus"></span> Agregar Nueva
							Normatividad
						</button>
					</div>
					<?php include('webframes/add-new-legislation-modal.php');?>
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