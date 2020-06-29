@extends('blog.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0 font-weight-bold text-center">Edit Post</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('post.update', $post->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="5" name="content">{{$post->content}}</textarea>
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