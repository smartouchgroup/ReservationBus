@extends('layouts.home')

@section('content')
<div class="container-fluid" style="min-height: 80vh">

  <div class="card">
    <div class="card-body">
      @if($errors->any())
       <div class="alert alert-danger">
          {{ implode('', $errors->all(':message')) }}
        </div>
      @endif
      <form action="{{route('reservation.create',['bus'=>$bus])}}" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img src="{{asset('images/bus/1.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-sm-12 col-md-8">
            <div class="col-xs-5 pt-sm-4 pt-md-0">
              <h3 class="text-primary">{{$bus->name}}</h3>    
              <p>Indicatif d'autobus : <span class="text-primary">{{$bus->bus_code}}</span></p>

              <div class="my-2">
                <div>
                    <div>dE: <span class="text-primary">{{$bus->from}}</span> </div>
                    <div>A: <span class="text-primary">{{$bus->to}}</span></div>
                </div>
              </div> 

              <div class="my-2">
                <h6><small>Tarif</small></h6>
                <h3 class="text-primary">$ {{$bus->fare}}</h3>
              </div> 
              
              <div class="my-2">
                <div>
                    <div>Jours d'arrivée: <span class="text-primary">{{$bus->arrival_days}}</span> </div>
                    <div>Heure d'arrivée: <span class="text-primary">{{$bus->arrival_time}}</span></div>
                </div>
              </div> 

              <div class="my-4">
                  <div class="row align-items-center">
                      <div class="col-sm-6 col-md-4"><i class="fas fa-users"></i> Nbre de passagers</div>
                      <input value="{{old('passengers') ?? '1'}}" name="passengers" class="form-control col-sm-6 col-md-4" required/>
                  </div>
              </div>    

              <div class="my-4">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-md-4"><i class="fas fa-phone"></i>Téléphoner</div>
                    <input value="{{old('phone')}}" name="phone" class="form-control col-sm-6 col-md-4" required/>
                </div>
            </div>                

              <div class="my-2">
                <div>
                    <div>Requête supplémentaire</div>
                    <textarea name="additional_query" class="form-control" rows="4"></textarea>
                    <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                </div>
            </div>                

            <button type="submit" class="btn btn-success"><i class="fas fa-shopping"></i>Envoyer une demande de réservation</button>
            </div>   

          </div>
        </div>

    </form>
    </div>
  </div>


</div>
@endsection