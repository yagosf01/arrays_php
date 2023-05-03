<?php

    $arr = [
        1, 2, 3, 4, 5, 6, 7, 8, 9
    ];

   $slice1 = array_slice($arr, 1, 5);
   
   print_r($slice1);

   echo "<br>";

   $slice2 = array_slice($arr, 5);
   
   print_r($slice2);

   echo "<br>";

   $slice3 = array_slice($arr, 1, -2);
   
   print_r($slice3);

   echo "<br>";