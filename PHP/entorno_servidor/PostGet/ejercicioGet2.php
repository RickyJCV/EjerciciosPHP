<!DOCTYPE html>
<html>

<head>
    <title>Recibir datos</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
			$caudal = $_GET['caudal'];
			$diametro = $_GET['diametro'];
			$altura = $_GET['altura'];
			$Pi = 3.141593;
			$radio = $diametro / 2;
			$tiempo = (($Pi * ($radio * $radio)) * $altura * 1000) / $caudal;
			echo 'El depósito tardará en llenarse: ' . $tiempo . ' minutos.';
		?>
</body>

</html>