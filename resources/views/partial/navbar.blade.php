
    <!-- ///////////////////////////////////////// Navbar Section ////////////////////////////////////////////////////////// -->

    <section class="barstatus">
        <nav class="navbar navbar-expand-lg navbar-dark m-auto" style="z-index: 1; background: transparent">
            <div class="container" style="margin-top:1em ;margin-bottom: 2em;">
                <a class="navbar-brand logo" href="#" style="font-family: 'artegra'; font-size: 1.5em;">TASTY FOOD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link {{ Request::is('/') ? "active" : '' }}" aria-current="page" href="/home">Home</a>
                        <a class="nav-link {{ Request::is('tentang') ? "active" : '' }}" href="/tentang">Tentang</a>
                        <a class="nav-link {{ Request::is('berita') ? "active" : '' }}" href="/berita">Berita</a>
                        <a class="nav-link {{ Request::is('galeri') ? "active" : '' }}" href="/galeri">Gallery</a>
                        <a class="nav-link {{ Request::is('kontak') ? "active" : '' }}" href="/kontak">Kontak</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container judul">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->