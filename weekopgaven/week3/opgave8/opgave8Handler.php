<?php
if (isset($_POST["submit"])){
    $hoogte = $_POST['hoogte'];
    $breedte = $_POST['breedte'];

    for ($i = 0; $i < $hoogte; $i++){
        for ($j = 0; $j < $breedte; $j++){
            echo "X";
        }
        echo "</br>";
    }
}