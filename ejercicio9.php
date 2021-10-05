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

    $fecha_nacimiento = new DateTime("2003-10-06");
    $hoy = new DateTime();
    $edadF = $hoy->diff($fecha_nacimiento);
    $edad= $edadF->y;
    

    if ($edad >= 18 && $edad < 65) {
        echo "Puedes entrar , Eres mayor de edad";
    } else if ($edad < 18) {
        echo "Eres menor no puedes entrar";
    } else if ($edad >= 65) {
        echo "Eres demasiado mayor para entrar";
    }

    echo "<br>";


    ?>
</body>

</html>