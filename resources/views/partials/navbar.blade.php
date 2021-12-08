<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container mt-2 mb-2">
        <a class="navbar-brand" href="/">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('maps') ? 'active' : '' }}" href="/maps">Maps</a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">    
                <li class="nav-item me-3">
                    <a class="nav-link active" href="#" title="Cart"><i class="fas fa-shopping-cart"></i></a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Welcome back, {{ auth()->user()->name }}</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}"><i class="bi bi-speedometer"></i> My Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                            Logout</button>
                                    </form>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Log in</a>
                        </li>

                        @if (Route::has('register'))
                        <li class="nav-item me-5">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                        @endif
                    @endauth
                @endif

                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
                    </form>                    
                </li>
            </ul>
        </div>
    </div>
</nav>
