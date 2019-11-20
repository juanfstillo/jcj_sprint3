<?php
require_once("autoload.php");
if($_POST){
    Consulta::eliminarProducto($pdo,'products',$_POST["name_prod"]);
    header("location: index.php");
}

?>

<!DOCTYPE html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Eliminar producto</title>
  </head>

  <body>
    <header>
      <?php include_once('partials/header.php');?>
    </header>

    <?php include("assets/header.php");?>
    <?php include("assets/navbar.php");?>

    <h3 class="card-title" id="main-title_form">Eliminar Producto</h3>
    <div class="row mt-5">
        <div class="col-lg-4 offset-lg-4">
            <form action="indexProducto.php" method="POST">
                <div class="form-group">
                    <label for="name_prod">Nombre de producto</label>
                    <input type="text" class="form-control" id="name_prod" name="name_prod" value="">
                </div>

                <button type="submit" class="btn btn-primary">Eliminar Producto</button>
            </form>
        </div>
    </div>

    <footer>
      <?php include_once('partials/footer.php');?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
