<?php
include "php_files/FTPConnectionManager.php";
include "php_files/LegislationDAO.php";

$tempFilePath = $_FILES ["fileToUpload"] ["tmp_name"];
$filename = $_FILES ["fileToUpload"] ["name"];
$legislationType = $_POST ["legislationType"];
$legislationName = $_POST ["legislationName"];
$publicationDate = $_POST ["legislationDate"];
$remoteFilePath = setRemotePath ( $legislationType ) . "/";

function setRemotePath($legislationType) {
	switch ($legislationType) {
		case 1 :
			return Constants::leyes;
			break;
		case 2 :
			return Constants::decretos;
			break;
		case 3 :
			return Constants::reglamentos;
			break;
		case 4 :
			return Constants::directivas;
			break;
		case 5 :
			return Constants::resoluciones;
			break;
		case 6 :
			return Constants::otros;
			break;
	}
}

$ftpConnectionManager = new FTPConnectionManager ( $tempFilePath, $filename, Constants::ogrrhhUrl . Constants::normativasPath . $remoteFilePath );
$resultFTP = $ftpConnectionManager->uploadFile ();

$legislationDAO = new LegislationDAO ();
$legislationDAO->setProperties($legislationType, $legislationName, $publicationDate, $remoteFilePath.$filename, 1, 1, date ( 'd/m/Y' ) );
$errores = 0;

if ($resultFTP->type != 0) {
	$queryResult = $legislationDAO->insert ();
	if (! $queryResult) {
		$errores ++;
		echo "Entro Aqui 1 ";
	}
} else {
	$errores ++;
	echo "Entro Aqui 2 ";
}
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
								print ("<div class='alert alert-success fade in' role='alert'>") ;
								print ("<button type='button' class='close' data-dismiss='alert'>") ;
								print ("<span aria-hidden='true'>×</span><span class='sr-only'>Cerrar</span></button>") ;
								print ("<strong>Se guardo con éxito!!!</strong> la mormatividad <strong>" . $legislationName . "</strong></div>") ;
							} else {
								print ("<div class='alert alert-danger fade in' role='alert'>") ;
								print ("<button type='button' class='close' data-dismiss='alert'>") ;
								print ("<span aria-hidden='true'>×</span><span class='sr-only'>Cerrar</span></button>") ;
								print ("<strong>Ocurrio un error!!!</strong> al guardar la mormatividad <strong>" . $legislationName . "</strong>; por favor intente de nuevo o comuniquese con la Oficina de Modernización e Informatización de la OGRRHH</div>") ;
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
		fileToUpload : 	ko.observable(""),
		pageId : ko.observable(<?php echo $page_id;?>),
		subPageId : ko.observable(<?php echo $sub_page_id;?>)
	};
						
	$(function() {
		ko.applyBindings(viewModel, $('body')[0]);
		$(".left-navbar").height($("#content-div").height());
	});
</script>
</html>