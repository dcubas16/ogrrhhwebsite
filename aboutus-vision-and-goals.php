<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

$page_id = 2;
$sub_page_id = 1;
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
							class="font-style-medium-title-dark page-header ">Misión y Visión</h1>
						<h3 id="overview-doctype">Misión</h3>
						<ul>
							<li><p>Prestar un óptimo servicio a la institución, para cumplir
									con las expectativas de la universidad en la administración del
									universo total de su personal activo y pensionista.</p></li>
							<li><p>Administrar expedientes en materia pensionaria regulada
									por D.L. 20530, así como derechos y beneficios sociales del
									personal docente, no docentes y pensionistas de la universidad.</p></li>
							<li><p>Asegurar la actualización de los registros y controles de
									remuneraciones, a fin de facilitar y simplificar los pagos por
									servicios al personal. .</p></li>
							<li><p>Atender, orientar y evaluar los procedimientos
									administrativos relacionados con el personal activo.</p></li>
							<li><p>Fortalecer la gestión de recursos humanos mediante una
									buena atención al servidor.</p></li>
							<li><p>Promover actividad de desarrollo humano y bienestar social
									de los servidores de la universidad.</p></li>
						</ul>
						<h3 id="overview-doctype">Visión</h3>
						<p>La Oficina General de Recursos Humanos, plenamente identificada con la misión, visión y los valores universitarios, es la responsable de gestionar el talento humano para la Universidad Nacional Mayor de San Marcos, a traves de los procesos de ingreso, incentivos, estímulos del Personal Administrativo en sus distintas modalidades, requerido por las facultades y dependencias. De esta manera, contribuye a la presencia de un adecuado entorno laboral y bienestar a los trabajadores, sustentándose en el mejoramiento integral de procesos y en su personal de alta calidad humana y profesional.</p>
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
