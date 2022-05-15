@extends('layouts.adminwindow')

@section('title', 'Service Image Gallery')


@section('content')
    <h3>{{$service->title}}</h3>
        <hr>
    <form role="form" action="{{route('admin.image.store',['sid'=>$service->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="input-group">
                <label for="example">Title</label>
                <input type="text" class="form-control" name="title" placeholder="title">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <input class="input-group-text" type="submit" value="Upload">
                </div>
            </div>
    </form>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service Image list</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Title </th>
                                    <th> Image </th>
                                    <th style="width: 40px">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['sid'=>$service->id,'id'=>$rs->id])}}" class="btn btn-outline-secondary btn-danger btn-icon-text"
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
