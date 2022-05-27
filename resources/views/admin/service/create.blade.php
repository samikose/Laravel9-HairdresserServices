@extends('layouts.adminbase')

@section('title', 'Add Service')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-1">
                        <h1>Add Service</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item" href="{{route('admin.index')}}">Home</li>
                            <li class="breadcrumb-item active">Add Service</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Service Elements</h3>
                </div>
                <form role="form" action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Parent Service</label>

                            <select class="form-control select2" name="category_id" style="width: 100%">
                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}">{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="example">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="title">
                        </div>
                        <div class="form-group">
                            <label for="example">Keywords</label>
                            <input type="text" class="form-control" name="keywords" placeholder="keywords">
                        </div>
                        <div class="form-group">
                            <label for="example">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
                        </div>
                        <div class="form-group">
                            <label for="example">Price</label>
                            <input type="number" class="form-control" name="price" value="0">
                        </div>
                        <div class="form-group">
                            <label for="example">Tip</label>
                            <input type="number" class="form-control" name="tip" value="0">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Detail Inf.</label>
                            <textarea class="form-control" id="detail" name="detail">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#detail' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </section>


    </div>
@endsection
