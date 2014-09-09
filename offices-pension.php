<?php include('webframes/verify-login.php');?>
<?php

$page_id = 3;
$sub_page_id = 3;
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
						<h1 id="pension-office"
							class="font-style-medium-title-dark page-header ">Oficina de
							Pensiones y Beneficios Sociales</h1>
						<p>La Oficina de Pensiones y Beneficios Sociales, es un �rgano de
							l�nea de la Oficina General de Recursos Humanos, encargada de
							planificar, elaborar, proponer y ejecutar acciones
							administrativas relacionadas al otorgamiento de los beneficios
							sociales y pensionarios a los funcionarios y servidores docentes,
							administrativos y obreros.</p>
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