<?php include('webframes/verify-login.php');?>
<?php
include 'php_files/ConvocatoryDAO.php';
include 'php_files/Constants.php';

$convocatoryDAO = new ConvocatoryDAO();
$queryResult = $convocatoryDAO->select ();
$rowCounter = 0;

$page_id = 5;
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
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Convocatorias
							CAS</h1>
						<ul>
							<?php
							while ( $row = mysql_fetch_assoc ( $queryResult ) ) {
								print("<li class='download-link'><a class='upper-case-link' href='view-convocatory.php?id=".$row ['id']."'>
								Convocatoria ". $row ['convocatory_type_name'] ." N� ".$row ['number']." - ". $row ['title'] ."
 									(Publicado el". $row ['update_date'] . " - Vigente hasta el ". $row ['life_date'] .")</a>
								<div class='download-link-message' data-toggle='tooltip' title='' data-original-title='Descargar'>
								<a class='blue-link-style ' href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'> 
								<span class='glyphicon glyphicon-download'></span></a></div></li>");
								
								$rowCounter ++;
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