@extends('layouts.auth')
@section('content')

<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
            </div>
            @if($errors->any())
              <div class="alert alert-danger">
                {{ implode('', $errors->all(':message')) }}
              </div>
            @endif
            <form class="user" method="POST" action="{{route('register')}}">
              @csrf
              <div class="form-group">
                  <input type="text" class="form-control form-control-user"  name="name" placeholder="Nom" required autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" name="email"  id="exampleInputEmail" placeholder="Adresse e-mail" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user"name="password" id="exampleInputPassword" placeholder="Mot de passe" required>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="password_confirmation" placeholder="Répéter le mot de passe" required>
                  @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
              Créer un compte
              </button>
              <hr>
              <a href="#" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google fa-fw"></i>S'inscrire auprès de Google
              </a>
              <a href="#" class="btn btn-facebook btn-user btn-block">
                <i class="fab fa-facebook-f fa-fw"></i> S'inscrire auprès de Facebook
              </a>
            </form>
            <hr>
            <div class="text-center">
            <a class="small" href="{{route('password.request')}}">Mot de passe oublié?</a>
            </div>
            <div class="text-center">
              <a class="small" href="{{route('login')}}">Vous avez déjà un compte? Connexion!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection