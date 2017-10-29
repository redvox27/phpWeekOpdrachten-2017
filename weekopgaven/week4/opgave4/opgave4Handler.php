<?php

function faculteit($n){
    if ($n == 1){
        $result = 1;
    }
    else{
        $result = $n * faculteit($n -1);
    }
    return $result;
}

if (isset($_POST["submit"])){
    $number = $_POST['number'];
    echo faculteit($number);
}