@extends('layout')

@section('title')
JCJ Tenis | Conocenos
@endsection

@section('main')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                <div class="form-title">Contactanos</div>

                  <div class="card-body">
                    <form name="conocemosform" action="" method="get" onsubmit="return validateForm()">
                    <div class="form-group row">

                      <label for="fullName" class="col-md-4 col-form-label text-md-right">Nombre y apellido</label>
                      <div class="col-md-6">
                        <input id="fullName" type="text" class="form-control" name="fullName">
                      </div>

                      <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" >
                      </div>

                      <label for="campo" class="col-md-4 col-form-label text-md-right">Mensaje</label>
                      <div class="col-md-6">
                        <textarea id='campo' class="form-control" placeholder="Dejanos tu Mensaje"></textarea>
                      </div>
                    </div>

                    <div class="button-send">
                      <button type="submit" id="main-button">
                      {{ __('Enviar Mensaje') }}
                      </button>
                    </div>


                  </form>

                  <!--Grid column-->
      <div class="container">
        <div class="row mt-4">
            <div class="col-sm ">
                <ul class="list-unstyled mb-0">
                  <li><img src="images/home-solid.svg" style="width:50px" align="middle" alt="Home">
                        <p align="center">Lima 1111 <br>CABA-ARGENTINA</p>
                    </li>
                  </div>
                  <div class="col-sm" >
                      <ul class="list-unstyled mb-0">
                        <li><img src="images/phone-solid.svg" style="width:50px" align="middle" alt="Phone">
                              <p align="center">0810-19991-1111</p>
                          </li>
                        </div>
                              <div class="col-sm">
                                  <ul class="list-unstyled mb-0">
                                      <li><img src="images/envelope-solid.svg" style="width:50px" align="middle" alt="Mail">
                                          <palign="center">jcjtenis@jcjtenis.com.ar</p>
                                      </li>
                                    </div>
                </ul>
            </div>

          </div>

        </div>

      </div>

       <!--Grid column-->
                    <div class="map">

                      <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=LIMA%201111%2CCABA%20ARGENTINA+(JCJ%20TENIS)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Mapa de Ruta</a></iframe></div><br />
                    </div>

                </div>
            </div>

        </div>
    </div>
  </div>
@endsection
@section('scripts')


  </script>
  <script type="text/javascript" src="{{ URL::asset('js/contactanos.js') }}"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
@endsection
