<?php
        $factura = $_GET['factura'];
       $sexo = $_GET['sexo'];
       $nombre = $_GET['nombre'];
       $direccion = $_GET['direccion'];
       $correo = $_GET['correo'];
       
       if($factura==="on"){
        $factura="Si";
       }else{
        $factura="No";
       }

       echo"<h1>Datos del formulario</h1>";
       echo "Factura: ".$factura."<br>";
       echo "Sexo: ".$sexo."<br>";
       echo "Nombre: ".$nombre."<br>";
       echo "Dirección: ".$direccion."<br>";
       echo "Correo: ".$correo."<br>";
?>