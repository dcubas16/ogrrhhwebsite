<?php
include "php_files/FTPConnectionManager.php";
include "php_files/ConvocatoryDAO.php";

$tempFilePath = $_FILES ["fileToUpload"] ["tmp_name"];
$filename = $_FILES ["fileToUpload"] ["name"];
$convocatory_type_id = $_POST ["convocatory_type_id"];
$dependency_id = $_POST ["dependency_id"];
$number = $_POST ["number"];
$title = $_POST ["title"];
$life_date = $_POST ["life_date"];
$user_id = 1;
$office_id = 1;

$remoteFilePath = setRemotePath ( $convocatory_type_id ) . "/";

function setRemotePath($convocatory_type_id) {
	switch ($convocatory_type_id) {
		case 1 :
			return Constants::cas;
			break;
		case 2 :
			return Constants::regime_276;
			break;
	}
}

$ftpConnectionManager = new FTPConnectionManager ( $tempFilePath, $filename, Constants::ogrrhhUrl . Constants::convocatoriasPath . $remoteFilePath );
$resultFTP = $ftpConnectionManager->uploadFile ();

$convocatoryDAO = new ConvocatoryDAO();
$convocatoryDAO->setProperties($convocatory_type_id, $dependency_id, $number, $title, $life_date, Constants::convocatoriasPath . $remoteFilePath . $filename , $user_id, $office_id, date ( 'd/m/Y' ) );
$errores = 0;

if ($resultFTP->type != 0) {
	$queryResult = $convocatoryDAO->insert ();
	if (! $queryResult) {
		$errores ++;
		echo "Entro aqui 1 </br>";
	}
} else {
	$errores ++;
	echo "Entro aqui 2 </br>";
}

$page_id = 5;
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
							Agregar Nueva Convocatoria</h1>
							<?php
							if ($errores == 0) {
								print ("<div class='alert alert-success fade in' role='alert'>") ;
								print ("<button type='button' class='close' data-dismiss='alert'>") ;
								print ("<span aria-hidden='true'>×</span><span class='sr-only'>Cerrar</span></button>") ;
								print ("<strong>Se guardo con éxito!!!</strong> la convocatoria <strong>" . $title . "</strong></div>") ;
							} else {
								print ("<div class='alert alert-danger fade in' role='alert'>") ;
								print ("<button type='button' class='close' data-dismiss='alert'>") ;
								print ("<span aria-hidden='true'>×</span><span class='sr-only'>Cerrar</span></button>") ;
								print ("<strong>Ocurrio un error!!!</strong> al guardar la convocatoria <strong>" . $title . "</strong>; por favor intente de nuevo o comuniquese con la Oficina de Modernización e Informatización de la OGRRHH</div>") ;
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