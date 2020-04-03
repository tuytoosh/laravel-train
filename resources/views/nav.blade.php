
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" href="{{ route('home') }}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'about') active @endif" href="{{ url('about') }}">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'contact') active @endif" href="{{ url('contact') }}">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('blog') }}">Blog</a>
            </li>

            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('blog/add') }}">Add Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                </li>
            @endif






        </ul>
    </div>
</nav>
