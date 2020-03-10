<!--Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}" style="padding: 5px; border: solid 2px;">
      <i class="fas fa-calculator-alt fa-fw fa-spin"></i><span class="ml-2">{{ config('app.name') }}</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      {{-- <li class="nav-item active"> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home
         {{--  <span class="sr-only">(current)</span> --}}
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
      </li>
  </ul>
  <ul class="navbar-nav ml-auto nav-flex-icons">
    @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
    @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="mails" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
        aria-labelledby="accountDropdown">
          <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user-circle mr-2"></i>Profile</a>
          <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('mails') }}">{{ __('Show All Mails') }}</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="mails" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-history"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
        aria-labelledby="accountDropdown">
          <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user-circle mr-2"></i>Profile</a>
          <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('history') }}">{{ __('Show All Mails') }}</a>
        </div>
      </li>
      
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="accountDropdown" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        @if(auth()->user()->image == null)
        <img src="/storage/images/user.png" class="rounded-circle z-depth-0"
        alt="avatar image">
        @else
        <img src="{{ auth()->user()->image }}" class="rounded-circle z-depth-0"
        alt="avatar image">
        @endif
        <span class="ml-1">{{ auth()->user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
        aria-labelledby="accountDropdown">
          <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user-circle mr-2"></i>Profile</a>
          <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </li>
    @endguest
  </ul>
</div>
</nav>
<!--/.Navbar -->