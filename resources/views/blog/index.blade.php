@extends('blog.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/uploads/'. $post->thumbnail) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="{{ route('post-detail.show', $post->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <span>by <a href="">{{ $post->user->name }}</a></span>
                                <span><i class="fa fa-eye mr-2" aria-hidden="true"></i>{{$post->views}}</span>
                                <span><i class="fa fa-comments mr-2" aria-hidden="true"></i>{{$post->comments}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection()