<?php
include "db.php"
$query = "SELECT id,nombres FROM persona";
$rs = mysqli_query($conx,$query);
?>
