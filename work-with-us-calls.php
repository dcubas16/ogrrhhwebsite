<?php
include 'php_files/ConvocatoryDAO.php';

$convocatoryDAO = new ConvocatoryDAO();
$queryResult = $convocatoryDAO->select ();
$rowCounter = 0;

$page_id = 5;
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
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Convocatorias
							CAS</h1>
						<ul>
							<?php
							while ( $row = mysql_fetch_assoc ( $queryResult ) ) {
								print("<li><a href='".$row ['file_path']."' 
 								target='blank'>Convocatoria ". $row ['convocatory_type_name'] ." N° ".$row ['number']." - ". $row ['title'] ."
 									(Publicado el". $row ['update_date'] . " - Vigente hasta el ". $row ['life_date'] .")</a></li>");
								
								$rowCounter ++;
							}
							?>
							
<!-- 							<li><a href="resources/docs/leyes/Ley_29849_CAS.pdf" -->
							<!-- 								target="_blank">Convocatoria N°123 Para un personal tecnico -->
							<!-- 									(Publicado el 07/08/2014 - Vigente hasta el 30/08/2014)</a></li> -->
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
//	 			login(viewModel.userName(), viewModel.password());
			},
		pageId : ko.observable(<?php echo $page_id;?>),
		subPageId : ko.observable(<?php echo $sub_page_id;?>)
	};
						
	$(function() {
		ko.applyBindings(viewModel, $('body')[0]);
		$(".left-navbar").height($("#content-div").height());
	});
</script>
</html>