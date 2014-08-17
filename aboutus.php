<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/ConnectionManager.php';

$page_id = 2;
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
							class="font-style-medium-title-dark page-header ">Nosotros</h1>
						<p>La Oficina General de Recursos Humanos es el �rgano de apoyo,
							dependiente de la Direcci�n General de Administraci�n, encargado
							de planificar, normar y ejecutar los procesos t�cnicos en materia
							de gesti�n del recurso humano de la Instituci�n.</p>
						<p>Las funciones que desarrolla en esta oficina son:</p>
						<ul>
							<li><p>Planificar, normar, organizar, conducir y controlar las
									acciones del Sistema de Recursos Humanos de la Universidad
									Nacional Mayor de San Marcos.</p></li>
							<li><p>Proponer a la Alta Direcci�n las normas, planes, programas
									y acciones para la gesti�n del Sistema de Recursos Humanos.</p></li>
							<li><p>Aplicar las normas, instrumentos de gesti�n y procesos
									t�cnicos en materia de desarrollo integral de los recursos
									humanos, en concordancia con las necesidades institucionales y
									de acuerdo a la normatividad vigente.</p></li>
							<li><p>Fomentar una actitud proactiva en los servidores docentes,
									administrativos y obreros y desarrollo del liderazgo de los
									directivos de la Universidad a trav�s de acciones sostenidas de
									mejoramiento de su calidad personal y profesional.</p></li>
							<li><p>Coordinar sus acciones con otras entidades p�blicas en
									asuntos vinculados a sus funciones.</p></li>
							<li><p>Formular el Presupuesto Anal�tico de Personal (PAP), en
									coordinaci�n con la Oficina General de Planificaci�n.</p></li>
							<li><p>Coordinar, asesorar y supervisar las acciones
									descentralizadas del Sistema de Recursos Humanos con las
									diversas dependencias de la Universidad.</p></li>
							<li><p>Resolver, por delegaci�n de Facultades, los asuntos de su
									competencia.</p></li>
							<li><p>Proponer a la Alta Direcci�n pol�ticas y programas
									espec�ficos de planificaci�n, organizaci�n, acceso, evaluaci�n
									de rendimiento, compensaci�n y desarrollo de los recursos
									humanos, acorde con los procesos establecidos por ley.</p></li>
							<li><p>Promover el desarrollo personal, social y laboral as� como
									la capacitaci�n t�cnica de los servidores, orientados al logro
									de las metas y objetivos institucionales, en funci�n de las
									necesidades de la entidad y los resultados de la evaluaci�n de
									desempe�o.</p></li>
							<li><p>Proponer y coordinar la celebraci�n de convenios
									nacionales e internacionales orientados al mejoramiento de la
									calidad del servicio y la capacitaci�n y desarrollo de
									competencias de los servidores.</p></li>
							<li><p>Realizar investigaciones y desarrollar estrategias
									prospectivas en materia de productividad, con el fin de hacer
									mas eficiente la funci�n p�blica en la Universidad.</p></li>
							<li><p>Elaborar y proponer la normatividad para el otorgamiento
									de reconocimientos, incentivos y est�mulos al desempe�o
									desatacado de los servidores de la Universidad.</p></li>
							<li><p>Mantener actualizado el archivo de Legajos de servidores y
									ex servidores docentes, administrativos y obreros de la
									Universidad.</p></li>
							<li><p>Elaborar la Planilla �nica de Remuneraciones y de
									Pensiones, de acuerdo con los dispositivos legales vigentes,
									vigilando registrar en ella �nicamente a los servidores que
									cumplan labores efectivas, as� como consignar los conceptos que
									legalmente correspondan abonarse.</p></li>
							<li><p>Establecer estrategias para aprovechar los conocimientos y
									experiencia de ex servidores docentes, administrativos y
									obreros en beneficio del mejoramiento de la calidad del
									servicio.</p></li>
							<li><p>Llevar el registro de los cargos p�blicos que califican
									como funcionario p�blico y empleado de confianza e informar
									peri�dicamente a las autoridades del Gobierno Central.</p></li>
							<li><p>Asesorar a la Alta Direcci�n en los asuntos de su
									competencia.</p></li>
							<li><p>Otras que le asigne la Direcci�n General de
									Administraci�n.</p></li>
						</ul>
						<br>
						<p>La Oficina General de Recursos Humanos tiene la estructura
							org�nica siguiente :</p>
						<ul>
							<li><p>Oficina de Gesti�n y Escalaf�n</p></li>
							<li><p>Oficina de Remuneraciones y Obligaciones Sociales</p></li>
							<li><p>Oficina de Pensiones y Beneficios sociales</p></li>
							<li><p>Oficina de Desarrollo y Bienestar Social</p></li>
							<li><p>Oficina de Modernizaci�n e Informatizaci�n</p></li>
						</ul>

						<p>En esta secci�n Usted podra encontrar informaci�n referente a
							la Oficina General de Recursos Humanos de la Universidad Nacional
							Mayor de San Marcos; dentro de lo m�s relevante se tiene:</p>
						<ul>
							<li><a href="aboutus-vision-and-goals.php">Misi�n y Visi�n</a></li>
							<li><a href="aboutus-organization-chart.php">Organigrama</a></li>
							<li><a href="aboutus-directory.php">Directorio</a></li>
							<li><a href="aboutus-mof.php">MOF</a></li>
							<li><a href="aboutus-rof.php">ROF</a></li>
							<li><a href="aboutus-tupa.php">TUPA</a></li>
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
