@extends('layout')

@section('title')
	Estas viendo {{ $productos->count() }} productos
@endsection

@section('main')



{{--<ul>  
  @foreach($productos as $producto)
    <li> 
      {{ $producto->name_prod }} 
    </li>
  @endforeach
</ul>
--}}
	{{-- <div class="hero-image">
      <img src="images/tennis-hero2.jpg" class="d-block w-100" alt="...">
  </div> --}}

  {{-- <div class="container-fluid">
    <main>
      <h1 class="allCategories">Categorias</h1>

      <section id="use-cases">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 text-center my-4">
            <div class="card" style="width: 18rem;">
             <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/f/3/f36a4a97cded2bd1effd82213da405214bc49033_WR013611U_1_Blade_98_16x19_BL_GR_GY.jpg" class="card-img-top" alt="Raquetas">
              <div class="card-body">
              </div>
               <h5 class="card-title">RAQUETAS</h5>
               <a href="raquetas.php" id="main-button">Ver Más</a>
            </div>
           </div>
           <div class="col-12 col-md-6 col-lg-4 text-center my-4">
            <div class="card" style="width: 18rem;">
             <img src="https://shop.wilson.com/media/catalog/product/cache/38/image/9df78eab33525d08d6e5fb8d27136e95/6/e/6ea7afe8e9099303d308dada67272c29394b7812_wrt1019w_1.jpg" class="card-img-top" alt="Pelotas">
              <div class="card-body">
              </div>
               <h5 class="card-title">PELOTAS</h5>
               <a href="pelotas.php" id="main-button">Ver Más</a>
             </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center my-4">
            <div class="card" style="width: 18rem;">
             <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/b/3/b3bb57df90e7f44b3276f1f97137b2dabf318e60_WR830000316_Revolve_Twist_16_GY_Reel.jpg"class="card-img-top" alt="Cuerdas">
              <div class="card-body">
              </div>
               <h5 class="card-title">CUERDAS</h5>
               <a href="cuerdas.php" id="main-button">Ver Más</a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center my-4">
            <div class="card" style="width: 18rem;">
             <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/2/2/2296747f8ed8eff4d13433f5713d6468c39758a7_WR8001501001_Super_Tour_2_Comp_L_Bold_BK_WH_Front.jpg" class="card-img-top" alt="Bolsos">
              <div class="card-body">
              </div>
               <h5 class="card-title">BOLSOS</h5>
               <a href="bolsos.php" id="main-button">Ver Más</a>
           </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center my-4">
            <div class="card" style="width: 18rem;">
             <img src="https://shop.wilson.com/media/catalog/product/cache/38/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/e/b/eb1c3014c561f2b6d6203400d2de5b25789e0b3e_wrz403000_1.jpg" class="card-img-top" alt="Accesorios">
              <div class="card-body">
              </div>
               <h5 class="card-title">ACCESORIOS</h5>
               <a href="accesorios.php" id="main-button">Ver Más</a>
           </div>
         </div>
         <div class="col-12 col-md-6 col-lg-4 text-center my-4">
           <div class="card" style="width: 18rem;">
             <img src="https://cdn.shopify.com/s/files/1/0045/5236/0049/products/Wilson_Five_Two_BLX_Tennis_Racket_-_Sake_490x.jpg?v=1559728808" class="card-img-top" alt="Promos">
             <div class="card-body">
             </div>
               <h5 class="card-title">PROMOS</h5>
               <a href="promos.php" id="main-button">Ver Más</a>
                 </div>
               </div>
             </div>
           </div>
      </section>
    </main>
  </div> --}}
@endsection	