<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/ConnectionManager.php';

$page_id = 2;
$sub_page_id = 6;
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
							class="font-style-medium-title-dark page-header ">ROF</h1>
						<p>El ROF es el Reglamento de Organización y Funciones de una
							entidad, que se constituye en un documento técnico normativo de
							gestión institucional que establece: La estructura orgánica de la
							entidad, Las funciones generales y específicas de la entidad y de
							cada uno de sus órganos y unidades orgánicas, Las relaciones de
							coordinación y control entre órganos, unidades orgánicas y
							entidades cuando corresponda. Este instrumento de gestión
							formaliza las competencias de cada área dentro de la organización
							y en función a ello se puede determinar las responsabilidades que
							le corresponde en el logro de los objetivos institucionales.</p>
						<p>
							<a href="resources/docs/otros/ROF_UNMSM_2011.pdf" target="_blank">Haga
								click aquí para descargar el ROF de la UNMSM</a>
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

?>
