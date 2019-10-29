<?php
        $etiqueta = 'h1';
        $pagina = 'http://www.aprenderaprogramar.com';
        contarEtiquetas($etiqueta,$pagina);
        $pagina = 'https://bermartinv.github.io/css/files/taller/menu_taller.html';
        contarEtiquetas($etiqueta, $pagina);
        $pagina = 'http://clarin.com';
        contarEtiquetas($etiqueta, $pagina);

        echo "<br>";
        
        $etiqueta = 'link';
        $pagina = 'http://www.aprenderaprogramar.com';
        contarEtiquetas($etiqueta,$pagina);
        $pagina = 'https://bermartinv.github.io/css/files/taller/menu_taller.html';
        contarEtiquetas($etiqueta, $pagina);
        $pagina = 'http://clarin.com';
        contarEtiquetas($etiqueta, $pagina);
        
        function contarEtiquetas($etiqueta,$pagina){
            $texto = file_get_contents($pagina);
            echo 'En la página web'.'<p><a target="_blank" href="'.$pagina.'">'
                . $pagina.'</a></p> '.' Tenemos '.substr_count($texto, $etiqueta). ' etiquetas '.$etiqueta.'<br/>';
        }
    ?>