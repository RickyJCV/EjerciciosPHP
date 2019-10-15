<?php
$paisLimitrofe = array("Ecuador", "Colombia", "Brasil", "Bolivia", "Chile");

echo "</br> A) Con for normal </br>";
for($i=0;$i<count($paisLimitrofe);$i++){
    echo $paisLimitrofe[$i] . "</br>";
}

echo "</br> B) Con foreach </br>";

foreach($paisLimitrofe as $valor){
    echo $valor . "</br>";
}
?>