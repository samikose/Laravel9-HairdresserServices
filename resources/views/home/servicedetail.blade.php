@extends('layouts.frontbase(blank)')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('head')
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: orange;
        }
    </style>

    <style>

        .rating {
            display: inline-block;
            position: relative;
            height: 50px;
            line-height: 50px;
            font-size: 50px;
        }

        .rating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            cursor: pointer;
        }

        .rating label:last-child {
            position: static;
        }

        .rating label:nth-child(1) {
            z-index: 5;
        }

        .rating label:nth-child(2) {
            z-index: 4;
        }

        .rating label:nth-child(3) {
            z-index: 3;
        }

        .rating label:nth-child(4) {
            z-index: 2;
        }

        .rating label:nth-child(5) {
            z-index: 1;
        }

        .rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .rating label .icon {
            float: left;
            color: transparent;
        }

        .rating label:last-child .icon {
            color: #000;
        }

        .rating:not(:hover) label input:checked ~ .icon,
        .rating:hover label:hover input ~ .icon {
            color: #09f;
        }

        .rating label input:focus:not(:checked) ~ .icon:last-child {
            color: #000;
            text-shadow: 0 0 5px #09f;
        }

    </style>
@endsection

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
            <div class="col-md-6">
                <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                <div class="comments-area">
                    @php
                        $average = $data->comment->average('rate');
                    @endphp
                    <h4>
                        {{$data->comment->count('id')}} Comments - {{number_format($average,1)}}
                        <span class="fa fa-star @if($average>=1) checked @endif"></span>
                        <span class="fa fa-star @if($average>=2) checked @endif"></span>
                        <span class="fa fa-star @if($average>=3) checked @endif"></span>
                        <span class="fa fa-star @if($average>=4) checked @endif"></span>
                        <span class="fa fa-star @if($average>=5) checked @endif"></span>
                    </h4>
                    @foreach($reviews as $rs)
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    {{$rs->subject}}
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        {{$rs->review}}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">{{$rs->user->name}}</a>
                                            </h5>
                                            <p class="date">{{$rs->created_at}} </p>
                                        </div>
                                        <span class="fa fa-star @if($rs->rate>=1) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rate>=2) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rate>=3) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rate>=4) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rate>=5) checked @endif"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 mt-sm-20">
                <p><div class="section-top-border">
                        @include('home.messages')
                        <h1 class="mb-30">{{$data->title}}</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-defination">
                                    <h1 class="mb-20">Price: . . . . . . . . . . . . . ${{$data->price}}</h1>
                                    <br>
                <h2 class="mb-30">DESCRIPTION: </h2>
                <p>{{$data->description}}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="single-defination">
                <h2 class="mb-20">Detail: </h2>
                <p>{!! $data->detail !!}</p>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="comment-form">
        <h4>Leave a Reply</h4>
        <form class="form-contact comment_form" action="{{route('storecomment')}}" id="commentForm" method="post">
            @csrf
            <input class="form-control" name="service_id" id="name" type="hidden" value="{{$data->id}}">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="review" id="review" cols="30" rows="9" placeholder="Your review" style="height: 242px;"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group rating">
                <label>
                    <input type="radio" name="rate" value="1" />
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="rate" value="2" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="rate" value="3" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="rate" value="4" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="rate" value="5" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
            </div>
            <div class="form-group">
                @auth
                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                @else
                    <a href="/login" class="button button-contactForm btn_1 boxed-btn">For Submit Your Review, Please Login</a>
                @endauth
            </div>
        </form>
    </div>
    </div>
    </p>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        $(':radio').change(function() {
            console.log('New star rating: ' + this.value);
        });
    </script>
@endsection


