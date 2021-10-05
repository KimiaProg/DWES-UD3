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

    $nacimiento = strtotime("1500-11-05");
    $edad = date("Y") - date("Y", $nacimiento);
    $difMes = date('m') - date('m', $nacimiento);
    $difDia = date('d') - date('d', $nacimiento);
    if($difMes==0){
        if($difDia<0){
            $edad--;
        }
    }else if ($difMes < 0) {
        $edad--;
    }
    

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