<?php
$page_id = 2;
$sub_page_id = 4;
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
							class="font-style-medium-title-dark page-header ">Autoridades</h1>
						<div class="row">
						<div class="col-md-6 authorities-title"><p>Jefe de la OGRRHH</p></div>
						<div class="col-md-6"><p>Dr. H�ctor Elvis Martinez Flores</p></div>
						</div>
						<div class="row">
						<div class="col-md-6 authorities-title"><p>Jefe de la Oficina de Gesti�n y Escalaf�n</p></div>
						<div class="col-md-6"><p>Juana Sulca Brancacho</p></div>
						</div>
						<div class="row">
						<div class="col-md-6 authorities-title"><p>Jefe de la Oficina de Remuneraciones y Obligaciones Sociales</p></div>
						<div class="col-md-6"><p>Sr. Bladimir Reyes Campos</p></div>
						</div>
						<div class="row">
						<div class="col-md-6 authorities-title"><p>Jefe de la Oficina de Pensiones y Beneficios Sociales</p></div>
						<div class="col-md-6"><p>Sra. Mar�a Esperanza Moncada Alfaro</p></div>
						</div>
						<div class="row">
						<div class="col-md-6 authorities-title"><p>Jefe de la Oficina de Desarrollo y Bienestar Social</p></div>
						<div class="col-md-6"><p>Lic. Norma Huiza Luna</p></div>
						</div>
						<div class="row">
						<div class="col-md-6 authorities-title"><p>Jefe de la Oficina de Modernizaci�n e Informatizaci�n</p></div>
						<div class="col-md-6"><p>Sr. Diego Antonio N��ez Cubas</p></div>
						</div>
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