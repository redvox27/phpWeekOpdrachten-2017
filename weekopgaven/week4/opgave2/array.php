<?php

$numberArray = [];
$counter = 0;
function getArray(){
    global $numberArray;
    return $numberArray;
}
function addNumberToArray($num){
    global $numberArray;
    global $counter;
    $numberArray[$counter] = $num;
    $counter++;
}