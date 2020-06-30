@extends('blog.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/uploads/'. $post->thumbnail) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
@endsection()