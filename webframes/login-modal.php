<div class="modal fade" id="login" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Ingresar</h4>
			</div>
			<div class="modal-body">
				<form class="form-signin" id="logInForm" role="form" action="login-user.php"
					method="post">
					<h2 class="form-signin-heading">Por favor identifiquese</h2>
					<div class="alert alert-warning fade in" role="alert"
						data-bind="visible: loginError()">
						<button type="button" class="close" data-dismiss="alert">
							<span aria-hidden="true">×</span><span class="sr-only">Close</span>
						</button>
						<strong>Usuario o Contraseña Incorrectos</strong> vuelva a
						intentarlo de nuevo
					</div>
					<div class="form-group">
						<input id="userName" name="userName" type="text"
							class="form-control" placeholder="Usuario" required="required"
							autofocus="autofocus" data-bind="value : userName">
					</div>
					<div class="form-group">
						<input id="password" name="password" type="password"
							class="form-control" placeholder="Contraseña" required="required"
							data-bind="value : password">
					</div>

					<button class="btn btn-lg btn-primary btn-block" type="button"
						data-bind="click:loginUser">Ingresar</button>
				</form>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<script>

$(document).ready(function() {
    $('#logInForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        	userName: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        max: 80,
                        message: 'The director name must be less than 80 characters long'
                    }
                }
            },
            password: {
                group: '.col-md-1',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        max: 80,
                        message: 'The director name must be less than 80 characters long'
                    }
                }
            }
        }
    });
});

</script>