@extends('layouts.adminbase')

@section('title', 'Accepted Appointment')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
        </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Accepted Appointment list</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> User Name </th>
                                    <th> Service </th>
                                    <th> Worker </th>
                                    <th> Date </th>
                                    <th> Time </th>
                                    <th> Phone </th>
                                    <th> Email </th>
                                    <th> Price </th>
                                    <th> Payment </th>
                                    <th> Status </th>
                                    <th style="width: 40px">Show</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $rs)
                                    @if($rs->status == "Accept")
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->user->name}}</td>
                                    <td><a href="{{route('admin.service.show',['id'=>$rs->service_id])}}">{{$rs->service->title}}</a></td>
                                    <td><a href="{{route('admin.user.show',['id'=>$rs->worker_id])}}">
                                            @foreach($users as $rs1)
                                                @if($rs1->id == $rs->worker_id)
                                                    {{$rs1->name}}
                                                @endif
                                            @endforeach
                                        </a></td>
                                    <td>{{$rs->date}}</td>
                                    <td>{{$rs->time}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>
                                        @foreach($service as $rs2)
                                            @if($rs2->id == $rs->service_id)
                                                {{$rs2->price}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$rs->payment}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>
                                        <a href="{{route('admin.acceptedappointment.show',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-success btn-icon-text"
                                           onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                            Show
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin.acceptedappointment.destroy',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-danger btn-icon-text"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


@endsection
