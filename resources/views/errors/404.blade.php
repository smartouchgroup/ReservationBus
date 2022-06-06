@extends('layouts.auth')
@section('content')
<div class="bg-light server-error-page">
  <div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
      <div class="error mx-auto" data-text="404">404</div>
      <p class="lead text-gray-800 mb-5">Page non trouvée</p>
      <p class="text-gray-500 mb-0">Il semble que vous ayez trouvé un bug dans la matrice...</p>
      <a href="{{route('admin.dashboard')}}">&larr; Retour au tableau de bord</a>
    </div>
  
  </div>
</div>

@endsection

@push('css')
<style>
.server-error-page{
  height:100vh;
}
</style>
@endpush