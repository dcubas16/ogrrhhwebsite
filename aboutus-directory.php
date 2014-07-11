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
		style="	background: url('resources/pages-styles/page-background.jpeg') no-repeat; background-size: cover;; margin-right: 0px; margin-left: 0px;">
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
							
						<p>Actualmente la Oficina General de Recursos Humanos, incluyendo sus Oficias dependientes, consta del directorio que se muestra a continuación:</p>	
						<p>Nota: Para comunicarse con nosotros Usted debe llamar al 6197000, y seguido marcar el anexo de la oficina que corresponda</p>
						<table class="table table-bordered" style="font-size: small;">
							<thead>
								<tr>
									<th>Oficina</th>
									<th>Servidores de la OGRRHH</th>
									<th>Tipo de Servidor</th>
									<th>Cargo</th>
									<th>Anexo</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="11">JEFATURA DE LA OFICINA GENERAL DE RECURSOS HUMANOS</td>
									<td>MARTINEZ FLORES, HÉCTOR ELVIS</td>
									<td>DOCENTE PERM.</td>
									<td>Jefe de Oficina General</td>
									<td>7605</td>
								</tr>
								<tr>
									<td>PAGAN SOTO, MORAIMA EDITH</td>
									<td>ADM. PERM</td>
									<td>Jefe de la Unidad de Secretaría y Tramite Documentario</td>
									<td>7601</td>
								</tr>
								<tr>
									<td>ROQUE DELGADO, NELSON</td>
									<td>ADM. PERM</td>
									<td>Apoyo Administrativo</td>
									<td></td>
								</tr>
								<tr>
									<td>PIÑA RONDON, GLADYS RAQUEL</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>PRADO ORE, WILLIAM ERNESTO</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>NUÑEZ CUBAS, DIEGO ANTONIO</td>
									<td>ADM. DES.</td>
									<td>Jefe de la Oficina de Modernización e Informatización</td>
									<td></td>
								</tr>
								<tr>
									<td>PAREDES ALEGRE, MARIA FAUSTA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>FALERO MARTINEZ, YOLANDA NELIDA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>COLCAS SALAS, SHEYLA IRAYDA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>CARPIO PONCE, GIOVANNA MARION</td>
									<td>CAS</td>
									<td>Recepción y Mesa de Partes</td>
									<td>7600</td>
								</tr>
								<tr>
									<td>RAMIREZ GARNIQUE, JORGE OSWALDO</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="10">OFICINA DE REMUNERACIONES Y OBLIGACIONES SOCIALES</td>
									<td>REYES CAMPOS, BLADIMIR FLAVIO</td>
									<td>CONTRATO PERSONAL</td>
									<td>Jefe de la Oficina de Remuneraciones y Obligaciones
										Sociales</td>
									<td>7608</td>
								</tr>
								<tr>
									<td>BELLIDO MOLINA, ENRIQUE EDMUNDO</td>
									<td>ADM. DES.</td>
									<td>Jefe de la Unidad de Presupuesto Analítico</td>
									<td></td>
								</tr>
								<tr>
									<td>DEJO EGUSQUIZA JOHN CARLOS</td>
									<td>ADM. PERM</td>
									<td>Jefe de la Unidad de Análisis y Control Planillas</td>
									<td></td>
								</tr>
								<tr>
									<td>MARTINEZ RAMOS JULIO CESAR</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>FELIX SANCHEZ ARTURO WENDEL</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>POVIS SORIANO, DORIS HILDA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>RAMIREZ CUEVA, MARY YOLANDA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>AZORSA SALAZAR, LUIS TULIO</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>PARRA ORE, CINDDY STEFANY</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>VALDIVIESO CARREÑO, CHRISTIAN LUIS</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="15">OFICINA DE GESTIÓN Y ESCALAFÓN</td>
									<td>SULCA BRANCACHO JUANA MERCEDES</td>
									<td>CONTRATO PERSONAL</td>
									<td>Jefe de la Oficina de Gestión y Escalafón</td>
									<td>7607</td>
								</tr>
								<tr>
									<td>RAMOS BULLON LUISA ISABEL</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>ALIPAZAGA CAMACHO VIRGINIA YSIDORA</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>CHAMORRO VALLADARES BETTY LUZ</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>CURO LLANCE ELISA BEATRIZ</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>ANAMPA FLORES OSCAR ALBERTO</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>CALDERON MALDONADO ARTURO ISAIAS</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>ALVARADO BORJA, ROXANA CECILIA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>VILAXA LOAYZA, MIGUEL ANGEL</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>JAQUE LLANOS LISBET TERESA</td>
									<td>ADM. DES.</td>
									<td>Jefe de la Unidad de Control de Asistencia</td>
									<td>7422</td>
								</tr>
								<tr>
									<td>BENDEZU DELGADO DE LIMACO NORA ISABEL</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>RONDINEL SHUPINGAHUA, LILIANA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>ZAVALETA GONZALEZ JOSE LUIS</td>
									<td>ADM. PERM</td>
									<td>Jefe de la Unidad de Escalafón</td>
									<td></td>
								</tr>
								<tr>
									<td>PARI CAPA, EDITH</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>BATALLA PAREDES, LIZANDRO GERARDO</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="16">OFICINA DE PENSIONES Y BENEFICIOS SOCIALES</td>
									<td>MONCADA ALFARO MARIA ESPERANZA</td>
									<td>CONTRATO PERSONAL</td>
									<td>Jefe de la Oficina de Pensiones y Beneficios Sociales</td>
									<td>7614</td>
								</tr>
								<tr>
									<td>MIRANDA VALENCIA JOSE LUIS</td>
									<td>ADM. PERM</td>
									<td>Jefe€ de la Unidad de Beneficios Sociales</td>
									<td></td>
								</tr>
								<tr>
									<td>ALIPAZAGA CAMACHO TITO FORTUNATO</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>MEJIA MUÑOZ GASTON SANTOS</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>ASCENCIO ALTAMIRANO VICTOR VICENTE</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>CANSECO FRANCIA ANGEL GERARDO</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>GIRALDO RAMIREZ DE REYES ELSA NORMA</td>
									<td>ADM. PERM</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>NOMBERTO CHAVEZ, VICTOR MANUEL</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>VIRTO JIMENEZ, EDGAR LUCIANO</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>VALVERDE VALVERDE, EDITH</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>SILVA AZAÑEDO, DORIS ELIZABETH</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>SALAZAR HUILLCA, AMALIA ROCIO</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>AQUINO GUILLEN, SANDY LUCIA</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>ESTEBAN CAMACUARI GEREMIAS FELIX</td>
									<td>ADM. PERM</td>
									<td>Jefe de la Unidad de Pensiones</td>
									<td></td>
								</tr>
								<tr>
									<td>ATALAYA SANCHEZ, NEFTALI VISTHER</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>VEGA MACHADO, MIGUEL ANGEL</td>
									<td>CAS</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="3">OFICINA DE DESARROLLO Y BIENESTAR SOCIAL</td>
									<td>HUIZA LUNA NORMA BALBINA</td>
									<td>ADM. PERM</td>
									<td>Jefe de la Oficina de Desarrollo y Bienestar Soc.</td>
									<td>7420</td>
								</tr>
								<tr>
									<td>MARCHAN CRUZ SANTOS NELIDA</td>
									<td>ADM. PERM</td>
									<td>Jefe de la Unidad de Bienestar Social</td>
									<td></td>
								</tr>
								<tr>
									<td>LEON LUQUE, LUCERO MILAGROS</td>
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