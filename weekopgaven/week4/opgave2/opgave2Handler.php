<?php
include "opgave2.php";
$numberArray = getArray();
if (isset($_POST['next'])){

    $number = $_POST['number'];
    addNumberToArray($number);
    header("Location: opgave2.php");

}

if (isset($_POST['sort'])) {
    sort($numberArray);
    echo "sorted";
    echo count($numberArray);
    for ($i = 0; $i < count($numberArray); $i++){
        echo "haha" . "</br>";
    }
}