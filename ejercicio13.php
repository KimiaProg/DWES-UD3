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
    $anios=6;
    $sueldoAn=40000;

    if($anios>10){
        $aumento= $sueldoAn+ $sueldoAn*0.10;
        echo $aumento;
    }
    elseif($anios<=10 && $anios>5){
        $aumento= $sueldoAn+ $sueldoAn*0.07;
        echo $aumento;
    }
    elseif($anios<=5 && $anios>3){
        $aumento= $sueldoAn+ $sueldoAn*0.05;
        echo $aumento;
    }
    elseif($anios<=3){
        $aumento= $sueldoAn+ $sueldoAn*0.03;
        echo $aumento;
    }   


    ?>
</body>
</html>