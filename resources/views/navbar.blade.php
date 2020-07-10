<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">LaravelApp</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::segment(1) === 'siswa' ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('siswa' )}}" ></i>Siswa</a>
        </li>
        <li class="nav-item {{ Request::segment(1) === 'about' ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('about' )}}" ></i>About</a>
        </li>
      </ul>
      <a href="#" class="btn btn-outline-success mr-3">Login</a>
      <a href="#" class="btn btn-outline-danger">Daftar</a>
   </div>

</nav>
