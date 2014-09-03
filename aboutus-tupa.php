<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/ConnectionManager.php';

$page_id = 2;
$sub_page_id = 7;
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
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">TUPA</h1>
						<p>El TUPA es un documento de gestión que contiene toda la
							información relacionada a la tramitación de procedimientos que
							los administrados realizan ante sus distintas dependencias. El
							objetivo es contar con un instrumento que permita unificar,
							reducir y simplificar de preferencia todos los procedimientos
							(trámites) que permita proporcionar óptimos servicios al usuario.</p>
						<p>
							<a href="resources/docs/otros/TUPA_UNMSM_2008.pdf"
								target="_blank">Haga click aquí para descargar el TUPA de la
								UNMSM</a>
						</p>
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
