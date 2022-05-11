<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

    $arrayNumeri = [];
    $arraySecchio = [];
    $arrayUguali = [];

    for ($i=0; count($arrayNumeri) <= 14 ; $i++) { 

        $arraySecchio = rand(1,100);

        if (in_array("$arraySecchio[$i]", $arrayNumeri))
        {
            $arrayUguali[] = + 1;
        } else {
            $arrayNumeri[] = $arraySecchio[$i];
        }

        echo "<p> $i)  $arrayNumeri[$i] </p>";

    }

?>