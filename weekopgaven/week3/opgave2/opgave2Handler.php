<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $location = $_POST["location"];

    echo "name: " . $name . "</br>";
    echo "age: " . $age . "</br>";
    echo "location: " . $location . "</br>";
}
else{
    $name = "None";
    $age = "None";
    $location = "None";
}