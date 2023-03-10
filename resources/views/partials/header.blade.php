<header class="bg-primary">
    <div class="container">
        <nav class="navbar navbar-expand-sm justify-content-center text-uppercase">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link px-3" href="{{route('home')}}">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('trains')}}">trains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('news')}}">news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('contact')}}">contact</a>
                </li>   
            </ul>
        </nav>
    </div>
</header>