@extends('layouts.frontbase(blank)')

@section('title', 'User Appointments')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>User Appointments</h2>
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
                        <h4 class="title">User Appointments</h4>
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
                                <th> Worker </th>
                                <th> Date </th>
                                <th> Time </th>
                                <th> Price </th>
                                <th> Payment </th>
                                <th> Status </th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td><a style="color: #06080a " href="{{route('service',['id'=>$rs->service_id])}}">{{$rs->service->title}}</a></td>
                                        <td><a style="color: #06080a" href="{{route('admin.user.show',['id'=>$rs->worker_id])}}">
                                                @foreach($users as $rs1)
                                                    @if($rs1->id == $rs->worker_id)
                                                        {{$rs1->name}}
                                                    @endif
                                                @endforeach
                                            </a></td>
                                        <td>{{$rs->date}}</td>
                                        <td>{{$rs->time}}</td>
                                        <td>
                                            @foreach($service as $rs2)
                                                @if($rs2->id == $rs->service_id)
                                                    {{$rs2->price}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$rs->payment}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('userpanel.appointmentdestroy',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-danger btn-icon-text"
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
