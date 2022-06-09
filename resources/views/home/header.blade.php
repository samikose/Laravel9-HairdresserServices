<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets')}}/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area header-transparent pt-20">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="/"><img src="{{asset('assets')}}/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            @php
                                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
                            @endphp
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="/">Home</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('service')}}">Services</a></li>
                                        <li><a href="{{route('references')}}">References</a></li>
                                        <li><a href="{{route('service')}}">Categories</a>
                                            <ul class="submenu">
                                                @foreach($mainCategories as $rs)
                                                    @if($rs->id != 13)
                                                    <li><a href="{{route('service')}}">{{$rs->title}}</a>
                                                        @endif
                                                        @if(count($rs->children))
                                                            @include('home.categorytree',['children'=>$rs->children])
                                                        @endif
                                                    </li>

                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{route('faq')}}">FAQ</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                @auth
                                <div>
                                    <strong style="color: white" class="text-uppercase"><a href="{{route('userpanel.index')}}">{{Auth::user()->name}}</a></strong>
                                </div>
                                    <a href="/logoutuser" class="btn header-btn">Logout</a>
                                @endauth
                                @guest
                                <a href="/loginuser" class="btn header-btn">LOGIN</a>
                                <a href="/registeruser" class="btn header-btn">JOIN</a>
                                    @endguest
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
