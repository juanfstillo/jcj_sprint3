<?php
    require 'autoload.php';
    $id = $_GET['id'];
    $product = Consulta::mostrar($pdo, "products", $id);
    $categories = Consulta::listar('categories', $pdo);

    $categorie_temporal = $categories[$product['id_cat']] == 0 ? $categories[$product['id_cat']] : $categories[$product['id_cat'] - 1];


    if($_POST) {
        Consulta::updateProducto($_POST, $pdo);
        header('Location: perfilProducto.php?id=' . $id);
    }


?>

<!DOCTYPE html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Editar producto</title>
  </head>

  <body>
    <header>
      <?php include_once('partials/header.php');?>
    </header>

    <?php include("assets/header.php");?>
    <?php include("assets/navbar.php");?>
    <h3 class="card-title">Modificar Producto</h3>
        <div class="row mt-5">
            <div class="col-lg-4 offset-lg-4">

                <form action="" method="post" enctype="multipart/formdata">
                <input type="hidden" name="id" value="<?=$id ?>">
                <div class="form-group">
                    <label for="name_prod">Nombre de producto</label>
                    <input type="text" class="form-control" name="name_prod" value=<?php  ?> >
                </div>
                <div class="form-group">
                    <label for="detail">Detalle</label>
                    <input type="text" class="form-control" name="detail">
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="img_prod">Imagen de producto</label>
                    <input type="file" class="form-control" name="img_prod">
                </div>
                    <button type="submit" class="btn btn-danger">Modificar Producto</button>
                </form>
                <a href="indexProducto.php">Volver</a>
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
