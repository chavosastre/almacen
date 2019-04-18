<!DOCTYPE html>
<html lang="en">
<head>
	<title>Prestamos</title>
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
<div class="container">
    <form method="post" action="agrega_registro.php">
        <!-- Seleccionar nombres
        </br>
        <input type="checkbox" name="chk[]" value="1">Uno
        </br>
        <input type="checkbox" name="chk[]" value="2">Dos
        </br>
        <input type="checkbox" name="chk[]" value="3">Tres
        </br> -->
        
    <?php
        session_start();
    ?>
    
    <div class="principal">
        Bienvenido 
        <?php  
            // echo $_SESSION["nombre"];
        ?>
    </div>

    <h1 align="center">Préstamo de Herramientas Almacen Ecopulse</h1>      
   
    <table class="table table-hover textoTabla">
        <thead>
        <tr>
            <th>Herramienta</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php 
            include ("inc/config.php");
            $result = mysqli_query($conexion,"Select * from herramientas");
            while($consulta = mysqli_fetch_array($result))
            {
                
        ?>
        <tr>
            <td><?php echo $consulta['Nombre']?></td>
            <td><?php echo $consulta['Marca']?></td>
            <td><?php echo $consulta['Modelo']?></td>
            <td>
                <input type="checkbox" name="chk[]" value="<?php echo $consulta['ClaveHerramienta']?>"/>Agregar
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
<div class="container">

        <input class="login100-form-btn" type="submit" name="btenviar" value="Generar Formato">
    </form>
</div> -->


	<!-- <div id="dropDownSelect1"></div> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
    <!-- <script src="js/main.js"></script> -->
    
<?php
    include ("inc/cerrar.php");
?>
</body>
</html>