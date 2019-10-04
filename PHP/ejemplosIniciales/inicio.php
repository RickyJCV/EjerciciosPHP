<html>
    <head>
    </head>
    <body>
        <h1>Inicio</h1>
        <h2> <?php 
        # Las variables se declaran con $nombreVariable y Get obtiene la variable dandole el nombre de esa variable
        $nombre = $_GET ["nombre"];
        $apellido = $_GET ["apellido"];
        $edad = $_GET ["edad"];
        // Para concatenar se usa el punto "." y se le pone el codigo html como el br por ejemplo
        echo $nombre . " " . $apellido . "<br>" . $edad;
        ?> </h2>
        
    </body>
</html>