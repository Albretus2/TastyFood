<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasty Food | Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('asset') }}/baso 2.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    {{-- style for scrollbar --}}
    <link rel="stylesheet" href="{{ asset('css/partial-style/scrollbar.css') }}">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- font style --}}
    <link rel="stylesheet" href="{{ asset('css/font-style/font.css') }}">
    {{-- link for Gallery --}}
    <link rel="stylesheet" href="{{ asset('css/gallery/style.css') }}">
    {{-- trix link --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        /* media query responsife gambar pada halaman index dashboard bagian quotes */
        @media(max-width:768px) {
            .gmbr {
                display: none;
            }
        }

        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        .side-text {
            font-family: 'point';
        }

        .entire {
            font-family: 'hevil';
            font-size: 11rem;
            line-height: 7rem;
        }

        .carddo {
            /* background-image: url('{{ asset('asset/item.jpg') }}') !important; */
            height: 22.8rem !important;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        @media screen and (max-width:991px) {
            .carddo {
                height: 14rem !important;
            }
        }

        .line-deco {
            height: 4px !important;
        }


        .subject {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- loading ketika di refresh -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets') }}/dist/img/logo.png" alt="Logo" height="60"
                width="60">
        </div>

        {{-- navbar --}}
        @include('dashboard.layouts.nav')
        {{-- end navbar --}}

        {{-- sidebar --}}
        @include('dashboard.layouts.sidebar')
        {{-- end sidebar --}}


        <div class="content-wrapper " style="background-color: white;">
            <!-- Content Wrapper. Contains page content -->
            @yield('container')
            <!-- /.content-wrapper -->
        </div>

        {{-- footer --}}
        @include('dashboard.layouts.footer')
        {{-- end footer --}}

    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
    {{-- icon font awesome --}}
    <script src="https://kit.fontawesome.com/42c9acb339.js" crossorigin="anonymous"></script>

    <!-- overlayScrollbars -->
    <script src="{{ asset('assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets') }}/dist/js/adminlte.js"></script>>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
