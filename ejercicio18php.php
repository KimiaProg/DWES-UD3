<?php
$pob = "";
$pos = 0;
$info = "";
$errorPob = "";
$errorPos = "";
$errorProv = "";
$cumplido = true;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pob = $_POST["Poblacion"];
    $pos = $_POST["CodigoPostal"];
    $info = $_POST["info"];

    function seguro($valor)
    {
        $valor = strip_tags($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
    }

    if (empty($pob) || !preg_match('/[a-zA-Z]{1,}/', $pob)) {
        $errorPob = "Error";
        $cumplido = false;
    } else {
        $pob = seguro($pob);
    }
    if (empty($pos)) {
        $errorPos = "Error";
        $cumplido = false;
    } else {
        $pos = seguro($pos);
    }
    if (empty($_POST["provincia"])) {
        $errorProv = "Error";
        $cumplido = false;
    }
    $info = seguro($info);

    if ($cumplido == true) {
        header("Location: ejercicio16SegundaPant.html");
    }
}
