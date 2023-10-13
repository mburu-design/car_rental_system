<div class="container">

  <div class="overlay" data-overlay></div>

  <a href="#" class="logo">
    <img src="#" alt="CarRentKe logo">
  </a>

  <nav class="navbar" data-navbar>
    <ul class="navbar-list">

      <li>
        <a href="/" class="navbar-link" data-nav-link>Home</a>
      </li>

      <li>
        <a href="#featured-car" class="navbar-link" data-nav-link>Explore cars</a>
      </li>

      <li>
        <a href="#" class="navbar-link" data-nav-link>About us</a>
      </li>

      <li>
        <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
      </li>
      <li>
        <a href="{{Route('car_register')}}" class="navbar-link" data-nav-link wire:navigate>Rent your car</a>
      </li>

    </ul>
  </nav>

  <div class="header-actions">

    <div class="header-contact">
      <a href="tel:+254713408025" class="contact-link">contact us</a>

      <span class="contact-time"> <a href="tel:+254713408025">+254713408025</a> </span>
    </div>

    @if(Route::current()->getName() == 'register' || Route::current()->getName() == 'login')

    @elseif(Auth::check())
    <button class="btn user-btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
      aria-expanded="false">
      <i class="fa fa-user" aria-hidden="true"> <small>{{Auth::user()->firstName}}</small> </i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" href="{{Route('dashboard')}}" wire:navigate>profile</a></li>
      <li><a class="dropdown-item" href="{{Route('logout')}}" wire:navigate>Log out</a></li>
    </ul>
    @else
    <div class="dropdown">
      <button class="btn user-btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-user" aria-hidden="true"> <small>Account</small> </i>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="{{Route('register')}}" wire:navigate>register</a></li>
        <li><a class="dropdown-item" href="{{Route('login')}}" wire:navigate>Log In</a></li>
      </ul>
      @endif

    </div>
    <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
      <span class="one"></span>
      <span class="two"></span>
      <span class="three"></span>
    </button>

  </div>

</div>