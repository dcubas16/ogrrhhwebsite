<?php include('webframes/verify-login.php');?>
<?php

$page_id = 3;
$sub_page_id = 1;
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
					<div class="col-md-9 text-content-style">
						<h1 id="gestion-office"
							class="font-style-medium-title-dark page-header ">Oficina de
							Gesti�n y Escalaf�n</h1>
						<p>La Oficina de Gesti�n y Escalaf�n es el �rgano de l�nea,
							dependiente de la Jefatura de la Oficina General de Recursos
							Humanos, encargado de proponer normas y ejecutar las acciones
							t�cnicas del Sistema de Recursos Humanos.</p>
						<h1 id="mision-and-goals"
							class="font-style-short-title-dark page-header ">Publicaciones</h1>
					</div>
					<!-- /ko -->
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<?php include('./webframes/header-view-model.php');?>
</html>