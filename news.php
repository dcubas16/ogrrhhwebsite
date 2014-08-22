<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/NewsDAO.php';
include 'php_files/Constants.php';
include 'php_files/JSONConverter.php';

$page_id = 7;
$sub_page_id = 0;

$newsDAO = new NewsDAO ();
$jsonConverter = new JSONConverter ();
$date = null;
// echo $date;
$queryResultLastUpdateDate = $newsDAO->getLastUpdateDate ();
while ( $row = mysql_fetch_assoc ( $queryResultLastUpdateDate ) ) {
	$date = $row ['max_update_date'];
}

$queryResultLegislation = $newsDAO->selectLegislationByDate ( $date );
$queryResultConvocatory = $newsDAO->selectConvocatoryByDate ( $date );
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
				<!-- ko stopBinding: true -->
					<div id="contentPage" class="col-md-9 text-content-style">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Novedades</h1>
						<h1 id="mision-and-goals"
							class="font-style-short-title-dark page-header ">Normatividades</h1>
						<ul data-bind="foreach: contentViewModel.legislations">
							<li><a data-bind="text: name() + ' - ' + publication_year()" target='blank'>hi</a></li>
						</ul>
						<h1 id="mision-and-goals"
							class="font-style-short-title-dark page-header ">Convocatorias</h1>
						<!-- 						<ul data-bind="foreach: convocatories"> -->
									<?php
									// while ( $row = mysql_fetch_assoc ( $queryResultConvocatory ) ) {
									// print ("<li><a href='" . Constants::ogrrhhFTPUrlConvocatorias . $row ['file_path'] . "'
									// target='blank'>Convocatoria " . $row ['convocatory_type_name'] . " N° " . $row ['number'] . " - " . $row ['title'] . "
									// (Publicado el" . $row ['update_date'] . " - Vigente hasta el " . $row ['life_date'] . ")</a></li>") ;
									// }
									//									?>
<!-- 								</ul> -->
					</div>
					<!-- /ko -->
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
<?php include('./webframes/header-view-model.php');?>
<script>

	var contentViewModel = {
		legislations: ko.observableArray(<?php echo  $jsonConverter->recordSetToJson($queryResultLegislation); ?>),
		convocatories: ko.observableArray(<?php echo  $jsonConverter->recordSetToJson($queryResultConvocatory); ?>),
		lastUpdateDate: ko.observable(null),		
		ogrrhhFTPUrl: ko.observable(<?php echo "'".Constants::ogrrhhFTPUrl."'"?>)
		
	}	

$(function() {
	ko.applyBindings(contentViewModel, $("#contentPage")[0]);
});

$(document).ready(function() {

	kendo.culture("es");
    $("#calendar").kendoCalendar({
    	culture: "es",
    	change: onChange,
    });

    var calendar = $("#calendar").data("kendoCalendar");

	function onChange(){
		alert("Hello"+kendo.toString(this.value(), 'd'));
	}

	var lastaUpdateDate = <?php echo "'". $date ."'";?>;
	var from = lastaUpdateDate.split("/");
	calendar.value(new Date(from[2],from[1]-1,from[0]));
	
});
</script>
</html>
