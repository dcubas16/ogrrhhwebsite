<?php include('webframes/verify-login.php');?>
<?php include('webframes/upload-ftp-settings.php');?>
<?php
include 'php_files/JSONConverter.php';
include 'php_files/LegislationTypeDAO.php';

$page_id = 4;
$sub_page_id = 0;
$legislationType = new LegislationTypeDAO();
$jsonConverter = new JSONConverter ();

$queryResult = $legislationType->getLegislationTypes();
?>
<html>
<?php include('webframes/resources.php');?>
<body class="body-style">
	<div class="container-fluid">
		<div class="row background-image-style">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<?php include('webframes/header.php');?>
			<div id="content-div" class="row">
				<?php include('webframes/left-navbar.php');?>
				
					<div id="contentSection" class="col-md-9 text-content-style">
						<!-- 						<div class="alert alert-success fade in" role="alert"> -->
						<!-- 							<button type="button" class="close" data-dismiss="alert"> -->
						<!-- 								<span aria-hidden="true">×</span><span class="sr-only">Close</span> -->
						<!-- 							</button> -->
						<!-- 							<strong>Holy guacamole!</strong> Best check yo self, you're not -->
						<!-- 							looking too good. -->
						<!-- 						</div> -->
						<h1 id="universitary-legislation"
							class="font-style-medium-title-dark page-header ">Comunicados</h1>
						<p>En esta sección Usted podrá encotrar los comunicados que realiza la OGRRHH y suss dependencias.</p>
						<button type="button" class="btn btn-info btn-xs"
							data-toggle="modal" data-target="#add-new-statement-modal"
							data-bind="visible: headerViewModel.logedUser()">
							<span class="glyphicon glyphicon-plus"></span> Agregar Nuevo
							Comunicado
						</button>

					</div>
					<?php include('webframes/add-new-statement-modal.php');?>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>

</body>

<script>

	ko.bindingHandlers.fireChange = {
	    update: function (element, valueAccessor, allBindingsAccessor){
	        var bindings = allBindingsAccessor();
	        if (bindings.value != null) {
	            $(element).change();
	        }
	    }
	};

	var headerViewModel = {
			userId : ko.observable(null),
			userName : ko.observable(<?php echo "'".$userName."'";?>),
			password : ko.observable(null),
			logedUser : ko.observable(<?php echo $userName!=null; ?>),//Determina si un usuario esta logeado o no
			loginError : ko.observable(false),//Determina si no se logeo bien el usuario
			pageId : ko.observable(<?php echo $page_id;?>),
			subPageId : ko.observable(<?php echo $sub_page_id;?>),

			legislationTypes : ko.observableArray(<?php echo  $jsonConverter->recordSetToJson($queryResult); ?>),
			legislationTypeId : ko.observable(null),
			legislationTitle : ko.observable(null),
			legislationPublicationDate : ko.observable(null),
			legislationNumber : ko.observable(null),
			legislationDescription : ko.observable(null),
			decreeTypeId : ko.observable(null),
			fileToUpload : 	ko.observable(null)
	};

	$(function() {
		ko.applyBindings(headerViewModel, $("body")[0]);
		$(".left-navbar").height($("#content-div").height());
	});
	
</script>
</html>