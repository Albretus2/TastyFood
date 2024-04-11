<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty food</title>

    <link rel="shortcut icon" href="asset/baso 2.png">

    <!-- link style css -->
    <link rel="stylesheet" href="css/style.css">
    {{-- style for footer --}}
    <link rel="stylesheet" href="css/partial-style/footer.css">
    {{-- style for font --}}
    <link rel="stylesheet" href="css/font-style/font.css">
    {{-- style for scrollbar --}}
    <link rel="stylesheet" href="css/partial-style/scrollbar.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">

    {{-- icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <style>
        .drop_nav:hover {
            background-color: transparent
        }

        .hvr_galry {
            transition: transform 0.5s;
        }

        .hvr_galry:hover {
            transform: scale(1.1) !important;
        }
    </style>

</head>

<body>


    @yield('container')


    {{-- icon font awesome --}}
    <script src="https://kit.fontawesome.com/42c9acb339.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script>
        const tooltips = document.querySelectorAll('.hvr_galry');
        tooltips.forEach(t => {
            new bootstrap.Tooltip(t)
        });
    </script>



    @include('partial/footer')
