@extends('layouts.frontbase(blank)')

@section('title', 'References | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>REFERENCES</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-area section-padding30 position-relative">
            <div class="container">
                    {!! $setting->references !!}
            </div>
        </section>

    </main>
@endsection
