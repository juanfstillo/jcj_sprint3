<?php
include_once("pdo.php");

//Función para insertar producto
function insertarProducto(){
  $baseDeDatos = initializeDB();
  if (empty($_FILES["imagen"]["name"]))
  {
    $imagenProducto=null;
  }
    else
    {
      $imagenProducto= armarImagen($_FILES);
    }
  $alt= $_POST["alt"];
  $id = null;
  $nombre= $_POST["nombre"];
  $descripcion= $_POST["descripcion"];
  $ingredientes= $_POST["ingredientes"];
  $no_contiene= $_POST["no_contiene"];
  $otras_especif= $_POST["otras_especif"];
  $stock= $_POST["stock"];
  $peso= $_POST["peso"];
  $precio= $_POST["precio"];
  $desc_porc= $_POST["desc_porc"];
  $porcion_gr= $_POST["porcion_gr"];
  $kcal= $_POST["kcal"];
  $prot_gr= $_POST["prot_gr"];
  $hdc_gr= $_POST["hdc_gr"];
  $azuc_gr= $_POST["azuc_gr"];
  $fibr_gr= $_POST["fibr_gr"];
  $gr_tot_gr= $_POST["gr_tot_gr"];
  $gr_sat_gr= $_POST["gr_sat_gr"];
  $gr_mono_gr= $_POST["gr_mono_gr"];
  $gr_poli_gr= $_POST["gr_poli_gr"];
  $hierro_mg= $_POST["hierro_mg"];
  $fosf_mg= $_POST["fosf_mg"];
  $magn_mg= $_POST["magn_mg"];
  $calcio_mg= $_POST["calcio_mg"];
  $sodio_mg= $_POST["sodio_mg"];
  $consulta = $baseDeDatos->prepare("INSERT into productos VALUES (:id, :nombre, :descripcion, :ingredientes, :no_contiene, :otras_especif, :stock, :peso, :precio, :desc_porc, :porcion_gr, :kcal, :prot_gr, :hdc_gr, :azuc_gr, :fibr_gr, :gr_tot_gr, :gr_sat_gr, :gr_mono_gr, :gr_poli_gr, :hierro_mg, :fosf_mg, :magn_mg, :calcio_mg, :sodio_mg, :imagen, :alt)");
  $consulta->bindValue(":id", $id);
  $consulta->bindValue(":nombre", $nombre);
  $consulta->bindValue(":descripcion", $descripcion);
  $consulta->bindValue(":ingredientes", $ingredientes);
  $consulta->bindValue(":no_contiene", $no_contiene);
  $consulta->bindValue(":otras_especif", $otras_especif);
  $consulta->bindValue(":stock", $stock);
  $consulta->bindValue(":peso", $peso);
  $consulta->bindValue(":precio", $precio);
  $consulta->bindValue(":desc_porc", $desc_porc);
  $consulta->bindValue(":porcion_gr", $porcion_gr);
  $consulta->bindValue(":kcal", $kcal);
  $consulta->bindValue(":prot_gr", $prot_gr);
  $consulta->bindValue(":hdc_gr", $hdc_gr);
  $consulta->bindValue(":azuc_gr", $azuc_gr);
  $consulta->bindValue(":fibr_gr", $fibr_gr);
  $consulta->bindValue(":gr_tot_gr", $gr_tot_gr);
  $consulta->bindValue(":gr_sat_gr", $gr_sat_gr);
  $consulta->bindValue(":gr_mono_gr", $gr_mono_gr);
  $consulta->bindValue(":gr_poli_gr", $gr_poli_gr);
  $consulta->bindValue(":hierro_mg", $hierro_mg);
  $consulta->bindValue(":fosf_mg", $fosf_mg);
  $consulta->bindValue(":magn_mg", $magn_mg);
  $consulta->bindValue(":calcio_mg", $calcio_mg);
  $consulta->bindValue(":sodio_mg", $sodio_mg);
  $consulta->bindValue(":imagen", $imagenProducto);
  $consulta->bindValue(":alt", $alt);
  try {
  $consulta-> execute();
  } catch (PDOException $e) {
  $error = "Hubo un error en la base de datos";
  return $error;
  } catch (Exception $e) {
  $error = "Hubo un error, vuelva a intentarlo";
  return $error;
  }
  return $consulta;
  }



