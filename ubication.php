<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

$page_id = 6;
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
				<div class="col-md-9"
						style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Escribenos</h1>
						<form role="form">
							<div class="form-group col-md-8">
								<label for="exampleInputEmail1">Nombre</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									placeholder="Ingrese su nombre">
							</div>
							<div class="form-group col-md-8">
								<label for="exampleInputEmail1">Dirección de email</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									placeholder="Ingrese su dirección de email">
							</div>
							<div class="form-group col-md-12">
								<label for="exampleInputPassword1">Mensaje</label>
								<textarea class="form-control" rows="3"
									placeholder="Ingrese su mensaje" style="height: 140;"></textarea>
							</div>
							<div class="form-group col-md-12" style="text-align: right;">
								<button type="button" class="btn btn-danger">Limpiar</button>
								<button type="button" class="btn btn-success">Enviar</button>
							</div>
						</form>
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
