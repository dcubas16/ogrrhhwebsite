
<header class="container-fluid">
	<div class="row background-image-style"
		style="height: 160px; background: url('resources/pages-styles/header-background.jpeg') no-repeat center;">
		<div class="col-md-2" style="text-align: center; padding-top: 20px;">
			<a href="index.php"> <img alt=""
				src="resources/images/logo_unmsm.png" height="120" width="100"
				style="">
			</a>
		</div>
		<div class="col-md-6 logo-style-container">
			<a href="index.php"> <img class="logo-style"
				src="resources/images/ogrrhh-logo.png">
			</a>
		</div>
		<div class="col-md-4">
			<div class="input-group" style="padding-top: 105;">
				<input type="text" class="form-control"> <span
					class="input-group-btn">
					<button class="btn btn-danger" type="button">
						<span class="glyphicon glyphicon-search"></span>Buscar
					</button>
				</span>
			</div>
		</div>
	</div>
	<div class="row" style="background-color: rgb(243, 245, 248);">
		<div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
			<ul class="nav nav-pills"
				style="font-weight: bold; line-height: 45px;">
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 1)? 'active' : '' }"
					class="active"><a href="index.php">INICIO</a></li>
				<li data-bind="attr: { class: (<?php echo $page_id?> == 2)? 'active dropdown' : 'dropdown' }">
					<a href="aboutus.php" >NOSOTROS</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="aboutus-vision-and-goals.php">Misión y Visión</a></li>
						<li><a href="aboutus-history.php">Historia</a></li>
						<li><a href="aboutus-organization-chart.php">Organigrama</a></li>
						<li><a href="aboutus-authorities.php">Autoridades</a></li>
						<li><a href="aboutus-directory.php">Directorio</a></li>
						<li><a href="aboutus-mof.php">MOF</a></li>
						<li><a href="aboutus-rof.php">ROF</a></li>
						<li><a href="aboutus-tupa.php">TUPA</a></li>
					</ul></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 3)? 'active dropdown' : 'dropdown' }"
					class=""><a href="offices.php">OFICINAS</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="offices-gestion.php">Gestión y Escalafón</a></li>
						<li><a href="offices-remuneration.php">Remuneraciones y Obligaciones Sociales</a></li>
						<li><a href="offices-pension.php">Pensiones y Beneficios Sociales</a></li>
						<li><a href="offices-development.php">Desarrollo y Bienestar Social</a></li>
						<li><a href="#">Moderización e Informatización</a></li>
					</ul>
					</li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 4)? 'active dropdown' : 'dropdown' }"
					class=""><a href="legislation.php">NORMATIVIDAD</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="legislation-resolutions.php">Resoluciones Emitidas</a></li>
						<li><a href="legislation-laws.php">Leyes y Decretos</a></li>
						<li><a href="legislation-directives.php">Directivas</a></li>
						<li><a href="legislation-ogrrhh-legislation.php">Normatividad OGRRHH y UNMSM</a></li>
					</ul>
					</li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 5)? 'active dropdown' : 'dropdown' }"
					class=""><a href="work-with-us.php">TRABAJA CON NOSOTROS</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Convocatorias</a></li>
					</ul>
					</li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 6)? 'active dropdown' : 'dropdown' }"
					class=""><a href="ubication.php">CONTACTANOS</a>
					</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12"
			style="background-color: rgb(213, 213, 213); height: 12px;"></div>
	</div>
</header>

