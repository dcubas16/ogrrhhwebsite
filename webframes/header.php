<header>
	<div class="row header-style">
		<div class="col-md-7">
			<a href="index.php"> <img class="logo-style"
				src="resources/images/ogrrhh-logo.png">
			</a>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12 login-button" data-bind="visible: !logedUser()">
					<button type="button" class="btn btn-success btn-sm"
						data-toggle="modal" data-target="#login">
						<strong>Ingresar </strong><span class="glyphicon glyphicon-user"></span>
					</button>
				</div>
				<div class="col-md-12 login-button" data-bind="visible: logedUser()">
					<button type="button" class="btn btn-success btn-sm"
						data-toggle="modal" data-target="#login">
						<strong data-bind="text: userName()"></strong><span class="glyphicon glyphicon-user"></span>
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 search-button">
					<form action="search-results.php">
						<div class="input-group" data-toggle="tooltip"
							title="La búsqueda se realiza en el contenido de Normatividad">
							<input type="text" class="form-control input-sm"> <span
								class="input-group-btn">
								<button class="btn btn-danger btn-sm" type="submit">
									<span class="glyphicon glyphicon-search"></span><strong> Buscar</strong>
								</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12  navbar-background-style">
			<ul class="nav nav-pills menu-style">
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 1)? 'active' : '' }"
					class="active"><a href="index.php">INICIO</a></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 2)? 'active dropdown' : 'dropdown' }">
					<a href="aboutus.php">NOSOTROS</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="aboutus-vision-and-goals.php">Misión y Visión</a></li>
						<li><a href="aboutus-organization-chart.php">Organigrama</a></li>
						<li><a href="aboutus-directory.php">Directorio</a></li>
						<li><a href="aboutus-mof.php">MOF</a></li>
						<li><a href="aboutus-rof.php">ROF</a></li>
						<li><a href="aboutus-tupa.php">TUPA</a></li>
					</ul>
				</li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 3)? 'active dropdown' : 'dropdown' }"
					class=""><a href="offices.php">OFICINAS</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="offices-gestion.php">Gestión y Escalafón</a></li>
						<li><a href="offices-remuneration.php">Remuneraciones y
								Obligaciones Sociales</a></li>
						<li><a href="offices-pension.php">Pensiones y Beneficios Sociales</a></li>
						<li><a href="offices-development.php">Desarrollo y Bienestar
								Social</a></li>
						<li><a href="#">Moderización e Informatización</a></li>
					</ul></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 4)? 'active dropdown' : 'dropdown' }"
					class=""><a href="legislation.php">NORMATIVIDAD</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="legislation-laws-decree.php">Leyes y Decretos</a></li>
						<li><a href="legislation-rules.php">Reglamentos</a></li>
						<li><a href="legislation-directives.php">Directivas</a></li>
						<li><a href="legislation-resolutions.php">Resoluciones</a></li>
						<li><a href="legislation-ogrrhh-legislation.php">Normatividad
								OGRRHH y UNMSM</a></li>
					</ul></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 5)? 'active dropdown' : 'dropdown' }"
					class=""><a href="work-with-us.php">TRABAJA CON NOSOTROS</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Convocatorias</a></li>
					</ul></li>
				<li
					data-bind="attr: { class: (<?php echo $page_id?> == 6)? 'active dropdown' : 'dropdown' }"
					class=""><a href="ubication.php">CONTACTANOS</a></li>

			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 navbar-separator-style"></div>
	</div>
</header>
<?php include('./webframes/login-modal.php');?>
<script>
$('div[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'top',
});

// var users = [{
// 	{"id":1, "userName":"1" ,"password":"1"}, 
// 	{"id":2, "userName":"2" ,"password":"2"}, 
// 	{"id":3, "userName":"3" ,"password":"3"}, 
// 	{"id":4, "userName":"4" ,"password":"4"}, 
// 	{"id":5, "userName":"5" ,"password":"5"}, 
// 	{"id":6, "userName":"6" ,"password":"6"}, 
// }]

var userName = "admin";
var password = "admin";

function validateUser(){
	
}

</script>
