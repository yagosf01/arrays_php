<?php

    $carro = [
        'Carro' => 'BMW',
        'Motor' => '2.0',
        'Cambio' => 'Manual',
        'teto_solar' => true,
    ];

    $keys = array_keys($carro);

    print_r($keys);

    echo "<br>";

    $values = array_values($carro);

    print_r($values);

    echo "<br>";

    //verificando se a key existe

    $arr = [
        'nome' => 'Yago',
        'idade' => 18
    ];

    if(array_key_exists("nome", $arr)) {
        echo "A chave existe! <br>";

    } else {
        echo " a chave não existe <br>"; 
    }

    if(isset($arr['nome'])){ 
        echo "A chave existe! <br>";

    } else {
        echo " a chave não existe <br>"; 
    }
    

    $arr2 = [
        'nome' => 'Yago',
        'idade' => 18
    ];

    if(array_key_exists("profissao", $arr2)) {
        echo "A chave existe! <br>";

    } else {
        echo " a chave não existe <br>"; 
    }