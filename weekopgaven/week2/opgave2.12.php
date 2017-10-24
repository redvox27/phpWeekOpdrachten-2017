<?php
$spellen = [["Game" => "Kolonisten van Catan", "Aantal Spelers" => "3", "Vanaf" => "10 jaar", "Prijs" => "€ 36,95 "],
            ["Game" => "Agricola", "Aantal Spelers" => "2", "Vanaf" => "10 jaar", "Prijs" => "€ 28,45"],
            ["Game" => "Regenwormen", "Aantal Spelers" => "4", "Vanaf" => "6 jaar", "Prijs" => "€ 24,95 "]

];

foreach($spellen as $game){
    $spel = $game["Game"];
    $aantalSpelers = $game["Aantal Spelers"];
    $leeftijd = $game["Vanaf"];
    $prijs = $game["Prijs"];
    echo "Het spel $spel kan gespeeld worden met $aantalSpelers vanaf $leeftijd en kost in de winkel $prijs" . "</br>";
}