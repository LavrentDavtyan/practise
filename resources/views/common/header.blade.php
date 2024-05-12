
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
          </ul>
          <div class="navbar-text">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown lang-section">
                    @php
                        $locale = app()->getLocale();
                    @endphp
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/lang/' . $locale . '.png') }}" alt="{{ $locale }}">
                    </a>
                    <ul class="dropdown-menu">
                        @php
                            $switchLocale = $locale === 'en' ? 'am' : 'en';
                            $langUrl = route('switch.locale', ['locale' => $switchLocale]);
                        @endphp
                        <li><a class="dropdown-item" href="{{ $langUrl }}"><img src="{{ asset('images/lang/' . $switchLocale . '.png') }}" alt="{{ $switchLocale }}"></a></li>
                    </ul>
                </li>
            </ul>
        </div>
      </div>
  </nav>

</header>