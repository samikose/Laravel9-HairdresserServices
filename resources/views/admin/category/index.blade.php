@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h1>Category List</h1>
        </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category list</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Title </th>
                                    <th> Keywords </th>
                                    <th> Description </th>
                                    <th> Image </th>
                                    <th> Status </th>
                                    <th style="width: 40px">Edit</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>{{$rs->image}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-outline-secondary btn-icon-text">Edit</a></td>
                                    <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-outline-secondary btn-danger btn-icon-text">Delete</a></td>
                                    <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-outline-secondary btn-success btn-icon-text">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


@endsection
