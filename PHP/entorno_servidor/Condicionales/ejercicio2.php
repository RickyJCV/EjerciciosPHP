<?php
$tipo = "Rueda de camión";
$grosor = 0.33;
$diametro = null;
$marca = "Kimashuki";

if($diametro>1.4){
echo "La rueda es para un vehículo grande";
}else if($diametro===null){
echo "No existe un tamaño de rueda válido";
}else{
echo "La rueda es para un vehículo pequeño";
}

?>