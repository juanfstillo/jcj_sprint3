<?php
require_once('autoload.php');

$id = $_GET['id'];
$product = Consulta::mostrar($pdo, "products", $id);
$brand = Consulta::mostrar($pdo, "brands", $product['id_brand']);
$category = Consulta::mostrar($pdo, "categories", $product['id_cat']);

?>

<!DOCTYPE html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Detalle de producto</title>
  </head>

  <body>
    <header>
      <?php include_once('partials/header.php');?>
    </header>

    <?php include("assets/header.php");?>
    <?php include("assets/navbar.php");?>
    <h3 class="card-title">Detalle de Producto</h3>
    <div class="row mt-5">
        <div class="col-lg-4 offset-lg-4">
            <div class="card w-100">
                <img class="card-img-top" src="images/op3.svg" alt="Foto del producto">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $product['name_prod']?></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi minima nemo expedita distinctio ipsa eum magnam fugiat! Aspernatur, illo.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Detalle: <?= $product['detail']?></li>
                    <li class="list-group-item">Precio: <?= $product['price']?></li>
                    <li class="list-group-item">Imagen de producto: <?= $product['img_prod']?></li>
                    <li class="list-group-item">Categoria: <?= $category['name_cat']?></li>
                    <li class="list-group-item">Marca: <?= $brand['name_brand']?></li>
                </ul>
                <div class="card-body d-flex justify-content-center  btn-primary">
                    <a href="editarProducto.php?id=<?= $product['id']?>" class="card-link">Editar</a>
                </div>
            </div>
            <a href="indexProductos.php">Volver</a>
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
