@extends('main')

@section('title') Add Post @endsection


@section('content')


    <div class="card">
        <div class="card-header">Add Post</div>
        <div class="card-body">
            <form method="post">

                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0">Draft</option>
                        <option value="1">Published</option>
                    </select>
                </div>



                <input type="submit" class="btn btn-success">

            </form>
        </div>
    </div>


@endsection