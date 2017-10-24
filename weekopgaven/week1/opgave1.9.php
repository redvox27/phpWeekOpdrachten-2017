<?php

function calculateTemp($celcius){
    $Fahrenheit = round((9 * $celcius / 5) + 32);
    $Kelvin = round($celcius + 273);

    echo "$celcius graden  is $Fahrenheit Fahrenheid" . "</br>";
    echo "$celcius is $Kelvin Kelvin" . "</br>";


}
calculateTemp(18);