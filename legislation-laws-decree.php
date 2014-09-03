<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/LegislationDAO.php';
include 'php_files/Constants.php';

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
							<li class="download-link">
								<a class="upper-case-link" href="view-legislation.php?id=52">ley N°  - constitucion politica del peru - 1993</a>
								<div class="download-link-message" data-toggle="tooltip" title="" data-original-title="Descargar">
							<a class="blue-link-style " href="http://ogrrhh.unmsm.edu.pe/files/normativas/leyes/Constitucion_Politica_Peru_1993.pdf" target="_blank"> 
							<span class="glyphicon glyphicon-download"></span></a></div></li>
							<?php
							while ( $row = mysql_fetch_assoc ( $queryResultLaws ) ) {
								print ("<li class='download-link'><a class='upper-case-link' href='view-legislation.php?id=".$row ['id']."'>" 
								. $row ['legislation_type_name'] . " N° " . $row ['number'] . " - " . $row ['name'] . " - " . $row ['publication_year'] 
								. "</a><div class='download-link-message' data-toggle='tooltip' title='' data-original-title='Descargar'>
								<a class='blue-link-style ' href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'> 
								<span class='glyphicon glyphicon-download'></span></a></div></li>") ;
							}
							?>
						</ul>
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Decretos</h1>
						<ul>
						<?php
						while ( $row = mysql_fetch_assoc ( $queryResultDecree ) ) {
							print ("<li class='download-link'><a class='upper-case-link' href='view-legislation.php?id=".$row ['id']."'>" 
								. $row ['legislation_type_name'] . " N° " . $row ['number'] . " - ". $row ['name'] . " - " . $row ['publication_year'] . 
								"</a><div class='download-link-message' data-toggle='tooltip' title='' data-original-title='Descargar'>
								<a class='blue-link-style ' href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'> 
								<span class='glyphicon glyphicon-download'></span></a></div></li>") ;
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
<script>
$('div[data-toggle="tooltip"]').tooltip({ animated: 'fade', placement:
	'top', });
</script>