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
    $nacimiento="2003-10-05";
    $fecha= new DateTime($nacimiento);
    $anio= $fecha->format('Y');

    $actual=getdate();
    $edad= $actual["year"]-$anio;
   

    if($edad>= 18 && $edad<65){
        echo "Puedes entrar , Eres mayor de edad";
    }else if($edad<18){
        echo "Eres menor no puedes entrar";
    }else if($edad>=65){
        echo "Eres demasiado mayor para entrar";
    }

    echo "<br>";


    $fecha= date($nacimiento);
    $actual= date('Y-m-d');
    $edad= $actual- $fecha;
    echo $edad;

    if($edad>= 18 && $edad<65){
        echo "Puedes entrar , Eres mayor de edad";
    }else if($edad<18){
        echo "Eres menor no puedes entrar";
    }else{
        echo "Eres demasiado mayor para entrar";
    }


?>
</body>
</html>