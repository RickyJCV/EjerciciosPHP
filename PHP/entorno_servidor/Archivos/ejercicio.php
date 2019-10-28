<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
</head>

<body>
    <?php
		function escribirTresNumeros($num1, $num2, $num3)
		{
			$fp = fopen("fichero.txt", "w");
			fputs($fp, $num1 . "\n" . $num2 . "\n" . $num3 . "\n");
			fclose($fp);
		}

		function obtenerSuma($ruta)
		{	
			$resul = 0;
			$aux = 0;
			$linea = array();
			$fp = fopen($ruta, "r");
			
			while (!feof($fp)) {
				$linea[$aux] = (int)fgets($fp);
				$aux++;
			}
			for ($i=0; $i < count($linea); $i++) { 
				$resul = $resul + $linea[$i];
			}
			fclose($fp);
			return $resul;
		}
		
		function obtenerArrNum($ruta)
		{	
			$array = array();
			$cont = 0;
			$fp = fopen($ruta, "r");
			while (!feof($fp)) {
				$array[$cont] = fgets($fp);
				$cont++;
			}
			fclose($fp);
			return $array;
		}

		escribirTresNumeros(2, 8, 14);
		echo "Suma: " . obtenerSuma("fichero.txt");
		echo "<br/>";
		$arrayObtenido = obtenerArrNum("fichero.txt");
		echo "<br/>Elementos del array obtenido con la función: </br>";
		for ($i=0; $i < count($arrayObtenido) - 1; $i++) { 
		echo $arrayObtenido[$i] . ", ";
		}
		
	?>
</body>

</html>