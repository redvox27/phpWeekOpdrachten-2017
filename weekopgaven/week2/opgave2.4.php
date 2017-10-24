<?php
$price = 100000;
$yearCounter = 0;
while ($price > 0){
    $price -= 5000;
    $price = $price * 1.04;
    $yearCounter++;

    if ($yearCounter == 45){
        break;
    }
}

if ($yearCounter < 45){
    echo "je kan dit bedrag erafhalen voor $yearCounter jaar";
}
else{
    echo "tot aan je pensioen";
}