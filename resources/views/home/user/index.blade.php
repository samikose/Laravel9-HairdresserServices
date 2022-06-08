@extends('layouts.frontbase(blank)')

@section('title', 'User Panel')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>User Panel</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h4 class="title">User Menu</h4>
                        @include('home.user.usermenu')
                    </div>
                </div>
                    <div class="col-lg-12 offset-lg-12">
                        <h4 class="title">User Profile</h4>
                        @include('profile.show')
                    </div>

            </div>
        </section>

    </main>
@endsection
