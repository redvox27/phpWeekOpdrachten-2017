<?php
$adres = "Van DoorenVeste, Zernikeplein 11, 9747 AS, Groningen";

$addressArray = explode(",", $adres);

foreach($addressArray as $string){
    echo $string . "</br>";
}