<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <form action="opgave8Handler.php" method="post">
            <div class="form-group">
                <label for="username">Hoogte toren</label>
                <input type="number" class="form-control" name="hoogte">
            </div>
            <div class="form-group">
                <label for="password">Breedte toren</label>
                <input type="number" class="form-control" name="breedte">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="submit">
            </div>

        </form>

    </div>

</div>
</body>
</html>