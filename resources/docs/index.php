<?php include('webframes/verify-login.php');?>
<?php
include 'php_files/NewsDAO.php';
include 'php_files/Constants.php';

$newsDAO = new NewsDAO ();

$queryResultNews = $newsDAO->getLastThreeNews();

$page_id = 1;
$sub_page_id = 0;
?>
<html lang="es">
<?php include('./webframes/resources.php');?>
<body class="body-style">
	<div class="container-fluid">
		<div class="row background-image-style">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<?php include('./webframes/header.php');?>
			<!-- ko stopBinding: true -->
				<div class="row">
					<div class="col-md-12"
						style="padding-right: 0px; padding-left: 0px;">
						<div id="carousel-example-generic" class="carousel slide"
							data-ride="carousel" style="margin-bottom: 0px;">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0"
									class=""></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"
									class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"
									class=""></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item">
									<img src="resources/images/simulacro_unmsm.jpg" alt="...">
									<div class="carousel-caption"></div>
								</div>
								<div class="item active">
									<img src="resources/images/unmsm_ogrrhh.jpg" alt="...">
									<div class="carousel-caption">...</div>
								</div>
								<div class="item">
									<img src="resources/images/unmsm_3.jpg" alt="...">
									<div class="carousel-caption">...</div>
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic"
								data-slide="prev"> <span
								class="glyphicon glyphicon-chevron-left"></span>
							</a> <a class="right carousel-control"
								href="#carousel-example-generic" data-slide="next"> <span
								class="glyphicon glyphicon-chevron-right"></span>
							</a>
							<div class="container-fluid"
								style="position: absolute; top: 63%; text-align: center; width: 100%; font-family: Montserrat, sans-serif;">
								<div class="row homepage-title">
									<div class="col-md-12">La Oficina General de Recursos Humanos</div>
								</div>
								<div class="row homepage-subtitle">
									<div class="col-md-12">de la Universidad Nacional Mayor de San
										Marcos</div>
								</div><br />
								<div class="row homepage-subtitle">
									<div class="col-md-12">le da la bienvenida a su sitio web
										oficial</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /ko -->
				<div class="row">
					<?php include('webframes/left-navbar.php');?>
					<!-- ko stopBinding: true -->
					<div id="content-div" class="col-md-9 text-content-style" style="min-height: 796px">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Bienvenidos</h1>
						<p>El Jefe de la Oficina General de Recursos Humanos (OGRRHH) de
							la Universidad Nacional Mayor de San Marcos (UNMSM), <strong>Doctor
							Hector Elvis Mart�nez Flores</strong> le da la bienvenida al sitio web
							oficial de la Oficina General de Recursos Humanos de la Universidad Nacional Mayor de San Marcos.</p>
						<p>En nuestro sitio web, Usted podr� encontrar informaci�n
							sobre la OGRRHH y la UNMSM, dentro de cuales esta el
							directorio, MOF, ROF; as� mismo, se tiene informaci�n espec�fica
							de cada Oficina dependiente de la OGRRHH, las normas y directivas
							concernientes a la OGRRHH, y las convocatorias de trabajo que
							realiza la OGRRHH</p>
					</div>
					<!-- /ko -->
				</div>
				
			<?php include('./webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<script>
	$(function() {
		$('.carousel').carousel({
			interval : 5000
		})
	});
</script>
<?php include('./webframes/header-view-model.php');?>
</html>