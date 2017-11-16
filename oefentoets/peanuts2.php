<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>
<body>

        <form action="opgave3.php" method="post">
            <select name="quality">
                <?php
                for($i = 0; $i< 10; $i++){
                    echo("<option> ".$i."</option>");
                }
                ?>

            </select>

            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit quality" value="submit">
            </div>

        </form>

    </div>

</div>
</body>
</html>