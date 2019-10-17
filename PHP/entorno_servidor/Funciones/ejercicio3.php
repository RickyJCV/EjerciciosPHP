<?php
// Apartado c)
echo '<br/><br/>';
echo '<strong> c) Una función que reciba como parámetros el valor del radio de la base
 y la altura de un cilindro y devuelva el volumen del cilindro, teniendo en cuenta que
 el volumen de un cilindro se calcula como Volumen = númeroPi * radio * radio * Altura
 siendo númeroPi = 3.1416 aproximadamente.</strong><br/>';
  $pi=3.1416;
 $rad=15;
 $alt=10;
   function VolumenCilindro($Pi,$Radio,$Altura)
 {
	 $Volumen=($Pi*($Radio*$Radio)*$Altura);
	 return $Volumen;
 }

 $vol=VolumenCilindro($pi,$rad,$alt);
 echo "El volumen del cilindro es: ==>".$vol;
 echo '<br/><br/>';
echo '</div>';
?>