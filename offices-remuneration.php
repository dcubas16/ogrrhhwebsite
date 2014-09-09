<?php include('webframes/verify-login.php');?>
<?php

$page_id = 3;
$sub_page_id = 2;
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
						<h1 id="salary-office"
							class="font-style-medium-title-dark page-header ">Oficina de
							Remuneraciones y Obligaciones Sociales</h1>
						<p>La Oficina de Remuneraciones y Obligaciones Sociales es el
							�rgano de l�nea dependiente de la Oficina General de Recursos
							Humanos, que tiene como responsabilidad principal la elaboraci�n
							de la Planilla �nica de Remuneraciones y Pensiones del personal
							activo y pensionista de la Universidad que por su naturaleza
							funcional constituye un nexo entre la Oficina General de Recursos
							Humanos, el Sistema de Tesorer�a y Contabilidad, as� como la
							Oficina General de Planificaci�n.</p>
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