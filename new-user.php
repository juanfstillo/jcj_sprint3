<html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Crear cuenta</title>
  </head>

  <body>
    <div class="container-fluid">
      <?php include_once('partials/header.php');?>
      <div id="spacer">


   <h1 id="main-title">La cuenta ha sido creada con éxito</h1>
   <h2 id="description-title">Hemos enviado un mail de confirmación a <?php
   echo $_GET["email"];
  ?> </h2>

  </body>
</html>
