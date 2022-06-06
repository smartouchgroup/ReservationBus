<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home.index')}}">
    <div class="sidebar-brand-text mx-2">Bus Reservation</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  @role('admin')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->segment(2) == 'dashboard' ? 'active': ''}}">
      <a class="nav-link" href="{{route('admin.dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
  @endrole

  <li class="nav-item {{ request()->segment(2) == '' ? 'active': ''}}">
    <a class="nav-link" href="{{route('home.index')}}">
      <i class="fas fa-fw fa-h-square"></i>
      <span>Accueil</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider">

  @role('admin')
  <!-- Heading -->
  <div class="sidebar-heading">
    Admin Information
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-bus-alt"></i>
      <span>Buses</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Bus Bread:</h6>
        <a class="collapse-item" href="{{route('admin.buses')}}">Tout les buses</a>
        <a class="collapse-item" href="{{route('bus.create')}}">Ajouter un nouveau bus</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-people-carry"></i>
      <span>Clients</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Informations clients:</h6>
        <a class="collapse-item" href="{{route('customer.index')}}">Tout les Clients</a>
        <a class="collapse-item" href="{{route('customer.pendingRequest')}}">Réservations en attente</a>
      </div>
    </div>
  </li>
  @endrole

  <div class="sidebar-heading">
  Informations sur les autobus
  </div>

  <li class="nav-item {{ request()->segment(2) == 'search' ? 'active': ''}}">
    <a class="nav-link" href="{{route('home.search')}}">
      <i class="fas fa-fw fa-bus-alt"></i>
      <span>Liste des autobus</span></a>
  </li>

   <li class="nav-item {{ request()->segment(1) == 'chats' ? 'active': ''}}">
    <a class="nav-link" href="{{route('chat.index')}}">
      <i class="fas fa-fw fa-bus-alt"></i>
      <span>Mes discussions</span></a>
  </li>
  
  @role('user')
  <li class="nav-item {{ request()->segment(1) == 'my-reservatins' ? 'active': ''}}">
    <a class="nav-link" href="{{route('reservation.index')}}">
      <i class="fas fa-fw fa-ticket-alt"></i>
      <span>Mes reservations</span></a>
  </li>
  @endrole

</ul>
<!-- End of Sidebar -->
