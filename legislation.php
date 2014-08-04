<?php
$page_id = 4;
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
							<li class="active">Normatividad</li>
							<!-- 							<li><a href="#">Library</a></li> -->
							<!-- 							<li class="active">Data</li> -->
						</ol>
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Normatividad</h1>
						<p>En esta sección Usted podrá encotrar la normatividad vigente
							bajo la cual se ríge la Oficina General de Recursos Humanos de la
							Universidad Nacional Mayor de San Marcos, además de la
							normatividad que regula a las universidades y la gestión de
							recursos humanos</p>
						<p>Para mayor comodidad se clasificó la normatividad vigente así:</p>
						<ul>
							<li><a href="legislation-resolutions.php">Resoluciones Emitidas</a></li>
							<li><a href="legislation-laws.php">Leyes y Decretos</a></li>
							<li><a href="legislation-directives.php">Directivas</a></li>
							<li><a href="legislation-ogrrhh-legislation.php">Normatividad
									OGRRHH y UNMSM</a></li>
						</ul>
						<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" data-target="#add-new-legislation-modal" >
							<span class="glyphicon glyphicon-plus"></span> Agregar Nueva
							Normatividad
						</button>
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
<?php include('webframes/add-new-legislation-modal.php');?>
<script>
	var viewModel = {
		filePath : 	ko.observable("")
	};
						
	$(function() {
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