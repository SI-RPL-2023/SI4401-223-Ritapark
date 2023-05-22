<nav class="navbar navbar-default">
    <div class="navbar-header page-scroll">
        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
        <ul class="list-unstyled nav1 cl-effect-10">
            <li><a data-hover="Home" href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}"><span>Home</span></a></li>
            <li><a data-hover="Wahana" href="{{ route('wahana') }}" class="{{ Request::is('/wahana') ? 'active' : '' }}"><span>Wahana</span></a></li>
            <li><a data-hover="Tentang Kami" href="{{ route('about') }}" class="{{ Request::is('/tentangkami') ? 'active' : '' }}"><span>Tentang Kami</span></a></li>
            <li><a data-hover="Promo" href="{{ route('home') }}" class="{{ Request::is('/tentangkami') ? 'active' : '' }}"><span>Promo</span></a></li>
            <li><a data-hover="Beli tiket" href="{{ route('booking') }}" class="{{ Request::is('/booking') ? 'active' : '' }}"><span>Beli Tiket</span></a></li>
            <li><a data-hover="Testimoni" href="{{ route('testimoni') }}" class="{{ Request::is('/testimoni') ? 'active' : '' }}"><span>Testimoni</span></a></li>
        </ul>
    </div>
</nav>