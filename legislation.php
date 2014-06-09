<?php
$page_id = 2;
$con = mysql_connect ( 'localhost', 'root', 'root' );
?>
<html lang="es_PE">
<head>
<?php include('./webframes/resources.php');?>
</head>
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
								href="#universitary-legislation">Legislación Universitaria</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#personal-system">Sistema de Personal</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#admiistrative-simplification">Simplificación
									Administrativa</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#supply-system">Sistema de Abastecimiento</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#control-legislation">Normas de Control</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#public-administration">Delitos Contra la Administración
									Pública</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#public-gestion">Gestión Pública</a></li>
						</ul>
						<a class="back-to-top" href="#top">Retornar al inicio</a>
					</div>
				</div>
				<div class="col-md-9"
					style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
					<div class="bs-docs-section">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Legislación
							Universitaria</h1>
						<ul>
							<li><a href="#">Ley N° 23733 - Ley Universitaria</a></li>
							<li><a href="#">Estatuto de la Universidad Nacional Mayor de San
									Marcos</a></li>
							<li><a href="#">Reglamento de Organización y Funciones de la
									Universidad Nacional Mayor de San Marcos</a></li>
						</ul>
					</div>
					<div class="bs-docs-section">
						<h1 id="personal-system"
							class="font-style-medium-title-dark page-header ">Sistema de
							Personal</h1>
						<ul>
							<li><a href="#">Decreto Legislativo N° 276 - Ley de Bases de la
									Carrera Administrativa y de Remuneraciones del Sector Público</a></li>
							<li><a href="#">Decreto Supremo N° 005-90-PCM - Reglamento de la
									Ley de Bases de la Carrera Administrativa y de Remuneraciones
									del Sector Público</a></li>
							<li><a href="#">Ley N° 26771 - Ley de Nepotismo</a></li>
							<li><a href="#">Reglamento del Año Sabático de la Universidad
									Nacional Mayor de San Marcos</a></li>
							<li><a href="#">Reglamento de Licencias Docentes por
									Perfeccionamiento</a></li>
							<li><a href="#">Directivas de la Oficina General de Recursos
									Humanos de la Universidad Nacional Mayor de San Marcos</a></li>
						</ul>
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
					
					<?php
					// Create connection
					$con = mysql_connect ( 'localhost', 'root', 'root' );
					
					mysql_select_db ( 'ogrrhhwebsitedb', $con );
					
					$query = "	SELECT WPC.*
								FROM WEB_PAGE_CONTAINS WPC
								INNER JOIN DETAIL_WEB_PAGE_CONTAIN DWP ON WPC.ID = DWP.WEB_PAGE_CONTAIN_ID
								WHERE DWP.PAGE_ID = " . $page_id;
					
					$result = mysql_query ( $query, $con );
					while ( $row = mysql_fetch_assoc ( $result ) ) {
						echo $row ['id'] . '\xA';
						echo $row ['title'] . '\xA';
						echo $row ['subtitle'] . '\xA';
						echo $row ['contain'] . '\xA';
						echo $row ['publication_date'] . '\xA';
					}
					?>
					
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