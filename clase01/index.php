<?php
include "db.php";
$query = "SELECT * FROM persona";
$rs = mysqli_query($conx,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejemplo con Ajax</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/util.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
    <input type="button" id="btnNuevo" value="Nuevo">
    <div id="frmDatos" style="display:none">
        Nombres: <input id="txtNombre"/></br>
        Telefono: <input id="txtTelefono"/></br>
        Direccion: <input id="txtDireccion"/></br>
        <input type="button" id="btnGuardar" value="Guardar">
    </div>
    <table border=1 class="table">
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
    </div>
</body>
</html>
