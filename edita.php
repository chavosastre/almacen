<!DOCTYPE html>
<html lang="en">
<head>
	<title>AirSync</title>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php
        include ("inc/config.php");
		$id = $_POST['Edita'];
        $resultado = $conexion->query("SELECT Nombre, Dron from prestamos where Id = '$id'");
        $resultado->data_seek(1);
        $fila = $resultado->fetch_assoc();
        $nombre = $fila['Nombre']; 
        $dron = $fila['Dron'];
     ?>
	 
<div class="container">
	<form class="login100-form validate-form flex-sb flex-w m-t-20" action="actualiza.php" method="post">
	
		<div class="row">
			<div class="col-4 col-md-3">
				<div class="p-t-31 p-b-9">
					<span class="txt1">
						Nombre
					</span>
				</div>
			</div>
			<div class="col-8 col-md-9">
				<div class="wrap-input100 validate-input p-r-10" data-validate = "Dato requerido">
					<input class="input100" type="text" name="nombre" value="<?php echo $nombre; ?>">
					<input type="hidden" name="clave" value="<?php echo $id?>" />
					<span class="focus-input100"></span>
				</div>
			</div>
			<div class="col-4 col-md-3">
				<div class="p-t-31 p-b-9">
					<span class="txt1">
						Dron
					</span>
				</div>
			</div>
			<div class="col-8 col-md-9">
				<div class="wrap-input100 validate-input col" data-validate = "Dato requerido">
					<input class="input100" type="text" name="dron" value="<?php echo $dron; ?>">
					<span class="focus-input100"></span>
				</div>
			</div>
		</div>
		<div class="container-login100-form-btn m-t-17 col">
			<button class="login100-form-btn" type="submit">
				Actualizar
			</button>
		</div>
	</form>
</div>


	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    <?php
    	include ("inc/cerrar.php");
	?>
</body>
</html>
