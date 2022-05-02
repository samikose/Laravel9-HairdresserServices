@extends('layouts.adminbase')

@section('title', 'Show Category :',$data->title)


@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-outline-secondary btn-success btn-icon-text" style="width: 200px">Edit</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-secondary btn-success btn-icon-text" style="width: 200px">Delete</a>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item" href="{{route('admin.index')}}">Home</li>
                            <li class="breadcrumb-item active">Show Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail data</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 150px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td></td>
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
