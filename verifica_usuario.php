
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php
    include ("inc/config.php");

    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $result = mysqli_query($conexion,"Select Nombre, Apellidos from usuarios where email = '$user' and password = '$pass'");
	$consulta = mysqli_fetch_array($result);

    //echo $consulta[1];
    if(isset($consulta[0]))
    {
		session_start();
		/*session is started if you don't write this line can't use $_Session  global variable*/
		$_SESSION["nombre"] = $consulta[0];
		$_SESSION["apellidos"] = $consulta[1]; 

        header('Location: muestra_datos.php');
    }
    else
    {
        ?>
            
    <div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="index.php" method="post">
					<span class="login100-form-title p-b-53">
                        <img class="center-block" src="images/tenor.gif" alt="NO"  width="300">
                    </span>
                    <div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Regresar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
        <?php
    }
    
    include ("inc/cerrar.php");
?>
</body>
</html>