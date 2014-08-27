<?php include('webframes/verify-login.php');?>
<?php
include 'php_files/LegislationDAO.php';
include 'php_files/Constants.php';

$page_id = 4;
$sub_page_id = 1;

$legislationTypeId = 5;
$legislationDAO = new LegislationDAO ();

$queryResult = $legislationDAO->selectByLegislationType ( $legislationTypeId );
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
							class="font-style-medium-title-dark page-header ">Resoluciones
							Emitidas</h1>
						<ul>
							<?php
							while ( $row = mysql_fetch_assoc ( $queryResult ) ) {
								print ("<li><a class='upper-case-link' href='" . Constants::ogrrhhFTPUrl .  $row ['file_path'] . "'
 								target='blank'>" . $row ['name'] . " - " . $row ['publication_year'] . "</a></li>") ;
							}
							?>
						</ul>
						<!-- 						<ul> -->
						<!-- 							<li><a href="resources/docs/decretos/DL_276_1984.pdf" -->
						<!-- 								target="_blank">Decreto Legislativo N� 276 - Ley de Bases de la -->
						<!-- 									Carrera Administrativa y de Remuneraciones del Sector P�blico</a></li> -->
						<!-- 						</ul> -->
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
