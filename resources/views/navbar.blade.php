<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container d-block">
                <div class="main_nav_menu">
                    <div class="fk_width">
                        <div class="custom_menu-btn mt-4">
                            <button onclick="openNav()">
                                <span class="s-1"> </span>
                                <span class="s-2"> </span>
                                <span class="s-3"> </span>
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <a class="" href="{{ route('index') }}">Home <span
                                        class="sr-only">(current)</span></a>
                                <a class="" href="{{ route('productspage') }}">Products</a>
                                <a class="" href="{{ route('aboutpage') }}">About Us </a>
                                <a class="" href="{{ route('contactpage') }}">Contact Us </a>

                                @if (session('uemail') == null)
                                    <a class="" href="{{ route('loginpage', session('uemail')) }}">Login </a>
                                @else
                                @endif
                                <a class="" href="{{ route('orders') }}"><i class="fa fa-shopping-bag"></i>
                                    Cart</a>
                                @if (session('uemail') == null)
                                @else
                                    <a class="" href="{{ route('logout') }}"><i
                                            class="fa fa-power-off text-danger">
                                        </i> Logout</a>
                                @endif


                            </div>
                        </div>
                    </div>
                    <a class="navbar-brand" href="{{ route('index') }}">

                        <img src="images/WhatsApp Image 2023-07-26 at 16.19.18.jpg" width="80" class="img-fluid"
                            alt="">

                    </a>
                    <div class="user_option">
                        <a href="{{ route('index') }}">
                            Home
                        </a>
                        <a href="{{ route('productspage') }}">
                            Products
                        </a><a href="{{ route('aboutpage') }}">
                            About Us
                        </a>
                        <a href="{{ route('contactpage') }}">
                            Contact Us
                        </a>
                        @if (session('uemail') == null)
                            <a class="" href="{{ route('loginpage', session('uemail')) }}">Login </a>
                        @else
                        @endif

                        {{-- <form class="form-inline ">
                                <button class="btn  nav_search-btn" type="submit"></button>
                            </form> --}}
                        <a href="{{ route('orders') }}">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        @if (session('uemail') == null)
                        @else
                            <a href="{{ route('logout') }}">
                                <i class="fa fa-power-off text-danger"></i>
                            </a>
                        @endif

                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
