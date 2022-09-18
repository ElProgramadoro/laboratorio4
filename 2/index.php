<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 1</title>
</head>
<body>    
    <fieldset>
        <legend>calcular salario neto</legend>
        <form action="index.php" method="post">
            <p>Cantidad de estudiantes niñas</p>
            <p>Cantidad: <input type="text" name="f"></p>
            <p>Cantidad de estudiantes niños</p>
            <p>Cantidad: <input type="text" name="m"></p>
            <p><input type="submit"></p>
            <?php
            if ($_POST){                
                require_once("poo.php");
                $obj = new trabajo();
                $obj->sf($_POST["f"]);
                $obj->sm($_POST["m"]);
                echo $obj->Show();
            }
            ?>
        </form>
    </fieldset>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>