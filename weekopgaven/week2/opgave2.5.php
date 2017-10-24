<?php
$kapitaal1 = 2500;
$kapitaal2 = 3000;
$yearCounter = 0;
while ($kapitaal1 < $kapitaal2){
    $kapitaal1 *= 1.07;
    $kapitaal2 *= 1.05;
    $yearCounter++;
}
echo "na $yearCounter jaar is kapitaal 1 groter dan kapitaal 2 ";