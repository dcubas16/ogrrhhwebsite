<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/ConvocatoryDAO.php';
include 'php_files/Constants.php';

$page_id = 0;
$sub_page_id = 0;
$convocatoryId = $_GET ['id'];
// echo $legislationId;

$convocatoryDAO = new ConvocatoryDAO();
$queryResult = $convocatoryDAO->getById($convocatoryId);
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
							class="font-style-medium-title-dark page-header ">Detalle de
							Convocatoria</h1>
						
							<?php
							while ( $row = mysql_fetch_assoc ( $queryResult ) ) {
								print ("<table class='table table-condensed'>
								<tbody>
								<tr>
								<td><strong class='strong-ogrrhh'>Tipo de Convocatoria</strong></td>
								<td class='upper-case-link'>" . $row ['convocatory_type_name'] . "</td>
								</tr>
								<tr>
								<tr>
								<td><strong class='strong-ogrrhh'>Número</strong></td>
								<td class='upper-case-link'>" . $row ['number'] . "</td>
								</tr>
								<td><strong class='strong-ogrrhh'>Título</strong></td>
								<td class='upper-case-link'>" . $row ['title'] . "</td>
								</tr>
								<tr>
								<td><strong class='strong-ogrrhh'>Fecha de Vigencia</strong></td>
								<td class='upper-case-link'>" . $row ['life_date'] . "</td>
								</tr>
								<tr>
								<td><strong class='strong-ogrrhh'>Fecha de Publicación</strong></td>
								<td class='upper-case-link'>" . $row ['update_date'] . "</td>
								</tr>
								<tr>
								<td rowspan ='5'><strong class='strong-ogrrhh'>Archivos</strong></td>
								<td><a href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'><span class='glyphicon glyphicon-download'></span>
								Descargar (Convocatoria)</a></td>
								</tr>
								<tr>
								<td><a href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'><span class='glyphicon glyphicon-download'></span>
								Descargar (Resultado 1)</a></td>
								</tr>
								<tr>
								<td><a href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='_blank'><span class='glyphicon glyphicon-download'></span>
								Descargar (Resultado 2)</a></td>
								</tr>
								<tr>
								<td><button type='button' class='btn btn-info btn-xs'
								data-toggle='modal' onclick='backPage()'>
								<span class='glyphicon glyphicon-plus' /></span> Agregar
								</button></a></td>
								</tr>		
								</tbody>
								</table>") ;
							}
							
							?>
							<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" onclick="backPage()">
							<span class="glyphicon glyphicon-chevron-left"></span><span
								class="glyphicon glyphicon-chevron-left" /></span> Retornar
							</button>
					</div>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<?php include('./webframes/header-view-model.php');?>
<script type="text/javascript">
function backPage(){
	
	parent.history.back();
    return false;
}
</script>
</html>