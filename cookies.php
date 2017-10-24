<?php
$name = "Vincent";
$value = 100;
$expiration = time() + (60*60*24);

setcookie($name, $value, $expiration);


?>

<html>
<head>
    <title>Coockies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>
<body>
    <?php
    if(isset($_COOKIE["Vincent"])){
        $someOne =  $_COOKIE["Vincent"];
        echo $someOne;
    }
    else{
        $someOne = "";
    }


    ?>
</body>
</html>