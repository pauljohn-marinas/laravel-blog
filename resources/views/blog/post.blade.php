@extends('blog.layouts.main')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="{{ route('post.create') }}" class="btn btn-primary">Add New Post</a>
        </div>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td scope="col">{{$post->title}}</td>
                    <td scope="col">{{$post->content}}</td>
                    <td scope="col">{{$post->thumbnail}}</td>
                    <td scope="col">
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{ route('post.destroy', $post->id) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection