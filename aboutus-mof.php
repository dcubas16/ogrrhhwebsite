<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

$page_id = 2;
$sub_page_id = 6;
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
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">MOF</h1>
						<p>El manual de organización y funciones (MOF) es un documento
							formal que las empresas elaboran para plasmar parte de la forma
							de la organización que han adoptado, y que sirve como guía para
							todo el personal.</p>
						<p>El MOF contiene, esencialmente las estructura organizacional,
							comúnmente llamada organigrama y la descripción de las funciones
							de todos los puestos en la empresa. Tambien se suelen incluir en
							la descripción de cada puesto el perfíl y los indicadores de
							evaluación.</p>
						<p>
							<a href="resources/docs/otros/MOF_OGRRHH.pdf" target="_blank">Haga
								click aquí para descargar el MOF de la OGRRHH</a>
						</p>
					</div>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<script>
		var viewModel = {
			mainMenuSelected : ko.observable(1),
			pageId : ko.observable(<?php echo $page_id;?>),
			subPageId : ko.observable(<?php echo $sub_page_id;?>)
		};


		$(function() {
			ko.applyBindings(viewModel, $("body")[0]);
			$(".left-navbar").height($("#content-div").height());
		});
</script>
</html>
