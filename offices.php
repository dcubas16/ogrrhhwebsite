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
								href="#gestion-office">Oficina de Gestión y Escalafón</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#salary-office">Oficina de Remuneraciones y Obligaciones
									Sociales</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#pension-office">Oficina de Pensiones y Beneficios
									Sociales</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#social-benefies-office">Oficia de Desarrollo y Bienestar
									Social</a></li>
							<li class=""><a class="vertical-navbar-font-style"
								href="#modern-office">Oficia de Modernización e Informatización</a></li>
						</ul>
						<a class="back-to-top" href="#top">Retornar al inicio</a>
					</div>
				</div>
				<div class="col-md-9"
					style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
					<div class="bs-docs-section">
						<h1 id="gestion-office"
							class="font-style-medium-title-dark page-header ">Oficina de Gestión y Escalafón</h1>
						<p>Bootstrap makes use of certain HTML elements and CSS properties
							that require the use of the HTML5 doctype. Include it at the
							beginning of all your projects<a href="#"> ...Leer mas</a></p>
					</div>
					<div class="bs-docs-section">
						<h1 id="salary-office" class="font-style-medium-title-dark page-header ">Oficina de Remuneraciones y Obligaciones Sociales</h1>
						<p>Bootstrap makes use of certain HTML elements and CSS properties
							that require the use of the HTML5 doctype. Include it at the
							beginning of all your projects<a href="#"> ...Leer mas</a></p>
					</div>

					<div class="bs-docs-section">
						<h1 id="pension-office"
							class="font-style-medium-title-dark page-header ">Oficina de Pensiones y Beneficios Sociales</h1>
						<p>
							Descargue el organigrama de la OGRRHH<a href="#"> ...Leer mas</a>
						</p>
					</div>
					<div class="bs-docs-section">
						<h1 id="social-benefies-office"
							class="font-style-medium-title-dark page-header ">Oficia de Desarrollo y Bienestar Social</h1>
						<p>Jefe de la Oficina de Modernización e Informatización<a href="#"> ...Leer mas</a></p>
					</div>
					<div class="bs-docs-section">
						<h1 id="modern-office" class="font-style-medium-title-dark page-header ">Oficia de Modernización e Informatización</h1>
						<p>
							Descargue el MOF de la OGRRHH<a href="#"> ...Leer mas</a>
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