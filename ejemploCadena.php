<?php 
function saberProta($protagonista = "cualquiera")
{
    $pelis = array("El Señor de los Anillos" => "Frodo Bolsón", "Star Wars" => "Luke Skywalker", "Transformers" => "Optimus Prime");

    if ($protagonista == "cualquiera")
        return array_values($pelis); //Va a devolver un array en el que las claves aparecerán con su valor numérico
    else
        return $pelis[$protagonista]; //Va a devolver la película según el valorque entre como parámetro
}

print_r(saberProta()); //Devuelve valores de una variable de forma legible al entrar en el condicional con el valor de "cualquiera"
echo "<br/>"; 
echo saberProta("Transformers"); //Devolverá el protagonista de la película que entra como parámetro
