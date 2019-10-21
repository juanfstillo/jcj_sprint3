<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <?php include_once('partials/styles.php');?>
    <title>JCJ | Bienvenido</title>
  </head>
  <body>
    <div class="container-fluid">
        <!--Aquí estoy incorporando PHP en mi HTML, el cual es la barra de navegación-->
        <header>
          <?php include_once('partials/header.php');?>
        </header>
                    <div class="hero-image">
              <img src="img/tennis-hero2.jpg" class="d-block w-100" alt="...">
            </div>

      <main>
        <h1 class="allCategories" id="categories">Categorias</h1>

        <section id="use-cases" class="py-4 my-4">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4 text-center my-4">
              <div class="card" style="width: 18rem;">
               <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/f/3/f36a4a97cded2bd1effd82213da405214bc49033_WR013611U_1_Blade_98_16x19_BL_GR_GY.jpg" class="card-img-top" alt="Raquetas">
                <div class="card-body">
                 <h5 class="card-title">RAQUETAS</h5>
                 <p class="card-text">Tenemos lo ultima de las mejores marcas.</p>
                 <a href="../raquetas.php" class="btn btn-primary">Ver Más</a>
                </div>
              </div>
             </div>
             <div class="col-12 col-md-6 col-lg-4 text-center my-4">
              <div class="card" style="width: 18rem;">
               <img src="https://shop.wilson.com/media/catalog/product/cache/38/image/9df78eab33525d08d6e5fb8d27136e95/6/e/6ea7afe8e9099303d308dada67272c29394b7812_wrt1019w_1.jpg" class="card-img-top" alt="Pelotas">
                <div class="card-body">
                 <h5 class="card-title">PELOTAS</h5>
                 <p class="card-text">La mejor variedad de pelotas y precios.</p>
                 <a href="../pelotas.php" class="btn btn-primary">Ver Más</a>
                </div>
               </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center my-4">
              <div class="card" style="width: 18rem;">
               <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/b/3/b3bb57df90e7f44b3276f1f97137b2dabf318e60_WR830000316_Revolve_Twist_16_GY_Reel.jpg"class="card-img-top" alt="Cuerdas">
                <div class="card-body">
                 <h5 class="card-title">CUERDAS</h5>
                 <p class="card-text">Las mejores cuerdas del mercado a los mejores precios.</p>
                 <a href="../cuerdas.php" class="btn btn-primary">Ver Más</a>
               </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center my-4">
              <div class="card" style="width: 18rem;">
               <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/2/2/2296747f8ed8eff4d13433f5713d6468c39758a7_WR8001501001_Super_Tour_2_Comp_L_Bold_BK_WH_Front.jpg" class="card-img-top" alt="Bolsos">
                <div class="card-body">
                 <h5 class="card-title">BOLSOS</h5>
                 <p class="card-text">Todos los tamaños (X3,X6,X12)</p>
                 <a href="../bolsos.php" class="btn btn-primary">Ver Más</a>
               </div>
             </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center my-4">
              <div class="card" style="width: 18rem;">
               <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/e/b/eb1c3014c561f2b6d6203400d2de5b25789e0b3e_wrz403000_1.jpg" class="card-img-top" alt="Accesorios">
                <div class="card-body">
                 <h5 class="card-title">ACCESORIOS</h5>
                 <p class="card-text">Todo lo que necesitas para jugar.</p>
                 <a href="../accesorios.php" class="btn btn-primary">Ver Más</a>
               </div>
             </div>
           </div>
           <div class="col-12 col-md-6 col-lg-4 text-center my-4">
             <div class="card" style="width: 18rem;">
               <img src="https://cdn.shopify.com/s/files/1/0045/5236/0049/products/Wilson_Five_Two_BLX_Tennis_Racket_-_Sake_490x.jpg?v=1559728808" class="card-img-top" alt="Promos">
               <div class="card-body">
                 <h5 class="card-title">PROMOS</h5>
                 <p class="card-text">Aprovecha nuestras ofertas.</p>
                 <a href="../promociones.php" class="btn btn-primary">Ver Más</a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
        </section>
      </main>
        <!--Aquí estoy incorporando PHP en mi HTML, el cual es el footer-->
      </div>
        <footer>
          <?php include_once('partials/footer.php');?>
        </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
