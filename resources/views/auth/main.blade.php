<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    {{-- link style for login --}}
    <link rel="stylesheet" href="{{ asset('css/auth-style/login.css') }}">
    {{-- link style for registern --}}
    <link rel="stylesheet" href="{{ asset('css/auth-style/register.css') }}">
    {{-- link overview for login and register --}}
    <link rel="stylesheet" href="{{ asset('css/auth-style/main.css') }}">
    {{-- style for font --}}
    <link rel="stylesheet" href="{{ asset('css/font-style/font.css') }}">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    @yield('container')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>


 {{-- icon font awesome --}}
 <script src="https://kit.fontawesome.com/42c9acb339.js" crossorigin="anonymous"></script>
</body>

</html>