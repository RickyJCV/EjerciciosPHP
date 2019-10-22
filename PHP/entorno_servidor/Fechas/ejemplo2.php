<?php //Ejemplo curso PHP aprenderaprogramar.com

$time = time();

echo "<br/>";

echo $time;

echo "<br/>";

echo date("d-m-Y (H:i:s)", -3600);

echo "<br/>";

echo date("d-m-Y (H:i:s)", 0);

echo "<br/>";

echo date("d-m-Y (H:i:s)", 3600);

echo "<br/>";

echo date("Y-m-d (H:i:s)", $time);

echo "<br/>";

echo date("Y-m-d ", $time);

echo "<br/>";

echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));

?>