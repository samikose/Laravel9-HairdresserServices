@extends('layouts.adminbase')

@section('title', 'Faq List')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <a href="{{route('admin.faq.create')}}" class="btn btn-outline-secondary btn-success btn-icon-text">Add Question</a>
        </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">FAQ list</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Question </th>
                                    <th> Answer </th>
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
                                    <td>{{$rs->question}}</td>
                                    <td>{!! $rs->answer  !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-icon-text">Edit</a></td>
                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-danger btn-icon-text"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                    <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-outline-secondary btn-success btn-icon-text">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


@endsection
