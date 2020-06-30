@extends('blog.layouts.main')
@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p><em>by {{$post->user->name}}</em></p>
        <p><em><i class="fa fa-eye mr-2" aria-hidden="true"></i> {{$post->views}}</em></p>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <img src="{{ asset('storage/uploads/'.$post->thumbnail) }}" alt="" class="w-100">
            </div>
            <div class="col-2"></div>
        </div>
        <hr class="mt-5">
        <p>{{$post->content}}</p>
    </div>
@endsection