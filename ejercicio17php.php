
    <?php
    $nom = "";
    $ap = "";
    $dir = "";
    $est = "";
    $info = "Escribe aquí tu texto...";
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
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);
            return $valor;
        }
        
        $info = seguro($info);
        if (empty($nom)) {
            $errorNom = "Error";
        } else {
            $nom = seguro($nom);
        }
        if (empty($ap)) {
            $errorAp = "Error";
        } else {
            $ap = seguro($ap);
        }
        if (empty($dir)) {
            $errorDir = "Error";
        } else {
            $dir = seguro($dir);
        }
        if (empty($est)) {
            $errorEst = "Error";
        } else {
            $est = seguro($est);
        }
        if (!preg_match('/^IES/i', seguro($ins)) || empty($ins)) {
            $errorIns = "Error";
        } else {
            $ins = seguro($ins);
        }
    }
    ?>  