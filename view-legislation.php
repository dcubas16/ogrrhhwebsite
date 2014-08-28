<?php include('webframes/verify-login.php');?>
<?php
include 'php_files/LegislationDAO.php';
include 'php_files/Constants.php';

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
							while ( $row = mysql_fetch_assoc ( $queryResult ) ) {
								print ("<table class='table table-condensed'>
								<tbody>
								<tr>
								<td><strong>Tipo de Normatividad</strong></td>
								<td>" . $row ['legislation_type_name'] . "</td>
								</tr>
								<tr>
								<td><strong>Título</strong></td>
								<td>" . $row ['name'] . "</td>
								</tr>
								<tr>
								<td><strong>Número</strong></td>
								<td>" . $row ['number'] . "</td>
								</tr>
								<tr>
								<td><strong>Descripcion</strong></td>
								<td>" . $row ['description'] . "</td>
								</tr>
								<tr>
								<td><strong>Fecha de Publicación</strong></td>
								<td>" . $row ['publication_date'] . "</td>
								</tr>
								<tr>
								<td><strong>Archivos</strong></td>
								<td><a href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'><span class='glyphicon glyphicon-download'></span>
								Descargar</a></td>
								</tr>
								</tbody>
								</table>") ;
							}
							
							?>
							
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