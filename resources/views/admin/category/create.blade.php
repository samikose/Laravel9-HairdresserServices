@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-1">
                        <h1>Add Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item" href="/admin">Home</li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Category Elements</h3>
                </div>
                <form role="form" action="/admin/category/store" method="POST">
                    @csrf
                    <div class="card-body">
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
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
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
