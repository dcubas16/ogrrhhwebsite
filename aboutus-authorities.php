<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/ConnectionManager.php';

$page_id = 2;
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
				<!-- ko stopBinding: true -->
					<div class="col-md-9 text-content-style">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Autoridades</h1>
						<table class="table table-bordered">
							<thead style="background-color: rgb(99, 30, 30); color: white;">
								<tr>
									<th class="text-center" style="vertical-align: middle; text-align: center; font-weight: bold;">NOMBRES</th>
									<th class="text-center">CARGO</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><p>Dr. Pedro Atilio Cotillo Zegarra</p></td>
									<td><p><strong>Rector de la Universidad Nacional Mayor de San Marcos</strong></p></td>
								</tr>
								<tr class="danger">
									<td><p>Mg. Carlos Edmundo Navarro Depaz</p></td>
									<td><p><strong>Director General de Administración</strong></p></td>
								</tr>
								<tr>
									<td><p>Mg. Hector Elvis Martínez Flores</p></td>
									<td><p><strong>Jefe de la Oficina General de Recursos Humanos</strong></p></td>
								</tr>
								<tr class="danger">
									<td><p>Bladimir Flavio Reyes Campos</p></td>
									<td><p><strong>Jefe de la Oficina de Remuneraciones y Obligaciones
											Sociales</strong></p></td>
								</tr>
								<tr>
									<td><p>Lic. Juana Mercedes Sulca Brancacho</p></td>
									<td><p><strong>Jefe de la Oficina de Gestión y Escalafónn</strong></p></td>
								</tr>
								<tr class="danger">
									<td><p>María Esperanza Moncada Alfaro</p></td>
									<td><p><strong>Jefe de la Oficina de Pensiones y Beneficios Sociales</strong></p></td>
								</tr>
								<tr>
									<td><p>Lic. Norma Balbina Huiza Luna</p></td>
									<td><p><strong>Jefe de la Oficina de Desarrollo y Bienestar Social</strong></p></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /ko -->
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<?php include('./webframes/header-view-model.php');?>
</html>
