@extends('layouts.admin-panel')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Mise à jour du bus</h1>
  <form action="{{route('bus.update',['id'=>$bus->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">

      <div class="col-lg-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Entrez les détails du bus</h6>
          </div>
          <div class="card-body">
            @if($errors->any())
              <div class="alert alert-danger">
                {{ implode('', $errors->all(':message')) }}
              </div>
            @endif
              <div class="form-group">
                <label for="">Nom du bus</label>
                <input type="text" value="{{$bus->name}}" class="form-control form-control-user" @error('name') is-invalid @enderror  name="name" placeholder="Enter name ..." required  autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="">Code ou numéro de bus</label>
                <input type="text"  value="{{$bus->bus_code}}" class="form-control form-control-user" @error('bus_code') is-invalid @enderror  name="bus_code" placeholder="Bus code ..." required >
                @error('bus_code')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Lieu d'arrivée</label>
                <input type="text"  value="{{$bus->from}}" class="form-control form-control-user" @error('from') is-invalid @enderror  name="from" placeholder="Arival location" required  >
                @error('from')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Destination</label>
                <input type="text"  value="{{$bus->to}}" class="form-control form-control-user" @error('to') is-invalid @enderror  name="to" placeholder="Destination" required  >
                  @error('to')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="">Arrival days</label>
                <select value="{{$bus->arrival_days}}" name="arrival_days" class="form-control form-control-user" @error('arrival_days') is-invalid @enderror  placeholder="Arrival days" required >
                  <option value="Everyday">Tout les jours</option>
                  <option value="Sunday">Dimanche</option>
                  <option value="Monday">Lundi</option>
                  <option value="Tuesday">Mardi</option>
                  <option value="Wednesday">Mercredi</option>
                  <option value="Thursday">Jeudi</option>
                  <option value="Friday">Vendredi</option>
                  <option value="Saturday">Samedi</option>
                  <option value="Everyday except saturday">Tout les jours sauf Samedi</option>
                  <option value="Everyday except sunday">Tout les jours sauf Dimanche</option>
                </select>
              </div>

            <div class="form-group">
              <label for="">Heure d'arrivée</label>
              <input value="{{$bus->arrival_time}}" type="time" class="form-control form-control-user" @error('arrival_time') is-invalid @enderror  name="arrival_time" placeholder="Arrival time" required  >
              @error('arrival_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

            <hr>

          <div class="card-body">
            <p class="text-primary">Détails supplémentaires</p>
              <div class="form-group">
                <label for="">Driver name</label>
                <input type="text" value="{{$bus->driver_name}}" class="form-control form-control-user" @error('driver_name') is-invalid @enderror  name="driver_name" placeholder="Driver name" required  >
                @error('driver_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Tarif</label>
                <input type="text"  value="{{$bus->fare}}" class="form-control form-control-user" @error('fare') is-invalid @enderror  name="fare" placeholder="fare/price" required  >
                @error('fare')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Nombre de sièges</label>
                <input type="number"  value="{{$bus->seats}}" class="form-control form-control-user" @error('seats') is-invalid @enderror  name="seats" placeholder="No of seats" required  >
                @error('seats')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <select name="status"  value="{{$bus->status}}" value="{{old('status')}}" class="form-control" required>
                  <option value="1">En service</option>
                  <option value="0">Pas de service</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary">Mise à jour</button>
            </form> 

            <div class="d-flex flex-row-reverse">
              <form action="{{route('bus.destroy',['id'=>$bus])}}" method="post" class="right">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Supprimer</button>
              </form>
            </div>

          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Entrez les médias du bus</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlFile1">Image d'autobus</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="mt-4">
              <p>Média d'autobus</p>
              <img src="{{asset($bus->img)}}" class="img-fluid" alt="Bus Image">
            </div>

          </div>
        </div>
      </div>

    </div>
  </form>
</div>
@endsection