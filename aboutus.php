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
							class="font-style-medium-title-dark page-header ">Nosotros</h1>

						<p>La Oficina General de Recursos Humanos es el órgano de apoyo,
							dependiente de la Dirección General de Administración, encargado
							de planificar, normar y ejecutar los procesos técnicos en materia
							de gestión del recurso humano de la Institución.</p>
						<p>Las funciones que desarrolla en esta oficina son:</p>
						<ul>
							<li><p>Planificar, normar, organizar, conducir y controlar las
									acciones del Sistema de Recursos Humanos de la Universidad
									Nacional Mayor de San Marcos.</p></li>
							<li><p>Proponer a la Alta Dirección las normas, planes, programas
									y acciones para la gestión del Sistema de Recursos Humanos.</p></li>
							<li><p>Aplicar las normas, instrumentos de gestión y procesos
									técnicos en materia de desarrollo integral de los recursos
									humanos, en concordancia con las necesidades institucionales y
									de acuerdo a la normatividad vigente.</p></li>
							<li><p>Fomentar una actitud proactiva en los servidores docentes,
									administrativos y obreros y desarrollo del liderazgo de los
									directivos de la Universidad a través de acciones sostenidas de
									mejoramiento de su calidad personal y profesional.</p></li>
							<li><p>Coordinar sus acciones con otras entidades públicas en
									asuntos vinculados a sus funciones.</p></li>
							<li><p>Formular el Presupuesto Analítico de Personal (PAP), en
									coordinación con la Oficina General de Planificación.</p></li>
							<li><p>Coordinar, asesorar y supervisar las acciones
									descentralizadas del Sistema de Recursos Humanos con las
									diversas dependencias de la Universidad.</p></li>
							<li><p>Resolver, por delegación de Facultades, los asuntos de su
									competencia.</p></li>
							<li><p>Proponer a la Alta Dirección políticas y programas
									específicos de planificación, organización, acceso, evaluación
									de rendimiento, compensación y desarrollo de los recursos
									humanos, acorde con los procesos establecidos por ley.</p></li>
							<li><p>Promover el desarrollo personal, social y laboral así como
									la capacitación técnica de los servidores, orientados al logro
									de las metas y objetivos institucionales, en función de las
									necesidades de la entidad y los resultados de la evaluación de
									desempeño.</p></li>
							<li><p>Proponer y coordinar la celebración de convenios
									nacionales e internacionales orientados al mejoramiento de la
									calidad del servicio y la capacitación y desarrollo de
									competencias de los servidores.</p></li>
							<li><p>Realizar investigaciones y desarrollar estrategias
									prospectivas en materia de productividad, con el fin de hacer
									mas eficiente la función pública en la Universidad.</p></li>
							<li><p>Elaborar y proponer la normatividad para el otorgamiento
									de reconocimientos, incentivos y estímulos al desempeño
									desatacado de los servidores de la Universidad.</p></li>
							<li><p>Mantener actualizado el archivo de Legajos de servidores y
									ex servidores docentes, administrativos y obreros de la
									Universidad.</p></li>
							<li><p>Elaborar la Planilla Única de Remuneraciones y de
									Pensiones, de acuerdo con los dispositivos legales vigentes,
									vigilando registrar en ella únicamente a los servidores que
									cumplan labores efectivas, así como consignar los conceptos que
									legalmente correspondan abonarse.</p></li>
							<li><p>Establecer estrategias para aprovechar los conocimientos y
									experiencia de ex servidores docentes, administrativos y
									obreros en beneficio del mejoramiento de la calidad del
									servicio.</p></li>
							<li><p>Llevar el registro de los cargos públicos que califican
									como funcionario público y empleado de confianza e informar
									periódicamente a las autoridades del Gobierno Central.</p></li>
							<li><p>Asesorar a la Alta Dirección en los asuntos de su
									competencia.</p></li>
							<li><p>Otras que le asigne la Dirección General de
									Administración.</p></li>
						</ul>
						<br>
						<p>La Oficina General de Recursos Humanos tiene la estructura
							orgánica siguiente :</p>
						<li><p>Oficina de Gestión y Escalafón</p></li>
						<li><p>Oficina de Remuneraciones y Obligaciones Sociales</p></li>
						<li><p>Oficina de Pensiones y Beneficios sociales</p></li>
						<li><p>Oficina de Desarrollo y Bienestar Social</p></li>
						<li><p>Oficina de Modernización e Informatización</p></li>
						<p>En esta sección Usted podra encontrar información referente a
							la Oficina General de Recursos Humanos de la Universidad Nacional
							Mayor de San Marcos; dentro de lo más relevante se tiene:</p>
						<ul>
							<li><a href="aboutus-vision-and-goals.php">Misión y Visión</a></li>
							<li><a href="aboutus-organization-chart.php">Organigrama</a></li>
							<li><a href="aboutus-directory.php">Directorio</a></li>
							<li><a href="aboutus-mof.php">MOF</a></li>
							<li><a href="aboutus-rof.php">ROF</a></li>
							<li><a href="aboutus-tupa.php">TUPA</a></li>
						</ul>
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