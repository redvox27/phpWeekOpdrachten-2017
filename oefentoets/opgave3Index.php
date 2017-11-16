<html>
<head>
    <title>Plukkers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <form action="opgave3.php" method="post">
            <div class="form-group">
                <label for="plukkers">Aantal Plukkers</label>
                <input type="number" class="form-control" name="plukkers">
            </div>
            <div class="form-group">
                <label for="planten">Aantal planten</label>
                <input type="number" class="form-control" name="planten">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="bereken">
            </div>

        </form>

    </div>

</div>
</body>
</html>