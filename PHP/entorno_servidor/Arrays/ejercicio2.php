<?php
echo "A) ";
$a[0][0]=1;
$a[0][1]=14;
$a[0][2]=8;
$a[0][3]=3;

$a[1][0]=6;
$a[1][1]=19;
$a[1][2]=7;
$a[1][3]=2;

$a[2][0]=3;
$a[2][1]=13;
$a[2][2]=4;
$a[2][3]=1;

echo "Alumnos matriculados en Ingles con nivel basico: " . $a[0][0];
echo "<br> Alumnos matriculados en Ingles con nivel medio: " . $a[1][0];
echo "<br> Alumnos matriculados en Ingles con nivel avanzado:" . $a[2][0];
$basicoIngles = $a[0][0] + $a[1][0] + $a[2][0];


echo "<br> B) ";
$b = array(array(1,14,8,3),array(6,19,7,2),array(3,13,4,1));
echo "Alumnos matriculados en Ingles con nivel basico: " . $b[0][0];
echo "<br> Alumnos matriculados en Ingles con nivel medio: " . $b[1][0];
echo "<br> Alumnos matriculados en Ingles con nivel avanzado:" . $b[2][0];

echo "<br> C) ";
$c[0] = array(1,14,8,3);
$c[1] = array(6,19,7,2);
$c[2] = array(3,13,4,1);

echo "Alumnos matriculados en Ingles con nivel basico: " . $c[0][0];
echo "<br> Alumnos matriculados en Ingles con nivel medio: " . $c[1][0];
echo "<br> Alumnos matriculados en Ingles con nivel avanzado:" . $c[2][0];
?>