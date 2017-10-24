<?php

function circel($straal){
    $omtrek = 2 * 3.14 * $straal;
    $oppervlakte = 3.14 * $straal * $straal;

    echo "de omtrek van een circel met de straal van $straal cm is $omtrek" . "</br>";
    echo "de oppervlakte van een circel met een straal van $straal cm is $oppervlakte" . "</br>";
}

circel(5);