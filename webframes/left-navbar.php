<div class="left-navbar col-md-3 left-navbar-background-style">
	<div data-bind="visible: headerViewModel.pageId() == 0"></div>
	<div data-bind="visible: headerViewModel.pageId() == 1">
		<div class="row">
			<div class="col-md-11">
				<div class="row" style="height: 30;"></div>
				<div class="row font-style-short-title-white">
					<div class="col-md-12">ULTIMAS</div>
				</div>
				<div class="row font-style-tall-title-white">
					<div class="col-md-12">NOTICIAS</div>
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
					<?php
					$dias = array (
							"Domingo",
							"Lunes",
							"Martes",
							"Miercoles",
							"Jueves",
							"Viernes",
							"S�bado" 
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
					
					// echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
					// Salida: Viernes 24 de Febrero del 2012
					// echo DateTime::createFromFormat('dd/MM/yyyy', '16/11/1986')->format('dd/MM/yyyy');
					?>
					
					<?php
					// setlocale(LC_ALL,"es_ES");
					// echo strftime("%A %d de %B del %Y");
					if (isset ( $queryResultNews )) {
						while ( $row = mysql_fetch_assoc ( $queryResultNews ) ) {
							
							$formattedDate = date ( 'd', strtotime ( $row ['updated_date'] ) ) . " de " . $meses[date ( 'm', strtotime ( $row ['updated_date'] ))-1]." de ".date ( 'Y', strtotime ( $row ['updated_date'] ));
							
							print ("<div class='row'>
									<div class='col-md-12 news-image-container-style'>
										<a href='" . Constants::ogrrhhFTPUrl . $row ['file_path'] . "' target='blank'> <img class='news-image-style'
											src='resources/images/recursos-humanos_1_210_110.jpg'>
										</a>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-10 news-date'>" . $formattedDate . "</div>
									<div class='col-md-2'></div>
								</div>
								<div class='row'>
									<div class='col-md-12 news-subtitle'>" . $row ['title'] . "</div>
								</div><br>") ;
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
				<a href="news.php"> Ver todas las Noticias...</a>
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
				href="aboutus-vision-and-goals.php">Misi�n y Visi�n</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 3)? 'active' : '' }"><a
				class="vertical-navbar-font-style"
				href="aboutus-organization-chart.php">Organigrama</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 5)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-directory.php">Directorio</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 6)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-mof.php">MOF</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 7)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-rof.php">ROF</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 8)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="aboutus-tupa.php">TUPA</a></li>
		</ul>
		<ul class="nav bs-docs-sidenav"
			data-bind="visible: headerViewModel.pageId() == 3">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 1)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="offices-gestion.php">Oficina
					de Gesti�n y Escalaf�n</a></li>
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
