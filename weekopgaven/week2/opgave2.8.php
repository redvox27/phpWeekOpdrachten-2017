<table border="1">
    <?php
    $tafel_van = 5;
    for ($i = 10; $i > 0; $i--) {
        $result = $tafel_van * $i;
        echo "<tr>";
        for ($j =0; $j < 1; $j++){
            echo "<td>$i</td>";
            echo "<td> $result</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<?php

function table($tafel_van){
    for ($i = 10; $i > 0; $i--){
        $result = $tafel_van * $i;
        echo $result ;
    }
}
#able(5);