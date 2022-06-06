@extends('layouts.home')

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Mes reservations</h1>
  <p class="mb-4">Liste de toutes les réservations de bus.</p>

  <a href="{{route('home.search')}}" class="btn btn-primary mb-4">Faire une réservation</a>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tableau de données des réservations</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nom de l'autobus</th>
              <th>De</th>
              <th>À</th>
              <th>En attente</th>
              <th>Rejeté</th>
              <th>Created_at</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection

@push('js')
<script>
  $('#dataTable').dataTable({
  processing:true,
  serverSide:true,
  ajax:"{{route('reservation.myReservationsApi')}}",
    columns:[
      {data:'id'},
      {data:'name'},
      {data:'from'},
      {data:'to'},
      {data:'pending'},
      {data:'rejected'},
      {data:'created_at'},
      {data:'actions',orderable:false,searchable:false},
    ]
  });
</script>
@endpush 