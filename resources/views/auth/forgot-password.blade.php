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
            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-2">Mot de passe oublié?</h1>
                  <p class="mb-4">On comprend, il se passe des choses. Entrez simplement votre adresse e-mail ci-dessous et nous vous enverrons un lien pour réinitialiser votre mot de passe !</p>
                </div>
                <form class="user">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  </div>
                  <a href="login.html" class="btn btn-primary btn-user btn-block">
                  réinitialiser le mot de passe
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="{{route('register')}}">Créer un compte!</a>
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
  </div>
</div>
@endsection
