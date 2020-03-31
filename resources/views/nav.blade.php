
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('blog') }}">Blog</a>
            </li>
        </ul>
    </div>
</nav>