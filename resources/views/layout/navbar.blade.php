  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" style="background-color: transparent; color: #ff7b00;" href="index.html">Exploresia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item @yield('discover')"><a href="index.html" class="nav-link">discover</a></li>
          <li class="nav-item @yield('blogs')"><a href="blog.html" class="nav-link">blogs</a></li>
          <li class="nav-item @yield('about-us')"><a href="about.html" class="nav-link">about us</a></li>
          <li class="nav-item cta"><a href="#" class="nav-link">login</a></li>

        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->