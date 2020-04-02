@extends('main')

@section('title') Blog @endsection


@section('content')
    @foreach($posts as $post)
        <div class="card mt-3">
            <div class="card-header">{{ $post->title }}</div>
            <div class="card-body">
                
                {{ $post->body }}

                <hr>

                <a href="{{ url("blog/delete/$post->id") }}" class="btn btn-danger">Delete</a>
                <a href="{{ url("blog/edit/$post->id") }}" class="btn btn-primary">Edit</a>

            </div>
            <div class="card-footer">{{ $post->published() }}</div>
        </div>
    @endforeach

    <hr>
    <div>
        {!! $posts->render() !!}
    </div>
@endsection