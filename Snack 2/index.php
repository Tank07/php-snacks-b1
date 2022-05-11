<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo
di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    $name = (!empty($_GET['name'])) ? $_GET['name'] : '';
    $mail = (!empty($_GET['mail'])) ? $_GET['mail'] : '';
    $age = (!empty($_GET['age'])) ? $_GET['age'] : '';

    // var_dump($name);
    // var_dump($mail);
    // var_dump($age);

    echo "<p> NAME $name </p>" ;
    echo "<p> MAIL $mail </p>" ;
    echo "<p> AGE $age </p>" ;

    $validationName = false;
    $validationMail = false;
    $validationAge = false;

    if (strlen($name) < 3){
        echo "<p> Il nome deve contenere 3 caratteri</p>";
    } else {
        $validationName = true;
    }

    if (strpos($mail,'@') == 0 || strpos($mail,'.') == 0){
        echo "<p> La mail deve contenere una @ ed un .</p>";
    } else {
        $validationMail = true;
    }

    if (!is_numeric($age) || $age < 0){
        echo "<p> Il valore da immettere deve essere un numero e maggiore di 0</p>";
    } else {
        $validationAge = true;
    }

    if ($validationName && $validationMail && $validationAge){
        echo  "<p> Accesso riuscito </p>";
    } else {
        echo  "<p> Accesso negato </p>";
    }


?>
