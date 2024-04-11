@extends('layouts.main_first')
@section('container')
    <!-- --------------------------------   START HERO AND NAVBAR SECTION------------------------------------------------------------- -->
    <!-- --------------------------------   START HERO AND NAVBAR SECTION------------------------------------------------------------- -->
    <section class="hero-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container " style="margin-top:1em ;margin-bottom: 2em;">
                <a class="navbar-brand" href="/home" style="font-family: 'artegra'; font-size: 1.5em;">TASTY
                    FOOD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/home" style="font-size: 13px;">Home</a>
                        <a class="nav-link" href="/tentang" style="font-size: 13px;">Tentang</a>
                        <a class="nav-link" href="/berita" style="font-size: 13px;">Berita</a>
                        <a class="nav-link" href="/galeri" style="font-size: 13px;">Gallery</a>
                        <a class="nav-link" href="/kontak" style="font-size: 13px;">Kontak</a>
                    </div>
                    @auth

                        <div class="dropdown ms-auto ">
                            <button class="btn btn-dark rounded-3" type="button" data-bs-toggle="dropdown"
                                style="font-family: 'point';" style="font-size: 13px;">
                                Welcome back, {{ auth()->user()->name }}
                            </button>
                            <ul class="dropdown-menu border-0 rounded-3 bg-dark">
                                <li><a class="drop_nav  dropdown-item text-light" href="/dashboard"
                                        style="font-family:'point';"><i class="bi bi-grid-1x2 me-2"></i> Dashboard</a></li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="drop_nav dropdown-item text-light" name="submit"
                                            style="font-family:'point';"><small><i class="bi bi-box-arrow-left me-2"></i> Log
                                                out</small></button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                    @endauth
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-evenly mb-5">
                <div class="col-md-6" style="margin-top: 4em;">
                    <div class="row">
                        <div style="width: 5.8em;height: 0.2em; background-color: black;margin-left: 1em;"></div>
                    </div>
                    <div class="row">
                        <h1 style="font-family: 'quitsans';font-size: 3em;margin-top: 1em;line-height: 0.8em; ">HEALTHY
                        </h1>
                    </div>
                    <div class="row">
                        <h1 style="font-family: 'artegra';font-size: 3em; ">TASTY FOOD</h1>
                    </div>
                    <div class="row">
                        <div style="font-family: 'point';font-size: 0.8em;margin-top: 1.5em;">
                            <p style="margin-bottom: 3em;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Mauris ac lectus
                                in metus sodales sagittis sed sed ex. Nunc venenatis ac turpis ac
                                pharetraPellentesque
                                ante tortor, pellentesque ut elementum non, feugiat in felis. Fusce iaculis
                                egestas mi,
                                eu porta justo faucibus at.</p>

                            <a href="/tentang" class="section-hero-cta">
                                TENTANG KAMI
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="gambar1">
                        <img src="../asset/baso.png" id="basso" alt="" width="870.84px" height="821.7px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------END SECTION------------------------------------------------- -->
    <!-- ----------------------------------------------------END SECTION------------------------------------------------- -->


    <!-- ----------------------------------------------------START TENTANG KAMI SECTION------------------------------------------------- -->
    <!-- ----------------------------------------------------START TENTANG KAMI SECTION------------------------------------------------- -->
    <section class="tentang-kami-section text-center">
        <div class="container-fluid">
            <div class="row">
                <h1>TENTANG KAMI</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac lectus
                        in metus sodales sagittis sed sed ex. Nunc venenatis ac turpis ac
                        pharetraPellentesque
                        ante tortor, pellentesque ut elementum non, feugiat in felis. Fusce iaculis
                        egestas mi,
                        eu porta justo faucibus at
                    </p>
                </div>
                <div class="row justify-content-center mt-5 ">
                    <div class="col-md-6">
                        <div style="width: 6em;height: 0.2em; background-color: black;margin: auto;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------------------------------------END SECTION------------------------------------------------------- -->
    <!-- -----------------------------------------END SECTION------------------------------------------------------- -->


    <!-- -----------------------------------------START MENU SECTION------------------------------------------------------- -->
    <!-- -----------------------------------------START MENU SECTION------------------------------------------------------- -->
    <section class="menu-section">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-lg-3 mb-3 align-items-center">
                    <div class="menu1">
                        <img src="../asset/tempe_bulat.png" class="img-fluid" alt="tempe">
                        <div class="deskripsi">
                            <h1 style="font-family: 'artegra';font-size: 1.4em;">PEPES RANDOM</h1>
                            <p style="font-size: 0.8em;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam pariatur unde corporis!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="menu1">
                        <img src="../asset/brokoli.png" class="img-fluid" alt="tempe">
                        <div class="deskripsi">
                            <h1 style="font-family: 'artegra';font-size: 1.4em;">NASGOR IBU JENI</h1>
                            <p style="font-size: 0.8em;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam pariatur unde corporis!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="menu1">
                        <img src="../asset/ramen.png" class="img-fluid" alt="tempe">
                        <div class="deskripsi">
                            <h1 style="font-family: 'artegra';font-size: 1.4em;">RAMEN ASLI GARUT</h1>
                            <p style="font-size: 0.8em;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam pariatur unde corporis!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="menu1">
                        <img src="../asset/baso 2.png" class="img-fluid" alt="tempe">
                        <div class="deskripsi">
                            <h1 style="font-family: 'artegra';font-size: 1.4em;">FULL BLACK</h1>
                            <p style="font-size: 0.8em;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam pariatur unde corporis!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ///////////////////////////////////////////////////  END SECTION ////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////////////  END SECTION ////////////////////////////////////// -->



    <!-- ///////////////////////////////////////////////////  START BERITA SECTION ////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////////////  START BERITA SECTION ////////////////////////////////////// -->


    <section class="berita-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mt-5 mb-5">
                    <h1>BERITA KAMI</h1>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-lg-6 mb-3">
                    <div class="card card-shadow" style="border-radius: 1em;">
                        @if ($news[0]->cover)
                            <div class="img1" style="background-image: url({{ asset('storage/' . $news[0]->cover) }})">
                            </div>
                        @else
                            <div class="img1" style="background-image: url({{ asset('asset/sajen.jpg') }})"></div>
                        @endif

                        <div class="card-body">
                            <h1 class="judul-card">{{ $news[0]->title }}</h1>
                            <div style="height: 6.8rem">
                                <p> {{ $news[0]->excerpt }}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/news/{{ $news[0]->slug }}">Baca selengkap nya</a>
                                <span><i class="fa-solid fa-ellipsis fa-xl"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($news->skip(1)->take(4) as $newses)
                            <div class="col-lg-6 berita-mini mb-3">
                                <div class="card card-shadow" style="border-radius: 1em;">
                                    @if ($newses->cover)
                                        <div class="img2"
                                            style="background-image: url({{ asset('storage/' . $newses->cover) }})"></div>
                                    @else
                                        <div class="img2" style="background-image: url({{ asset('asset/sajen.jpg') }})">
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <div class="news-title">
                                            <h1 class="judul-card">{{ $newses->title }}</h1>
                                        </div>
                                        <div style="height: 3.5rem;margin-bottom:0.8rem">
                                            <p class="card-text">{{ $newses->excerpt }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="/news/{{ $newses->slug }}">Baca selengkap nya</a>
                                            <span><i class="fa-solid fa-ellipsis fa-xl"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ///////////////////////////////////////////////////  end ////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////////////  end ////////////////////////////////////// -->


    <!-- ///////////////////////////////////////////////////  START GALLERY SECTION ////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////////////  START GALLERY SECTION ////////////////////////////////////// -->
    <section class="gallery-section">
        <div class="container">
            <h1>GALLERY</h1>
            <div class="row galeri-1">
                @foreach ($picture->take(6) as $pic)
                    <div class="col-lg-4 mb-4">
                        @if ($pic->image)
                            <div style="background-image:url({{ asset('storage/' . $pic->image) }})"
                                class="hvr_galry picture img-fluid" alt="" title="{{ $pic->title }}"></div>
                        @else
                            <div style="background-image:url({{ asset('asset/remen_overall.jpg') }})"
                                class="hvr_galry picture img-fluid" alt="" title="{{ $pic->title }}"></div>
                        @endif

                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-4">
                    <a href="/galeri" class="section-galeri-cta ">
                        LIHAT LEBIH BANYAK
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------- end -------------------------------------------- -->
    <!-- ------------------------------------------------- end -------------------------------------------- -->
@endsection
