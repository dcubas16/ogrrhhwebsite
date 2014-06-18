<?php
$page_id = 6;
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
					<div class="row">
						<div class="col-md-11">
							<div class="row" style="height: 30;"></div>
							<div class="row font-style-tall-title-white">
								<div class="col-md-12">DIRECCION</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row" style="height: 30;"></div>
							<div class="row">
								<div class="col-md-11">
									<div class="row">
										<div class="col-md-12 news-image-container-style">
											<div id="page"  >
												<script
													src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
												<script>
								function initialize() {
									var map_canvas = document
											.getElementById('map_canvas');
									var map_options = {
										center : new google.maps.LatLng(
												-12.120869, -77.026988),
										zoom : 60,
										mapTypeId : google.maps.MapTypeId.ROADMAP
									}
									var map = new google.maps.Map(map_canvas,
											map_options)
								}
								google.maps.event.addDomListener(window,
										'load', initialize);
							</script>
												<div id="map_canvas"></div>
												<br>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 news-subtitle">
											<p>Dirección</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 news-subtitle">Telefonos y Anexos</div>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-9"
					style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
					<div class="bs-docs-section">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Escribenos</h1>
						<form role="form">
							<div class="form-group col-md-8">
								<label for="exampleInputEmail1">Nombre</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									placeholder="Ingrese su nombre">
							</div>
							<div class="form-group col-md-8">
								<label for="exampleInputEmail1">Dirección de email</label> <input
									type="email" class="form-control" id="exampleInputEmail1"
									placeholder="Ingrese su dirección de email">
							</div>
							<div class="form-group col-md-8">
								<label for="exampleInputPassword1">Contraseña</label> <input
									type="password" class="form-control" id="exampleInputPassword1"
									placeholder="Ingrese su contraseña">
							</div>
							<div class="form-group col-md-12">
								<label for="exampleInputPassword1">Mensaje</label>
								<textarea class="form-control" rows="3"
									placeholder="Ingrese su mensaje" style="height: 140;"></textarea>
							</div>
							<div class="form-group col-md-12" style="text-align: right;">
								<button type="button" class="btn btn-danger">Limpiar</button>
								<button type="button" class="btn btn-success">Enviar</button>
							</div>
						</form>

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