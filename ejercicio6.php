<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="background-color: pink;">
        <tr><td>Elevado a</td> <td>Resultado</td></tr>
        <?php 
        $ele;
        $limite=10;
        for ($i=0; $i <= $limite; $i++) { 
            $ele= pow(2, $i);
            echo "<tr>"."<td>" . $i . "</td>" . "<td>" . $ele . "</td>" . "</tr>";
        }

        ?>
   
    </table>
   
</body>
</html>