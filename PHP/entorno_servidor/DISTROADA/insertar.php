<?php

  
  # Conexión a la base de datos
    $conn = mysqli_connect( 'localhost', 'root', '', 'distroada');


  # Sentencia para insertar registros en la base de datos
  $insert = "INSERT INTO `distros`(`nombre`, `version`, `descripcion`, `mes`, `anno`, `estable`, `distribucion`) VALUES ('$_POST[nombre]','$_POST[version]','$_POST[descripcion]','$_POST[mes]','$_POST[anno]','$_POST[estable]','$_POST[distribucion]')";

  # Instrucción que ejecuta el insert anterior en la base de datos PRUEBAS
  $return = mysqli_query ( $conn, $insert);

  # Mostramos por pantalla el resultado del insert
  print_r( ( $return));

  # Cerramos conexión
  mysqli_close( $conn);

  header("Refresh:0;url=index.php");
  ?>