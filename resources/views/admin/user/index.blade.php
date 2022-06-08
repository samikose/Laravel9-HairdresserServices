@extends('layouts.adminbase')

@section('title', 'User List')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
        </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User list</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Role </th>
                                    <th> Status </th>
                                    <th style="width: 40px">Show</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>
                                        @foreach($rs->roles as $role)
                                            {{$role->name}}
                                        @endforeach
                                    </td>
                                    <td></td>
                                    <td>
                                        <a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-success btn-icon-text"
                                           onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                            Show
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin.user.destroy',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-danger btn-icon-text"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


@endsection
