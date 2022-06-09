@extends('layouts.adminwindow')

@section('title', 'Show Appointment :',$data->title)


@section('content')
    <div class="main-panel">
        <section class="content">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Message data</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>User Name</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Service</th>
                                    <td>{{$data->service->title}}</td>
                                </tr>
                                <tr>
                                    <th>Worker</th>
                                    <td>
                                        @foreach($users as $rs1)
                                            @if($rs1->id == $data->worker_id)
                                                {{$rs1->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{$data->date}}</td>
                                </tr>
                                <tr>
                                    <th>Time</th>
                                    <td>{{$data->time}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>
                                        @foreach($service as $rs2)
                                            @if($rs2->id == $data->service_id)
                                                {{$rs2->price}}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment</th>
                                    <td>{{$data->payment}}</td>
                                </tr>
                                <tr>
                                    <th>Ip Number</th>
                                    <td>{{$data->ip}}</td>
                                </tr>
                                <tr>
                                    <th>Note</th>
                                    <td>{{$data->note}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Admin Note</th>
                                    <td>
                                        <form role="form" action="{{route('admin.acceptedappointment.update',['id'=>$data->id])}}" method="POST">
                                            @csrf
                                            <p>
                                                Status:
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>Accept</option>
                                                    <option>Completed</option>
                                                </select>
                                            </p>
                                            <p>
                                                Payment:
                                                <select name="payment">
                                                    <option selected>{{$data->payment}}</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </p>
                                            <a href="{{route('admin.newappointment.destroy',['id'=>$data->id])}}" class="btn btn-outline-secondary btn-danger btn-icon-text"
                                               onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Appointment</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
