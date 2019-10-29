<?php
        function escribirNumerosMod($numeros ,$valor)
        {
            if (strcmp($valor, "sobreescribir") == 0) {
                $file = fopen("datosEjercicioMod.txt", "w");
                for ($i=0; $i < count($numeros); $i++) { 
                    fwrite($file, $numeros[$i] . PHP_EOL);
                }
                fclose($file);
                echo "Se ha sobreescrito correctamente.<br/>";

            }else if (strcmp($valor, "ampliar") == 0) {
                $file = fopen("datosEjercicioMod.txt", "a");
                for ($i=0; $i < count($numeros); $i++) { 
                    fwrite($file, $numeros[$i] . PHP_EOL);
                }   
                fclose($file);
                echo "Se ha ampliado correctamente.<br/>";
            }
        }
        function leerContenidoFichero($ruta)
        {
            $file = fopen($ruta, "r+");
            while (!feof($file)) {
                $resultado = fgets($file);
                echo $resultado . "<br/>";
            }
        }
        escribirNumerosMod(array(5, 9, 3, 22), "sobreescribir");
        echo "<br/>El contenido del fichero es: <br/>";
        leerContenidoFichero("datosEjercicioMod.txt");
        
        escribirNumerosMod(array(33, 11, 16), "ampliar");
        echo "<br/>El contenido del fichero es: <br/>";
        leerContenidoFichero("datosEjercicioMod.txt");
        
        escribirNumerosMod(array(4, 99, 12), "sobreescribir");
        echo "<br/>El contenido del fichero es: <br/>";
        leerContenidoFichero("datosEjercicioMod.txt");
?>