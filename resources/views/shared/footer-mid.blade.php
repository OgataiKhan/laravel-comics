<div class="footer-mid">
    <div class="container">
        <div>
            <h4>DC comics</h4>
            <ul>
                @foreach ($FooterMidLinks['listDccomics'] as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
            <h4 class="footerlisttitle-shop">Shop</h4>
            <ul>
                @foreach ($FooterMidLinks['listShop'] as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h4>DC</h4>
            <ul>
                @foreach ($FooterMidLinks['listDc'] as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h4>Sites</h4>
            <ul>
                @foreach ($FooterMidLinks['listSites'] as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
