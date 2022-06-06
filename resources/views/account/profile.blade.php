@extends('layouts.admin-panel')

@section('content')
<div class="container-fluid" style="min-height: 80vh">
  <div class="row">
    <div class="col-xl-8 order-xl-1">
      <div class="card shadow">
        <div class="card-header bg-light border-bottom">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0 ">Mon compte</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
        <form action="{{route('account.changePassword')}}" method="post">
            @csrf
            @method('put')
            <h6 class="heading-small text-muted mb-4">Informations de l'utilisateur</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label >Nom d'utilisateur</label>
                    <input type="text"  class="form-control form-control-alternative" disabled
                      placeholder="Username" value="{{auth()->user()->name}}">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label >E-mail</label>
                    <input type="text"  class="form-control form-control-alternative" disabled
                      placeholder="Email" value="{{auth()->user()->email}}">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4" id="password-section">Changer le mot de passe</h6>
            <div class="pl-lg-4">
              <form action="" method="POST">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="password" placeholder="Mot de passe actuel *" class="form-control @error('current_password') is-invalid @enderror" name="current_password" value="{{ old('current_password') }}" required>
                      @error('current_password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="password" placeholder="Nouveau mot de passe*" class="form-control @error('new_password') is-invalid @enderror" name="new_password" value="{{ old('new_password') }}" required>
                      @error('new_password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <input type="password" placeholder="Confirmez le mot de passe *" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" value="{{ old('confirm_password') }}" required>
                      @error('confirm_password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Changer le mot de passe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection