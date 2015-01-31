<div class="left-navbar col-md-3 left-navbar-background-style" style="min-height: 500px;">
	<div data-bind="visible: headerViewModel.pageId() == 0"></div>
	<div data-bind="visible: headerViewModel.pageId() == 1">
		<div class="row">
			<div class="col-md-11">
				<div class="row" style="height: 30;"></div>
				<div class="row font-style-short-title-white">
					<div class="col-md-12">ULTIMAS</div>
				</div>
				<div class="row font-style-tall-title-white">
					<div class="col-md-12">PUBLICACIONES</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row" style="height: 25;"></div>
				<div class="row">
					<div class="col-md-11">
					<?php
					$dias = array (
							"Domingo",
							"Lunes",
							"Martes",
							"Miercoles",
							"Jueves",
							"Viernes",
							"Sábado" 
					);
					$meses = array (
							"Enero",
							"Febrero",
							"Marzo",
							"Abril",
							"Mayo",
							"Junio",
							"Julio",
							"Agosto",
							"Septiembre",
							"Octubre",
							"Noviembre",
							"Diciembre" 
					);
					?>
						<?php
						if (isset ( $queryResultNews )) {
							while ( $row = mysql_fetch_assoc ( $queryResultNews ) ) {
								
								$formattedDate = date ( 'd', strtotime ( $row ['updated_date'] ) ) . " de " . $meses [date ( 'm', strtotime ( $row ['updated_date'] ) ) - 1] . " de " . date ( 'Y', strtotime ( $row ['updated_date'] ) );
								
								print ("<a  data-toggle='tooltip' title='' data-original-title='".$row ['complete_title']."' href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='blank'><div class='row'>
										<div class='col-md-12 news-image-container-style'>
											 <img class='news-image-style'
												src='resources/images/recursos-humanos_1_210_110.jpg'>
											
										</div>
									</div>
									<div class='row'>
										<div class='col-md-10 news-date'>" . $formattedDate . "</div>
										<div class='col-md-2'></div>
									</div>
									<div class='row'>
										<div class='col-md-12 news-subtitle upper-case-link'>" . $row ['title'] . "</div>
									</div></a><br>") ;
							}
						}
						?>


					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
			<div class="col-md-1"></div>

		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 link-font-style">
				<a class="watchAllNews" href="news.php"> Ver todas las Publicaciones...</a>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<div class="hidden-print affix-top vertical-navbar"
		role="complementary">
		<div data-bind="visible: headerViewModel.pageId() == 7">
			<div class="row">
				<div class="col-md-12"
					style="height: 30px; padding-top: 17px; text-align: center;">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="bs-docs-sidebar hidden-print affix-top vertical-navbar"
		role="complementary">
		<ul class="nav bs-docs-sidenav"
			data-bind="visible: headerViewModel.pageId() == 2">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 1)? 'active' : '' }"><a
				class="vertical-navbar-font-style"
				href="aboutus-vision-and-goals.php">Misión y Visión</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 2)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-authorities.php">Autoridades</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 3)? 'active' : '' }"><a
				class="vertical-navbar-font-style"
				href="aboutus-organization-chart.php">Organigrama</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 4)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-directory.php">Directorio</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 5)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-mof.php">MOF</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 6)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-rof.php">ROF</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 7)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-tupa.php">TUPA</a></li>
		</ul>
		<ul class="nav bs-docs-sidenav"
			data-bind="visible: headerViewModel.pageId() == 3">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 1)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="offices-gestion.php">Oficina
					de Gestión y Escalafón</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 2)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="offices-remuneration.php">Oficina
					de Remuneraciones y Obligaciones Sociales</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 3)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="offices-pension.php">Oficina
					de Pensiones y Beneficios Sociales</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 4)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="offices-development.php">Oficina
					de Desarrollo y Bienestar Social</a></li>
		</ul>
		<ul class="nav bs-docs-sidenav"
			data-bind="visible: headerViewModel.pageId() == 4">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 2)? 'active' : '' }"><a
				class="vertical-navbar-font-style"
				href="legislation-laws-decree.php">Leyes y Decretos</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 5)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="legislation-rules.php">Reglamentos</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 3)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="legislation-directives.php">Directivas</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 1)? 'active' : '' }"><a
				class="vertical-navbar-font-style"
				href="legislation-resolutions.php">Resoluciones</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 4)? 'active' : '' }"><a
				class="vertical-navbar-font-style"
				href="legislation-ogrrhh-legislation.php">Normatividad OGRRHH y
					UNMSM</a></li>
		</ul>
		<ul class="nav bs-docs-sidenav"
			data-bind="visible: headerViewModel.pageId() == 5">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 1)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="work-with-us-calls.php">Convocatorias
					CAS</a></li>
		</ul>
		<a class="back-to-top" href="#top"
			data-bind="visible: headerViewModel.pageId() != 1 && headerViewModel.pageId() != 7 ">Retornar
			al inicio</a>
	</div>
</div>
<script>
// $('div[data-toggle="tooltip"]').tooltip({ animated: 'fade', placement:
// 	'rigth', });
$('a[data-toggle="tooltip"]').tooltip({ animated: 'fade', placement:
	'rigth', });
</script>

