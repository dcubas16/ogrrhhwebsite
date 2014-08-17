<div class="left-navbar col-md-3 left-navbar-background-style">
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
						<div class="row">
							<div class="col-md-12 news-image-container-style">
								<a href="#"> <img class="news-image-style"
									src="resources/images/recursos-humanos_1_210_110.jpg">
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 news-date">5 de Junio del 2014</div>
							<div class="col-md-2"></div>
						</div>
						<div class="row">
							<div class="col-md-12 news-subtitle">Aqui va el subtitulo del
								contenido de la noticia</div>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 link-font-style">
				<a href="#"> Ver todas las Noticias...</a>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<div class="bs-docs-sidebar hidden-print affix-top vertical-navbar"
		role="complementary">
		<ul class="nav bs-docs-sidenav" data-bind="visible: headerViewModel.pageId() == 2">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 1)? 'active' : '' }"><a
				class="vertical-navbar-font-style"
				href="aboutus-vision-and-goals.php">Misión y Visión</a></li>
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
		<ul class="nav bs-docs-sidenav" data-bind="visible: headerViewModel.pageId() == 3">
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
		<ul class="nav bs-docs-sidenav" data-bind="visible: headerViewModel.pageId() == 4">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 2)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="legislation-laws-decree.php">Leyes
					y Decretos</a></li>	
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
		<ul class="nav bs-docs-sidenav" data-bind="visible: headerViewModel.pageId() == 5">
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 1)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="work-with-us-calls.php">Convocatorias CAS</a></li>
			<li class=""
				data-bind="attr: { class: (<?php echo $sub_page_id?> == 2)? 'active' : '' }"><a
				class="vertical-navbar-font-style" href="work-with-us-calls.php">Convocatorias 276</a></li>
		</ul>
		<div data-bind="visible: headerViewModel.pageId() == 6">
			<div class="row">
				<div class="col-md-11">
					<div class="row" style="height: 30;"></div>
					<div class="row font-style-tall-title-white">
						<div class="col-md-12">DIRECCIÓN</div>
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
									<div id="page">
										<script
											src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
										<script>
				function initialize() {
					var map_canvas = document
							.getElementById('map_canvas');
					var map_options = {
						center : new google.maps.LatLng(
								-12.052625, -77.085099),
						zoom : 16,
						mapTypeId : google.maps.MapTypeId.ROADMAP
					}
					var map = new google.maps.Map(map_canvas,
							map_options)
				}
				google.maps.event.addDomListener(window,
						'load', initialize);
			</script>
										<div id="map_canvas" style="height: 200px; width: 200px"></div>
										<br>
									</div>
								</div>
							</div>
							<div class="row">
								<section>
									<address>
										<p style="color: whitesmoke; font-size: 14;">
											<i class="icon-map-marker"></i> Av. Universitaria /Av. Germán
											Amézaga s/n. Edificio Jorge Basadre Ciudad Universitaria,
											Lima 1.<br> <i class="icon-phone"></i> Central Telefónica:
											619-7000<br> <i class="icon-envelope"></i> 
										</p>
									</address>
								</section>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<a class="back-to-top" href="#top" data-bind="visible: headerViewModel.pageId() != 1">Retornar
			al inicio</a>
	</div>

</div>