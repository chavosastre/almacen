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
        $resultado = $conexion->query("SELECT * from prestamos where Id = '$id'");
        $fila = mysqli_fetch_array($resultado);
        $nombre = $fila['Nombre']; 
        $obra = $fila['Obra'];
        $ClaveHerramienta = $fila['ClaveHerramienta'];
        $Comentarios = $fila['Comentarios'];
        $FechaPrestamo = $fila['FechaPrestamo'];
        $FechaEntrega = $fila['FechaEntrega'];
        $FechaTerminoObra = $fila['FechaTerminoObra'];



        $result = mysqli_query($conexion,"SELECT * FROM `herramientas` WHERE ClaveHerramienta = '$ClaveHerramienta'");
        $consulta = mysqli_fetch_array($result);
        $herramienta = $consulta['Nombre'];
        $Marca = $consulta['Marca'];
        $Modelo = $consulta['Modelo'];
        $Serie = $consulta['Serie'];
        $Prestada = $consulta['Prestada'];



     ?>
	 
<div class="container">
	
    <div class="text-center ">
        <h1 class="top-bottom">Detalles</h1>
    <div>

<div class="row">
    
    <div class="col-9">
        <div class="row">

            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Nombre
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="nombre" readonly="readonly" value="<?php echo $nombre; ?>">
                </div>
            </div>
                
            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Herramienta
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="herra" readonly="readonly" value="<?php echo $herramienta; ?>">
                </div>
            </div>
                
            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Marca
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="marca" readonly="readonly" value="<?php echo $Marca; ?>">
                </div>
            </div>

            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Modelo
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="modelo" readonly="readonly" value="<?php echo $Modelo; ?>">
                </div>
            </div>

            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Serie
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="serie" readonly="readonly" value="<?php echo $Serie; ?>">
                </div>
            </div>

            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Obra
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="obra" readonly="readonly" value="<?php echo $obra; ?>">
                </div>
            </div>

            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Fecha de Prestamo
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="fechapresta" readonly="readonly" value="<?php echo $FechaPrestamo; ?>">
                </div>
            </div>

            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Fecha fin de obra
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="fechafin" readonly="readonly" value="<?php echo $FechaTerminoObra; ?>">
                </div>
            </div>
            
            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Fecha de entrega
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <div class="wrap-input100 validate-input col">
                    <input class="input100" type="text" name="fechaen" readonly="readonly" value="<?php echo $FechaEntrega; ?>">
                </div>
            </div>            

            <div class="col-4 col-md-3">
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Comentarios
                    </span>
                </div>
            </div>
            
            <div class="col-8 col-md-9">
                <textarea class="detalle" name="comentarios" rows="6"><?php echo $Comentarios; ?></textarea>
            </div>   

            <div class="text-center top-bottom">
                <?php
                    echo"  <form action=\"muestra_datos.php\" method=\"post\">";
                    echo "<button class=\"data-form-btn\" type=\"submit\" name=\"regresa\">Regresar</button>";
                    echo "</form>"
                ?>
            </div>

    	</div>
    </div>

    <div class="col-3">
        <div class="col-12">
            <img class="logotipo" src="images/catalogo/SCM22-A.png">
        </div>
    </div>
</div>



		<!-- <div class="container-login100-form-btn m-t-17 col">
			<button class="login100-form-btn" type="submit">
				Actualizar
			</button>
		</div> -->

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
