 <?php 
       //El get nos muestra la información y por tanto no la cifra
        $nombre = $_GET ["user"];
        $password = $_GET ["pass"];
        echo "<h1> Usuario: " . $nombre . "<br>" . "Password: " . $password . "</h1>";
        ?>
        