<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
        <title>Page - @yield('title')</title>
    @include('partials.guest.head')




</head>

<body class="skin-blue">
        @yield('content')

        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>


</body>
</html>