<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<?php
$serverName = "localhost";
$mySqlUsername = "root";
$mySqlPassword = "Vtl54711";
$dataBase = 'phptut';
$userName = "";
$password = "";

if ( isset( $_POST['submit'] ) ) {
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];


}

if ($userName && $password){

    $conn = mysqli_connect($serverName, $mySqlUsername, $mySqlPassword, $dataBase);
    $cleanName = mysqli_real_escape_string($conn, $userName);
    $cleanPassword = mysqli_real_escape_string($conn, $password);

    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }
    else{
        echo "connection succesfull </br>";
    }

    $query = "SELECT * from users where username = '{$cleanName}' and password = '{$cleanPassword}'";

    echo $query . "</br>";
    $result = $conn->query($query);

    if ($result->num_rows > 0){
        echo "user logged in";
    }
    else{
        echo "username or password wrong try again";
    }
}






?>
</body>
</html>

