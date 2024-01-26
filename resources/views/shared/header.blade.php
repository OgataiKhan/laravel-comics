<header>
  <div class="container">
    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
    </div>
    <nav class="navbar">
      <ul class="header-menu">
        @foreach ($MenuItems as $MenuItem)
        <li>
          <a href="#">{{ $MenuItem }}</a>
        </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>