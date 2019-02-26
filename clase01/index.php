<?php
include "db.php";
$query = "SELECT * FROM persona";
$rs = mysqli_query($conx,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejemplo con Ajax</title>
    <link rel="stylesheet" href="bootstrap.css.map">
</head>
<body>
    <div id="frmDatos">
        Nombres: <input id="txtNombre"/></br>
        Telefono: <input id="txtTelefono"/></br>
        Direccion: <input id="direccion"/></br>
        <input type="button" id="btnGuardar" value="Guardar">
    </div>
    <table border=1>
        <tr>
            <th> Nombres </th>
            <th> Telefono </th>
            <th> Direccion </th>
            <th> Accion </th>
        </tr>
        <?php while($fila=mysqli_fetch_assoc($rs)){?>
        <tr>
            <td><?php echo $fila["nombres"] ?></td>
            <td><?php echo $fila["telefono"] ?></td>
            <td><?php echo $fila["direccion"] ?></td>
            <td><input type="button" value="Editar"></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
