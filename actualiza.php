
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
</head>
<body>
    <?php
    include ("inc/config.php");

    $nombre = $_POST['nombre'];
    $dron = $_POST['dron'];
    $id = $_POST['clave'];
    //echo $id. " ".$nombre;
    $conexion->query("update prestamos set Nombre = '$nombre', Dron = '$dron' where Id = $id"); 
    $result = mysqli_query($conexion,"Select count(*) from usuarios where email = '$user' and password = '$pass'");
    $consulta = mysqli_fetch_array($result);
    header('Location: muestra_datos.php');
    
    include ("inc/cerrar.php");
?>
</body>
</html>