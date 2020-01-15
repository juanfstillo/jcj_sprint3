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
