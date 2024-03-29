<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          crossorigin="anonymous">
    <title>Todos App | @yield('title')</title>
</head>
<body>

@include('layouts.nav')

<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
        {{session()->get('success')}}
        </div>
        @endif

    {{--@if(session()->has('success'))--}}
        {{--<div class="alert alert-success">--}}
            {{--{{ session()->get('success') }}--}}
        {{--</div>--}}
    {{--@endif--}}
    <div class="container">
        @yield('content')
    </div>
</div>

</body>
</html>
