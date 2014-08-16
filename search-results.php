<?php
ini_set ( 'upload_max_filesize', '10M' );
ini_set ( 'post_max_size', '10M' );
ini_set ( 'max_input_time', 3000 );
ini_set ( 'max_execution_time', 3000 );

$page_id = 0;
$sub_page_id = 0;
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
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Resultados de
							Busqueda</h1>
						<div class="row">
							<div class="col-md-12 search-button">
								<div class="input-group" data-toggle="tooltip"
									title="La búsqueda se realiza en el contenido de Normatividad">
									<input type="text" class="form-control input-sm"> <span
										class="input-group-btn">
										<button class="btn btn-danger btn-sm" type="button">
											<span class="glyphicon glyphicon-search"></span><strong>
												Buscar</strong>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php include('webframes/add-new-convocatory-modal.php');?>
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
			fileToUpload : 	ko.observable(""),
			pageId : ko.observable(<?php echo $page_id;?>),
			subPageId : ko.observable(<?php echo $sub_page_id;?>)
		};

		$(function() {
			ko.applyBindings(viewModel, $("body")[0]);
			$(".left-navbar").height($("#content-div").height());
		});
				
</script>
</html>
