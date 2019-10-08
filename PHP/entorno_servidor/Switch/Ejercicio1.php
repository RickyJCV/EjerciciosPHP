<?php
//Ejemplo de uso switch PHP aprenderaprogramar.com
        $mes=1;

        switch ($mes) {
            case "Enero":
            case 1:

            echo ("El mes es enero");

            break;

            case "Febrero":
            case 2: echo ("El mes es febrero"); break;

            case "Octubre":
            case 10: echo ("El mes es octubre"); break;

            default: echo ("El mes no es enero, febrero ni octubre"); break;

        }
        ?>