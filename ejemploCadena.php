<?php 
function saberProta($protagonista = "todos")
{
    $pelis = array("El Señor de los Anillos" => "Frodo Bolsón", "Star Wars" => "Luke Skywalker", "Transformers" => "Optimus Prime");

    if ($protagonista == "todos")
        return array_values($pelis);
    else
        return $pelis[$protagonista];
}

print_r(saberProta());
echo "<br/>";
echo saberProta("Transformers");
