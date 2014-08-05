<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

$page_id = 2;
$sub_page_id = 3;
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
							class="font-style-medium-title-dark page-header ">Organigrama</h1>
						<p>Según el Manual de Organización y Funciones (MOF) del 2005 y
							vigente hasta la fecha, la Oficina General de Recursos Humanos
							esta organizado según el organigrama que se muestra a continuación:</p>
						<img alt="" src="resources/images/organization-chart-ogrrhh.png"
							style="width: 98%;">
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