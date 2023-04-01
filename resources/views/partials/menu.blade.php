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
        </ul>

    </div>
</nav>