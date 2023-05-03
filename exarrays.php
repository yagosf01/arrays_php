<?php

    $arr = range(10, 45);

    for($i = 0; $i < count($arr); $i++) {
        
        $soma = $arr[$i] + 6;

        if($soma > 30){
            echo "Numero $soma muito alto <br>";
        } else {
            echo "$soma <br>";
        }
    }

    echo "------------------------------------------- <br>";

    $arr2 = [
        [1, 2, 3, 4],
        [2, 4, 6, 8],
        [1, 3, 5, 7]
    ];

    // loop no array externo
    for($p = 0; $p < count($arr2); $p++) {

        echo "Imprimindo array externo: " . ($p + 1) . "<br>";

        for($j = 0; $j < count($arr2[$p]); $j++) {
            echo $arr2[$p][$j] . "<br>";
        }
    }

    echo "-------------------------------------------- <br>";

    $arr3 = [
        "Jaguar", 3.0, "Azul", 18, "Teto Solar"
    ];

    list($Marca, $potencia, $cor, $rodas, $opcional) = $arr3;

    echo "$Marca <br>";
    echo "$potencia <br>";
    echo "$cor <br>";
    echo "$rodas <br>";
    echo "$opcional <br>";