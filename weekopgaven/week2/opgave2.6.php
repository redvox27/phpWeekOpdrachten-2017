<?php

$array = array();
$tenFound = False;
for ($i = 0; $i < 10; $i++){
    $randomNumber = rand(1, 10);
    array_push($array, $randomNumber);

}
sort($array);
foreach ($array as $value){
    if ($value == 10){
        $tenFound = True;
    }
    echo $value . ", ";
}
$minValue = min($array);
$maxValue = max($array);

echo "min value = $minValue" . "</br>";
echo "max value = $maxValue" . "</br>";

if ($tenFound){
    echo "a ten is found";
}