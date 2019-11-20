<?php
require 'autoload.php';
$products = Consulta::listar("products", $pdo);


?>
<!DOCTYPE html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Listado de Productos</title>
  </head>

  <body>
    <header>
      <?php include_once('partials/header.php');?>
    </header>

    <?php require 'assets/header.php' ?>
    <?php require 'assets/navbar.php' ?>

    <div class="spacer"></div>
    <h2 class="card-title">Listado de Productos</h2>
    <div class="spacer"></div>
    <table class="table">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Ver
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Eliminar
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) :?>
            <tr>
                <td>
                    <?= $product['id'];?>
                </td>
                <td>
                    <?= $product['name_prod'];?>
                </td>
                <td>
                    <a href="perfilProducto.php?id= <?= $product['id'];?>">Ver</a>
                </td>
                <td>
                    <a href="editarProducto.php?id= <?= $product['id'];?>">Editar</a>
                </td>
                <td>
                    <a href="eliminarProducto.php">Eliminar</a>
                </td>

            </tr>
            <?php endforeach;?>


        </tbody>

    </table>

    <footer>
      <?php include_once('partials/footer.php');?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
