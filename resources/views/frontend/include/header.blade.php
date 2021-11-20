{{--  <header class="drope-shadow" style="position: static;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end">
            <div class="logo">
                <a href="{{ url('') }}"><img src="{{ asset('') }}asset/frontend/images/footer-logo.png" alt="logo"></a>
            </div>
            <div class="header-text tc d-none d-md-block">
                <h3 class="ps-700 cb6 uppercase s20">SATORI MEDITATIONS | DHAKA</h3>
            </div>
            <div class="h-sign-in-up">
                <ul class="d-flex align-items-end">
                    <li>
                        <a href="{{ url('signup') }}" class="ps-700 s18 uppercase cb6">SIGN UP</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="d-block d-flex justify-content-center align-items-center circle play-btn ms-auto"><img src="{{ asset('') }}asset/frontend/svg-icon/play.svg" alt="play"></a>
                        <a href="{{ url('signin') }}" class="ps-700 s18 uppercase c4a">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>  --}}

<header class="shadow-3">

    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ url('') }}"><img src="{{ asset('') }}asset/frontend/images/footer-logo.png" alt="logo"></a>
            </div>
            <div class="h-sign-in-up">
                <ul class="d-flex align-items-end header-nav-menu">
                    {{--  <li>
                        <a href="{{ url('signup') }}" class="ps-700 s18 uppercase cb6">SIGN UP</a>
                    </li>  --}}
                    <li>
                        <a href="{{ url('tryouts') }}" class="ps-700 s18 uppercase c4a">TRYOUTS</a>
                    </li>
                    <li>
                        <a href="{{ url('signin') }}" class="ps-700 s18 uppercase c4a">SIGN IN</a>
                    </li>
                    <li>
                        <img src="{{ asset('') }}asset/frontend/images/mute.svg" alt="">
                    </li>
                    <li>
                        <form class="d-flex">
                            <input class="form-control me-2 header-search " type="search" placeholder="Search" aria-label="Search">
                            <button class="btn" type="submit"><img src="{{ asset('') }}asset/frontend/images/search.png" alt=""></button>
                        </form>
                    </li>


                    <li class="d-md-none">
                        <!-- Mobail Menu btn -->
                        <div onclick="myFunction(this)" class="open-menu-btn">
                            <div class="bar1 transition-l"></div>
                            <div class="bar2 transition-l"></div>
                            <div class="bar3 transition-l"></div>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</header>
