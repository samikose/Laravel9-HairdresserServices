@extends('layouts.frontbase(blank)')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70 text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-top-border">
        <div class="row">
            <div class="col-md-3">
                <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-9 mt-sm-20">
                <p><div class="section-top-border">
                        <h1 class="mb-30">{{$data->title}}</h1>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-defination">
                                    <h1 class="mb-20">Price: . . . . . . . . . . . . . ${{$data->price}}</h1>
                                    <br>
                <h2 class="mb-30">DESCRIPTION: </h2>
                <p>{{$data->description}}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-defination">
                <h2 class="mb-20">Detail: </h2>
                <p>{!! $data->detail !!}</p>
            </div>
        </div>
    </div>
    </div></p>
            </div>
        </div>
    </div>

@endsection




