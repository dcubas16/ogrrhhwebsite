
<header class="container-fluid">
	<div class="row background-image-style"
		style="height: 160px; background: url('resources/pages-styles/header-background.jpeg') no-repeat center;">
		<div class="col-md-2" style="text-align: center; padding-top: 20px;">
			<a href="index.php"> <img alt="" src="resources/images/logo_unmsm.png"
				height="120" width="100" style="">
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
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 2)? 'active' : '' }"
					class=""><a href="aboutus.php">NOSOTROS</a></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 3)? 'active' : '' }"
					class=""><a href="offices.php">OFICINAS</a></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 4)? 'active' : '' }"
					class=""><a href="legislation.php">NORMATIVIDAD</a></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 5)? 'active' : '' }"
					class=""><a href="ofpublicinterest.php">PUBLICO</a></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 6)? 'active' : '' }"
					class=""><a href="ubication.php">UBICACION</a></li>
<!-- 				<li -->
<!-- 					data-bind="attr: { class: (mainMenuSelected() == 5)? 'active' : '' }" -->
<!-- 					class=""><a href="ubication.php">TRABAJA CON NOSOTROS</a></li>					 -->
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12"
			style="background-color: rgb(213, 213, 213); height: 12px;"></div>
	</div>
</header>