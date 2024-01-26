<div class="footer-bottom">
    <div class="container">
        <p class="footer-bottom-left">Sign-up now!</p>
        <div class="footer-bottom-right">
            <p>Follow us</p>
            <ul class="social-list">
                @foreach ($FooterBottomSocials as $social)
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset($social['iconPath']) }}" alt="{{ $social['socialName'] }}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
