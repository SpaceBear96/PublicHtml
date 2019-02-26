<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "agenda";
$conx = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conx, "utf8");