<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once 'ejercicio17php.php';?>
    
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
            <input type="radio" name="rad" value="wifi" <?php if ( $_POST["rad"]== "wifi"){ echo "checked";} ?> />
            <label for="Wifi">Wifi</label>
            <span style="color:red"></span>

            <input type="radio" name="rad" value="cable" <?php if ( $_POST["rad"]== "cable"){ echo "checked";} ?>/>
            <label for="Cable">Cable</label>
            <span style="color:red"></span>

            <input type="radio" name="rad" value="fibra" <?php if ( $_POST["rad"]== "fibra"){ echo "checked";} ?>/>
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
           
            <select name="select" multiple size="7">
                <option value="lunes"  <?php if ("lunes"== $_POST["select"]){ echo "selected";}?>>lunes</option>
                <option value="martes" <?php if ("martes"== $_POST["select"]){ echo "selected";}?>>martes</option>
                <option value="miercoles" <?php if ("miercoles"==$_POST["select"]){ echo "selected";}?>>miercoles</option>
                <option value="jueves" <?php if ("jueves"== $_POST["select"]){ echo "selected";}?>>jueves</option>
                <option value="viernes" <?php if ("viernes"==$_POST["select"]){ echo "selected";}?>>viernes</option>
                <option value="sabado" <?php if ("sabado"==$_POST["select"]){ echo "selected";}?>>sabado</option>
                <option value="domingo" <?php if ("domingo"== $_POST["select"]){ echo "selected";}?>>domingo</option>
            </select>
        </p>
        <p>
            <input type="checkbox" name="check[]" value="historia" <?php if (in_array("historia", $_POST["check"])){ echo "checked";} ?>/>
            <label for="historia">historia</label>
            <input type="checkbox" name="check[]" value="geografia" <?php if (in_array("geografia", $_POST["check"])){ echo "checked";} ?>/>
            <label for="geografia">geografia</label>
            <input type="checkbox" name="check[]" value="lengua" <?php if (in_array("lengua", $_POST["check"])){ echo "checked";} ?>/>
            <label for="lengua">lengua</label>
            <input type="checkbox" name="check[]" value="matematicas" <?php if (in_array("matematicas", $_POST["check"])){ echo "checked";} ?>/>
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