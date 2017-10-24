<?php

function calculateProvite($inkoop, $verkoop){
    $provite = $verkoop - $inkoop;
    return $provite;
}

echo calculateProvite(10, 20);