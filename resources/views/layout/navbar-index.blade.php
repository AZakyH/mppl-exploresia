  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      {{-- <a class="navbar-brand" style="background-color: transparent; color: #ff7b00;" href="{{ route('index') }}">Exploresia</a> --}}
      <a class="navbar-brand" style="background-color: transparent;" href="{{ route('index') }}"><img src="{{ url('vacation/images/exploresia_logo.png') }}" height="90"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item @yield('discover')"><a href="{{ route('discover') }}" class="nav-link">discover</a></li>
          <li class="nav-item @yield('blogs')"><a href="{{ route('blogs') }}" class="nav-link">blogs</a></li>
          <li class="nav-item @yield('about-us')"><a href="{{ route('aboutus') }}" class="nav-link">about us</a></li>
          @auth
          <li class="nav-item @yield('profile')"><a href="{{ route('profile') }}" class="nav-link">profile</a></li>
          @endauth
          @guest
          <li class="nav-item cta"><a href="{{ route('login_page') }}" class="nav-link">login</a></li>
          @endguest
          @auth
          <li class="nav-item cta"><a href="{{ route('logout') }}" class="nav-link">logout</a></li>              
          @endauth

        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->