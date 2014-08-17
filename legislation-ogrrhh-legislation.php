<?php include('webframes/verify-login.php');?>
<?php
$page_id = 4;
$sub_page_id = 4;
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
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Normatividad de la OGRRHH y la UNMSM</h1>
						<ul>
							<li><a
								href="resources/docs/otros/ESTATUTO UNMSM.pdf"
								target="_blank">Estatuto de la UNMSM - 1984</a></li>
								<li><a
								href="resources/docs/otros/modificacion_art_estatuto_rr_3028-r-04.pdf"
								target="_blank">Modificación del Estatuto de la UNMSM - 2004</a></li>
								<li><a
								href="resources/docs/otros/CAP_UNMSM_2013.pdf"
								target="_blank">Cuadro para Asignación de Personal (CAP) - 2013</a></li>
								<li><a
								href="resources/docs/otros/Clasificador_de_Cargos_UNMSM.pdf"
								target="_blank">Clasificador de Cargos - 2011</a></li>
								<li><a
								href="resources/docs/otros/Manual_Usuario_OGRRHH.pdf"
								target="_blank">Manual de Usuario de la OGRRHH - 2014</a></li>
						</ul>
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
						