@extends('main')

@section('title') Register @endsection


@section('content')


    <div class="card">
        <div class="card-header">Register</div>
        <div class="card-body">
            <form method="post">

                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>


                <input type="submit" class="btn btn-success">

            </form>
        </div>
    </div>


@endsection
