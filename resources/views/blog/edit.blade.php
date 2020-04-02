@extends('main')

@section('title') Edit Post @endsection


@section('content')


    <div class="card">
        <div class="card-header">Edit Post</div>
        <div class="card-body">
            <form method="post">

                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" class="form-control">{{ $post->body }}</textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option @if($post->status == 0) selected @endif value="0">Draft</option>
                        <option @if($post->status == 1) selected @endif value="1">Published</option>
                    </select>
                </div>



                <input type="submit" class="btn btn-success" value="Update">

            </form>
        </div>
    </div>


@endsection