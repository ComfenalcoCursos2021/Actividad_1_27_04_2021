<?php
// Declarar 5 avariables que contengan sus informacion personal 
// y una constante, el dato al macenar no cambie
    $nombre = (string) "Miguel Angel";
    $apellidos = (string) "Castro Escamilla";
    $edad = (int) 23;
    $altura = (double) 1.83;
    $tipoSangre = (string) "O+";
    define("profesor", true);
    echo "Mi nombre es: $nombre";
    echo "<br>";
    echo "Mi apellido es: $apellidos";
    echo "<br>";
    echo "Mi edad es: $edad";
    echo "<br>";
    echo "Mi estatura es: $altura";
    echo "<br>";
    echo "Mi tipo de sangre es: $tipoSangre";
    echo "<br>";
    echo "Soy su profesor ".profesor;
    echo "<br>";
?>