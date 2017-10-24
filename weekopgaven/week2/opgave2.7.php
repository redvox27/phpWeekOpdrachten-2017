<?php
$weatherArray = [];
$drogeDagen = 0;
$totaalAantalNeerslag = 0;


# fill the array
for ($i = 0; $i < 20; $i++){
    $random = rand(0, 100);
    $weatherArray[$i] = $random;
}

for ($i = 0; $i < count($weatherArray); $i++){
    $totaalAantalNeerslag += $weatherArray[$i];

    if ($weatherArray[$i] == 0){
        $drogeDagen += 1;
    }
}
echo $drogeDagen . "</br>";
echo $totaalAantalNeerslag . "</br>";

?>