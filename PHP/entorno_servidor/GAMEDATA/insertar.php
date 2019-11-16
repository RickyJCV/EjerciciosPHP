<?php

  
  # Conexión a la base de datos
    $conn = mysqli_connect( '127.0.0.1:33065', 'root', '', 'gamedata');


  # Sentencia para insertar registros en la base de datos
  $insert = "INSERT INTO `games`(`nombre`, `genero`, `descripcion`,`plataforma`,`desarrolladora`, `mes`, `anno`, `precio`) VALUES ('$_POST[nombre]','$_POST[genero]','$_POST[descripcion]','$_POST[plataforma]','$_POST[desarrolladora]','$_POST[mes]','$_POST[anno]','$_POST[precio]')";

  # Instrucción que ejecuta el insert anterior en la base de datos PRUEBAS
  $return = mysqli_query ( $conn, $insert);

  # Mostramos por pantalla el resultado del insert
  print_r( ( $return));

  # Cerramos conexión
  mysqli_close( $conn);

  header("Refresh:0;url=index.php");
  ?>