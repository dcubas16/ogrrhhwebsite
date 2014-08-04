<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

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
							class="font-style-medium-title-dark page-header ">Normatividad</h1>
						<p>En esta sección Usted podrá encotrar la normatividad vigente
							bajo la cual se ríge la Oficina General de Recursos Humanos de la
							Universidad Nacional Mayor de San Marcos, además de la
							normatividad que regula a las universidades y la gestión de
							recursos humanos</p>
						<p>Para mayor comodidad se clasificó la normatividad vigente así:</p>
						<ul>
							<li><a href="legislation-resolutions.php">Resoluciones Emitidas</a></li>
							<li><a href="legislation-laws.php">Leyes y Decretos</a></li>
							<li><a href="legislation-directives.php">Directivas</a></li>
							<li><a href="legislation-ogrrhh-legislation.php">Normatividad
									OGRRHH y UNMSM</a></li>
						</ul>
						<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" data-target="#add-new-legislation-modal">
							<span class="glyphicon glyphicon-plus"></span> Agregar Nueva
							Normatividad
						</button>

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
		filePath : 	ko.observable(""),
		pageId : ko.observable(<?php echo $page_id;?>),
		subPageId : ko.observable(<?php echo $sub_page_id;?>)
	};
						
	$(function() {
		ko.applyBindings(viewModel, $('body')[0]);
		$(".left-navbar").height($("#content-div").height());
	});
</script>
</html>