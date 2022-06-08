@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('slider')
    @include('home.slider')
@endsection

@section('content')
    <!--? About Area Start -->
    <section class="about-area section-padding30 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-11">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{asset('assets')}}/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3 mb-35">
                            <span>About Our company</span>
                            <h2>52 Years Of Experience In Hair cut!</h2>
                        </div>
                        <p class="mb-30 pera-bottom">Brook presents your services with flexible, convenient and cdpoe layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfreplication of the designers is intended.</p>
                        <p class="pera-top mb-50">Brook presents your services with flexible, convefnient and ent anipurpose layouts. You can select your favorite.</p>
                        <img src="{{asset('assets')}}/img/gallery/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Shape -->
        <div class="about-shape">
            <img src="{{asset('assets')}}/img/gallery/about-shape.png" alt="">
        </div>
    </section>
    <!-- About-2 Area End -->
    <!--? Services Area Start -->
    <section class="service-area pb-170">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-90">
                        <span>Professional Services</span>
                        <h2>Our Best services that  we offering to you</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-healthcare-and-medical"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Stylish Hair Cut</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-fitness"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Body Massege</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Breard Style</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->
    <!--? Team Start -->
    <div class="team-area pb-180">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-100">
                        <span>Professional Teams</span>
                        <h2>Our award winner hair cut exparts for you</h2>
                    </div>
                </div>
            </div>
            <div class="row team-active dot-style">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-80 text-center">
                        <div class="test">
                            <img src="{{asset('assets')}}/img/gallery/team1.png" alt="">
                        </div>
                        <div class="team-caption">
                            <span>Master Barber</span>
                            <h3><a href="#">Guy C. Pulido bks</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-80 text-center">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/gallery/team2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <span>Color Expart</span>
                            <h3><a href="#">Steve L. Nolan</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-80 text-center">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/gallery/team3.png" alt="">
                        </div>
                        <div class="team-caption">
                            <span>Master Barber</span>
                            <h3><a href="#">Edgar P. Mathis</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-80 text-center">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/gallery/team2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <span>Master Barber</span>
                            <h3><a href="#">Edgar P. Mathis</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Best Pricing Area Start -->
    <div class="best-pricing section-padding2 position-relative">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-tittle mb-50">
                        <span>Our Best Pricing</span>
                        <h2>We provide best price<br> in the city!</h2>
                    </div>
                    <!-- Pricing  -->
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="pricing-list">
                                @foreach($servicelist1 as $rs)
                                <ul>
                                    <li>{{$rs->title}}. . . . . . . . . . . . . . . . . . . . . . . . . . . . <span>${{$rs->price}}</span></li>
                                </ul>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- pricing img -->
        <div class="pricing-img">
            <img class="pricing-img1" src="{{asset('assets')}}/img/gallery/pricing1.png" alt="">
            <img class="pricing-img2" src="{{asset('assets')}}/img/gallery/pricing2.png" alt="">
        </div>
    </div>
    <!-- Best Pricing Area End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100">
                        <span>our image gellary</span>
                        <h2>some images from our barber shop</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($images as $rs)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        @if ($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 500px;width: 500px; border-bottom-style: solid ">
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

@endsection
