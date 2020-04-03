@extends('main')

@section('title') Login @endsection


@section('content')


    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="post">

                @csrf
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
