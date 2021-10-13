<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once 'ejercicio17php.php';
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre"  value="<?php echo $nom?>"/>
            <span style="color:red"><?php echo $errorNom?></span>
        </p>
        <p>
            <label for="Apellidos">Apellidos</label>
            <input type="text" name="Apellidos" value="<?php echo $ap?>"/>
            <span style="color:red"><?php echo $errorAp?></span>
        </p>
        <p>
            <label for="Direccion">Direccion</label>
            <input type="text" name="Direccion" value="<?php echo $dir?>"/>
            <span style="color:red"><?php echo $errorDir?></span>
        </p>
        <p>
            <input type="radio" name="rad"  />
            <label for="Wifi">Wifi</label>
            <span style="color:red"></span>

            <input type="radio" name="rad" checked/>
            <label for="Cable">Cable</label>
            <span style="color:red"></span>

            <input type="radio" name="rad" />
            <label for="Fibra">Fibra</label>
            <span style="color:red"></span>

        </p>
        <p>
            <label for="Instituto">Instituto</label>
            <input type="text" name="Instituto" value="<?php echo $ins?>"/>
            <span style="color:red"><?php echo $errorIns?></span>
        </p>
        <p>
            <label for="Estudios">Estudios elegidos</label>
            <input type="text" name="Estudios" value="<?php echo $est?>"/>
            <span style="color:red"><?php echo $errorEst?></span>
        </p>
        <p>
            <select name="dia" multiple size="7">
                <option value="lunes">lunes</option>
                <option value="martes">martes</option>
                <option value="miercoles">miercoles</option>
                <option value="jueves">jueves</option>
                <option value="viernes">viernes</option>
                <option value="sabado">sabado</option>
                <option value="domingo">domingo</option>
            </select>
        </p>
        <p>

            <input type="checkbox" name="check[]" value="historia" <?php if (in_array("historia", $check)){ echo "checked";}else{ echo "";} ?>/>
            <label for="historia">historia</label>
            <input type="checkbox" name="check[]" value="geografia" <?php if (in_array("geografia", $check)){ echo "checked";}else{ echo "";} ?>/>
            <label for="geografia">geografia</label>
            <input type="checkbox" name="check[]" value="lengua" <?php if (in_array("lengua", $check)){ echo "checked";}else{ echo "";} ?>/>
            <label for="lengua">lengua</label>
            <input type="checkbox" name="check[]" value="matematicas" <?php if (in_array("matematicas", $check)){ echo "checked";}else{ echo "";} ?>/>
            <label for="matematicas">matematicas</label>
        </p>
        <p>
            <textarea name="info" rows="10" cols="40"><?php echo $info?></textarea>
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar" />
            <input type="reset" name="cancelar" value="Cancelar" />
        </p>
    </form>
</body>

</html>