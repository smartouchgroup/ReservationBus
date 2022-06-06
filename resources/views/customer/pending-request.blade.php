@extends('layouts.admin-panel')

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Réservations Clients</h1>
  <p class="mb-4">Liste de toutes les réservations auprès de cette société.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tableau de données des réservations</h6>
    </div>
    <div class="card-body small">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>nOMS</th>
              <th>Customer Name</th>
              <th>Customer Email</th>
              <th>Passengers</th>
              <th>Pending</th>
              <th>Rejected</th>
              <th>created_at</th>
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
  ajax:"{{route('customer.pendingRequestApi')}}",
    columns:[
      {data:'id'},
      {data:'name'},
      {data:'customer_name'},
      {data:'customer_email'},
      {data:'passengers',orderable:false,searchable:false},
      {data:'pending'},
      {data:'rejected'},
      {data:'created_at'},
      {data:'actions',orderable:false,searchable:false},
    ]
  });
</script>
@endpush