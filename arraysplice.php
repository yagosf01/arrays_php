<?php

    $arr = [
        1,2,3,4,5,6,7,8,9
    ];

    $splice = array_splice($arr, 3, 5);

    print_r($arr);

    echo "<br>";

    print_r($splice);

    echo "<br>";

    $array = [
        "batata", "maça", "pera","feijão","arroz"
    ];

    $spli = array_splice($array, 2, -1);

    print_r($array);

    echo "<br>";

    print_r($spli);