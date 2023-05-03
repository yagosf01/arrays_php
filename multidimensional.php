<?php
    
    $arr = [
        [1,2,3],
        [6,7,8]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1] . "<br>"; // primeiro array, e segundo elemneto
    echo $arr[1][2] . "<br>"; // segundo elemento ultimo array

    echo count($arr) . "<br>"; // count de arrays
    echo count($arr[1]) . "<br>"; // count no segundo array