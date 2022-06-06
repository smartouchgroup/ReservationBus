@extends('layouts.home')

@section('content')
<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800">Accueil </h1>
  <p>Recherchez les bus disponibles ici.</p>

  <div class="row align-items-center">

    <div class="col-xl-6 col-md-12 mb-4 small">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <form action="{{route('home.search')}}" method="GET">
            
            <div class="form-group">
              <label for="">
                <i class="fas fa-map-marker-alt"></i>
                De :
              </label>
              <input type="text" placeholder="Arrival location" name="arrivalLocation" class="form-control">
            </div>
            <div class="form-group">
              <label for="">
                <i class="fas fa-map-marker-alt"></i>
                À :
              </label>
              <input type="text" placeholder="Destination" name="destination" class="form-control">
            </div>
            <div class="form-group">
              <label for="">
                <i class="fas fa-calendar-alt"></i>
                Disponibilité :
              </label>
             <select name="arrivalDays" class="form-control">
              <option value="Everyday">Everyday</option>
              <option value="Sunday">Sunday</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
              <option value="Friday">Friday</option>
              <option value="Saturday">Saturday</option>
              <option value="Everyday except saturday">Tous les jours sauf le samedi</option>
              <option value="Everyday except sunday">Tous les jours sauf le dimanche</option>
             </select>
            </div>

            <button type="submit" class="btn btn-primary">Chercher</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-12 mb-4">
      <div class="w-50 mx-auto">
        <img src="{{asset('images/yatch.svg')}}" class="img-fluid" alt="">        
      </div>
    </div>

  </div>

  <hr class="line-divider">

  <h1 class="h3 mb-0 text-gray-800">Découvrez nos derniers trajets domicile-travail.</h1>
  <br>

  <div class="row">
    @foreach($buses as $bus)
    <div class="col-sm-6 col-md-3">
      <div class="card text-center shadow h-100">
        <img src="{{asset($bus->img)}}" class="img-fluid" alt="Bus img">
        <div class="card-body">
          <p class="card-header">{{$bus->name}}</p>

         <div class="d-flex flex-column justify-content-center"> 
           <p class="text-primary">{{$bus->from}}</p>
           <i class="fas fa-angle-double-down"></i>
           <p class="text-primary">{{$bus->to}}</p>
        </div>

          <a href="{{route('home.show',['bus'=>$bus])}}" class="btn btn-primary">Acheter des billets</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <br>
  <br>
  
  <h1 class="h4 mb-0 text-gray-800 text-center my-4">Aucune correspondance ? <a href="{{route('home.search')}}" class="btn btn-sm btn-primary">Nous avons plus</a></h1>
  <br>


</div>
@endsection