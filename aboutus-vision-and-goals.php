<?php
$page_id = 2;
$sub_page_id = 1;
$con = mysql_connect ( 'localhost', 'root', 'root' );
$goals = "";
$vision = "";
$history = "";
$organizationChart = "";
$authorities = "";
$directory = "";
?>
<html lang="es_PE">
<head>
<?php include('webframes/resources.php');?>
</head>
<?php
// Create connection
$con = mysql_connect ( 'localhost', 'root', 'root' );

mysql_select_db ( 'ogrrhhwebsitedb', $con );

$query = "	SELECT WPC.*
FROM WEB_PAGE_CONTAINS WPC
INNER JOIN DETAIL_WEB_PAGE_CONTAIN DWP ON WPC.ID = DWP.WEB_PAGE_CONTAIN_ID
WHERE DWP.PAGE_ID = " . $page_id;

$result = mysql_query ( $query, $con );
$i = 0;
while ( $row = mysql_fetch_assoc ( $result ) ) {
	if ($i == 0) {
		$goals = $row ['contain'];
	} elseif ($i == 1) {
		$vision = $row ['contain'];
	} elseif ($i == 2) {
		$history = $row ['contain'];
	} elseif ($i == 3) {
		$organizationChart = $row ['document_url'];
	} elseif ($i == 4) {
		$authorities = $row ['contain'];
	} elseif ($i == 5) {
		$directory = $row ['contain'];
	}
	$i ++;
}
?>								
<!-- NAVBAR
================================================== -->
<body class="body-style">
	<div class="row background-image-style"
		style="background: url('resources/pages-styles/page-background.jpeg') no-repeat center; margin-right: 0px; margin-left: 0px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php include('webframes/header.php');?>

			<div class="row" style="margin-left: 0px; margin-right: 0px;">
				<?php include('webframes/leftnavbar-aboutus.php');?>
				<div class="col-md-9"
					style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
					<div class="">
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
			</div>
			<?php include('webframes/footer.php');?>
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
<script>
	$(function() {
		var viewModel = {
			mainMenuSelected : ko.observable(1),
		};

		ko.applyBindings(viewModel, $('body')[0]);

		$('.carousel').carousel({
			interval : 2000
		})
	});
</script>
</html>
<?php
mysql_close ( $con );
?>