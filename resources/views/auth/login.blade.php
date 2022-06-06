@extends('layouts.auth')
@section('content')

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Content de te revoir!</h1>
                  <p>Use Email: admin@admin.com <br> & <br> Password: password <br> to login as Admin</p>
                </div>
                @if($errors->any())
                  <div class="alert alert-danger">
                    {{ implode('', $errors->all(':message')) }}
                  </div>
                @endif
                <form class="user" action="{{route('login')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" @error('email') is-invalid @enderror value="{{old('email')}}"  name="email" placeholder="Enter Email Address..." required  autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input"  {{old('remember')?'checked':''}} name="remember" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Souviens-toi de moi</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                  <hr>
                  <a href="#" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Connectez-vous avec Google
                  </a>
                  <a href="#" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Se connecter avec Facebook
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="{{route('password.request')}}">Mot de passe oublié?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="{{route('register')}}">Créer un compte!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

@endsection