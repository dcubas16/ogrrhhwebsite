<?php
$page_id = 4;
$sub_page_id = 2;
$con = mysql_connect ( 'localhost', 'root', 'root' );
?>
<html lang="es_PE">
<head>
<?php include('webframes/resources.php');?>
</head>
<!-- NAVBAR
================================================== -->
<body class="body-style">
	<div class="row background-image-style"
		style="background: url('resources/pages-styles/page-background.jpeg') no-repeat center; margin-right: 0px; margin-left: 0px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php include('webframes/header.php');?>
			<div class="row" style="margin-left: 0px; margin-right: 0px;">
				<?php include('webframes/leftnavbar-legislation.php');?>
				<div class="col-md-9"
					style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
					<div class="bs-docs-section">
						<ol class="breadcrumb breadcrumbs-ogrrhh-style">
							<li><a href="#">Normatividad</a></li>
							<li  class="active">Leyes</li>
						</ol>
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Leyes</h1>
						<ul>
							<li><a
								href="resources/docs/leyes/Constitucion_Politica_Peru_1993.pdf"
								target="_blank">Constitución Política del Perú - 1993</a></li>
							<li><a
								href="resources/docs/leyes/Ley_23733_Ley_Universitaria_2010.pdf"
								target="_blank">Ley N° 23733 - Ley Universitaria - 1980</a></li>
							<li><a
								href="resources/docs/leyes/Ley_30220_Universitaria_2014 .pdf"
								target="_blank">Ley N° 30220 - Ley Universitaria - 2014</a></li>
							<li><a href="resources/docs/leyes/Ley 30057_Servicio_Civil.pdf"
								target="_blank">Ley N° 30057 - Ley del Servicio Civil</a></li>
							<li><a href="resources/docs/leyes/Ley_29849_CAS.pdf"
								target="_blank">Ley N° 29849 - Eliminación Progresiva del
									Régimen Especial del Decreto Legislativo 1057 y Otorga Derechos
									Laborales</a></li>
							<li><a
								href="resources/docs/leyes/Ley_27806_Transparencia_y_Acceso_Informacion_Publica.pdf"
								target="_blank">Ley N° 27806 - Ley de Transparencia y Acceso a la Información Pública - 1993</a></li>
						</ul>
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Decretos</h1>
						<ul>
							<li><a href="resources/docs/decretos/DL_1057.pdf" target="_blank">Decreto
									Legislativo N° 1057 - Regula el Régimen Especial de
									Contratación de Administrativa de Servicios - 2008</a></li>
							<li><a href="resources/docs/decretos/DL_276_1984.pdf"
								target="_blank">Decreto Legislativo N° 276 - Ley de Bases de la
									Carrera Administrativa - 1984</a></li>
							<li><a href="resources/docs/decretos/DS_005_90_PCM_2013.pdf"
								target="_blank">Decreto Supremo N° 23733 - Ley Universitaria -
									1980</a></li>
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