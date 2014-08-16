<?php
include 'php_files/ConnectionManager.php';
// $connectionManager = new ConnectionManager();
// $menus = $connectionManager->doQuery("SELECT * FROM MENUS");
// $connectionManager->closeConnection();

$page_id = 4;
$sub_page_id = 1;
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
				<div class="col-md-9 text-content-style">
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Resoluciones
							Emitidas</h1>
						<ul>
							<li><a href="resources/docs/decretos/DL_276_1984.pdf"
								target="_blank">Decreto Legislativo N° 276 - Ley de Bases de la
									Carrera Administrativa y de Remuneraciones del Sector Público</a></li>
						</ul>
					</div>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<script>
		var viewModel = {
				userId : ko.observable(null),
				userName : ko.observable(null),
				password : ko.observable(null),
				logedUser : ko.observable(false),//Determina si un usuario esta logeado o no
				loginError : ko.observable(false),//Determina si no se logeo bien el usuario
				users: ko.observableArray([{userId: 1, userName:"admin", password:"admin"}]),
				loginUser : function(){
//		 			login(viewModel.userName(), viewModel.password());
				},
			mainMenuSelected : ko.observable(1),
			pageId : ko.observable(<?php echo $page_id;?>),
			subPageId : ko.observable(<?php echo $sub_page_id;?>)
		};


		$(function() {
			ko.applyBindings(viewModel, $("body")[0]);
			$(".left-navbar").height($("#content-div").height());
		});
</script>
</html>
