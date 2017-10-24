<?php

print_r($_GET);


?>

<html>
<head>
    <title>Get</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>
<body>
    <?php $id = 10;?>
    <a href="get.php?id=<?php echo $id?>"> CLICK HERE</a>
</body>
</html>