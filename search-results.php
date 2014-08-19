<?php include('webframes/verify-login.php');?>
<?php

$page_id = 0;
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
				<!-- ko stopBinding: true -->
					<div class="col-md-9 text-content-style">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Resultados de
							Busqueda</h1>
						<div class="row">
							<div class="col-md-12 search-button">
								<div class="input-group" data-toggle="tooltip"
									title="La búsqueda se realiza en el contenido de Normatividad">
									<input type="text" class="form-control input-sm"> <span
										class="input-group-btn">
										<button class="btn btn-danger btn-sm" type="button">
											<span class="glyphicon glyphicon-search"></span><strong>
												Buscar</strong>
										</button>
									</span>
								</div>
								<h1 id="mision-and-goals"
									class="font-style-medium-title-dark page-header ">Normatividades</h1>
								<h1 id="mision-and-goals"
									class="font-style-medium-title-dark page-header ">Convocatorias</h1>
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
</html>
