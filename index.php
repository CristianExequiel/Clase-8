<?php
    //Ejercicio N° 1
    function cuadrado($lado) {
        $perimetro = $lado * 4;
        $superficie = $lado * $lado;
        echo "Perímetro: " . $perimetro . "<br>";
        echo "Superficie: " . $superficie . "<br>";
    }
        cuadrado(5);


    // Ejercicio N° 2
function mayusculas($texto) {
    return strtoupper($texto);
}

function minusculas($texto) {
    return strtolower($texto);
}

$texto = "Texto en Mayusculas";
echo mayusculas($texto) . "<br>";
echo minusculas($texto) . "<br>";

    // Ejercicio 3
function dias_mes($mes) {
    if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
        return "El mes tiene 30 días";
    } else if ($mes == 2) {
        return "El mes tiene 28 días";
    } else {
        return "El mes tiene 31 días";
    }
}

echo dias_mes(1) . "<br>";


?>