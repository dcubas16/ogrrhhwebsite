<?php include('webframes/verify-login.php');?>
<?php
include 'php_files/LegislationDAO.php';
include 'php_files/Constants.php';

$page_id = 0;
$sub_page_id = 0;
$legislationDAO = new LegislationDAO ();
$searchString = $_GET ["searchString"];

$queryResultLegislation = $legislationDAO->selectByName ( $searchString );
$queryResultConvocatory = $legislationDAO->selectByNameConvocatory ( $searchString );
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
							class="font-style-medium-title-dark page-header ">Resultados de
							Busqueda</h1>
						<div class="row">
							<div class="col-md-12">
								<!-- 								<div class="input-group" data-toggle="tooltip" -->
								<!-- 									title="La búsqueda se realiza en el contenido de Normatividad"> -->
								<!-- 									<input type="text" class="form-control input-sm"> <span -->
								<!-- 										class="input-group-btn"> -->
								<!-- 										<button class="btn btn-danger btn-sm" type="button"> -->
								<!-- 											<span class="glyphicon glyphicon-search"></span><strong> -->
								<!-- 												Buscar</strong> -->
								<!-- 										</button> -->
								<!-- 									</span> -->
								<!-- 								</div> -->
								<h1 id="mision-and-goals"
									class="font-style-short-title-dark page-header ">Normatividades</h1>
								<ul>
									<?php
									while ( $row = mysql_fetch_assoc ( $queryResultLegislation ) ) {
										print ("<li class='download-link'><a class='upper-case-link' href='view-legislation.php?id=".$row ['id']."'>" 
								. $row ['legislation_type_name'] . " N° " . $row ['number'] . " - ". $row ['name'] . " - " . $row ['publication_year'] . 
								"</a><div class='download-link-message' data-toggle='tooltip' title='' data-original-title='Descargar'>
								<a class='blue-link-style ' href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'> 
								<span class='glyphicon glyphicon-download'></span></a></div></li>") ;
									}
									?>
								</ul>
								<h1 id="mision-and-goals"
									class="font-style-short-title-dark page-header ">Convocatorias</h1>
								<ul>
									<?php
									while ( $row = mysql_fetch_assoc ( $queryResultConvocatory ) ) {
										print ("<li class='download-link'><a class='upper-case-link' href='view-legislation.php?id=".$row ['id']."'>Convocatoria " 
											. $row ['convocatory_type_name'] . " N° " . $row ['number'] . " - " . $row ['title'] . "
		 									(Publicado el" . $row ['update_date'] . " - Vigente hasta el " . $row ['life_date'] . ")</a>
											<a class='blue-link-style ' href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'> 
											<span class='glyphicon glyphicon-download'></span></a></div></li>") ;
									}
									?>
								</ul>
							</div>
						</div>
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
<script>
	$(function(){
		headerViewModel.searchString(<?php echo "'". $searchString."'";?>);
	});
</script>
</html>
<script>
$('div[data-toggle="tooltip"]').tooltip({ animated: 'fade', placement:
	'top', });
</script>