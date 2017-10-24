<?php
$tekst = "  the quick brown fox jumps over the lazy dog  ";

$tekst = trim($tekst);
echo $tekst . "</br>";

$tekst = ucwords($tekst);
echo $tekst . "</br>";

$tekst = str_replace(" ", "-", $tekst);

echo $tekst . "</br>";

$tekst = substr($tekst, 4);
echo $tekst . "</br>";