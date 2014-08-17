<?php include('webframes/verify-login.php');?>
<?php
include 'php_files/LegislationDAO.php';

$page_id = 4;
$sub_page_id = 2;
$legislationTypeIdLaw = 1;
$legislationTypeIdDecree = 2;
$legislationDAO = new LegislationDAO ();

$queryResultLaws = $legislationDAO->selectByLegislationType ( $legislationTypeIdLaw );
$queryResultDecree = $legislationDAO->selectByLegislationType ( $legislationTypeIdDecree );
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
							class="font-style-medium-title-dark page-header ">Leyes</h1>
						<ul>
							<?php
							while ( $row = mysql_fetch_assoc ( $queryResultLaws ) ) {
								print ("<li><a href='" . $row ['file_path'] . "'
 								target='blank'>" . $row ['name'] . " - " . $row ['publication_year'] . ")</a></li>") ;
							}
							?>
						</ul>
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Decretos</h1>
						<ul>
						<?php
						while ( $row = mysql_fetch_assoc ( $queryResultDecree ) ) {
							print ("<li><a href='" . $row ['file_path'] . "'
 								target='blank'>" . $row ['name'] . " - " . $row ['publication_year'] . ")</a></li>") ;
						}
						?>
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
