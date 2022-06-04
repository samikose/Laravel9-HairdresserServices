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
    <!-- Hero End -->

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
                @foreach($categorylist1 as $rs )
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="team-img">
                            <a href="#"><img src="{{Storage::url($rs->image)}}" style="height: 200px"></a>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">{{$rs->title}}</a></h4>
                            <div class="col-md-4 mt-sm-30">
                                <h3 class="mb-20">Service List</h3>
                                <div class="">
                                    <ul class="unordered-list">
                                        @foreach($servicelist1 as $rs1)
                                            @if($rs->id == $rs1->category_id)
                                                <li><a style="color: #af804d" href="{{route('servicedetail',['id'=>$rs1->id])}}">{{$rs1->title}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection




