<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Movilidad de manta TICS">
	<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

	<!-- Title -->
	<title> MOVILIDAD-EP </title>

	<!-- Favicon -->
	<link rel="icon" href="valex/assets/img/brand/favicon.png" type="image/x-icon" />

	<!-- Icons css -->
	<link href="valex/assets/css/icons.css" rel="stylesheet">

	<!-- Bootstrap css -->
	<link href="valex/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- style css -->
	<link href="valex/assets/css/style.css" rel="stylesheet">

	<!--- Animations css-->
	<link href="valex/assets/css/animate.css" rel="stylesheet">

	<!-- Login css 
	<link href="valex/assets/css/login.css" rel="stylesheet">-->
</head>

<body class="ltr error-page1 main-body bg-light text-dark error-3 imagen-body">
	<!-- Loader -->
	<div id="global-loader">
		<img src="valex/assets/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<form class="login" id='login-form' method="POST" enctype="multipart/form-data">
					<input type="hidden" name="csrf-token" value="{{csrf_token()}}" id="token">
					<div class="login__field">
						<img src="/valex/assets/img/logo-movilidad.png" class="img" alt="logo">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-user"></i>
						<input type="text" class="login__input" id="txt-usuario" name="txt-usuario" placeholder="Usuario / Correo">
					</div>
					<div class="login__field">
						<i class="login__icon fas fa-lock"></i>
						<input type="password" class="login__input" id="txt-clave" name="txt-clave" placeholder="Clave">
					</div>
					<button type='button' class="button login__submit" id='btn-iniciar-sesion'>
						<span class="button__text">Iniciar Sesión</span>
						<i class="button__icon fas fa-chevron-right"></i>
					</button>
				</form>
				<div class="social-login-titulo">
					<h3>INTRANET</h3>
				</div>
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>
		</div>
	</div>


	<!-- JQuery min js -->
	<script src="valex/assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Bundle js -->
	<script src="valex/assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="valex/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Moment js -->
	<script src="valex/assets/plugins/moment/moment.js"></script>

	<!-- P-scroll js -->
	<script src="valex/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

	<!-- eva-icons js -->
	<script src="valex/assets/js/eva-icons.min.js"></script>

	<!-- Rating js-->
	<script src="valex/assets/plugins/ratings-2/jquery.star-rating.js"></script>
	<script src="valex/assets/plugins/ratings-2/star-rating.js"></script>

	<!--Internal  Notify js -->
	<script src="valex/assets/plugins/notify/js/notifIt.js"></script>
	<script src="valex/assets/plugins/notify/js/notifit-custom.js"></script>

	<!--themecolor js-->
	<script src="valex/assets/js/themecolor.js"></script>

	<!-- custom js -->
	<script src="valex/assets/js/custom.js"></script>

	<script type='text/javascript' src='/js/Login/login.js'></script>
	<script src="/valex/assets/plugins/notify/js/notifIt.js"></script>

</body>

</html>