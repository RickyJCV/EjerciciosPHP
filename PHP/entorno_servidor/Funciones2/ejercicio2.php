<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
</head>

<body>
    <?php
$cadena1 = "aprender";
$cadena2 = "aprende";
$cadena3 = "ApRendEr A proGraMar.cOm";

//punto a.
echo str_pad($cadena1, (strlen($cadena1)+10), "*", STR_PAD_BOTH). "<br/>";
echo str_pad($cadena2, (strlen($cadena2)+10), "*", STR_PAD_BOTH). "<br/>";

echo "-----------------------------------------<br/>";

//punto b.
$tresLetrasSonIguales = true;
for ($i=0; $i < 3; $i++) { 
$aux1 = substr($cadena1, $i, 1);
$aux2 = substr($cadena2, $i, 1);
if (strcmp($aux1, $aux2) == 0) {
echo "\"" . $aux1 . "\" es igual a \"" . $aux2 . "\".<br/>";
}else{
$tresLetrasSonIguales = false;
echo "\"" . $aux1 . "\" es diferente de \"" . $aux2 . "\".<br/>";
}
}
echo '<br/> Como resultado final podemos decir que las tres letras son: ';
if ($tresLetrasSonIguales == true) { echo 'iguales';} else {echo 'no iguales';}

echo "<br/>-----------------------------------------<br/>";

//punto c.

$tranosformada = strtolower($cadena3);
$resul = (strlen($tranosformada) % 2);
$aux = strlen($tranosformada);

if ($resul == 0) {
$longitud = 2*$aux;
echo "Resul: " . str_pad($tranosformada, $longitud,"*" , STR_PAD_BOTH);

}else{
$longitud = 2*$aux + 1;
echo "Resul: " . str_pad($tranosformada, ($longitud),"*" , STR_PAD_BOTH);
}
?>
</body>

</html>