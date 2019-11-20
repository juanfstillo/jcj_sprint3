<?php
    require 'autoload.php';

    $categories = Consulta::listar('categories', $pdo);

    if($_POST) {
        $product = new Producto($_POST['name_prod'], $_POST['detail'], $_POST['price'], $_POST['img_prod'], $_POST['id_cat'], $_POST['id_brand']);
        Consulta::insertarProducto($product, $pdo);
    }
?>

<!DOCTYPE html>
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Agregar producto</title>
  </head>

  <body>
    <header>
      <?php include_once('partials/header.php');?>
    </header>

  <?php include("assets/header.php");?>
  <?php include("assets/navbar.php");?>
    <h3 class="card-title">Nuevo Producto</h3>
     <div class="row mt-5">
        <div class="col-lg-4 offset-lg-4">
          <form action="" method="post" enctype="multipart/formdata">

            <div class="form-group">
              <label for="id_cat">Tipo de producto</label>
              <select class="form-control" name="id_cat" id="id_cat">
                  <option value="" selected>Seleccionar</option>
                  <?php foreach($categories as $categorie): ?>
                  <option value="<?= $categorie['id']?>"><?= $categorie['name_cat']?></option>
                  <?php endforeach;?>
              </select>
            </div>

            <div class="form-group">
              <label for="id_brand">Marca</label>
              <select class="form-control" name="id_brand" id="id_brand">
                  <option value="" selected>Seleccionar</option>
                  <?php foreach($brands as $brand): ?>
                  <option value="<?= $brand['id']?>"><?= $brand['name_brand']?></option>
                  <?php endforeach;?>
              </select>
            </div>

            <div class="form-group">
              <label for="name_prod">Nombre de producto</label>
              <input type="text" class="form-control" name="name_prod">
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

            <button type="submit" class="btn btn-primary">Agregar producto</button>
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
