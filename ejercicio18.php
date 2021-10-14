<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once 'ejercicio18php.php';?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="poblacion">Poblacion</label>
            <input type="text" name="Poblacion"  />
            <span style="color:red"><?php echo $errorPob?></span>
        </p>
        <p>
            <label for="Apellidos">CodigoPostal</label>
            <input type="number" name="CodigoPostal" />
            <span style="color:red"><?php echo $errorPos?></span>
        </p>
            <input type="radio" name="provincia" value="sevilla"   />
            <label for="sevilla">sevilla</label>
            <span style="color:red"></span>

            <input type="radio" name="provincia" value="cordoba"  />
            <label for="cordoba">cordoba</label>
            <span style="color:red"></span>

            <input type="radio" name="provincia" value="granada"  />
            <label for="granada">granada</label>
            <span style="color:red"></span>

            <input type="radio" name="provincia" value="almeria"  />
            <label for="almeria">almeria</label>
            <span style="color:red"></span>

            <input type="radio" name="provincia" value="huelva"  />
            <label for="huelva">huelva</label>
            <span style="color:red"></span>

            <input type="radio" name="provincia" value="jaen"   />
            <label for="jaen">jaen</label>
            <span style="color:red"></span>

            <input type="radio" name="provincia" value="malaga"  />
            <label for="malaga">malaga</label>
            <span style="color:red"></span>

            <input type="radio" name="provincia" value="cadiz"  />
            <label for="cadiz">cadiz</label>
            <span style="color:red"><?php echo $errorProv;?></span>

        <p>
            <textarea name="info" rows="10" cols="40"></textarea>
        </p>

            <input type="file" name="fileToUpload" id="fileToUpload">
        <p>
            <input type="submit" name="enviar" value="Aceptar" />
            <input type="reset" name="cancelar" value="Cancelar" />
        </p>
            

            
    </form>
</body>
</html>