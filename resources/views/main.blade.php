<html lang="en">
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>

<body>
@include('nav')

<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>