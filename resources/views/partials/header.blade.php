<header id="site_header">
    <div class="header_top">
        <div class="container pt-2">
            <div class="d-flex text-uppercase justify-content-end text-white">
                <h6>dc power visa</h6>
                <h6 class="ms-5">additional dc sites</h6>
            </div>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-between center">
        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc logo">
        </div>
        <nav class="navbar py-0 fw-bold">
            <div class="link_box mx-5 text-uppercase">
                <a href="#" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">characters</a>
                <a href="{{route('comics')}}"
                    class="{{Route::CurrentRouteName() === 'comics' ? 'active' : ''}}">comics</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'movies' ? 'active' : ''}}">movies</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'tv' ? 'active' : ''}}">tv</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'games' ? 'active' : ''}}">games</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'collectibles' ? 'active' : ''}}">collectibles</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'videos' ? 'active' : ''}}">videos</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'fans' ? 'active' : ''}}">fans</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'news' ? 'active' : ''}}">news</a>
                <a href="#" class="{{Route::CurrentRouteName() === 'shop' ? 'active' : ''}}">shop</a>
            </div>
            <div class="search">
                <a href="#">Search <i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </nav>
    </div>

    <div class="comics_jumbotron">

    </div>

</header>