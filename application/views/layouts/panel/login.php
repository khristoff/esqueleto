<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="<?=LENGUAJE?>">
<head>
	<meta charset="utf-8">
	<title>Iniciar sesión - <?=NOMBRE?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="/assets/styles/app.min.css" />
	<link rel="stylesheet" href="/assets/vendor/sweetalert/dist/sweetalert.css" />
	<link rel="stylesheet" href="/assets/styles/admin.min.css" />
</head>
<body class="page-loading">
	<div class="pageload">
		<div class="pageload-inner">
			<div class="sk-rotating-plane"></div>
		</div>
	</div>
	<div class="app signin v2 usersession">
		<div class="session-wrapper">
			<div class="session-carousel slide" data-ride="carousel" data-interval="3000">
				<div class="carousel-inner" role="listbox">
					<div class="item active" style="background-image:url(/assets/images/login/1.jpeg);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;"></div>
					<div class="item" style="background-image:url(/assets/images/login/1.jpeg);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;"></div>
					<div class="item" style="background-image:url(/assets/images/login/1.jpeg);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;"></div>
				</div>
			</div>
			<div class="card bg-white no-border">
				<div class="card-block">
					<form id="login-form" role="form" class="form-layout" method="post" action="/panel/auth">
						<div class="text-center m-b">
							<h4 class="text-uppercase">Bienvenido</h4>
							<p>Por favor escribe tus datos para entrar</p>
						</div>
						<div class="form-inputs p-b">
							<label class="text-uppercase">Correo electrónico</label>
							<input name="usuario" type="email" class="form-control input-lg isEmail" maxlength="128" placeholder="Tu correo electrónico">
							<label class="text-uppercase">Contraseña</label>
							<input name="contrasena" type="password" class="form-control input-lg" maxlength="20" placeholder="Tu contraseña">
							<?php if(RECUPERAR): ?><a ui-sref="user.forgot" href="/panel/recuperar">¿Olvidaste tu contraseña?</a><?php endif; ?>
						</div>
						<button class="btn btn-primary btn-block btn-lg m-b login-submit" type="submit">Ingresar</button>
						<?php if(REGISTRO): ?>
						<div class="divider">
							<span>O</span>
						</div>
						<a class="btn btn-block no-bg btn-lg m-b" href="/panel/registro">Registrarme</a>
						<?php endif; ?>
					</form>
				</div>
			</div>
			<div class="push"></div>
		</div>
	</div>
	<script src="/assets/scripts/app.min.js"></script>
	<script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="/assets/vendor/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/assets/scripts/admin.min.js"></script>
</body>
</html>