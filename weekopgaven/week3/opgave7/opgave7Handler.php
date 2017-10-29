<?php
function redirect(){
    $_POST = array();
    header("Location: opgave7.php");
}
if (isset($_POST["clear"])){
    redirect();
}
elseif (isset($_POST['calculate'])){
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];

    if (isset($_POST['optellen'])){
        $result = $getal1 + $getal2;
        echo "result: $result" ;
    }
    elseif (isset($_POST['aftrekken'])){
        $result = $getal1 - $getal2;
        echo "result: $result" ;
    }
    elseif (isset($_POST['vermedigvuldigen'])){
        $result = $getal1 * $getal2;
        echo "result: $result" ;
    }
    elseif (isset($_POST['delen'])){
        if ($getal1 == 0 || $getal2 == 0){
            echo "numbers cant be devided by zero please try again";
        }
        else{
            $result = $getal1 / $getal2;
            echo "result: $result" ;
        }
    }
    else{
        echo "check on of the checkboxes and try again";
    }
}