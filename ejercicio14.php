<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $meses = [];
    $meses[] = "Enero";
    $meses[] = "Febrero";
    $meses[] = "Marzo";
    var_dump($meses);
    echo "<br>";
    count($meses);
    echo "<br>";

    $meses[] = 7;
    $meses[] = "Abril";
    $meses[] = true;
    $meses[] = "Junio";
    var_dump($meses);
    echo "<br>";

    echo count($meses);
    echo "<br>";

    unset($meses[3]);
    var_dump($meses);

    echo "<br>";

    $meses[5] = "May";
    $meses[] = "Julio";
    $meses[] = "Agosto";
    $meses[] = "Septiembre";
    $meses[] = "Octubre";
    $meses[] = "Novimebre";
    $meses[] = "Diciembre";
    var_dump($meses);
    echo "<br>";




    ?>
</body>

</html>