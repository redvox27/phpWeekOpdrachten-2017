<?php
$reeks = [2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048];
$cumelatief = 0;
echo "<table border='1'>";
for ($i = 0; $i < count($reeks); $i++){
    $getal = $reeks[$i];
    $cumelatief += $reeks[$i];

    echo "<tr>
            <td>$getal</td>
            <td>$cumelatief</td>
        </tr>";

}
echo "</table>";
