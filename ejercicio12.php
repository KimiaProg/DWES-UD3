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
    $fecha= new DateTime("1998-01-05");
    $sum=0;
    $anio= $fecha->format("Y");
    $mes= $fecha->format("m");
    $dia= $fecha->format("d");
    $sumFecha= (int)$anio+(int)$mes+(int)$dia;
    
    do {
        if ($sumFecha == 0) {
            $sumFecha = $sum;
            $sum = 0;
        }
        $sum += $sumFecha % 10;
        $sumFecha = intval($sumFecha / 10);
    } while ($sumFecha >= 1 || $sum > 9);

    echo $sum;
    
    ?>
</body>
</html>