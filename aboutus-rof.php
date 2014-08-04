<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

$page_id = 2;
$sub_page_id = 7;
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
							class="font-style-medium-title-dark page-header ">ROF</h1>
						<p>El ROF es el Reglamento de Organizaci�n y Funciones de una
							entidad, que se constituye en un documento t�cnico normativo de
							gesti�n institucional que establece: La estructura org�nica de la
							entidad, Las funciones generales y espec�ficas de la entidad y de
							cada uno de sus �rganos y unidades org�nicas, Las relaciones de
							coordinaci�n y control entre �rganos, unidades org�nicas y
							entidades cuando corresponda. Este instrumento de gesti�n
							formaliza las competencias de cada �rea dentro de la organizaci�n
							y en funci�n a ello se puede determinar las responsabilidades que
							le corresponde en el logro de los objetivos institucionales.</p>
						<p>
							<a href="resources/docs/otros/ROF_UNMSM_2011.pdf" target="_blank">Haga
								click aqu� para descargar el ROF de la UNMSM</a>
						</p>
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

?>
