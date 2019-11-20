<?php
include_once("pdo_productos.php");
include_once("pdo_usuarios.php");

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


  //Función para consulta con FetchAll
  function consultaFetchAll($tabla){
    $baseDeDatos = initializeDB();
      try {
        $consulta = $baseDeDatos->prepare("SELECT * FROM $tabla");
        $consulta-> execute();
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
      $error = "Hubo un error en la base de datos";
      return $error;
      } catch (Exception $e) {
      $error= "Hubo un error, vuelva a intentarlo";
      return $error;
      }
    return $resultados;
  }


  //Función para consulta con Fetch
  function consultaFetch($tabla, $columna, $valor){
    $baseDeDatos = initializeDB();
      try {
        $consulta = $baseDeDatos->prepare("SELECT * FROM $tabla WHERE $columna = :x");
        $consulta->bindValue(":x", $valor);
        $consulta-> execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
      $error = "Hubo un error en la base de datos";
      return $error;
      } catch (Exception $e) {
      $error= "Hubo un error, vuelva a intentarlo";
      return $error;
      }
      return $resultado;
  }

  //Función para delete de row en base a una columna
  function Delete($tabla, $columna, $valor){
    $baseDeDatos = initializeDB();
      try {
        $consulta = $baseDeDatos->prepare("DELETE FROM $tabla WHERE $columna = :x");
        $consulta->bindValue(":x", $valor);
        $consulta-> execute();
      } catch (PDOException $e) {
      $error = "Hubo un error en la base de datos";
      return $error;
      } catch (Exception $e) {
      $error= "Hubo un error, vuelva a intentarlo";
      return $error;
      }
    return $consulta;
  }

  //Función para averiguar ultimo Id de tabla
  function ultimoId($tabla, $column, $value){
    $baseDeDatos = initializeDB();
      try {
        $consulta = $baseDeDatos->prepare("SELECT id FROM $tabla WHERE $column = $value ORDER BY id DESC LIMIT 1");
        $consulta-> execute();
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
      $error = "Hubo un error en la base de datos";
      return $error;
      } catch (Exception $e) {
      $error= "Hubo un error, vuelva a intentarlo";
      return $error;
      }
    return $resultados;
  }


  //Función para guardar foto de producto/receta
  function armarImagen($imagen){
        $nombre = $imagen['imagen']['name'];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        $archivoOrigen = $imagen['imagen']['tmp_name'];
        $archivoDestino = "images/";
        $imagenProducto = uniqid();
        $archivoDestino = $archivoDestino.$imagenProducto.".".$ext;
        move_uploaded_file($archivoOrigen,$archivoDestino);
        return $archivoDestino;
  }


 ?>
