<div class="footer-top">
  <div class="container">
    <ul class="banner-link-list">
      @foreach ($FooterTopLinks as $FooterTopLink)
      <li>
        <a href="#">
          <div class="banner-icon">
            {{-- <img :src="link.iconPath" :alt="link.icon"> --}}
            <img src="{{ Vite::asset($FooterTopLink['iconPath']) }}" alt="">
          </div>
          <p>
            {{ $FooterTopLink['icon'] }}
          </p>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</div>