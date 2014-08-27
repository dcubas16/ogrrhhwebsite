<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/LegislationDAO.php';

$page_id = 0;
$sub_page_id = 0;
$legislationId = $_GET ['id'];
// echo $legislationId;

$legislationDAO = new LegislationDAO ();
$queryResult = $legislationDAO->getById ( $legislationId );
?>
<html>
<?php include('webframes/resources.php');?>
<body class="body-style">
	<div class="container-fluid">
		<div class="row background-image-style">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<?php include('webframes/header.php');?>
			<div id="content-div" class="row">
				<?php include('webframes/left-navbar.php');?>
				
					<div id="contentSection" class="col-md-9 text-content-style">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Normatividad</h1>
						
							<?php
							// while ( $row = mysql_fetch_assoc ( $queryResult ) ) {
							// print ("<li><a class='upper-case-link' href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "'
							// target='blank'>" . $row ['name'] . " - " . $row ['publication_year'] . "</a></li>") ;
							// }
							?>
							<table class="table table-condensed">
							<tbody>
								<tr>
									<td><strong>Tipo de Normatividad</strong></td>
									<td>Ley</td>
								</tr>
								<tr>
									<td><strong>Título</strong></td>
									<td>de Jubilacion</td>
								</tr>
								<tr>
									<td><strong>Número</strong></td>
									<td>20530</td>
								</tr>
								<tr>
									<td><strong>Descripcion</strong></td>
									<td>Esta ley implica los aportes Esta ley implica los
										aportesEsta ley implica los aportesEsta ley implica los
										aportesEsta ley implica los aportesEsta ley implica los
										aportesEsta ley implica los aportesEsta ley implica los
										aportesEsta ley implica los aportes</td>
								</tr>
								<tr>
									<td><strong>Fecha de Publicación</strong></td>
									<td>16/11/1986</td>
								</tr>
								<tr>
									<td><strong>Archivos</strong></td>
									<td>Descargar</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<?php include('./webframes/header-view-model.php');?>
</html>