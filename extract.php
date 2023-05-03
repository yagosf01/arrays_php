<?php

    $arr = [
        'cor' => 'verde',
        'material' => 'aço'
    ];

    extract($arr);

    echo "$cor <br>";
    echo "$material <br>";

    $nome = "Yago";

    $pessoa = [
        'nome' => 'Laura'
    ];

    echo "$nome <br>";
    
    extract($pessoa);

    echo "$nome <br>";