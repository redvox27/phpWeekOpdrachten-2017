<?php

function swapVariables($x, $y){
    $temp = $x;
    $x = $y;

    $y = $temp;

    echo "X heeft de waarde $x " . "</br>";
    echo "Y heeft de waarde $y" . "</br>";
}

swapVariables(4, 7);