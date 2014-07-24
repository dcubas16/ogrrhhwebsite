<?php
$page_id = 2;
$sub_page_id = 5;
$con = mysql_connect ( 'localhost', 'root', 'root' );
$goals = "";
$vision = "";
$history = "";
$organizationChart = "";
$authorities = "";
$directory = "";
?>
<html lang="es_PE">
<head>
<?php include('webframes/resources.php');?>
</head>
<?php
// Create connection
$con = mysql_connect ( 'localhost', 'root', 'root' );

mysql_select_db ( 'ogrrhhwebsitedb', $con );

$query = "	SELECT WPC.*
FROM WEB_PAGE_CONTAINS WPC
INNER JOIN DETAIL_WEB_PAGE_CONTAIN DWP ON WPC.ID = DWP.WEB_PAGE_CONTAIN_ID
WHERE DWP.PAGE_ID = " . $page_id;

$result = mysql_query ( $query, $con );
$i = 0;
while ( $row = mysql_fetch_assoc ( $result ) ) {
	if ($i == 0) {
		$goals = $row ['contain'];
	} elseif ($i == 1) {
		$vision = $row ['contain'];
	} elseif ($i == 2) {
		$history = $row ['contain'];
	} elseif ($i == 3) {
		$organizationChart = $row ['document_url'];
	} elseif ($i == 4) {
		$authorities = $row ['contain'];
	} elseif ($i == 5) {
		$directory = $row ['contain'];
	}
	$i ++;
}
?>								
<!-- NAVBAR
================================================== -->
<body class="body-style">
	<div class="row background-image-style"
		style="background: url('resources/pages-styles/page-background.jpeg') no-repeat; background-size: cover;; margin-right: 0px; margin-left: 0px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php include('webframes/header.php');?>

			<div class="row" style="margin-left: 0px; margin-right: 0px;">
				<?php include('webframes/leftnavbar-aboutus.php');?>
				<div class="col-md-9"
					style="background-color: #F7F7F7; padding-left: 30px; padding-top: 15px;">
					<div class="">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Directorio</h1>

						<p>Actualmente la Oficina General de Recursos Humanos, incluyendo
							sus Oficias dependientes, consta del directorio que se muestra a
							continuación:</p>
						<p>Nota: Para comunicarse con nosotros Usted debe llamar al
							6197000, y seguido marcar el anexo de la oficina que corresponda</p>
						<table class="table table-bordered">
							<thead>
								<tr style="background-color: rgb(112, 42, 42); color: white;">
									<th
										style="vertical-align: middle; text-align: center; font-weight: bold;">OFICINA</th>
									<th
										style="vertical-align: middle; text-align: center; font-weight: bold;">SERVIDORES
										DE LA OGRRHH</th>
									<th
										style="vertical-align: middle; text-align: center; font-weight: bold;">TIPO
										DE SERVIDOR</th>
									<th
										style="vertical-align: middle; text-align: center; font-weight: bold;">CARGO</th>
									<th
										style="vertical-align: middle; text-align: center; font-weight: bold;">ANEXO</th>
								</tr>
							</thead>
							<tbody>
								<tr class="success text-align-center">
									<td rowspan="10"
										style="vertical-align: middle; text-align: center; font-weight: bold;">JEFATURA
										DE LA OFICINA GENERAL DE RECURSOS HUMANOS</td>
									<td>Martínez Flores, Héctor Elvis</td>
									<td>Docente Permanente</td>
									<td>Jefe de Oficina General</td>
									<td>7605</td>
								</tr>
								<tr class="success">
									<td>Pagan Soto, Moraima Edith</td>
									<td>Administrativo Permanente</td>
									<td>Jefe de la Unidad de Secretaría y Trámite Documentario</td>
									<td>7601</td>
								</tr>
								<tr class="success">
									<td>Roque Delgado, Nelson</td>
									<td>Docente Permanente</td>
									<td>Apoyo Administrativo</td>
									<td></td>
								</tr>
								<tr class="success">
									<td>Piña Rondon, Gladys Raquel</td>
									<td>Docente Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="success">
									<td>Prado Ore, William Ernesto</td>
									<td>Docente Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="success">
									<td>Núñez Cubas, Diego Antonio</td>
									<td>Administrativo Designado</td>
									<td>Jefe de la Oficina de Modernización e Informatización</td>
									<td></td>
								</tr>
								<tr class="success">
									<td>Paredes Alegre, Maria Fausta</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="success">
									<td>Colcas Salas, Sheyla Irayda</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="success">
									<td>Carpio Ponce, Giovanna Marion</td>
									<td>CAS</td>
									<td>Recepción y Mesa de Partes</td>
									<td>7600</td>
								</tr>
								<tr class="success">
									<td>Ramírez Garnique, Jorge Oswaldo</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="info">
									<td rowspan="9"
										style="vertical-align: middle; text-align: center; font-weight: bold;">OFICINA
										DE REMUNERACIONES Y OBLIGACIONES SOCIALES</td>
									<td>Reyes Campos, Bladimir Flavio</td>
									<td>Contrato Personal</td>
									<td>Jefe de la Oficina de Remuneraciones y Obligaciones
										Sociales</td>
									<td>7608</td>
								</tr>
								<tr class="info">
									<td>Bellido Molina, Enrique Edmundo</td>
									<td>Administrativo Designado</td>
									<td>Jefe de la Unidad de Presupuesto Analítico</td>
									<td></td>
								</tr>
								<tr class="info">
									<td>Dejo Egusquiza, John Carlos</td>
									<td>Docente Permanente</td>
									<td>Jefe de la Unidad de Análisis y Control de Planillas</td>
									<td></td>
								</tr>
								<tr class="info">
									<td>Martínez Ramos, Julio Cesar</td>
									<td>Docente Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="info">
									<td>Félix Sánchez, Arturo Wendel</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="info">
									<td>Ramírez Cueva, Mary Yolanda</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="info">
									<td>Azorsa Salazar, Luis Tulio</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="info">
									<td>Parra Ore, Cinddy Stefany</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="info">
									<td>Valdivieso Carreño, Christian Luis</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td rowspan="15"
										style="vertical-align: middle; text-align: center; font-weight: bold;">OFICINA
										DE GESTIÓN Y ESCALAFÓN</td>
									<td>Sulca Brancacho, Juana Mercedes</td>
									<td>CONTRATO PERSONAL</td>
									<td>Jefe de la Oficina de Gestión y Escalafón</td>
									<td>7607</td>
								</tr>
								<tr class="warning">
									<td>Ramos Bullon Luisa Isabel</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Alipazaga Camacho Virginia Ysidora</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Chamorro Valladares Betty Luz</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Curo Llance Elisa Beatriz</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Anampa Flores Óscar Alberto</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Calderón Maldonado Arturo Isaías</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Alvarado Borja, Roxana Cecilia</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Vilaxa Loayza, Miguel Ángel</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Jaque Llanos Lisbet Teresa</td>
									<td>ADM. DES.</td>
									<td>Jefe de la Unidad de Control de Asistencia</td>
									<td>7422</td>
								</tr>
								<tr class="warning">
									<td>Bendezú Delgado de Limaco, Nora Isabel</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Rondinel Shupingahua, Liliana</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Zavaleta González José Luis</td>
									<td>Administrativo Permanente</td>
									<td>Jefe de la Unidad de Escalafón</td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Pari Capa, Edith</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="warning">
									<td>Batalla paredes, Lizandro Gerardo</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td rowspan="16"
										style="vertical-align: middle; text-align: center; font-weight: bold;">OFICINA
										DE PENSIONES Y BENEFICIOS SOCIALES</td>
									<td>Moncada Alfaro María Esperanza</td>
									<td>CONTRATO PERSONAL</td>
									<td>Jefe de la Oficina de Pensiones y Beneficios Sociales</td>
									<td>7614</td>
								</tr>
								<tr class="danger">
									<td>Miranda Valencia José Luis</td>
									<td>Administrativo Permanente</td>
									<td>Jefe de la Unidad de Beneficios Sociales</td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Alipázaga Camacho, Tito Fortunato</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Mejía Muñoz, Gastón Santos</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Ascencio Altamirano, Victor Vicente</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Canseco Francia, Ángel Gerardo</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Giraldo Ramírez de Reyes, Elsa Norma</td>
									<td>Administrativo Permanente</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Nomberto Chávez, Victor Manuel</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Virto Jiménez, Edgar Luciano</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Valverde Valverde, Edith</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Silva Azañedo, Doris Elizabeth</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Salazar Huillca, Amalia Rocio</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Aquino Guillen, Sandy Lucia</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Esteban Camacuari Geremias Félix</td>
									<td>Administrativo Permanente</td>
									<td>Jefe de la Unidad de Pensiones</td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Atalaya Sánchez, Neftali Visther</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="danger">
									<td>Vega Machado, Miguel Ángel</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="success">
									<td rowspan="3"
										style="vertical-align: middle; text-align: center; font-weight: bold;">OFICINA
										DE DESARROLLO Y BIENESTAR SOCIAL</td>
									<td>Huiza Luna Norma Balbina</td>
									<td>Administrativo Permanente</td>
									<td>Jefe de la Oficina de Desarrollo y Bienestar Social</td>
									<td>7420</td>
								</tr>
								<tr class="success">
									<td>Marchan Cruz Santos Nélida</td>
									<td>Administrativo Permanente</td>
									<td>Jefe de la Unidad de Bienestar Social</td>
									<td></td>
								</tr>
								<tr class="success">
									<td>León Luque, Lucero Milagros</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php include('webframes/footer.php');?>
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