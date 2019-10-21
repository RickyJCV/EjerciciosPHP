<!DOCTYPE html>

<html>

<head>

    <title>Ejercicio aprenderaprogramar.com</title>

    <meta charset="utf-8">



</head>

<body>

    <?php
    /*
    a) Dada la cadena "El abecedario completo es algo largo y detallarlo exhaustivamente es 
    costoso", indicar cuántas veces aparece cada vocal usando funciones para cadenas PHP.

    b) Dada la cadena "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso",
    indicar qué consonantes son las que aparecen y cuántas veces aparecen usando funciones para cadenas PHP.

    c) Dada la cadena "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso",
    mostrar la cadena donde todas las a hayan sido sustituídas por el símbolo *. 
    Por ejemplo en lugar de <<El abecedario…>> se habrá de mostrar <<El *beced*rio…>>

    d) Dada la cadena "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso",
    mostrar la subcadena desde la primera aparición de <<completo>> excluyendo completo, es decir, 
    deberá mostrarse << es algo largo y detallarlo exhaustivamente es costoso>>. 
    Para ello usa una o varias funciones para cadenas PHP.
    */ 

		    $texto="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";

			$texto=strtolower($texto);

			$cadvocales=array('a','e','i','o','u');

			for($i=0;$i<count($cadvocales);$i++){

				echo 'La letra '.$cadvocales[$i].' aparece '.substr_count($texto, $cadvocales[$i]).(substr_count($texto, $cadvocales[$i])==1?' vez':' veces').'<br/>';

			}

			echo "<br>";

			$cadconsonantes=array('b','c','d','f','g','h','j','k','l','m','n','ñ','p','q','r','s','t','v','x','y','z');

			for($j=0;$j<count($cadconsonantes);$j++){

				if(substr_count($texto, $cadconsonantes[$j])!=0){

					echo 'La letra '.$cadconsonantes[$j].' aparece '.substr_count($texto, $cadconsonantes[$j]);

					if(substr_count($texto, $cadconsonantes[$j])==1){

						echo ' vez<br/>';

					}else{

						echo ' veces<br/>';

					}

				}else{}

			}

			echo "<br>";

			echo str_replace('a','*',$texto);

			echo "<br/><br/>";

			$cadparcial=substr($texto,23);//Opción 1

			echo $cadparcial."<br/>";

			$cadparcial2=strpos($texto,'completo');//Opción 2

			$cadparcial2=substr($texto,$cadparcial2+9);

			echo $cadparcial2;

		?>





</body>

</html>