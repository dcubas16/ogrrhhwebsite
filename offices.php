<?php include('webframes/verify-login.php');?>
<?php
$page_id = 3;
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
						<h1 id="gestion-office"
							class="font-style-medium-title-dark page-header ">Oficinas</h1>
						<p>La Oficina General de Recursos Humanos de la Universidad
							Nacional de San Marcos cuenta con varias Oficinas dependientes, y
							segun el MOF vigente a la fecha, la OGRRHH esta constituida por
							las siguientes oficinas:</p>
						<ul>
							<li><a href="offices-gestion.php">Oficina de Gestión y Escalafón</a></li>
							<li><a href="offices-remuneration.php">Oficina de Remuneraciones
									y Obligaciones Sociales</a></li>
							<li><a href="offices-pension.php">Oficina de Pensiones y
									Beneficios Sociales</a></li>
							<li><a href="offices-development.php">Oficina de Desarrollo y
									Bienestar Social</a></li>
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
