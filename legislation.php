<?php
$page_id = 4;
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
							<li class=""><a class="vertical-navbar-font-style"
								href="#CAS-legislation">Normatividad CAS</a></li>
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
							<li><a
								href="resources/docs/leyes/Ley_23733_Ley_Universitaria_2010.pdf"
								target="_blank">Ley N° 23733 - Ley Universitaria</a></li>
							<li><a href="resources/docs/otros/Estatuto_UNMSM.pdf"
								target="_blank">Estatuto de la Universidad Nacional Mayor de San
									Marcos</a></li>
							<li><a href="resources/docs/otros/ROF_UNMSM_2011.pdf"
								target="_blank">Reglamento de Organización y Funciones de la
									Universidad Nacional Mayor de San Marcos</a></li>
						</ul>
					</div>
					<div class="bs-docs-section">
						<h1 id="personal-system"
							class="font-style-medium-title-dark page-header ">Sistema de
							Personal</h1>
						<ul>
							<li><a
								href="resources/docs/decretos/DL_276_1984.pdf"
								target="_blank">Decreto Legislativo N° 276 - Ley de Bases de la
									Carrera Administrativa y de Remuneraciones del Sector Público</a></li>
							<li><a
								href="resources/docs/decretos/DS_005_90_PCM_2013.pdf"
								target="_blank">Decreto Supremo N° 005-90-PCM - Reglamento de la
									Ley de Bases de la Carrera Administrativa y de Remuneraciones
									del Sector Público</a></li>
							<li><a href="resources/docs/leyes/ROF_UNMSM_2011.pdf"
								target="_blank">Ley N° 26771 - Ley de Nepotismo</a></li>
							<li><a href="#">Reglamento del Año Sabático de la Universidad
									Nacional Mayor de San Marcos</a></li>
							<li><a href="#">Reglamento de Licencias Docentes por
									Perfeccionamiento</a></li>
							<li><a href="#">Directivas de la Oficina General de Recursos
									Humanos de la Universidad Nacional Mayor de San Marcos</a></li>
						</ul>
					</div>

					<div class="bs-docs-section">
						<h1 id="admiistrative-simplification"
							class="font-style-medium-title-dark page-header ">Simplificación
							Administrativa</h1>
						<ul>
							<li><a href="#">Ley N° 25035 - Ley De Simplificación
									Administrativa (Derogada - se incluye para consulta en caso de
									expedientes en trámite iniciados bajo su vigencia)</a></li>
							<li><a href="#">Decreto Supremo N° 070 - Reglamento De La Ley De
									Simplificación Administrativa(Derogado - se incluye para
									consulta en caso de expedientes en trámite iniciados bajo su
									vigencia)</a></li>
							<li><a href="#">Decreto Supremo N° 002-94-Jus - Texto Único
									Ordenado De La Ley De Normas Generales De Procedimientos
									Administrativos(derogado - se incluye para consulta en caso de
									expedientes en trámite iniciados bajo su vigencia)</a></li>
							<li><a href="#">Ley N° 27444 - Ley Del Procedimiento
									Administrativo General</a></li>
						</ul>
					</div>
					<div class="bs-docs-section">
						<h1 id="supply-system"
							class="font-style-medium-title-dark page-header ">Sistema de
							Abastecimiento</h1>
						<ul>
							<li><a href="#">CONSUCODE</a></li>
							<li><a href="#">Decreto Supremo N° 012-2001-Pcm - Texto Único
									Ordenado De La Ley De Contrataciones Y Adquisiciones Del Estado</a></li>
							<li><a href="#">Decreto Supremo N° 013-2001-Pcm Reglamento De La
									Ley De Contrataciones Y Adquisiciones Del Estado</a></li>
						</ul>
					</div>
					<div class="bs-docs-section">
						<h1 id="control-legislation"
							class="font-style-medium-title-dark page-header ">Normas de
							Control</h1>
						<ul>
							<li><a href=#>RESOLUCIÓN DE CONTRALORÍA N° 072-2000 - CG - NORMAS
									DE CONTROL INTERNO PARA EL SECTOR PÚBLICO</a></li>
							<li><a href=#>RESOLUCIÓN DE CONTRALORÍA N° 123 -2000 - CG -
									NORMAS TÉCNICAS DE CONTROL INTERNO PARA UNA CULTURA DE
									INTEGRIDAD, TRANSPARENCIA Y RESPONSABILIDAD EN LA
									ADMINISTRACIÓN PÚBLICA</a></li>
						</ul>
					</div>
					<div class="bs-docs-section">
						<h1 id="public-administration"
							class="font-style-medium-title-dark page-header ">Delitos Contra
							la Administración Pública</h1>
						<ul>
							<li><a href=#>Decreto Legislativo N° 635 - Delitos Contra La
									Administración Pública</a></li>
						</ul>
					</div>
					<div class="bs-docs-section">
						<h1 id="public-gestion"
							class="font-style-medium-title-dark page-header ">Gestión Pública</h1>
						<ul>
							<li><a href=#>Ley De Modernización De La Gestión Del Estado</a></li>
						</ul>
					</div>
					<div class="bs-docs-section">
						<h1 id="CAS-legislation"
							class="font-style-medium-title-dark page-header ">Normatividad CAS</h1>
						<ul>
							<li><a href=#>Ley De Modernización De La Gestión Del Estado</a></li>
						</ul>
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