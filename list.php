<?php

    $pessoa = ["Yago", 18, "Skatista"];

    print_r($pessoa);

    echo "<br>";

    list($nome, $idade, $profissao) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
