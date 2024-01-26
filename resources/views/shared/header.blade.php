<header>
  <div class="container">
    <div class="logo">
      <a href="/">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
      </a>
    </div>
    <nav class="navbar">
      <ul class="header-menu">
        @foreach ($MenuItems as $MenuItem)
        <li>
          <a href="{{ $MenuItem['destination'] }}">{{ $MenuItem['button'] }}</a>
        </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>