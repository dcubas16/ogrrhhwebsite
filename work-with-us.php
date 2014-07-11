<?php
$page_id = 5;
$con = mysql_connect ( 'localhost', 'root', 'root' );
?>
<html lang="es_PE">
<head>
<?php include('webframes/resources.php');?>
</head>
<!-- NAVBAR
================================================== -->
<body class="body-style">
	<div class="row background-image-style"
		style="background: url('resources/pages-styles/page-background.jpeg') no-repeat center; margin-right: 0px; margin-left: 0px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php include('webframes/header.php');?>
			<div class="row" style="margin-left: 0px; margin-right: 0px;">
				<?php include('webframes/leftnavbar-work-with-us.php');?>
				<div class="col-md-9"
					style="background-color: #F1F1F1; padding-left: 30px; padding-top: 15px; height: 1550">
					
					<?php
					// Create connection
					$con = mysql_connect ( 'localhost', 'root', 'root' );
					
					mysql_select_db ( 'ogrrhhwebsitedb', $con );
					
					$query = "	SELECT WPC.*
								FROM WEB_PAGE_CONTAINS WPC
								INNER JOIN DETAIL_WEB_PAGE_CONTAIN DWP ON WPC.ID = DWP.WEB_PAGE_CONTAIN_ID
								WHERE DWP.PAGE_ID = " . $page_id;
					
					$result = mysql_query ( $query, $con );
					while ( $row = mysql_fetch_assoc ( $result ) ) {
						echo $row ['id'] . '\xA';
						echo $row ['title'] . '\xA';
						echo $row ['subtitle'] . '\xA';
						echo $row ['contain'] . '\xA';
						echo $row ['publication_date'] . '\xA';
					}
					?>
					
					</div>
			</div>
			<?php include('webframes/footer.php');?>
			
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
<script>
	$(function() {
		var viewModel = {
			mainMenuSelected : ko.observable(1),
		};

		ko.applyBindings(viewModel, $('body')[0]);

		$('.carousel').carousel({
			interval : 2000
		})
	});
</script>
</html>
<?php
mysql_close ( $con );
?>