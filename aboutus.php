<html lang="es_PE">
<head>
<?php include('./webframes/resources.php');?>
</head>
<!-- NAVBAR
================================================== -->
<body class="body-style">
	<div class="row background-image-style"
		style="background: url('resources/pages-styles/page-background.jpeg') no-repeat center; margin-right: 0px; margin-left: 0px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php include('./webframes/header.php');?>
			<div class="row" style="margin-left: 0px; margin-right: 0px;">
				<div class="col-md-3 background-image-style"
					style="background: url('resources/pages-styles/body-left-panel.jpeg') no-repeat center; height: 800px;"></div>
				<div class="col-md-9"
					style="background-color: #F1F1F1; height: 800px;">
					<?php
					// Create connection
					$con = mysql_connect( 'localhost', 'root', 'root');
					
					mysql_select_db('ogrrhhwebsitedb', $con);
					// Check connection
// 					if (mysqli_connect_errno ()) {
// 						echo "Failed to connect to MySQL: " . mysqli_connect_error ();
// 					} else {
						echo "CONECTADO!!!";
						$sql    = 'SELECT name FROM websites';
						$result = mysql_query($sql, $con);
						echo $result;
						while ($row = mysql_fetch_assoc($result)) {
							echo $row['name'];
						}
// 					}
					?>
					
					</div>
			</div>
			<?php include('./webframes/footer.php');?>
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