<?php include('webframes/verify-login.php');?>
<?php
require_once 'php_libs/swiftmailer-master/lib/swift_required.php';

$emailName = $_POST["name"];
$emailAddress = $_POST["emailAddress"];
$emailMessage = $_POST["message"];


$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
->setUsername('dcubas16@gmail.com')
->setPassword('Incubas61');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($emailName . " : Mensaje de la OGRRHH")
->setFrom(array('dcubas16@gmail.com' => 'dcubas16@gmail.com'))
->setTo(array($emailAddress))
->setBody($emailMessage);

$result = $mailer->send($message);

$page_id = 6;
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
							class="font-style-medium-title-dark page-header ">Resultado de
							Agregar Nueva Convocatoria</h1>
							<?php
							if ( $result > 0 ) {
								print ("<div class='alert alert-success fade in' role='alert'>") ;
								print ("<button type='button' class='close' data-dismiss='alert'>") ;
								print ("<span aria-hidden='true'>×</span><span class='sr-only'>Cerrar</span></button>") ;
								print ("<strong>El mensaje se envio con éxito!!!</strong></strong></div>") ;
							} else {
								print ("<div class='alert alert-danger fade in' role='alert'>") ;
								print ("<button type='button' class='close' data-dismiss='alert'>") ;
								print ("<span aria-hidden='true'>×</span><span class='sr-only'>Cerrar</span></button>") ;
								print ("<strong>Ocurrio un error!!!</strong> al enviar el mensaje, por favor intente de nuevo o comuniquese con la Oficina de Modernización e Informatización de la OGRRHH</div>") ;
							}
							?>
					</div>
				</div>
			<?php include('webframes/footer.php');?>
		</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php include('webframes/add-new-legislation-modal.php');?>
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
			sendEmailMessage: function(){
			},	
		fileToUpload : 	ko.observable(""),
		pageId : ko.observable(<?php echo $page_id;?>),
		subPageId : ko.observable(<?php echo $sub_page_id;?>)
	};
						
	$(function() {
		ko.applyBindings(viewModel, $('body')[0]);
		$(".left-navbar").height($("#content-div").height());
	});
</script>
</html>