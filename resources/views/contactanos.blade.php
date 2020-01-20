@extends('layout')

@section('title')
JCJ Tenis | Contactanos
@endsection

@section('main')

<div class="card-abm card-abm-prod" id="card-abm" style=" margin-left: 20%">
  <div class="container">
    <div class="row justify-content-center">

    <h1 class="add-cat col-12" id="main-title" style="margin-left: 40px">Contactanos</h1>

    <form name="conocemosform" class="col-12" action="" method="get" onsubmit="return validateForm()">

    <div class="row justify-content-left">
      <label for="fullName" class="col-md-4 col-form-label text-md-right" style="color:#000">Nombre y apellido</label>
      <input id="fullName" type="text" class="form-control col-6" name="fullName">
    </div>

    <br>

      <div class="row justify-content-left">
        <label for="mail" class="col-md-4 col-form-label text-md-right" style="color:#000">Email</label>
        <input id="mail" type="mail" class="form-control col-6" name="mail">
      </div>

      <br>

      <div class="row justify-content-left">
        <label for="campo" class="col-md-4 col-form-label text-md-right" style="color:#000">Mensaje</label>
        <textarea id="campo" class="form-control col-6" placeholder="Dejanos tu mensaje (opcional)"></textarea>
      </div>

      <br>

      <div class="button-send">
        <div class="col-md-12 justify-content-center" style="text-align-last: right; margin-bottom: 2%; margin-right: 10px;">
          <button type="submit" id="main-add">Enviar mensaje</button>
        </div>
      </div>

    </form>

  </div>
</div>
</div>

 {{-- Grid column0 --}}
      <div class="rowcolor" style="background-color: white">
      <div class="container" >
        <div class="row" style="place-content: center;" >
          <ul class="list-unstyled mb-0" style="text-align-last: center;padding-bottom: 10px;padding-top: 10px;">
              <li><img src="images/home-solid.svg" style="width:50px" align="middle" alt="Home"></li>
              <li align="center"><a href="#map">Lima 1111 <br>CABA-ARGENTINA</li>
        </div>
        <div class="row" style="place-content: center;" >
          <ul class="list-unstyled mb-0" style="text-align-last: center;padding-bottom: 10px;padding-top: 10px;">
              <li><img src="images/phone-solid.svg" style="width:50px" align="middle" alt="Phone"></li>
              <li align="center"><a href="tel:0810-19991-1111">0810-19991-1111</li>
          </div>
          <div class="row" style="place-content: center;" >
            <ul class="list-unstyled mb-0" style="text-align-last: center;padding-bottom: 10px;padding-top: 10px;">
              <li><img src="images/envelope-solid.svg" style="width:50px" align="middle" alt="Mail"></li>
              <li><a href="mailto:jcjtenis@jcjtenis.com.ar">jcjtenis@jcjtenis.com.ar</a></li>
          </div>
    </div>
  </div>
  {{-- </div> --}}

  <!--Grid column-->

  <div class="map" id= "map">
    <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=LIMA%201111%2CCABA%20ARGENTINA+(JCJ%20TENIS)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Mapa de Ruta</a></iframe></div><br />
  </div>


@endsection

@section('scripts')

<script type="text/javascript" src="{{ URL::asset('js/contactanos.js') }}"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
@endsection
