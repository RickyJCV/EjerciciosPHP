<?php
$tipoMotor=7;
switch ($tipoMotor) {
case 0:
echo "<script>alert('No hay establecido un valor definido para el tipo de bomba')</script>";
break;

case 1:
echo "La bomba es una bomba de agua";
break;

case 2:
echo "La bomba es una bomba de gasolina";
break;

case 3:
echo "La bomba es una bomba de hormigón";
break;

case 4:
echo "La bomba es una bomba de pasta alimenticia";
break;

default:
echo "No existe un valor válido para tipo de bomba";
break;
}
?>