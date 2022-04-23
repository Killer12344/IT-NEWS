<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom position-fixed top-0 w-100">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('images/logos/logo.PNG') }}" style="height: 40px" class="me-1" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="feather-align-right"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="menu-top-right-menu" class="navbar-nav ms-auto mb-2 mb-md-0 ">
                <li id="menu-item-12"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-12">
                    <a href="{{ route('blog.index') }}" class="nav-link {{ request()->url() == route('blog.index')? 'active' : '' }}">Home</a></li>
                <li id="menu-item-16"
                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item nav-item-16"><a
                        href="{{ route('blog.about') }}" class="nav-link {{ request()->url() == route('blog.about')? 'active' : '' }} ">About</a></li>
{{--                <li id="menu-item-242"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown nav-item nav-item-242">--}}
{{--                    <a href="#" class="nav-link  dropdown-toggle"--}}
{{--                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>--}}
{{--                    <ul class="dropdown-menu  depth_0">--}}
{{--                        <li id="menu-item-9"--}}
{{--                            class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-9"><a--}}
{{--                                href="http://google.com/" class="dropdown-item ">facebook</a></li>--}}
{{--                        <li id="menu-item-10"--}}
{{--                            class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-10"><a--}}
{{--                                href="http://google.com/" class="dropdown-item ">youtube</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li id="menu-item-11"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-11"><a--}}
{{--                        href="#" class="nav-link ">Contact Us</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
