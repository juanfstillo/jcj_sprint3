<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
  //Esto lo incorporé, ya que por medio de esto logro hacer que si un usuario no está logueado en mi sistema y quiere entrar colocando la URL en el browser yo no se lo permito, hago que necesariamente se debe loguear
  if(!isset($_SESSION["email"])) {
    header("location:login.php");
    exit;
}
?>
<html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Mi perfil</title>
  </head>
      <?php include_once('partials/header.php');?>
    <body>
      <div class="container">
      <div class="row">
        <div class="col-md-6 img">
          <img class="img-rounded" src="imagenes/<?=$_SESSION['avatar'];?>" alt="Avatar">
        </div>
        <div class="col-md-6 details">
          <div id="spacer">
          </div>
          <h4 class="__artpie">Hola <?=$_SESSION['nombre'] ;?></h4>
          <p class="__artpie"><?=$_SESSION['email'] ;?> </p>
          <p class="__artpie">En este sitio encontrarás todo para jugar al tenis</p>

        </div>
      </div>
    </div>
    <div id="spacer">
    </div>
      <footer>
        <?php include_once('partials/footer.php');?>
      </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
    </script>
  </body>
</html>
