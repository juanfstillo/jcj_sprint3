<?php

require_once("clases/BaseMYSQL.php");

// //Declaro mis variables
// $host = "localhost";
// $bd = "jcctenis";
// $usuario = "root";
// $password = "root";
// $puerto = "3306";
// $charset = "utf8mb4";
// //Ojo: Para los que trabajan con MAC: deben colocar el puerto: 8889 no es cierto

// $pdo = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);


//Función para inicializarDB
  function initializeDB(){
  $dsn = "mysql:dbname=jcctenis;host=127.0.0.1;port=3306;charset=utf8";
  $usuario =  "root";
  $pass = "root";
  $error = null;
  try {
    $baseDeDatos = new PDO ($dsn, $usuario, $pass);
    $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    $error = "Hubo un error en la base de datos";
    return $error;
    } catch (Exception $e) {
    $error= "Hubo un error, vuelva a intentarlo";
    return $error;
    }
    return $baseDeDatos;
  }


?>
