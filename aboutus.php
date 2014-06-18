<?php
$page_id = 2;
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
<?php include('./webframes/resources.php');?>
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
			<?php include('./webframes/header.php');?>

			<div class="row" style="margin-left: 0px; margin-right: 0px;">
				<div class="col-md-3 background-image-style"
					style="background: url('resources/pages-styles/body-left-panel.jpeg') repeat center; height: 1550">
					<div class="bs-docs-sidebar hidden-print affix-top vertical-navbar"
						role="complementary">
						<ul class="nav bs-docs-sidenav">
							<li class="active"><a class="vertical-navbar-font-style"
								href="#mission-and-goals">Misión y Visión</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#history">Historia</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#organization-chart">Organigrama</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#authorities">Autoridades</a></li>
							<li class=""><a class="vertical-navbar-font-style" href="#mof">MOF</a></li>
							<li class=""><a class="vertical-navbar-font-style" href="#rof">ROF</a></li>
							<li class=""><a class="vertical-navbar-font-style" href="#tupa">TUPA</a></li>
							<li class=""><a class="vertical-navbar-font-style" href="#mapro">MAPRO</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#directory">Directorio</a></li>
						</ul>
						<a class="back-to-top" href="#top">Retornar al inicio</a>
					</div>
				</div>
				<div class="col-md-9"
					style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
					<div class="bs-docs-section">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Misión y Visión</h1>
						<h3 id="overview-doctype">Misión</h3>
						<p><?php print($goals)?></p>

						<h3 id="overview-doctype">Visión</h3>
						<p><?php print($vision)?></p>
					</div>
					<div class="bs-docs-section">
						<h1 id="history" class="font-style-medium-title-dark page-header ">Historia</h1>
						<p><?php print($history)?></p>
					</div>

					<div class="bs-docs-section">
						<h1 id="organization-chart"
							class="font-style-medium-title-dark page-header ">Organigrama</h1>
						<p>
							Descargue el organigrama de la OGRRHH <a href="#">Link</a>
						</p>
					</div>
					<div class="bs-docs-section">
						<h1 id="organization-chart"
							class="font-style-medium-title-dark page-header ">Autoridades</h1>
						<p>Jefe de la Oficina General de Recursos Humanos</p>
						<p>Jefe de la Oficina de Gestión y Escalafón</p>
						<p>Jefe de la Oficina de Remuneraciones</p>
						<p>Jefe de la Oficina de Pensiones y Beneficios Sociales</p>
						<p>Jefe de la Oficina de Bienestar y Capacitación</p>
						<p>Jefe de la Oficina de Modernización e Informatización</p>
					</div>
					<div class="bs-docs-section">
						<h1 id="mof" class="font-style-medium-title-dark page-header ">MOF</h1>
						<p>
							Descargue el MOF de la OGRRHH <a href="#">Link</a>
						</p>
					</div>
					<div class="bs-docs-section">
						<h1 id="rof" class="font-style-medium-title-dark page-header ">ROF</h1>
						<p>
							Descargue el ROF de la OGRRHH <a href="#">Link</a>
						</p>
					</div>
					<div class="bs-docs-section">
						<h1 id="tupa" class="font-style-medium-title-dark page-header ">TUPA</h1>
						<p>
							Descargue el TUPA de la OGRRHH <a href="#">Link</a>
						</p>
					</div>
					<div class="bs-docs-section">
						<h1 id="mapro" class="font-style-medium-title-dark page-header ">MAPRO</h1>
						<p>
							Descargue el MAPRO de la OGRRHH <a href="#">Link</a>
						</p>
					</div>
				</div>
			</div>
			<?php include('./webframes/footer.php');?>
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