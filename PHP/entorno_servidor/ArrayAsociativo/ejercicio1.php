<?php
$numeroAlumnos[0]['Ingles']=1;
$numeroAlumnos[1]['Ingles']=6;
$numeroAlumnos[2]['Ingles']=3;

$numeroAlumnos[0]['Frances']=14;
$numeroAlumnos[1]['Frances']=19;
$numeroAlumnos[2]['Frances']=13;

$numeroAlumnos[0]['Aleman']=8;
$numeroAlumnos[1]['Aleman']=7;
$numeroAlumnos[2]['Aleman']=4;

$numeroAlumnos[0]['Ruso']=3;
$numeroAlumnos[1]['Ruso']=2;
$numeroAlumnos[2]['Ruso']=1;


$numeroAlumnos2['Basico']['Ingles']=1;
$numeroAlumnos2['Medio']['Ingles']=6;
$numeroAlumnos2['Avanzado']['Ingles']=3;

$numeroAlumnos2['Basico']['Frances']=14;
$numeroAlumnos2['Medio']['Frances']=19;
$numeroAlumnos2['Avanzado']['Frances']=13;

$numeroAlumnos2['Basico']['Aleman']=8;
$numeroAlumnos2['Medio']['Aleman']=7;
$numeroAlumnos2['Avanzado']['Aleman']=4;

$numeroAlumnos2['Basico']['Ruso']=3;
$numeroAlumnos2['Medio']['Ruso']=2;
$numeroAlumnos2['Avanzado']['Ruso']=1;

$numeroAlumnos3 = array (
    array('Ingles' => 1),
    array('Ingles' => 6),
    array('Ingles' => 3)
);

//Este sería el arrayAsociativo con un array dentro de otro array
$numeroAlumnos4 = array (
    'Basico' => array('Ingles' => 1,'Frances' => 14,'Aleman' => 8,'Ruso' => 3),
    'Medio' => array('Ingles' => 6,'Frances' => 19,'Aleman' => 7,'Ruso' => 2),
    'Avanzado' => array('Ingles' => 3,'Frances' => 13,'Aleman' => 4,'Ruso' => 1)
);

$nivel = "Basico";
$idioma = "Ingles";

echo ("En el nivel $nivel de $idioma hay ".$numeroAlumnos4[$nivel][$idioma]." alumnos");

echo "<br />";
echo "<br />";
echo "<br />";

$bucle = 0;
while($bucle < 3) {
	$sec=0;
	switch($bucle){
		case 0:
			$bucle2='Basico';break; 
		case 1:
			$bucle2='Medio';break; 
		case 2:
			$bucle2='Avanzado';break; 
	}
	while ($sec < 4){
		switch($sec){
			case 0:
				$sec2='Ingles';break; 
			case 1:
				$sec2='Frances';break; 
			case 2:
				$sec2='Aleman';break; 
			case 3:
				$sec2='Ruso';break; 
		}
		echo "La clase de nivel " . $bucle2. " de " . $sec2 . " son " . $numeroAlumnos4[$bucle2][$sec2] . " alumnos."; 
        echo "<br />";
		$sec +=1;
	}
$bucle +=1;
}
?>