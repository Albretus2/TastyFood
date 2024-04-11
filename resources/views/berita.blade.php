@extends('layouts.main_second')

@section('container')
    <!-- ////////////////////////////////////////// Konten Utama Section /////////////////////////////////////////////////////// -->
    <section class="utama">
        <div class="container">
            <div class="row align-items-center pb-5 pt-5">
                <div class="col-lg-6 p1">
                    <img src="../asset/salad_crop.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 p2">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>APA SAJA MAKANAN KHAS NUSANTARA</h2>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac lectus in metus
                                sodales sagittis sed sed ex. Nunc venenatis ac turpis ac </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac lectus in metus
                                sodales sagittis sed sed ex. Nunc venenatis ac turpis ac </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <a href="" class="btn-utama">BACA SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- //////////////////////////////////////// BERITA LAINYA SECTION ///////////////////////////////////////////////////////// -->

    <section class="another">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 8em;">
                    <h2>BERITA LAINYA</h2>
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($news as $newses)
                    <div class="col-lg-3 mb-3">
                        <div class="card berita1" style="border-radius: 1em;">
                            {{-- <div class="gambar1"></div> --}}
                            @if ($newses->cover)
                                <div class="gambar2"
                                    style="background-image: url({{ asset('storage/' . $newses->cover) }})"></div>
                            @else
                                <div class="gambar2" style="background-image: url({{ asset('asset/remen_overall.jpg') }})">
                                </div>
                            @endif
                            <div class="card-body">
                                <div style="overflow: hidden;">
                                    <p class="text">{{ $newses->title }}</p>
                                </div>
                                <div style="height: 4rem;" class="">
                                    <p class="card-text " style="font-size:0.7em;">{{ $newses->excerpt }}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center" style="margin-top:auto">
                                    <a href="/news/{{ $newses->slug }}">Baca selengkap nya</a>
                                    <span><i class="fa-solid fa-ellipsis fa-xl"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-5">
                {{ $news->links() }}
            </div>
        </div>
    </section>

    <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
@endsection
