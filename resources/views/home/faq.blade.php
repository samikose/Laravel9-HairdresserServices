@extends('layouts.frontbase(blank)')

@section('title', 'Frequently Asked Questions | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Frequently Asked Questions</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-area section-padding30 position-relative">
            <div class="container">
                <div class="section-title">
                    <h1>Frequently Asked Questions</h1>
                </div>
                <div id="accordion">
                    @foreach($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                    {{$rs->question}}
                                </a>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $rs->answer  !!}
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
