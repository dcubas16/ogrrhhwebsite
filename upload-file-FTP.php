<?php
include "php_files/FTPConnectionManager.php";
include "php_files/LegislationDAO.php";

$tempFilePath = $_FILES ["fileToUpload"] ["tmp_name"];
$filename = $_FILES ["fileToUpload"] ["name"];

$legislationType = $_POST ["legislationType"];
$legislationName = $_POST ["legislationName"];
$publicationDate = $_POST ["legislationDate"];

$ftpConnectionManager = new FTPConnectionManager ( $tempFilePath, $filename );
$resultFTP = $ftpConnectionManager->uploadFile ();

$legislationDAO = new LegislationDAO ( $legislationType, $legislationName, $publicationDate, $filename, 1, 1, date ( 'd/m/Y' ) );
$errores = 0;

if ($resultFTP->type != 0) {
	$queryResult = $legislationDAO->insert();
	if (! $queryResult) {
		$errores ++;
		echo $queryResult;
		echo "Entro Aqui 1\r\n";
	}
} else {
	$errores ++;
	echo "Entro Aqui 2\r\n";
	// echo "NO SE ADJUNTO ARCHIVO";
}

// print("No se pudo guardar la Normatividad, por favor intente de nuevo o comuniquese con la Oficina de Modernización e Informatización de la OGRRHH");
$page_id = 4;
$sub_page_id = 0;
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
				<div class="col-md-9 text-content-style">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Resultado de
							Agregar Nueva Normatividad</h1>
							<?php
							if ($errores == 0) {
								print ("<p>Se registro con éxito la ley " . $legislationName . "</p>") ;
							} else {
								print ("<p>No se pudo guardar la Normatividad, 
por favor intente de nuevo o comuniquese con la Oficina de Modernización e Informatización de la OGRRHH</p>") ;
							}
							?>
					</div>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php include('webframes/add-new-legislation-modal.php');?>
</body>

<script>
	var viewModel = {
		pageId : ko.observable(<?php echo $page_id;?>),
		subPageId : ko.observable(<?php echo $sub_page_id;?>)
	};
						
	$(function() {
		ko.applyBindings(viewModel, $('body')[0]);
		$(".left-navbar").height($("#content-div").height());
	});
</script>
</html>