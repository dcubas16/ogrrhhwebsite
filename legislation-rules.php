<?php include('webframes/verify-login.php');?>
<?php
include 'php_files/LegislationDAO.php';
include 'php_files/Constants.php';

$page_id = 4;
$sub_page_id = 5;

$legislationTypeId = 3;
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
							class="font-style-medium-title-dark page-header ">Reglamentos</h1>
						<ul>
							<?php
							while ( $row = mysql_fetch_assoc ( $queryResult ) ) {
								print ("<li class='download-link'><a class='upper-case-link' href='view-legislation.php?id=".$row ['id']."'>" 
								. $row ['name'] . " - " . $row ['publication_year'] . "</a><div class='download-link-message' data-toggle='tooltip' title='' data-original-title='Descargar'>
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