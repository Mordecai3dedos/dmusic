<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>
    <body>
        <form action="registro.php" method="POST">
            <?php echo $_SESSION['usuario_email']; ?>
            <label for="FNombre"> Nombre:</label><input id="FNombre" type="text" name="FNombre" placeholder="Nombre"> <br />
            <label for="FApellido">  Primer apellido</label><input id="FApellido" type="text" name="FApellido" placeholder="Primer apellido"> <br />
            <label for="FApellido2"> Segundo apellido</label><input id="FApellido2" type="text" name="FApellido2" placeholder="Segundo apellido"> <br />
            <label for="FTipo">Tipo de usuario:</label>
            <select name="FTipo">
                <option value="musico">Musico</option>
                <option value="local">Local</option>
                <option value="fan">Fan</option>
            </select>
            <br />
            <label for="FTelefono">*Telefono:</label><input id="FTelefono" type="text" name="FTelefono" placeholder="653******"><br />
            <label for="FDireccion">Dirección:</label><input id="FDireccion" type="text" name="FDireccion" placeholder="Dirección"><br />
            <input type="submit">
            <input type="reset" value="Reset">


        </form>
    </body>
</html>
