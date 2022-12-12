<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/">My Car</a>
                    </li>
                @endauth
            </ul>
        </div>
        @guest
            <a href="/login" class="text-white text-decoration-none">Login</a>
        @else
            <div class="d-flex gap-4">
                <a href="/" class="btn btn-light">Add Car</a>
                <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        @endguest
    </div>
</nav>
