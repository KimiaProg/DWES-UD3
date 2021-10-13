
    <?php
    $nom = "";
    $ap = "";
    $dir = "";
    $est = "";
    $info = "";
    $ins = "";
    $errorNom = "";
    $errorAp = "";
    $errorDir = "";
    $errorEst = "";
    $errorInfo = "";
    $errorIns = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["Nombre"];
        $ap = $_POST["Apellidos"];
        $dir = $_POST["Direccion"];
        $est = $_POST["Estudios"];
        $info = $_POST["info"];
        $ins = $_POST["Instituto"];

        function seguro($valor)
        {
            $ret = false;
            if (!empty($valor)) {
                $valor = strip_tags($valor);
                $valor = stripslashes($valor);
                $valor = htmlspecialchars($valor);
                $ret = true;
            }
            return $ret;
        }

        if (seguro($nom) == false) {
            $errorNom = "Error";
        }
        if (seguro($ap) == false) {
            $errorAp = "Error";
        }
        if (seguro($dir) == false) {
            $errorDir = "Error";
        }
        if (seguro($est) == false) {
            $errorEst = "Error";
        }
        if (seguro($info) == false) {
            $errorInfo = "Error";
        }
        if (!preg_match('/^INS/', $ins)) {
            $errorIns = "Error";
        }

        var_dump($_POST["check"]);

        
    }
    ?>  