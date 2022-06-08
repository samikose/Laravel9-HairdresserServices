@extends('layouts.frontbase(blank)')

@section('title', 'User Comments & Reviews')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>User Comments & Reviews</h2>
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
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th> Id </th>
                                <th> Service </th>
                                <th> Subject </th>
                                <th> Review </th>
                                <th> Rate </th>
                                <th> Status </th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $comments as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a style="color: #06080a" href="{{route('servicedetail',['id'=>$rs->service_id])}}">{{$rs->service->title}}</a></td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-danger btn-icon-text"
                                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>
        </section>

    </main>
@endsection
