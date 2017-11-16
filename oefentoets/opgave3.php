<?php
$minutesPerPerson = 0.75;
$maxPerson = 12;
if (isset($_POST['submit'])){
    $aantalPlukkers = $_POST['plukkers'];
    $aantalPlanten = $_POST['planten'];



    if ($aantalPlukkers > 12){
        echo "kan niet meer dan 12 plukkers zijn";
    }else{
        $time = $aantalPlanten / $aantalPlukkers;
        $time = $time * $minutesPerPerson;
        echo "<table border='1'>";
        echo "<tr>
            <td>
                Berekening voor $aantalPlukkers plukkers
            </td>
        </tr>";
        echo "<tr>
            <td>
                Aantal planten
            </td>
            <td>
                Aantal benodigde minuten
            </td>
        </tr>";
        echo "<tr>
            <td>
                $aantalPlanten
            </td>
            <td>
                $time
            </td>
        </tr>";

    }


}
function check_quality($quality){
    if ($quality == 10){
        echo "speciaalzaak";
    }
    elseif ($quality > 6){
        echo "AlbertHeijn";
    }
    elseif ($quality > 4 && $quality <=6){
        echo "jumbo";
    }
    elseif ($quality < 4){
        echo "de vogels";
    }
}
if (isset($_POST['submit quality'])){
    $quality =$_POST['quality'];
    echo $quality;
}

