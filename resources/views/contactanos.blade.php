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
                    <form action="" method="get">
                    <div class="form-group row">

                      <label for="fullName" class="col-md-4 col-form-label text-md-right">Nombre y apellido</label>
                      <div class="col-md-6">
                        <input id="fullName" type="text" class="form-control" name="fullName" required>
                      </div>

                      <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" required>
                      </div>

                      <label for="mensaje" class="col-md-4 col-form-label text-md-right">Mensaje</label>
                      <div class="col-md-6">
                        <textarea class="form-control" placeholder="Dejanos tu Mensaje"></textarea>
                      </div>
                    </div>

                    <div class="button-send">
                      <button type="submit" id="main-button">
                        Enviar mensaje
                      </button>
                    </div>


                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection