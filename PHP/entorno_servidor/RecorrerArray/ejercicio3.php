<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio. CU00826B</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Ejercicio 1</h1>
    <?php
			$paisLimitrofe = ['Ecuador', 'Colombia', 'Brasil', 'Bolivia', 'Chile'];
			$msg = 'Los países limítrofes con Perú son: ';
			for($i = 0; $i < count($paisLimitrofe); $i++) {
				$msg = $msg . $paisLimitrofe[$i];
				if($i < (count($paisLimitrofe)-2)){
					$msg = $msg . ', ';
				} else if ($i == (count($paisLimitrofe)-2)){
					$msg = $msg . ' y ';
				} else {
					$msg = $msg . '.';
				}
			}
			echo ($msg);
		?>
    <hr>
    <?php
			$msg = 'Apartado b.<br/>Los países limítrofes con Perú son: ';
			$contador = 0;
			foreach($paisLimitrofe as $pais){
				$msg = $msg . $pais;
				if($contador < (count($paisLimitrofe)-2)){
					$msg = $msg . ', ';
				} else if ($contador == (count($paisLimitrofe)-2)){
					$msg = $msg . ' y ';
				} else {
					$msg = $msg . '.<br/>';
				}
				$contador++;
			}
			echo ($msg);
		?>


    <h1>Ejercicio 2</h1>
    <?php
			$equipo = array(portero=>'Casillas', defensa=>'Hierro', medio=>'Ces', delantero=>'Ronaldo');
			foreach($equipo as $posicion=>$jugador) {
				echo "El " . $posicion . " es " . $jugador . '. ';
			}
		?>
    <hr>
    <h1>Ejercicio 3, apartado a</h1>
    <?php
			$equipos[0][0][0] = 'Frank'; $equipos[0][0][1] = 'Pepe'; $equipos[0][0][2] = 'Luis'; $equipos[0][0][3] = 'Raul';
			$equipos[0][1][0] = 'Tiger'; $equipos[0][1][1] = 'Mourin'; $equipos[0][1][2] = 'Katz'; $equipos[0][1][3] = 'Alberto';
			$equipos[1][0][0] = 'Suarez'; $equipos[1][0][1] = 'Koltz'; $equipos[1][0][2] = 'Fernandez'; $equipos[1][0][3] = 'Ramirez';
			$equipos[2][0][0] = 'Higuita'; $equipos[2][0][1] = 'Mel'; $equipos[2][0][2] = 'Rubens'; $equipos[2][0][3] = 'Messi';
			$equipos[2][1][0] = 'Kostenmeiner'; $equipos[2][1][1] = 'Lenkins'; $equipos[2][1][2] = 'Marash'; $equipos[2][1][2] = 'Juanes';
			//$msg = 'Equipo: ';
			for($i = 0; $i < count($equipos); $i++) {
				$msg = 'Pais: ';
				if($i == 0) {
					$msg = $msg . 'España.<br/>';
				} else if($i == 1){
					$msg = $msg . 'Mexico.<br/>';
				} else {
					$msg = $msg . 'Argentina.<br/>';
				}
				for($j = 0; $j < count($equipos[$i]); $j++) {
					$msg = $msg . 'El equipo ' . ($j + 1) . ' está formado por:<br/>';
					for($k = 0; $k < count($equipos[$i][$j]); $k++) {
						if($k == 0) {
							$msg = $msg . 'Portero: ';
						} else if($k == 1) {
							$msg = $msg . 'Defensa: ';
						} else if($k == 2) {
							$msg = $msg . 'Medio: ';
						} else {
							$msg = $msg . 'Delantero: ';
						}
						$msg = $msg . $equipos[$i][$j][$k] . '<br/>';
					}
				}
				echo ($msg . '<br/>');
			}
		?>
    <hr>
    <h1>Ejercicio 3, apartado b</h1>
    <?php
			$equipos[0][0][0] = 'Frank'; $equipos[0][0][1] = 'Pepe'; $equipos[0][0][2] = 'Luis'; $equipos[0][0][3] = 'Raul';
			$equipos[0][1][0] = 'Tiger'; $equipos[0][1][1] = 'Mourin'; $equipos[0][1][2] = 'Katz'; $equipos[0][1][3] = 'Alberto';
			$equipos[1][0][0] = 'Suarez'; $equipos[1][0][1] = 'Koltz'; $equipos[1][0][2] = 'Fernandez'; $equipos[1][0][3] = 'Ramirez';
			$equipos[2][0][0] = 'Higuita'; $equipos[2][0][1] = 'Mel'; $equipos[2][0][2] = 'Rubens'; $equipos[2][0][3] = 'Messi';
			$equipos[2][1][0] = 'Kostenmeiner'; $equipos[2][1][1] = 'Lenkins'; $equipos[2][1][2] = 'Marash'; $equipos[2][1][2] = 'Juanes';
			foreach($equipos as $pais => $valor) {
				$msg = 'Pais: ';
				if($pais == 0) {
					$msg = $msg . 'España.<br/>';
				} else if($pais == 1){
					$msg = $msg . 'Mexico.<br/>';
				} else {
					$msg = $msg . 'Argentina.<br/>';
				}
				foreach($valor as $numEquipo => $valor2){
					if($numEquipo == 0){
						$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;El equipo 1 está formado por:<br/>';
					} else {
						$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;El equipo 2 está formado por:<br/>';
					}
					foreach($valor2 as $posicion => $valor3){
						if($posicion == 0) {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Portero: ';
						} else if($posicion == 1) {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Defensa: ';
						} else if($posicion == 2) {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medio: ';
						} else {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delantero: ';
						}
						$msg = $msg . $equipos[$pais][$numEquipo][$posicion] . '<br/>';
					}
				}
				echo ($msg . '<br/>');
			}
		?>
    <hr>
    <h1>Ejercicio 3, apartado c</h1>
    <?php
			$equipos1['Espanna']['Equipo1']['portero'] = 'Frank';
			$equipos1['Espanna']['Equipo1']['defensa'] = 'Pepe';
			$equipos1['Espanna']['Equipo1']['medio'] = 'Luis';
			$equipos1['Espanna']['Equipo1']['delantero'] = 'Raul';
			$equipos1['Espanna']['Equipo2']['portero'] = 'Tiger';
			$equipos1['Espanna']['Equipo2']['defensa'] = 'Mourin';
			$equipos1['Espanna']['Equipo2']['medio'] = 'Katz';
			$equipos1['Espanna']['Equipo2']['delantero'] = 'Alberto';
			$equipos1['Mexico']['Equipo1']['portero'] = 'Suarez';
			$equipos1['Mexico']['Equipo1']['defensa'] = 'Koltz';
			$equipos1['Mexico']['Equipo1']['medio'] = 'Fernandez';
			$equipos1['Mexico']['Equipo1']['delantero'] = 'Ramirez';
			$equipos1['Argentina']['Equipo1']['portero'] = 'Higuita';
			$equipos1['Argentina']['Equipo1']['defensa'] = 'Mel';
			$equipos1['Argentina']['Equipo1']['medio'] = 'Rubens';
			$equipos1['Argentina']['Equipo1']['delantero'] = 'Messi';
			$equipos1['Argentina']['Equipo2']['portero'] = 'Kostenmeiner';
			$equipos1['Argentina']['Equipo2']['defensa'] = 'Lenkins';
			$equipos1['Argentina']['Equipo2']['medio'] = 'Marash';
			$equipos1['Argentina']['Equipo2']['delantero'] = 'Juanes';
			foreach($equipos1 as $pais => $valor) {
				$msg = 'Pais: ';
				if($pais == 'Espanna') {
					$msg = $msg . 'España.<br/>';
				} else if($pais == 'Mexico'){
					$msg = $msg . 'Mexico.<br/>';
				} else {
					$msg = $msg . 'Argentina.<br/>';
				}
				foreach($valor as $numEquipo => $valor2){
					if($numEquipo == 'Equipo1'){
						$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;El equipo 1 está formado por:<br/>';
					} else {
						$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;El equipo 2 está formado por:<br/>';
					}
					foreach($valor2 as $posicion => $valor3){
						if($posicion == 'portero') {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Portero: ';
						} else if($posicion == 'defensa') {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Defensa: ';
						} else if($posicion == 'medio') {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medio: ';
						} else {
							$msg = $msg . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delantero: ';
						}
						$msg = $msg . $equipos1[$pais][$numEquipo][$posicion] . '<br/>';
					}
				}
				echo ($msg . '<br/>');
			}
		?>
</body>

</html>