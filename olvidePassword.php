<?php
require_once("controladores/funciones.php");
require_once('helpers.php');
if($_POST){
  $errores= validarOlvidePassword($_POST);
  if(count($errores)==0){
    $usuario = buscarPorEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Datos no validos";
    }else{
        $registro = armarRegistroOlvide($_POST);
          header("location: cambioContraseña.php");
          exit;
    }
  }
}
?>
<html>
  <head>
    <title>Recuperando contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/master.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container-fluid containerOlvide">
      <?php include_once('partials/header.php');?>
      <section class="formularioOlvide">
        <div id="formContainer" class="row align-items-center">
          <div class="col-8 offset-2  ">
            <h1>Recuperar contraseña</h1>
      
            <form id="formularioOlvide"  class="formOlvide" name="formOlvide"     novalidate action=""  method="POST">

            <div class="form-group">
                <label for="email">Email</label>
                <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo" value= "<?=isset($errores['email'])? "":old('email') ;?>"
              </div>
              <div>
                <!--Aquí les comparto este otro código donde pueden mostrar el error en el mismo lugar donde se produjo, usted decide como desea mostrar los errores-->
                <?php if(isset($errores['email'])):?>
                  <h6 class="text-danger"><?= $errores['email'];?></h6>
                <?php endif;?>
              </div>


              <div class="form-group">
                <label for="password">Ingrese tu nueva contraseña</label>
                <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">

              </div>
              <div>
                <!--Aquí les comparto este otro código donde pueden mostrar el error en el mismo lugar donde se produjo, usted decide como desea mostrar los errores-->
                <?php if(isset($errores['password'])):?>
                  <h6 class="text-danger"><?= $errores['password'];?></h6>
                <?php endif;?>
              </div>


              <div class="form-group">
                <label for="password">Confirmar contraseña</label>
                <input required name="passwordRepeat" type="password" value= ""class="form-control" id="passwordRepeat" placeholder="Contraseña">
              </div>
              <div>
                <!--Aquí les comparto este otro código donde pueden mostrar el error en el mismo lugar donde se produjo, usted decide como desea mostrar los errores-->
                <?php if(isset($errores['passwordRepeat'])):?>
                  <h6 class="text-danger"><?= $errores['passwordRepeat'];?></h6>
                <?php endif;?>
              </div>


              <button type="submit" class="btn btn-primary">Cambiar contraseña</button>

            </form>
        </div>
      </section>
      <?php include_once('partials/footer.php');?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>
