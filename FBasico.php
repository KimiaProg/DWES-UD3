<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario Actividad Aula</h1>
    
    <?php
    $Error="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usu = $_POST["usuario"];
        $cont = $_POST["contrasenya"];

        if (empty($usu) || empty($cont)) {
            echo "Error";
        } else {
            $usu = strip_tags($usu);
            $usu = stripslashes($usu);
            $usu = htmlspecialchars($usu);
            if (preg_match('/[a-zA-Z]{6}[0-9]{1}[A-Z]{1,}/', $usu)) {
                echo $usu;
            } else {
                $Error=  "Error Usuario";
            }

            if (preg_match('/[A-Z][a-z]{15}[0-9]/', $cont)) {
                echo $cont;
            } else {
                echo "Error Contraseña";
            }
        }
    }
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" />
            <span style="color:red"><?php echo $Error;?></span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" />
            <span style="color:red">*</span>
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar" />
            <input type="reset" name="cancelar" value="Cancelar" />
        </p>
    </form>
   
    
</body>

</html>