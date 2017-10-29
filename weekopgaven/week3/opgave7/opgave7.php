<html>
<head>
    <title>Calculate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>
<body>
        <form action="opgave7Handler.php" method="post">
            <div class="form-group">
                <label for="getal1">Getal1</label>
                <input type="number" class="form-control" name="getal1">
            </div>
            <div class="form-group">
                <label for="getal2">Getal2</label>
                <input type="number" class="form-control" name="getal2">
            </div>
            <div >
                <input type="checkbox"  name="optellen" value="optellen(+)">optellen(+)
                <input type="checkbox"  name="aftrekken" value="aftrekken(-)">aftrekken(-)
                <input type="checkbox"  name="vermedigvuldigen" value="vermedigvuldigen(*)">vermedigvuldigen(*)
                <input type="checkbox"  name="delen" value="delen(-)">delen(-)
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="calculate" value="calculate">
                <input class="btn btn-primary" type="submit" name="clear" value="clear">
            </div>

        </form>

</body>
</html>