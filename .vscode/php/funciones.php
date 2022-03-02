<?php

# Funciones sin parametros

function saludo(){
    
    echo "hola<br>";            # en el caso de un string, podemos continuar directamente con el tag

}

saludo();


# Funciones con parametros

function despedida($adios){

    echo $adios."<br>";         # con el uso del punto concatenamos una variable con un string
}

despedida("chao");


# Funciones con retorno

function retorno($retornar){

    return $retornar."<br>";

}

echo retorno("devuelto");







?>