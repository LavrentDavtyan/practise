
<header>
  <nav class="navbar navbar-dark navbar-expand-lg header-navbar">
      <div class="container-fluid">
        <a class="navbar-brand brand" href="">
        	<img src="{{ asset('images/main_logo2.png') }}" alt="Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse main-menu" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-menu">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @lang('messages.about_us')
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href=""> @lang('messages.history')</a></li>
                <li><a class="dropdown-item" href=""> @lang('messages.documents') </a></li>
              </ul>
            </li>
        </div>
  </nav>

</header>