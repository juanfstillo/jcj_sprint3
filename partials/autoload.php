<?php

require_once("clases/BaseMYSQL.php");

//Declaro mis variables
$host = "localhost";
$bd = "jcctenis";
$usuario = "root";
$password = "root";
$puerto = "3306";
$charset = "utf8mb4";
//Ojo: Para los que trabajan con MAC: deben colocar el puerto: 8889 no es cierto

$pdo = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);

?>
