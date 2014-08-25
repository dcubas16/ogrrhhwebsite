<?php
header ( 'Content-Type: text/html; charset=iso-8859-1' );
?>
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
<html lang="es-PE">
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
						<p>En esta sección se muestran todas las novedades de la Oficina
							General de Recursos Humanos, según fecha de publicación.</p>
						<h1 id="mision-and-goals"
							class="font-style-short-title-dark page-header ">Normatividades</h1>

						<ul data-bind="foreach: contentViewModel.legislations">
							<li><a
								data-bind="text: name + ' - ' + publication_year , attr:{href: $root.ogrrhhFTPUrl() + file_path}"
								target='blank'>hi</a></li>
						</ul>
						<div
							data-bind="if: contentViewModel.legislations()==null || contentViewModel.legislations().length == 0">
							<p>No se registraron normatividades en esta fecha</p>
						</div>
						<h1 id="mision-and-goals"
							class="font-style-short-title-dark page-header ">Convocatorias</h1>
						<ul data-bind="foreach: contentViewModel.convocatories">
							<li><a
								data-bind="text: 'Convocatoria ' + convocatory_type_name  + ' N° ' + number+ ' - ' + title  + ' (Publicado el' + update_date + '  - Vigente hasta el ' + life_date + ')', attr:{href: $root.ogrrhhFTPUrl() + file_path}"
								target='blank'>hi</a></li>
						</ul>
						<div
							data-bind="if: contentViewModel.convocatories()==null  || contentViewModel.convocatories().length == 0">
							<p>No se registraron convocatorias en esta fecha</p>
						</div>
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

	kendo.culture("es-PE");
    $("#calendar").kendoCalendar({
    	culture: "es-PE",
    	change: onChange,
    });

    var calendar = $("#calendar").data("kendoCalendar");
	var lastaUpdateDate = <?php echo "'". $date ."'";?>;
	var from = lastaUpdateDate.split("/");
	calendar.value(new Date(from[2],from[1]-1,from[0]));
	
});


function onChange(){
	getLegislationNews(kendo.toString(this.value(), 'd'));
	getConvocatoriesNews(kendo.toString(this.value(), 'd'));
}

function getLegislationNews($selectedDate){
	$.ajax({
		  type: "POST",
		  url: "get-legislation-news.php",
		  data: {selectedDate:$selectedDate},
		  async: false,
		  success: function(data){
			  $a = jQuery.parseJSON(data);
// 			  return $a;
			  contentViewModel.legislations($a);
		  },
		  error: function(){
			  return null;
		  }	
		});	
}

function getConvocatoriesNews($selectedDate){
	$.ajax({
		  type: "POST",
		  url: "get-convocatory-news.php",
		  data: {selectedDate:$selectedDate},
		  async: false,
		  success: function(data){
			  $a = jQuery.parseJSON(data);
// 			  return $a;
			  contentViewModel.convocatories($a);
		  },
		  error: function(){
			  return null;
		  }	  
		});	
}

</script>
</html>
