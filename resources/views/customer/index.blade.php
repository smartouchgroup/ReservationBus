@extends('layouts.admin-panel')

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Clients</h1>
  <p class="mb-4">Liste de tous les clients enregistrés auprès de cette société.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tableau de données client</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Noms</th>
              <th>Email</th>
              <th>Total-reservations</th>
              <th>created_at</th>
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
  ajax:"{{route('customer.all')}}",
    columns:[
      {data:'id'},
      {data:'name'},
      {data:'email'},
      {data:'total-reservations'},
      {data:'created_at'},
    ]
  });
</script>
@endpush