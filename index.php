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
				<div class="col-md-12"
					style="padding-right: 0px; padding-left: 0px;">
					<div id="carousel-example-generic" class="carousel slide"
						data-ride="carousel" style="margin-bottom: 0px;">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0"
								class=""></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"
								class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"
								class=""></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item">
								<img src="resources/images/recursos-humanos_1.jpg" alt="...">
								<div class="carousel-caption"></div>
							</div>
							<div class="item active">
								<img src="resources/images/recursos-humanos_2.jpg" alt="...">
								<div class="carousel-caption">...</div>
							</div>
							<div class="item">
								<img src="resources/images/recursos-humanos_3.jpg" alt="...">
								<div class="carousel-caption">...</div>
							</div>
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic"
							data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
						</a> <a class="right carousel-control"
							href="#carousel-example-generic" data-slide="next"> <span
							class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="row" style="margin-left: 0px; margin-right: 0px;">
				<div class="col-md-3 background-image-style"
					style="background: url('resources/pages-styles/body-left-panel.jpeg') no-repeat center; height: 800px;"></div>
				<div class="col-md-9"
					style="background-color: #F1F1F1; height: 800px;"></div>
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