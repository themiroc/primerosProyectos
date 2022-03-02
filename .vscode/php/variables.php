<?php

# Variable numerica
$numeroCinco = 5;
echo "<br><h3>Esto es una variable numero: $numeroCinco</h3>";
var_dump($numeroCinco);  "<br><br><hr>";

# Variable texto
$palabra = "palabra";
echo "<br><h3>Esto es una variable texto: $palabra</h3>";
var_dump($palabra); echo"<br><br><hr>";

# Variable booleana
$booleana = true;
echo "<h3>Esto es una variable booleana: $booleana</h3>";
var_dump($booleana); echo"<br><br><hr>";

# Variable arreglo
$colores = array("rojo", "amarillo");
echo "<h3>Esto es una variable arreglo: $colores[0]</h3>";
echo "<h3>Esto es una variable arreglo: $colores[1]</h3>";
var_dump($colores); echo"<br><br><hr>";

# Variable arreglo con propiedades
$verduras = array("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "<h3>Esto es una variable arreglo con propiedades: $verduras[verdura1]</h3>";
echo "<h3>Esto es una variable arreglo con propiedades: $verduras[verdura2]</h3>";
var_dump($verduras); echo"<br><br><hr>";

# Variables objeto
$frutas = (object)["fruta1"=>"pera" , "fruta2"=>"manzana"];
echo "<h3>Esto es una variable objeto: $frutas->fruta1</h3>";
echo "<h3>This is also an object: $frutas->fruta2</h3>";
var_dump($frutas); echo"<br><br><hr>";

?>