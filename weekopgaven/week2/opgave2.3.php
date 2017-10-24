<?php

function getSmallestNumber($x, $y, $z){
    $array = [$x, $y, $z];

    $smallestNumber = $x;

    for ($i =1; $i < count($array); $i++){
        $num = $array[$i];
        if ($num < $smallestNumber){
            $smallestNumber = $num;
        }
    }
    return $smallestNumber;
}
echo getSmallestNumber(5, 3, 4);