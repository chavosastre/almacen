
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
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>


	<?php
        // if(isset($_POST['btenviar']))
        // {
            $arregloCHK = $_POST['chk'];
			$num = count($arregloCHK);

			switch (date("m")) {
				case '01':
					$mes = "enero";
					break;
				case '02':
					$mes = "febrero";
					break;
				case '03':
					$mes = "marzo";
					break;
				case '04':
					$mes = "abril";
					break;
				case '05':
					$mes = "mayo";
					break;
				case '06':
					$mes = "junio";
					break;
				case '07':
					$mes = "julio";
					break;
				case '08':
					$mes = "agosto";
					break;
				case '09':
					$mes = "septiembre";
					break;
				case '10':
					$mes = "octubre";
					break;
				case '11':
					$mes = "noviembre";
					break;
				case '12':
					$mes = "diciembre";
					break;
			}
            // print_r('Total Checkbox Seleccionados: '.$num.'</br>');
            // print_r('Valores: </br>');

            for($n = 0; $n < $num; $n++)
            {
                // print_r($arregloCHK[$n].'</br>');
            }
        // }
    ?>
	<form action="guarda_registro.php" method="post">
			<div class="container">
				<div class="row col-xs-12 col-sm-12 col-md-12">
					<div class="col-xs-3 col-sm-3 col-md-3 text-center">
						<img class="logoPDF" src="images/ecopulse.png" alt="">
					</div>
					<div class="col-xs-9 col-sm-9 col-md-9">
						<p class="izq">Mérida Yucatán <?php echo "a " . date("d") . " de " . $mes . " de " . date("Y"); ?></p>
					</div>
				</div>
				<div class="row col-xs-12 col-sm-12 col-md-12">
					<div class="col-xs-3 col-sm-3 col-md-3">
					<p class="piepag">
						contacto@ecopulse.mx</br>
						www.ecopulse.mx</br>
						</br>
						Calle 56 num. 551 depto. 4 por 79 y 81 Col.</br>
						Núcleo Dzodzil C.P. 97300 Mérida,</br>
						Yucatán, México. T. +52 999 688 2513</br>
					</p>
					</div>
					<div class="col-xs-9 col-sm-9 col-md-9 text-center p-t-30">
						<h1><strong>RESGUARDO DE EQUIPO Y HERRAMIENTAS</strong></h1>
					</div>
				</div>
			</div>
	</form>
</body>
</html>