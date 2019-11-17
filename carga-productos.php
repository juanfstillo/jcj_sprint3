<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
  
  if($_POST){
    
  }

?>

<html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Cargar nuevo producto</title>
  </head>

  <body>
    <div class="container">
      <?php include_once('partials/header.php');?>

      <section class="formularioCarga">
        <div id="formContainer" class="row align-items-center justify-content-center">
          <div class="col-8 offset-2 ml-0 p-0">
            <h1 class="main-title" id="main-title">Nuevo producto</h1>
            <form id="formularioCarga"  class="form" name="formularioCarga" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="productType">Tipo de producto</label>
                </br>
                <select form="listaProd" id="listaProd" autofocus> 
                    <option value="Raquetas">Raquetas</option> 
                    <option value="Pelotas">Pelotas</option> 
                    <option value="Cuerdas">Cuerdas</option> 
                    <option value="Bolsos">Bolsos</option> 
                    <option value="Accesorios">Accesorios</option> 
                </select> 
              </div>
            
                <div class="form-group">
                  <label for="marcas">Marca</label>
                  </br>
                  <select form="listaMarcas" id="listaMarcas" autofocus> 
                    <option value="Raquetas">Babolat</option> 
                    <option value="Pelotas">Tecnifibre</option> 
                    <option value="Cuerdas">Head</option> 
                    <option value="Bolsos">Wilson</option> 
                    <option value="Accesorios">Yonex</option> 
                    <option value="Accesorios">Otros</option> 
                </select> 
                </div>
              

              <div>
                <!--Aquí les comparto este otro código donde pueden mostrar el error en el mismo lugar donde se produjo, usted decide como desea mostrar los errores-->
                <?php if(isset($errores['password'])):?>
                  <h6 class="text-danger"><?= $errores['password'];?></h6>
                <?php endif;?>
                <a href="olvidePassword.php" class="btn btn-link">¿Olvidaste tu contraseña?</a>
              </div>

              <div class="form-group">
                <input  class="text-left" name="recordarme" type="checkbox" value= "recordarme" class="form-control " id="recordarme" >
                <label for="recordarme">Recordarme</label>
              </div>

              <button type="submit" class="btn btn-primary">Ingresar</button>
              <a href="register.php" class="btn btn-link">Aun no poseo una cuenta</a>
            </form>
        </div>
      </section>
      
    </div>

    <?php include_once('partials/footer.php');?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </div>
  </body>
</html>
