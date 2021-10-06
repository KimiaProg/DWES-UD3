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
    $matriz=[];
    $matriz[]=array("Nombre"=>"champu","precio"=>12,2,"stock"=>2,"identificador"=>"1254");
    $matriz[]=array("Nombre"=>"zumo","precio"=>13,2,"stock"=>10,"identificador"=>"1854");
    $matriz[]=array("Nombre"=>"jabon","precio"=>14,2,"stock"=>5,"identificador"=>"1264");

    var_dump($matriz);
    echo "<br>";
    foreach ($matriz as $key => $value) {
       print_r($matriz[$key]);
       echo "<br>";
    }

    ?>
</body>
</html>