<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table border="1">

        <?php
        $cont = 0;
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<tr style='background-color:white'>";
            } else {
                echo "<tr style='background-color:green'>";
            }
            for ($j = 1; $j <= 10; $j++) {
                $cont++;

                echo "<td>" . $cont . " </td>";
            }
            echo "</tr>";
        }
        ?>


    </table>
</body>

</html>