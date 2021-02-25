<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand " href="{{ route('home') }}" style="margin-left: 10px">S M S</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          {{-- <a class="nav-link" href="{{ route('home') }}">Home</a> --}}
          <a class="nav-link" href="#" onclick="routeToHome()">Home</a>
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="{{ url('/create') }}">New student</a> --}}
          <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_create_student">New student</a>
          
        </li>
      </ul>
    </div>
  </nav>