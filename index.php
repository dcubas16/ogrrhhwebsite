<?php include('webframes/verify-login.php');?>
<?php

include 'php_files/NewsDAO.php';
include 'php_files/Constants.php';

$newsDAO = new NewsDAO ();

$queryResultNews = $newsDAO->getLastThreeNews ();

$page_id = 1;
$sub_page_id = 0;
?>
<html lang="es">
<?php include('./webframes/resources.php');?>
<body class="body-style">
	<div class="container-fluid">
		<div class="row background-image-style">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<?php include('./webframes/header.php');?>
			<!-- ko stopBinding: true -->
				<div class="row">
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
									<img src="resources/images/simulacro_unmsm.jpg" alt="...">
									<div class="carousel-caption"></div>
								</div>
								<div class="item active">
									<img src="resources/images/unmsm_ogrrhh.jpg" alt="...">
									<div class="carousel-caption">...</div>
								</div>
								<div class="item">
									<img src="resources/images/unmsm_3.jpg" alt="...">
									<div class="carousel-caption">...</div>
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic"
								data-slide="prev"> <span
								class="glyphicon glyphicon-chevron-left"></span>
							</a> <a class="right carousel-control"
								href="#carousel-example-generic" data-slide="next"> <span
								class="glyphicon glyphicon-chevron-right"></span>
							</a>
							<div class="carousel-caption" style="font-family: Montserrat, sans-serif;">
								<h2 class="homepage-title" style="font-family: Montserrat, sans-serif;">La Oficina General de Recursos Humanos</h2>
								<h3 class="homepage-title" style="font-family: Montserrat, sans-serif;">de la Universidad Nacional Mayor de San Marcos</h3>
								<h3 class="homepage-title" style="font-family: Montserrat, sans-serif;">le da la bienvenida a su sitio web oficial</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- /ko -->
				<div class="row" style="background-color: #F7F7F7;">
					<?php include('webframes/left-navbar.php');?>
					<!-- ko stopBinding: true -->
					<div id="content-div" class="col-md-9 text-content-style"
						style="min-height: 500px;">
						<h1 id="mision-and-goals"
							class="font-style-medium-title-dark page-header ">Bienvenidos</h1>
						<p>
							El Jefe de la Oficina General de Recursos Humanos (OGRRHH) de la
							Universidad Nacional Mayor de San Marcos (UNMSM), <strong>Econ.
								Victor F�lix Portocarrero Ch�vez</strong> le da la bienvenida al
							sitio web oficial de la Oficina General de Recursos Humanos de la
							Universidad Nacional Mayor de San Marcos.
						</p>
						<p>En nuestro sitio web, Usted podr� encontrar informaci�n sobre
							la OGRRHH y la UNMSM, dentro de cuales esta el directorio, MOF,
							ROF; as� mismo, se tiene informaci�n espec�fica de cada Oficina
							dependiente de la OGRRHH, las normas y directivas concernientes a
							la OGRRHH, y las convocatorias de trabajo que realiza la OGRRHH</p>
					</div>
					<!-- /ko -->
				</div>
				
			<?php include('./webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<div class="modal fade" id="comunicadoModal" tabindex="-1"
		role="dialog" aria-labelledby="comunicado" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">COMUNICADO</h4>
				</div>
				<div class="modal-body">
					<h4>OFICINA GENERAL DE RECURSOS HUMANOS</h4>
					<h4>COMUNICADO</h4>
					<h4>SOBRE PAGO POR DESCUENTOS JUDICIALES</h4>
					Referencia:<br> Resoluci�n Directoral N.� 051-2014-EF/52.03-MEF<br>
					Resoluci�n Directoral N.� 069-2014-EF/52.03-MEF<br> Comunicado N.�
					001-2015-EF/52.03-MEF<br>
					<p style="text-align: justify;">
						La Oficina General de Recursos Humanos comunica lo siguiente:<br>
						1.- El pago para las personas que perciben abonos por descuentos
						judiciales, seg�n el cronograma del MEF, inicialmente estuvo
						programado para el d�a Lunes 21/01/2015.<br> 1.- El abono por el
						concepto de descuento judicial, no se ha podido efectuar debido a
						la instalaci�n del Nuevo Aplicativo Inform�tico para el Registro
						Centralizado de planillas y datos, implementado para el pago de
						remuneraciones y pensiones del sector p�blico dispuesto por el
						Ministerio de Econom�a y Finanzas.<br> 1.- La Oficina General de
						Recursos Humanos, est� destinando funcionarios para que coordinen
						la pronta atenci�n por parte del Ministerio de Econom�a y
						Finanzas, para el pago de los descuentos judiciales.<br> Rogamos
						su comprensi�n ante este problema ajeno a la Universidad
						presentado, que esperamos sea por �nica vez.<br> Atentamente<br> <br>
						Victor F�lix Portocarrero Chavez<br> Jefe de la Oficina General de
						Recursos Humanos
					</p>
					<br> <a
						href="http://ogrrhh.unmsm.edu.pe/files/normativas/otros/Comunicado_Pago_Judiciales.pdf"
						target="blank">Descargar Comunicado</a>
				</div>
				<div class="modal-body" style="display: none;">
					<h4>Oficina General de Recursos Humanos (OGRRHH)</h4>
					<br>

					<p style="text-align: justify;">
						A trav�s del presente comunicado se hace de conocimiento a los
						servidores y ex servidores de la Universidad Nacional Mayor de San
						Marcos el listado de fonavistas que se remiti� oportunamente a la
						Secretar�a T�cnica de la Comisi�n Ad Hoc de la ley 29625 del
						Ministerio de Econom�a y Finanzas (MEF); adem�s es necesario
						mencionar que la Oficina de Modernizaci�n e Informatizaci�n de la
						OGRRHH de la UNMSM viene realizando las gestiones necesarias para
						que nuestro listado ingrese en los padrones de la Secretar�a
						T�cnica.<br /> Asimismo, de no encontrarse en el presente listado,
						o no tener correctamente sus datos, pueden remitir a la Oficina
						General de Recursos Humanos a trav�s de formato �nico de tr�mite
						(FUT), la copia de su DNI y/o copias de boletas de pago donde
						presenten las aportaciones al FONAVI.<br> <br>
					</p>
					<a
						href="http://ogrrhh.unmsm.edu.pe/files/normativas/otros/Comunicado_FONAVISTAS.pdf"
						target="blank">Descargar Comunicado</a><br> <br> <a
						href="http://ogrrhh.unmsm.edu.pe/files/normativas/otros/Reporte_Consolidado_FONAVISTAS_.pdf"
						target="blank">Descargar Listado</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include('./webframes/header-view-model.php');?>
<script>
	$(function() {
		$('.carousel').carousel({
			interval : 5000
		});

		 $('#comunicadoModal').modal('show');
	});
</script>
</html>