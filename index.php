<?php

    include 'animal.php';
    include 'Frog.php';
    include 'Ape.php';

    $sheep = new Animal("shaun");
    echo $sheep->name.'<br>';
    echo $sheep->legs.'<br>';
    echo $sheep->cold_blooded ? "true" : "false".'<br>';

    $sungokong = new Ape("kera sakti");
    $sungokong->yell();
    $kodok = new Frog("buduk");
    $kodok->jump();

?>