<!-- ## Snack 4
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti
scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$aula = [
    [
        'nome' => 'Qui',
        'cognome' => 'Verdi',
        'voti' => [5,8,10,2],
    ],
    [
        'nome' => 'Quo',
        'cognome' => 'Rossi',
        'voti' => [4,9,7,6],
    ],
    [
        'nome' => 'Qua',
        'cognome' => 'Smith',
        'voti' => [7,3,9,1],
    ],
    [
        'nome' => 'Pluto',
        'cognome' => 'Pippo',
        'voti' => [4,8,6,2],
    ],
];

for ($i=0; $i < count($aula) ; $i++) { 
    
    echo $aula[$i]['nome'] . " " . $aula[$i]['cognome'] . " - Media voti: " . array_sum($aula[$i]['voti'])/4 . '<br>';

}

?>