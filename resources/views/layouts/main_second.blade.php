<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title_url }}</title>
    <link rel="shortcut icon" href="{{ asset('asset/baso 2.png') }}">

    <!-- link style css -->
    <link rel="stylesheet" href="{{ asset('css/' . $style) }}.css">
    {{-- style for footer --}}
    <link rel="stylesheet" href="{{ asset('css/partial-style/footer.css') }}">
    {{-- style for font --}}
    <link rel="stylesheet" href="{{ asset('css/font-style/font.css') }}">
    {{-- style for scrollbar --}}
    <link rel="stylesheet" href="{{ asset('css/partial-style/scrollbar.css') }}">
    {{-- style for navbar --}}
    <link rel="stylesheet" href="{{ asset('css/partial-style/navbar.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        /* style untuk halaman galeri */
        .hvr_galry {
            transition: transform 0.5s;
        }

        .hvr_galry:hover {
            transform: scale(1.1) !important;
        }

        .arrow_csr {
            font-size: 4rem;
        }

        @media (max-width:768px) {
            .arrow_csr {
                font-size: 2.9rem;
                margin-left: 2rem;
            }
        }

        /* style untuk halaman berita */
        .another .text {
            font-family: "artegra";
            font-size: 0.8rem;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
    </style>
</head>

<body>

    @include('partial.navbar')

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


    @include('partial.footer')
