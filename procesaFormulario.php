
    <?php
    $usu = $_POST["usuario"];
    $cont = $_POST["contrasenya"];

    if (empty($usu) || empty($cont)) {
        echo "Error";
    } else {
        echo "Bien!";
        $usu = strip_tags($usu);
        $usu = stripslashes($usu);
        $usu = htmlspecialchars($usu);
        if (preg_match('/\w{8,}/', $usu)) {
            echo $usu;
        } else {
            echo "ErrrUsuario";
        }

        if (preg_match('/[A-Z][a-z]{15}[0-9]/', $cont)) {
            echo $cont;
        } else {
            echo "ErrorContraseña";
        }
    }
    ?>  