//Función para hacer Update de Producto en base a una columna
function updateProducto($tabla, $columna, $valor){
  $baseDeDatos = initializeDB();
  if (empty($_FILES["imagen"]["name"]))
  {
    $imagenProducto= $_POST["imagen2"];
  }
  else
  {
    $imagenProducto= armarImagen($_FILES);
  }
  $alt= $_POST["alt"];
  $nombre= $_POST['nombre'];
  $descripcion= $_POST["descripcion"];
  $ingredientes= $_POST["ingredientes"];
  $no_contiene= $_POST["no_contiene"];
  $otras_especif= $_POST["otras_especif"];
  $stock= $_POST["stock"];
  $peso= $_POST["peso"];
  $precio= $_POST["precio"];
  $desc_porc= $_POST["desc_porc"];
  $porcion_gr= $_POST["porcion_gr"];
  $kcal= $_POST["kcal"];
  $prot_gr= $_POST["prot_gr"];
  $hdc_gr= $_POST["hdc_gr"];
  $azuc_gr= $_POST["azuc_gr"];
  $fibr_gr= $_POST["fibr_gr"];
  $gr_tot_gr= $_POST["gr_tot_gr"];
  $gr_sat_gr= $_POST["gr_sat_gr"];
  $gr_mono_gr= $_POST["gr_mono_gr"];
  $gr_poli_gr= $_POST["gr_poli_gr"];
  $hierro_mg= $_POST["hierro_mg"];
  $fosf_mg= $_POST["fosf_mg"];
  $magn_mg= $_POST["magn_mg"];
  $calcio_mg= $_POST["calcio_mg"];
  $sodio_mg= $_POST["sodio_mg"];
  $consulta = $baseDeDatos->prepare("UPDATE $tabla SET nombre = :nombre, descripcion = :descripcion, ingredientes = :ingredientes, no_contiene = :no_contiene, otras_especif = :otras_especif, stock = :stock, peso = :peso, precio = :precio, desc_porc = :desc_porc, porcion_gr = :porcion_gr, kcal = :kcal, prot_gr = :prot_gr, hdc_gr = :hdc_gr, azuc_gr = :azuc_gr, fibr_gr = :fibr_gr, gr_tot_gr = :gr_tot_gr, gr_sat_gr = :gr_sat_gr, gr_mono_gr = :gr_mono_gr, gr_poli_gr = :gr_poli_gr, hierro_mg = :hierro_mg, fosf_mg = :fosf_mg, magn_mg = :magn_mg, calcio_mg = :calcio_mg, sodio_mg = :sodio_mg, imagen = :imagen, alt = :alt WHERE id = $valor");
  $consulta->bindValue(":nombre", $nombre);
  $consulta->bindValue(":descripcion", $descripcion);
  $consulta->bindValue(":ingredientes", $ingredientes);
  $consulta->bindValue(":no_contiene", $no_contiene);
  $consulta->bindValue(":otras_especif", $otras_especif);
  $consulta->bindValue(":stock", $stock);
  $consulta->bindValue(":peso", $peso);
  $consulta->bindValue(":precio", $precio);
  $consulta->bindValue(":desc_porc", $desc_porc);
  $consulta->bindValue(":porcion_gr", $porcion_gr);
  $consulta->bindValue(":kcal", $kcal);
  $consulta->bindValue(":prot_gr", $prot_gr);
  $consulta->bindValue(":hdc_gr", $hdc_gr);
  $consulta->bindValue(":azuc_gr", $azuc_gr);
  $consulta->bindValue(":fibr_gr", $fibr_gr);
  $consulta->bindValue(":gr_tot_gr", $gr_tot_gr);
  $consulta->bindValue(":gr_sat_gr", $gr_sat_gr);
  $consulta->bindValue(":gr_mono_gr", $gr_mono_gr);
  $consulta->bindValue(":gr_poli_gr", $gr_poli_gr);
  $consulta->bindValue(":hierro_mg", $hierro_mg);
  $consulta->bindValue(":fosf_mg", $fosf_mg);
  $consulta->bindValue(":magn_mg", $magn_mg);
  $consulta->bindValue(":calcio_mg", $calcio_mg);
  $consulta->bindValue(":sodio_mg", $sodio_mg);
  $consulta->bindValue(":imagen", $imagenProducto);
  $consulta->bindValue(":alt", $alt);
  try {
  $consulta-> execute();
  } catch (PDOException $e) {
  $error = "Hubo un error en la base de datos";
  return $error;
  } catch (Exception $e) {
  $error = "Hubo un error, vuelva a intentarlo";
  return $error;
  }
  return $consulta;
  }




 ?>
