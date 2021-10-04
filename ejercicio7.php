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
    echo "<b>sin índice: </b><br>";
    foreach ($_SERVER as $valor) {
        echo $valor . " <br>";
    }
    echo "<b>Con índice:</b> <br>";
    foreach ($_SERVER as $nom => $valor) {
        echo "$" . $nom . "= . $valor . <br>";
    }


    ?>
</body>

</html>