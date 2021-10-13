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
    $ErrorUsu = "";
    $ErrorCont = "";
    $usu="";
    $cont="";
    $check=null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $usu = $_POST["usuario"];
        $cont = $_POST["contrasenya"];

        if (empty($usu) || empty($cont)) {
            echo "Error";
        } else {
            $usu = strip_tags($usu);
            $usu = stripslashes($usu);
            $usu = htmlspecialchars($usu);
            if (preg_match('/\w{8,}/', $usu)) {
                echo $usu;
            } else {
                $ErrorUsu =  "Error Usuario";
            }

            if (preg_match('/[A-Z][a-z]{15}[0-9]/', $cont)) {
                echo $cont;
            } else {
                $ErrorCont = "Error Contraseña";
            }
        }
    }
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" value="<?php echo $usu ?>" />
            <span style="color:red"><?php echo $ErrorUsu; ?></span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" value="<?php echo $cont ?>" />
            <span style="color:red"><?php echo $ErrorCont; ?></span>
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar" />
            <input type="reset" name="cancelar" value="Cancelar" />
        </p>
    </form>


</body>

</html>