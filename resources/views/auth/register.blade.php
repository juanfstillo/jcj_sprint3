@extends('layout')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" id="form-container">
            <div class="card">
                <div class="form-title">{{ __('Crea tu cuenta') }}</div>

                <div class="card-body">
                    <form id="form-registro" method="POST" enctype="multipart/form-data" action="{{ route('register') }}" onsubmit="return validateform()">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <h5 id="error-message">{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <h5 id="error-message">{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>

                            <div class="col-md-6">
                              <select name="country" class="form-control">
                                <option value="-1">Seleccionar país</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" id="province" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>
                          </div>

                          



                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">Foto de perfil</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" >

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <h5 id="error-message">{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <small id="textHelp" class="form-text text-muted">Mínimo de 8 caracteres</small>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <h5 id="error-message">{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="main-button">
                                    {{ __('Crear cuenta') }}
                                </button>
                                <a class="linked" href="{{ route('login') }}">
                                    ¿Ya tenes cuenta?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
