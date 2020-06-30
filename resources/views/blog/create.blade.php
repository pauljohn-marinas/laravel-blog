@extends('blog.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0 font-weight-bold text-center">Add New Post</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title" value="">
                            </div>
                            <div class="form-group">
                                @error('content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label>Content</label>
                                <textarea class="form-control" rows="5" name="content"></textarea>
                            </div>
                            <div class="form-group">
                                @error('thumbnail')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label>Image</label>
                                <input type="file" class="form-control-file" name="thumbnail">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection()

