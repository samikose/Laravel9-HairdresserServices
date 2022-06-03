@extends('layouts.adminbase')

@section('title', 'Add FAQ')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="main-panel">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add FAQ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item" href="{{route('admin.index')}}">Home</li>
                            <li class="breadcrumb-item active">Add FAQ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">FAQ Elements</h3>
                </div>
                <form role="form" action="{{route('admin.faq.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="example">Question</label>
                            <input type="text" class="form-control" name="question" placeholder="Question">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Answer</label>
                            <textarea class="form-control" id="answer" name="answer">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
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
