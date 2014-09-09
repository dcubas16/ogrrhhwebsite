<?php include('webframes/verify-login.php');?>
<?php

$page_id = 3;
$sub_page_id = 4;
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
						<h1 id="social-benefies-office"
							class="font-style-medium-title-dark page-header ">Oficina de
							Desarrollo y Bienestar Social</h1>
						<p>La Oficina de Desarrollo y Bienestar Social es el órgano de
							línea dependiente de la Jefatura de la Oficina General de
							Recursos Humanos, encargado de elaborar, proponer y ejecutar
							normas, políticas, planes y programas para el desarrollo laboral,
							técnico, personal y social de los servidores administrativos y de
							desarrollar actividades encaminadas a difundir los alcances de
							las principales acciones de personal entre los usuarios.
							Desarrolla acciones tanto de promoción laboral y de capacitación
							para todos los servidores docentes, administrativos y obreros,
							así como de bienestar social de los servidores docentes y
							administrativos de la Administración Central y de los cesantes de
							la Universidad Nacional Mayor de San Marcos.</p>
						<h1 id="mision-and-goals"
							class="font-style-short-title-dark page-header ">Publicaciones</h1>
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