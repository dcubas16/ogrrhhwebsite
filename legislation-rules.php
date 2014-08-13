<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

$page_id = 4;
$sub_page_id = 2;
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
						